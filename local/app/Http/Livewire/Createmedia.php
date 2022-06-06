<?php

namespace App\Http\Livewire;

use App\Jobs\ConvertMediaForStream;
use App\Models\User;
use App\Models\Media;
use Livewire\Component;
use FFMpeg\Format\Video\X264;
use Livewire\WithFileUploads;
use App\Jobs\createMediaForStream;
use Illuminate\Support\Facades\Auth;
use App\Jobs\CreateThumbnailFromMedia;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use Illuminate\Support\Facades\Storage;

class Createmedia extends Component
{
    use WithFileUploads;

    public $filevideo, $title, $visibility, $description;
    public Media $media;
    public User $user;
    // public $isShow_upload = false;


    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.createmedia')->layout('layouts.app');
    }

    protected $rules = [
        'filevideo' => 'required',
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
        $path = $this->filevideo->store('media-temp');
        
        // create video record in sb
        $this->media = Auth::user()->medias()->create([
            'title' => $this->title,
            'description' => $this->description,
            'visibility' => $this->visibility,
            'uid' => uniqid(true),
            'path' => explode('/', $path)[1] //we are saving name only here
        ]);

        // Dispatch Jobs For Video
        // CreateThumbnailFromMedia::dispatch($this->media);
        // ConvertMediaForStream::dispatch($this->media);
        $this->CreateThumbnailFromMedia($this->media);
        $this->createStream($this->media);

        $this->dispatchBrowserEvent('media_uploaded');
        return redirect()->route('dash.edit.media', [
            'media' => $this->media,
        ]);
    }

    public function CreateThumbnailFromMedia()
    {
        $destination = '/' . $this->media->uid . '/' . $this->media->uid . '.png';

        FFMpeg::fromDisk('media-temp')
            ->open($this->media->path)
            ->getFrameFromSeconds(2)
            ->export()
            ->toDisk('media')
            ->save($destination);

        $this->media->update([
            'thumbnail_image' => $this->media->uid . '.png',
        ]);
    }

    public function createStream()
    {
        $destination = '/' . $this->media->uid . '/' . $this->media->uid . '.m3u8';
        $low = (new X264('aac'))->setKiloBitrate(500);
        $high = (new X264('aac'))->setKiloBitrate(1000);

        $media = FFMpeg::fromDisk('media-temp')
            ->open($this->media->path)
            ->exportForHLS()
            ->addFormat($low, function ($filters) {
                $filters->resize(640, 480);
            })
            ->onProgress(function ($progress) {
                $this->media->update([
                    'processed_persentage' => $progress,
                ]);
            })
            ->toDisk('media')
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
