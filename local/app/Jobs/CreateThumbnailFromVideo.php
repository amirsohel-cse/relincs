<?php

namespace App\Jobs;

use App\Models\Video;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class CreateThumbnailFromVideo implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $video;

    public function __construct(Video $video)
    {
        $this->video = $video;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
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
}
