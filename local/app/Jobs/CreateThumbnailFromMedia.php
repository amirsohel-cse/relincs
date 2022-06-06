<?php

namespace App\Jobs;

use App\Models\Media;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class CreateThumbnailFromMedia implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $media;

    public function __construct(Media $media)
    {
        $this->media = $media;
    }


    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $destination = '/' . $this->hubMedia->uid . '/' . $this->hubMedia->uid . '.png';
        FFMpeg::fromDisk('media-temp')
            ->open($this->hubMedia->path)
            ->getFrameFromSeconds(2)
            ->export()
            ->toDisk('hubmedia')
            ->save($destination);

        $this->hubMedia->update([
            'thumbnail_image' => $this->hubMedia->uid . '.png',
        ]);
    }
}
