<?php

namespace App\Jobs;

use App\Models\Media;
use FFMpeg\Format\Video\X264;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class ConvertMediaForStream implements ShouldQueue
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
        $destination = '/' . $this->media->uid . '/' . $this->media->uid . '.m3u8';
        $low = (new X264('aac'))->setKiloBitrate(500);
        $high = (new X264('aac'))->setKiloBitrate(1000);

        $media = FFMpeg::fromDisk('media-temp')
            ->open($this->media->path)
            ->exportForHLS()
            ->addFormat($low, function ($filters) {
                $filters->resize(640, 480);
            })
            ->addFormat($high, function ($filters) {
                $filters->resize(1280, 720);
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
