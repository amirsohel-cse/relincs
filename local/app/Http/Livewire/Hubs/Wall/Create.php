<?php

namespace App\Http\Livewire\Hubs\Wall;

use App\Models\Hubs;
use App\Models\HubWall;
use Livewire\Component;
use FFMpeg\Format\Video\X264;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class Create extends Component
{
    use WithFileUploads;
    // public $hubs_id;
    public $user_id;
    public $hubs_id;
    public $filevideo, $title, $visibility, $description;

    public function mount($hubs_id)
    {
        $this->hubs_id = $hubs_id;
        $data = Auth::user()->hubs()->select('name', 'user_id', 'uid', 'profile')->find($this->hubs_id);
        $this->data = $data;
    }

    public function render()
    {
        $data = $this->data;
        return view('livewire.hubs.wall.create', compact('data'))->layout('layouts.app');
    }

    protected $rules = [
        'filevideo' => 'required|mimes:jpeg,jpg,png',
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
        // create video record in sb
        $path = $this->filevideo->store('video/hubs/wall');
        // create video record
        $this->video = (new Hubs)->find($this->hubs_id)->hubwall()->create([
            'user_id' => Auth::user()->id,
            'title' => $this->title,
            'description' => $this->description,
            'visibility' => $this->visibility,
            'uid' => uniqid(true),
            'path' => $path
        ]);

        // Dispatch Jobs For Video
        // $work = $this->createThumbnail($this->media);
        // $this->ConvertHubWallForStream($this->media);
        //    ConvertHubWallForStream::dispatch($this->media);
        $this->dispatchBrowserEvent('wll_uploaded');
        return redirect()->route('watch.hubs.wall',$this->video->uid);
    }

    public function createThumbnail($media)
    {
        $destination = '/' . $media->uid . '/' . $media->uid . '.png';
        FFMpeg::fromDisk('hubs_media')
            ->open($media->path)
            ->getFrameFromSeconds(2)
            ->export()
            ->toDisk('HubWall')
            ->save($destination);

        $media->update([
            'thumbnail_image' => $media->uid . '.png',
        ]);
    }

    public function ConvertHubWallForStream()
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
            ->toDisk('HubWall')
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
