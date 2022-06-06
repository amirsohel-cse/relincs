<div>
    @section('title')
        Watch Video {{ $video->title }}
    @endsection

    @section('link')
    <link href="https://unpkg.com/video.js/dist/video-js.min.css" rel="stylesheet">
    @endsection
    @push('script')
    
    <script src="https://unpkg.com/video.js/dist/video.min.js"></script>
    <script>
        var player = videojs('watch');
        player.on('timeupdate', function(){
            if (this.currentTime() > 4) {
                this.off('timeupdate')
                Livewire.emit('VideoViewed')
            }
        })
    </script>
    @endpush
    <div class="w-full select-none">
        <div class="capitalize mx-4 py-4">
            <div class="grid grid-cols-12 gap-4">
                <div class="flex justify-start flex-col w-full lg:col-span-8 col-span-12">
                    <div class="w-full">
                        <div class="container w-full" wire:ignore>
                            <video id="watch" class="video-js vjs-fluid vjs-styles=default vjs-big-play-centered z-10"
                                {{-- poster="{{ asset('video/') . $video->uid . '/' . $video->thumbnail_image }}"  --}}
                                type="application/x-mpegURL" data-setup='{}' 
                                poster="{{ asset('video/'.$video->uid.'/'.$video->thumbnail_image)}}">
                                <source src="{{ asset('video/'.$video->uid.'/'.$video->processed_file)}}"/>
                                <p class="vjs-no-js">
                                    To view this video please enable JavaScript, and consider upgrading to a
                                    web browser that
                                    <a href="https://videojs.com/html5-video-support/" target="_blank">
                                        supports HTML5 video
                                    </a>
                                </p>
                            </video>
                        </div>
                    </div>
                    <!-- Details  -->
                    <div class="w-full my-4">
                        <div
                            class="flex md:flex-row flex-col justify-between md:space-y-1 space-y-3 border-b border-gray-100 pb-3">
                            <div class="flex flex-col jsutify-between">
                                <div class="flex flex-col w-full">
                                    <h3 class="md:text-md text-sm text-gray-900">{{ $video->title }}</h3>
                                </div>
                                <div class="mt-3 text-gray-500 md:text-sm text-xs">
                                    {{$video->views}} views &nbsp; &bullet; &nbsp; {{ $video->date_string() }}
                                </div>
                            </div>

                            <div class="flex flex-row space-x-2 items-center">

                                @livewire('voting', ['video' => $video])

                                @auth
                                <div class="flex flex-row space-x-2 justify-center items-center pb-3 capitalize">
                                    <button type="button"
                                        class="flex items-center text-sm text-gray-700 focus:outline-none">
                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                            </path>
                                        </svg>
                                        <span class="ml-1 capitalize" id="shareButton">share</span>
                                    </button>
                                    <div class="flex items-center justify-center mx-1 text-gray-600">|</div>
                                </div>
                                <div class="flex flex-row space-x-2 justify-center items-center pb-4 capitalize">
                                    <button type="button"
                                        class="flex items-center text-sm text-gray-700 focus:outline-none">
                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636">
                                            </path>
                                        </svg>
                                        <span class="ml-1 capitalize">report</span>
                                    </button>
                                </div>
                                @endauth

                            </div>
                        </div>
                        <br>

                        <div class="">
                            <div class="flex flex-row justify-between items-center border-b border-gray-100 pb-3">
                                <div class="flex justify-center items-center">
                                    <div class="w-full h-14">
                                        <img src="{{ $this->profile_published() }}" alt="picture user"
                                            class="shadow-md rounded-full md:w-14 md:h-14 w-12 h-12">
                                    </div>
                                    <div class="flex mx-3 flex-col items-center">
                                        <a  href="{{ route('gu.profile.show', ['name' => $user]) }}"
                                        class="text-gray-800 font-medium w-48 md:text-md text-sm mb-1">
                                            {{$user->username}}</a>
                                        <p wire:poll.4000ms class="text-gray-600 font-normal capitalize w-40 md:text-sm text-xs">
                                            {{$this->count_subscribe()}}
                                            subscribs</p>
                                    </div>
                                </div>
                                @livewire('subscribe', ['user_id' => $video->user_id])
                            </div>

                            <div class="m-3 mt-6">
                                <p class="flex w-full h-full relative text-gray-800 font-base md:text-md text-sm">
                                    {{ $video->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Details  -->
                </div>
                <div class="flex justify-start w-full lg:col-span-4 col-span-12">
                    <div class="flex flex-col space-x-2">
                        <div class="flex w-auto flex-row space-x-4 py-2 ml-2 hover:bg-gray-100 transition duration-200">
                            <div class="w-dull">
                                <img src="{{ asset('storage/img/post1.jpg') }}" alt="saman"
                                    class="w-full h-28 bg-center rounded-lg shadow-lg object-cover">
                            </div>
                            <div class="flex flex-col justify-between">
                                <p class="text-sm font-normal text-gray-900 text-left mr-4">
                                    Amir Tataloo Heyf Didid Raft
                                </p>
                                <div class="">
                                    <div class="text-left">
                                        <a href="#" class="tmd:ext-sm text-xs text-gray-500 text-left">
                                            Amir Tataloo
                                        </a>
                                    </div>
                                    <div class="w-full">
                                        <span href="#" class="md:text-sm text-xs font-base text-gray-500">
                                            147K views &nbsp; &bullet; &nbsp; 2 days ago
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-auto flex-row space-x-4 py-2 ml-2 hover:bg-gray-100 transition duration-200">
                            <div class="w-dull">
                                <img src="{{ asset('storage/img/post1.jpg') }}" alt="saman"
                                    class="w-full h-28 bg-center rounded-lg shadow-lg object-cover">
                            </div>
                            <div class="flex flex-col justify-between">
                                <p class="text-sm font-normal text-gray-900 text-left mr-4">
                                    Amir Tataloo Heyf Didid Raft
                                </p>
                                <div class="">
                                    <div class="text-left">
                                        <a href="#" class="tmd:ext-sm text-xs text-gray-500 text-left">
                                            Amir Tataloo
                                        </a>
                                    </div>
                                    <div class="w-full">
                                        <span href="#" class="md:text-sm text-xs font-base text-gray-500">
                                            147K views &nbsp; &bullet; &nbsp; 2 days ago
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-auto flex-row space-x-4 py-2 ml-2 hover:bg-gray-100 transition duration-200">
                            <div class="w-dull">
                                <img src="{{ asset('storage/img/post1.jpg') }}" alt="saman"
                                    class="w-full h-28 bg-center rounded-lg shadow-lg object-cover">
                            </div>
                            <div class="flex flex-col justify-between">
                                <p class="text-sm font-normal text-gray-900 text-left mr-4">
                                    Amir Tataloo Heyf Didid Raft
                                </p>
                                <div class="">
                                    <div class="text-left">
                                        <a href="#" class="tmd:ext-sm text-xs text-gray-500 text-left">
                                            Amir Tataloo
                                        </a>
                                    </div>
                                    <div class="w-full">
                                        <span href="#" class="md:text-sm text-xs font-base text-gray-500">
                                            147K views &nbsp; &bullet; &nbsp; 2 days ago
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-auto flex-row space-x-4 py-2 ml-2 hover:bg-gray-100 transition duration-200">
                            <div class="w-dull">
                                <img src="{{ asset('storage/img/post1.jpg') }}" alt="saman"
                                    class="w-full h-28 bg-center rounded-lg shadow-lg object-cover">
                            </div>
                            <div class="flex flex-col justify-between">
                                <p class="text-sm font-normal text-gray-900 text-left mr-4">
                                    Amir Tataloo Heyf Didid Raft
                                </p>
                                <div class="">
                                    <div class="text-left">
                                        <a href="#" class="tmd:ext-sm text-xs text-gray-500 text-left">
                                            Amir Tataloo
                                        </a>
                                    </div>
                                    <div class="w-full">
                                        <span href="#" class="md:text-sm text-xs font-base text-gray-500">
                                            147K views &nbsp; &bullet; &nbsp; 2 days ago
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-auto flex-row space-x-4 py-2 ml-2 hover:bg-gray-100 transition duration-200">
                            <div class="w-dull">
                                <img src="{{ asset('storage/img/post1.jpg') }}" alt="saman"
                                    class="w-full h-28 bg-center rounded-lg shadow-lg object-cover">
                            </div>
                            <div class="flex flex-col justify-between">
                                <p class="text-sm font-normal text-gray-900 text-left mr-4">
                                    Amir Tataloo Heyf Didid Raft
                                </p>
                                <div class="">
                                    <div class="text-left">
                                        <a href="#" class="tmd:ext-sm text-xs text-gray-500 text-left">
                                            Amir Tataloo
                                        </a>
                                    </div>
                                    <div class="w-full">
                                        <span href="#" class="md:text-sm text-xs font-base text-gray-500">
                                            147K views &nbsp; &bullet; &nbsp; 2 days ago
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-auto flex-row space-x-4 py-2 ml-2 hover:bg-gray-100 transition duration-200">
                            <div class="w-dull">
                                <img src="{{ asset('storage/img/post1.jpg') }}" alt="saman"
                                    class="w-full h-28 bg-center rounded-lg shadow-lg object-cover">
                            </div>
                            <div class="flex flex-col justify-between">
                                <p class="text-sm font-normal text-gray-900 text-left mr-4">
                                    Amir Tataloo Heyf Didid Raft
                                </p>
                                <div class="">
                                    <div class="text-left">
                                        <a href="#" class="tmd:ext-sm text-xs text-gray-500 text-left">
                                            Amir Tataloo
                                        </a>
                                    </div>
                                    <div class="w-full">
                                        <span href="#" class="md:text-sm text-xs font-base text-gray-500">
                                            147K views &nbsp; &bullet; &nbsp; 2 days ago
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-auto flex-row space-x-4 py-2 ml-2 hover:bg-gray-100 transition duration-200">
                            <div class="w-dull">
                                <img src="{{ asset('storage/img/post1.jpg') }}" alt="saman"
                                    class="w-full h-28 bg-center rounded-lg shadow-lg object-cover">
                            </div>
                            <div class="flex flex-col justify-between">
                                <p class="text-sm font-normal text-gray-900 text-left mr-4">
                                    Amir Tataloo Heyf Didid Raft
                                </p>
                                <div class="">
                                    <div class="text-left">
                                        <a href="#" class="tmd:ext-sm text-xs text-gray-500 text-left">
                                            Amir Tataloo
                                        </a>
                                    </div>
                                    <div class="w-full">
                                        <span href="#" class="md:text-sm text-xs font-base text-gray-500">
                                            147K views &nbsp; &bullet; &nbsp; 2 days ago
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
