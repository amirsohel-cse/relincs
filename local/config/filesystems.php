<?php

return [



    'default' => env('FILESYSTEM_DRIVER', 'local'),

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL') . '/storage',
            'visibility' => 'public',
        ],

        'video-temp' => [
            'driver' => 's3',
            'root' => '/video-temp', //storage_path('app/media-temp'),
            'url' => env('AWS_URL'), //env('APP_URL') . '/storage',
            'visibility' => 'public',
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
        ],
        'media-temp' => [
            'driver' => 's3',
            'root' => '/media-temp', //storage_path('app/media-temp'),
            'url' => env('AWS_URL'), //env('APP_URL') . '/storage',
            'visibility' => 'public',
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
        ],

        'hubs_media' => [
            'driver' => 's3',
            'root' => '/hubs_media',//storage_path('app/hubs_media'),
            'url' => env('AWS_URL'),
            'visibility' => 'public',
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
        ],

        'profile_image' => [
            'driver' => 's3',
            'root' => storage_path('app/public/profile_image'),
            'url' => env('APP_URL') . '/storage',
            'visibility' => 'public',
        ],

        'video' => [
            'driver' => 's3',
            'root' => '/video', //storage_path('app/media-temp'),
            'url' => env('AWS_URL'), //env('APP_URL') . '/storage',
            'visibility' => 'public',
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            // 'root' => storage_path('app/video'),
            // 'url' => env('APP_URL') . '/storage',
            // 'visibility' => 'public',
        ],

        'media' => [
            'driver' => 's3',
            // 'root' => storage_path('app/media'),
            // 'url' => env('APP_URL') . '/storage',

            'root' => '/media', //storage_path('app/media-temp'),
            'url' => env('AWS_URL'), //env('APP_URL') . '/storage',
            'visibility' => 'public',
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
        ],

        'hubmedia' => [
            // 'driver' => 's3',
            // 'root' => storage_path('app\hubs\media'),
            // 'url' => env('APP_URL') . '/hubs/media',
            // 'visibility' => 'public',
            'driver' => 's3',
            'root' => '/hubs/media',//storage_path('app/hubs_media'),
            'url' => env('AWS_URL'),
            'visibility' => 'public',
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        // public_path('storage') => storage_path('app/public'),
        // public_path('video') => storage_path('app/video'),
        // public_path('\media') => storage_path('app\hubs\media'),
        // public_path('profile_image/') => storage_path('app/public/profile_image'),
        public_path('attachments/') => storage_path('app/public/attachments'),
        // public_path('profile_hubs/') => storage_path('app/public/profile_hubs'),
        // public_path('img') => storage_path('app/public/img'),

    ],

];


