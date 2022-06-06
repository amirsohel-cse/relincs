<?php

namespace App\Http\Livewire\Hubs\Media;

use App\Models\Hubs;
use Livewire\Component;
use App\Models\HubMedia;
use Livewire\WithFileUploads;
use App\Jobs\ConvertMediaForStream;
use Illuminate\Support\Facades\Auth;
use App\Jobs\ConvertHubMediaForStream;
use App\Jobs\CreateThumbnailFromMedia;
use App\Jobs\CreateThumbnailFromHubMedia;
use FFMpeg\Format\Video\X264;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class Create extends Component
{
    use WithFileUploads;
    public $hubs_id;
    public $user_id;
    public HubMedia $hubMedia;
    public $filevideo, $title, $visibility, $description;

    public function mount($hubs_id)
    {
        $this->hubs_id = $hubs_id;
        $data = Auth::user()->hubs()->select('name', 'user_id', 'uid', 'profile')->find($this->hubs_id);
        $this->data = $data;
        // dd((new Hubs)->find($this->hubs_id)->hubmedia()->get());
    }

    public function render()
    {
        $data = $this->data;
        return view('livewire.hubs.media.create', compact('data'))->layout('layouts.app');;
    }

    protected $rules = [
        'filevideo' => "required|mimes:mp4",
        'title' => 'required|string|max:255',
        'visibility' => 'required|in:private,public,unslited',
        'description' => 'nullable|max:1000',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function upload()
    {
        // Validation

        $this->validate();
        // store in database
        $path = $this->filevideo->store('hubs_media');
        // create video record in sb
        $this->media = (new Hubs)->find($this->hubs_id)->hubmedia()->create([
            'title' =>  $this->title,
            'hubs_id' => $this->hubs_id,
            'user_id' => Auth::user()->id,
            'description' => $this->description,
            'visibility' => $this->visibility,
            'uid' => uniqid(true),
            'path' => explode('/', $path)[1]
        ]);

        // Dispatch Jobs For Video
        $work = $this->createThumbnail($this->media);
        $this->ConvertHubMediaForStream($this->media);
        //    ConvertHubMediaForStream::dispatch($this->media);
        $this->dispatchBrowserEvent('media_uploaded');
        return redirect()->route('watch.hubs.media', $this->media->uid);
    }

    public function createThumbnail($media)
    {
        $destination = '/' . $media->uid . '/' . $media->uid . '.png';
        FFMpeg::fromDisk('hubs_media')
            ->open($media->path)
            ->getFrameFromSeconds(2)
            ->export()
            ->toDisk('hubmedia')
            ->save($destination);

        $media->update([
            'thumbnail_image' => $media->uid . '.png',
        ]);
    }

    public function ConvertHubMediaForStream()
    {
        $destination = '/' . $this->media->uid . '/' . $this->media->uid . '.m3u8';
        $low = (new X264('aac'))->setKiloBitrate(500);
        $high = (new X264('aac'))->setKiloBitrate(1000);

        $media = FFMpeg::fromDisk('hubs_media')
            ->open($this->media->path)
            ->exportForHLS()
            ->addFormat($high, function ($filters) {
                $filters->resize(1280, 720);
            })
            ->onProgress(function ($progress) {
                $this->media->update([
                    'processed_persentage' => $progress,
                ]);
            })
            ->toDisk('hubmedia')
            ->save($destination);
        $duration = $media->getDurationInSeconds(); // returns an int
        $this->media->update([
            'processed' => true,
            'processed_file' => $this->media->uid . '.m3u8',
            'duration' => $this->formatDuration($duration),
        ]);
    }

    public function formatDuration($seconds)
    {
        $duration = gmdate('H:i:s', $seconds);
        return $duration;
    }
}
