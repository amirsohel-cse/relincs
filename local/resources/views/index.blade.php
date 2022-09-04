<x-guest-layout>
    @section('title')
        Cashe - Fun Pays
    @endsection
    @section('link')
        <link href="https://unpkg.com/video.js/dist/video-js.min.css" rel="stylesheet">
    @endsection
    @push('script')
        <script src="https://unpkg.com/video.js/dist/video.min.js"></script>
        {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
        <script>
            function getData() {
                if (window.sidebar && window.sidebar.addPanel) { // Mozilla Firefox Bookmark
                    window.sidebar.addPanel(document.title, window.location.href, '');
                } else if (window.external && ('AddFavorite' in window.external)) { // IE Favorite
                    window.external.AddFavorite(location.href, document.title);
                } else if (window.opera && window.print) { // Opera Hotlist
                    this.title = document.title;
                    return true;
                } else { // webkit - safari/chrome
                    alert('Press ' + (navigator.userAgent.toLowerCase().indexOf('mac') != -1 ? 'Command/Cmd' : 'CTRL') +
                        ' + D to bookmark this page.');
                }
            }
        </script>
    @endpush
    {{-- <a id="bookmarkme" onclick="getData();" href="javascript:void(0)">Bookmark This Page</a> --}}

    <div class="lg:p-3 w-full flex items-center justify-center lg:flex-row flex-col">

        <div class="w-full select-none">
            <div class="capitalize lg:mx-4 py-4">
                <div class="grid grid-cols-12 lg:gap-x-4 gap-x-1">
                    <div class="flex justify-start flex-col w-full lg:col-span-8 col-span-12 lg:px-0 px-2 w-full">
                        <div class="swiper wraping w-full">
                            <div class="swiper-wrapper mt-2">
                                @foreach ($showlastmedia as $item)
                                    <div class="swiper-slide w-full">
                                        <div class="w-full relative" wire:ignore>
                                            <video id="{{ $item->id }}"
                                                class="video-js vjs-fluid vjs-styles=default vjs-big-play-centered"
                                                controls preload="none" data-setup="{}"
                                                poster="{{ env('AWS_BUCKET_URL') . 'media/' . $item->uid . '/' . $item->thumbnail_image }}">
                                                <source
                                                    src="{{ env('AWS_BUCKET_URL') . 'media/' . $item->uid . '/' . $item->processed_file }}"
                                                    type="application/x-mpegURL" />
                                                <p class="vjs-no-js">
                                                    To view this video please enable JavaScript, and consider upgrading
                                                    to a
                                                    web browser that
                                                    <a href="https://videojs.com/html5-video-support/" target="_blank">
                                                        supports HTML5 video
                                                    </a>
                                                </p>
                                            </video>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <div class="flex justify-start flex-col lg:mt-1 mt-6 lg:col-span-4 col-span-12 w-full">
                        <h3 class="text-md text-gray-700 ml-2 font-bold mb-2 w-60 my-2">Recommend media</h3>
                        <div class="w-full grid grid-cols-1 gap-4 lg:px-1 px-3">

                            @foreach ($show_data_section as $i)
                                @php
                                    $user = App\Models\User::find($i->user_id);
                                @endphp
                                <div
                                    class=" flex lg:w-full w-full flex-row  ml-2 hover:bg-gray-100 transition duration-200">
                                    <a href="{{ route('watch.media', $i->uid) }}" class="w-full mr-2">
                                        <img src="{{ env('AWS_BUCKET_URL') . 'media/' . $i->uid . '/' . $i->thumbnail_image }}"
                                            alt="{{ $i->title }}"
                                            class="w-5/6 h-28 bg-center rounded-lg shadow-lg object-cover" />
                                    </a>
                                    <div class="flex w-full flex-col justify-between py-1">
                                        <a href="" class="text-sm font-normal text-gray-900 text-left mr-4">
                                            {{ $i->title }}
                                        </a>
                                        <div class="">
                                            <div class="text-left">
                                                <a href="javascript:void(0)"
                                                    class="tmd:ext-sm text-xs text-gray-500 text-left">
                                                    {{ $user->username }}
                                                </a>
                                            </div>
                                            <a href="#" class="w-full">
                                                <span class="md:text-sm text-xs font-base text-gray-500 full">
                                                    {{ $i->views }} views &nbsp; &bullet; &nbsp;
                                                    {{ $i->created_at->diffForHumans() }}
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="lg:px-10 px-0 py-4 w-full ">
        <div class="my-4 pb-8">
            <h2 class="text-gray-600 ml-1 lg:text-xl text-lg text-center font-bold ">See latest Media</h2>
        </div>
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper w-full mx-auto">
                @foreach ($show_data as $trending)
                    <x-card-media :data='$trending' :is='1' />
                    {{-- <x-card-media :data='$trending' /> --}}
                @endforeach
            </div>
            <!-- Right -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <div class="p-10 w-full">
        <h2 class="text-gray-600 ml-1 lg:text-xl text-lg text-center font-bold ">See latest Wall</h2>
        <div class="mt-10 w-full">
            <div class="swiper mySwiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper w-full mx-auto">
                    @foreach ($wall_data as $trending)
                        <x-card-wall :data='$trending' />
                    @endforeach
                </div>
                <!-- Right -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            {{-- <article class="w-full">
                <section class="mt-6 grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-x-6 gap-y-8">
                    @foreach ($wall_data as $trending)
                    <x-card-wall :data='$trending' />
                    @endforeach
                </section>
            </article> --}}
        </div>
    </div>

    <div class="p-10 w-full">
        <p class="text-xl ml-10 font-extrabold leading-none text-gray-600 py- text-center mb-2 pb-8 w-full">See latest
            Hubs</p>

        <ul class="grid lg:grid-cols-5 grid-cols-2 gap-6">
            @foreach ($hubs_data as $data)
                <li class="flex flex-col items-center space-y-1 ">
                    <div class="bg-gradient-to-tr from-sky via-sky to-indigo-600 p-1 rounded-full">
                        <a href="{{ route('show.hubs', $data->uid) }}"
                            class=" bg-white block rounded-full p-1 hover:-rotate-6 transform transition" href="#">
                            <img class="h-32 w-32 rounded-full"
                                src="{{ env('AWS_BUCKET_URL') . 'public/profile_hubs/' . $data->profile }}"
                                alt="cute kitty" />
                            {{-- asset('storage/storage/profile_hubs/'.$data->profile) --}}
                        </a>
                    </div>
                    <a href="{{ route('show.hubs', $data->uid) }}" class="font-pop">
                        {{ $data->name }}
                    </a>
                </li>
            @endforeach
            <li class="flex flex-col items-center space-y-1 ">
                <div class="bg-gradient-to-tr from-sky via-sky to-indigo-600 p-1 rounded-full">
                    <a href="{{ route('gu.ehubs') }}"
                        class=" bg-white block rounded-full p-1 hover:-rotate-6 transform transition" href="#">
                        <svg class="w-32 h-32 text-gray-700" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM14 11a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z">
                            </path>
                        </svg>
                    </a>
                </div>
                <a href="#">
                    See more
                </a>
            </li>
        </ul>
    </div>
    {{-- @else
    <h3 class="text-gray-800 font-bold lg:text-xl text-md m-10 flex justify-center items-center h-40 text-center">
        Latest Media Not Found.
    </h3>
    @endif --}}
    {{-- <div class="mx-auto container">
        <hr>
    </div> --}}
    {{-- @if ($show_data_latest->count())
    <div class="my-6 md:px-10 lg:px-6 px-3 mx-auto w-full">
        <div class="my-4">
            <h3 class="mx-2 font-bold text-black text-xl capitalize">trending</h3>
        </div>
        <!-- Swiper -->
        <div class="swiper-container swiper trending relative w-full">
            <div class="swiper-wrapper flex">
                @foreach ($$show_data_latest as $trending)
                @php
                $user_data = App\Models\User::select('image_profile','username','id')->find($trending->user_id);
                @endphp
                <div class="swiper-slide">
                    <a href="{{ route('watch.media' , ['media' => $trending->uid,]) }}"
                        class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                        <div
                            class="max-w-sm  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                            <div class="relative">
                                <img src="{{  asset($trending->getThumbnailAttribute()) }}" alt="post"
                                    class="object-cover w-100 h-100 rounded shadow-md">
                                <div
                                    class="absolute text-xs px-1 py-1 bg-indigo-600 text-white justify-center items-center flex right-2 bottom-2 rounded-md">
                                    {{$trending->duration}}
                                </div>
                            </div>
                            <div class="flex mt-1 justify-center items-center flex-row">
                                <a href="{{route('gu.profile.show' , ['name' => $user_data->id ])}}" class="ml-2 ">
                                    <img src="{{ $user_data->profile() }}" alt=""
                                        class="object-cover h-9 w-9 rounded-full shadow-md">
                                </a>
                                <div class="flex justify-start ml-3">
                                    <div class="text-gray-900 text-sm text-left font-bold">
                                        {{$trending->title}}
                                    </div>
                                </div>
                            </div>
                            <div class="ml-14 flex flex-col justify-start items-start">
                                <div class="text-left">
                                    <a class="md:text-sm text-xs text-gray-500 text-left">
                                        {{$user_data->username}}
                                    </a>
                                </div>
                                <div class="w-full">
                                    <span href="#" class="md:text-sm text-xs font-base text-gray-500">
                                        {{$trending->views}} views &nbsp; &bullet; &nbsp;
                                        2 hour ago
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <!-- Right -->
            <div
                class="arrow-right absolute right-4 top-32 z-20 md:bg-indigo-800 bg-gray-900 bg-opacity-70 text-white rounded-full w-10 h-10 flex justify-center items-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </div>
            <!--  Left -->
            <div
                class="arrow-left absolute left-4 top-32 z-20 md:bg-indigo-800 bg-gray-900 bg-opacity-70 text-white rounded-full w-10 h-10 flex justify-center items-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                    </path>
                </svg>
            </div>
        </div>
    </div>
    @else
    <h3 class="text-gray-800 font-bold lg:text-xl text-md m-10 flex justify-center items-center h-40 text-center">
        <!--Latest Media Not Found.-->
    </h3>
    @endif --}}

    {{-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> --}}


</x-guest-layout>
