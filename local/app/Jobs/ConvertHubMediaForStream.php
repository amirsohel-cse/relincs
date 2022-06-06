<?php

namespace App\Jobs;

use App\Models\HubMedia;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use FFMpeg\Format\Video\X264;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class ConvertHubMediaForStream implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $media;

    public function __construct(HubMedia $media)
    {
        $this->media = $media;

    }

    public function handle()
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
