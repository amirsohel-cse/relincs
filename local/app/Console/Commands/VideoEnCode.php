<?php

namespace App\Console\Commands;

use FFMpeg\Format\Video\X264;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class VideoEnCode extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'video-encode:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command of test ffmpeg Video...';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $ffmpeg = FFMpeg::create([
        //     'ffmpeg.binaries'  => "C:/FFmpeg/bin/ffmpeg.exe",
        //     'ffprobe.binaries' => "C:/FFmpeg/bin/ffprobe.exe"
        //  ]);
        $low= (new X264('aac'))->setKiloBitrate(500);
        $high= (new X264('aac'))->setKiloBitrate(1000);

        FFMpeg::fromDisk('video-temp')
        ->exportForHLS()
        ->addFormat($low , function ($filters){
            $filters->resize(640,480);
        })
        ->addFormat($high , function ($filters){
            $filters->resize(1280,720);
        })
        ->toDisk('video-temp')
        ->save('/test/file.m3u8');

    }
}
