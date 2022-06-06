<?php

namespace App\Http\Livewire\Video;

use App\Models\User;
use App\Models\Video;
use Livewire\Component;
use FFMpeg\Format\Video\X264;
use Livewire\WithFileUploads;
use App\Jobs\ConvertVideoForStream;
use Illuminate\Support\Facades\Auth;
use App\Jobs\CreateThumbnailFromVideo;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class Create extends Component
{
    use WithFileUploads;

    public $filevideo, $title, $visibility, $description;
    public Video $video;
    public User $user;
    // public $isShow_upload = false;


    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.video.create');
    }

    protected $rules = [
        'filevideo' => 'required|mimes:mp4,mkv,jpeg,jpg,png',
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
        $get_foramt = $this->filevideo->getClientOriginalExtension();

        if($get_foramt == 'jpg' || $get_foramt == 'png' || $get_foramt == 'jpeg'){
            $path = $this->filevideo->store('video/feed');
            // create video record
            $this->video = Auth::user()->videos()->create([
                'title' => $this->title,
                'description' => $this->description,
                'visibility' => $this->visibility,
                'uid' => uniqid(true),
                'path' => $path //'/storage/'.
            ]);


        }elseif($get_foramt == 'mp4' || $get_foramt == 'mkv'){

            // $path = $this->filevideo->store('storage/video-temp');
            $path = $this->filevideo->store('video-temp');

            // create video record
            $this->video = Auth::user()->videos()->create([
                'title' => $this->title,
                'description' => $this->description,
                'visibility' => $this->visibility,
                'uid' => uniqid(true),
                'path' => explode('/', $path)[1]
            ]);

            // Dispatch Jobs For Video
            // CreateThumbnailFromVideo::dispatch($this->video);
            // ConvertVideoForStream::dispatch($this->video);
            $this->createThumbnail($this->video);
            $this->createStreamvideo($this->video);
            
        }


        $this->dispatchBrowserEvent('video_uploaded');

        return redirect()->route('dash.list.video');
    }

    public function createThumbnail($media)
    {
        $destination = '/' . $this->video->uid . '/' . $this->video->uid . '.png';
        FFMpeg::fromDisk('video-temp')
            ->open($this->video->path)
            ->getFrameFromSeconds(2)
            ->export()
            ->toDisk('video')
            ->save($destination);

        $this->video->update([
            'thumbnail_image' => $this->video->uid . '.png',
        ]);
    }
    
    public function createStreamvideo()
    {
        $destination = '/' . $this->video->uid . '/' . $this->video->uid . '.m3u8';
        $low = (new X264('aac'))->setKiloBitrate(500);

        $media = FFMpeg::fromDisk('video-temp')
            ->open($this->video->path)
            ->exportForHLS()
            ->addFormat($low, function ($filters) {
                $filters->resize(640, 480);
            })
            ->onProgress(function ($progress) {
                $this->video->update([
                    'processed_persentage' => $progress,
                ]);
            })
            ->toDisk('video')
            ->save($destination);
        $duration = $media->getDurationInSeconds(); // returns an int
        $this->video->update([
            'processed' => true,
            'processed_file' => $this->video->uid . '.m3u8',
            'duration' => $this->formatDuration($duration),
        ]);
    }

    public function formatDuration($seconds)
    {
        $duration = gmdate('H:i:s', $seconds);
        return $duration;
    }
}
