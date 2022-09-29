<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('metas')
    <title>@yield('title')</title>
    <!-- Styles -->
    @php
        $fav_icon = DB::table('setting_websites')->where('id', 1)->first()->fav_icon;
    @endphp
    <!-- App favicon -->
    <link rel="shortcut icon" href="https://relincsca.s3.amazonaws.com/public/media/{{ $fav_icon }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="https://unpkg.com/alpinejs@3.9.3/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    {{-- link --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="{{ asset('js/main.js') }}" defer></script>
    {{-- link --}}
    {{-- <script src="{{ asset('js/rating.js') }}" defer></script> --}}
    @yield('link')
    @livewireStyles
    @stack('script')
    {{-- @livewireStyles --}}
</head>
<style>
    .scroller::-webkit-scrollbar {
        background: rgba(7, 7, 7, 0.041);
        width: 7px;
    }

    .scroller::-webkit-scrollbar-thumb {
        background: #0707077a;
        border-radius: 1rem;
    }

    .drop-zone {
        max-width: 100%;
        height: 200px;
        padding: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-family: "Quicksand", sans-serif;
        font-weight: 500;
        font-size: 20px;
        cursor: pointer;
        color: #cccccc;
        border: 4px dashed #1814e2dc;
        border-radius: 10px;
    }

    .drop-zone--over {
        border-style: solid;
    }

    .drop-zone__input {
        display: none;
    }

    .drop-zone__thumb {
        width: 100%;
        height: 100%;
        border-radius: 10px;
        overflow: hidden;
        background-color: #cccccc;
        background-size: cover;
        position: relative;
        display: none;
    }

    .drop-zone__thumb::after {
        content: attr(data-label);
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 5px 0;
        color: #ffffff;
        background: rgba(0, 0, 0, 0.75);
        font-size: 14px;
        text-align: center;
    }

    #journal-scroll::-webkit-scrollbar {
        width: 4px;
        cursor: pointer;
        /*background-color: rgba(229, 231, 235, var(--bg-opacity));*/

    }

    #journal-scroll::-webkit-scrollbar-track {
        background-color: rgba(229, 231, 235, var(--bg-opacity));
        cursor: pointer;
        /*background: red;*/
    }

    #journal-scroll::-webkit-scrollbar-thumb {
        cursor: pointer;
        background-color: #a0aec0;
        /*outline: 1px solid slategrey;*/
    }


    .loading {
        z-index: 99999999999;
    }

    #animationWindow {
        width: 80%;
        height: 80%;
    }
</style>

<body class="text-gray-900 antialiased select-none scroller" x-data="{
    open : false,
    tab : 'media',
    openSearch : false,
    box : false,
    toggleMenu : 'true',
    opimg : false,
    listFollow : false,
    tab_follow : 'Followers',
    support : false,
    isNotification : false,
    }">
    <div class="loading overflow-hidden fixed justify-center items-center inset-0 bg-gray-100 w-full h-full">
        <div class="w-full overflow-hidden h-full flex justify-center items-center mx-auto">
            <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_poqmycwy.json" background="transparent"
                speed="1" style="width: 350px; height: 350px;" loop autoplay></lottie-player>
            {{-- <lottie-player class="w-full h-full flex justify-center items-center"
                src="https://assets8.lottiefiles.com/packages/lf20_bshezgfo.json" mode="bounce"
                background="rgba(255, 255, 255, 0)" speed="1" style="width: 400px; height: 400px;" loop autoplay>
            </lottie-player> --}}
        </div>
    </div>
    <div class="relative z-50">
        <div class="z-50">
            <div class="antialiased dark-mode:bg-gray-900" x-show="toggleMenu"
                x-transition:enter="transition transform duration-300 ease-out"
                x-transition:enter-start="-translate-y-12" x-transition:leave-end="translate-y-0">
                <div
                    class="w-full text-gray-700 lg:bg-gray-50 bg-gray-100 dark-mode:text-gray-200 dark-mode:bg-gray-800">
                    <div x-data="{ open  : false }"
                        class="flex flex-col  max-w-screen-xl lg:px-4 px-0 mx-auto lg:items-center lg:justify-between lg:flex-row">
                        <div class="flex flex-row items-center justify-between px-4">
                            <a href="#"
                                class="text-lg  tracking-widest text-gray-900 capitalize rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">

                                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />

                            </a>
                            <button class="rounded-lg lg:hidden focus:outline-none focus:shadow-outline"
                                @click="open = !open">
                                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                    <path x-show="!open" fill-rule="evenodd"
                                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                    <path x-show="open" fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>

                        </div>
                        <x-navbar />
                    </div>
                </div>
            </div>
        </div>
        <div @click.away="openSearch = !openSearch"
            class="bg-indigo-600  w-full flex jusify-center items-center transform" x-transition.duration.250ms
            x-show="openSearch">
            <!-- video Hubs search box -->
            @livewire('search-engine')
        </div>
    </div>
    <div class="md:px-6 lg:px-6 py-4 relative">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-6">
            <div class="flex flex-col items-center w-full md:col-span-12" {{--
                :class="toggleCategory ? 'md:col-span-9' : 'md:col-span-12'" --}}>
                <div class="w-full scrollere overflow-x-scroll">
                    <nav class="md:pb-4 pb-2 md:py-3 flex flex-row relative capitalize">
                        <a class="md:px-6 lg:px-5 px-4 mx-2 md:py-2 py-1 md:text-md text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                            href="{{route('gu.media')}}">
                            <div class="___class_+?6___">media</div> &nbsp; <svg xmlns="http://www.w3.org/2000/svg"
                                class="lg:h-6 lg:w-6 h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                            </svg>
                        </a>
                        <a class="md:px-6 lg:px-5 px-4 mx-2 md:py-2 py-1 md:text-md text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                            href="{{route('gu.wall')}}">
                            <div class="___class_+?9___">wall</div> &nbsp; <svg xmlns="http://www.w3.org/2000/svg"
                                class="lg:h-6 lg:w-6 h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                        </a>
                        <a class="md:px-6 lg:px-5 px-4 mx-2 md:py-2 py-1 md:text-md text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                            href="{{route('gu.ehubs')}}">
                            <div class="___class_+?12___">challenges</div> &nbsp; <svg xmlns="http://www.w3.org/2000/svg"
                                class="lg:h-6 lg:w-6 h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                            </svg>
                        </a>
                        <a class="md:px-6 lg:px-5 px-4 mx-2 md:py-2 py-1 md:text-md text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                            href="{{route('gu.profiles')}}">
                            <div class="___class_+?15___">profiles</div> &nbsp; <svg xmlns="http://www.w3.org/2000/svg"
                                class="lg:h-6 lg:w-6 h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </nav>
                </div>
                <div class="my-2 mt-4 w-full">
                    {{$slot}}
                </div>
            </div>

        </div>
    </div>
    </div>
    <div x-show="support" style="z-index: 999" class="fixed inset-0 w-full h-full flex flex-col bg-white text-gray-800">
        <div class="overflow-y-scroll">
            <div class="py-2 px-3 w-full flex justify-between items-center">
                <h1 class="text-md font-pop">
                    Support
                </h1>
                <button @click.prevent="support = !support" class="rounded-full bg-red-300 p-2">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div class=" border-t border-gray">
                <div class="w-full">
                    <x-support />
                </div>
            </div>
        </div>
    </div>
    @auth

    <div x-show="isNotification" style="z-index: 999"
        class="fixed inset-0 bg-gray-900 backdrop-filter backdrop-blur-md bg-opacity-25 scrollere w-full space-y-2 text-gray-600 "
        x-transition:enter="transition transform ease-in-out duration-300"
        x-transition:enter-start="transform -translate-x-full" x-transition:enter-end="transform -translate-x-0"
        x-transition:leave="transition ease-in duration-400" x-transition:leave-start="transform -translate-x-0"
        x-transition:leave-end="transform -translate-x-full">
        <div @click.away="isNotification = !isNotification"
            class="lg:w-4/12 w-5/6 h-screen transform overflow-y-auto scroller p-2 bg-gray-100 border z-50 border-gray-100">
            <x-notification />
        </div>
    </div>
    @endauth
    <div
        class="flex flex-col z-50 bg-gray-900  lg:w-3/12 w-4/6 rounded-t-lg lg:px-4 py-2 px-0 mx-auto lg:items-center lg:justify-center lg:flex-row fixed bottom-0 left-0 right-0">
        <nav class="w-full flex-grow  lg:pb-0 flex  justify-center items-center lg:bg-transparen space-x-3 lg:px-2">
            @auth
            <!-- Notifications menu -->
            <a class="flex justify-center items-center font-bold px-3 lg:py-2 py-1  text-sm text-gray-100  hover:bg-white hover:text-indigo-500 transition duration-100 rounded-lg focus:text-gray-900 hover:text-gray-50 focus:bg-gray-200 text-sm lg:text-left text-center focus:outline-none focus:shadow-outline"
                href="{{ route('dash.createmedia') }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Media</a>
            <a class="flex justify-center items-center font-bold px-3 lg:py-2 py-1  text-sm  text-gray-100 hover:bg-white hover:text-indigo-500 transition duration-100 rounded-lg focus:text-gray-900 hover:text-gray-50 focus:bg-gray-200 text-sm lg:text-left text-center focus:outline-none focus:shadow-outline"
                href="{{ route('dash.createwall') }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Wall</a>
                @if (Auth::user()->role == 'admin')
                    <a class="flex justify-center items-center font-bold px-3 lg:py-2 py-1 text-sm text-gray-100  hover:bg-white hover:text-indigo-500 transition duration-100 rounded-lg focus:text-gray-900 hover:text-gray-50 focus:bg-gray-200 text-sm lg:text-left text-center focus:outline-none focus:shadow-outline"
                href="{{ route('dash.create.hubs') }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Hub</a>
                @endif
            
            @endauth
        </nav>
    </div>
    <footer class="mt-4 w-full">
        @php
            $setting = App\Models\SettingWebsite::where('id', 1)->first();
        @endphp
        <div class="lg:px-8 px-4 pb-16 pt-4 flex lg:flex-row flex-col items-center bg-gray-100 justify-between">
            <a href="{{ route("home") }}" class="z-10">
                <x-application-logo class="text-gray-500" />
            </a>
            <p class="text-gray-600 font-bold text-md">{{ $setting->copyright_text }}</p>
            <div class="flex justify-center items-center space-x-4 lg:mt-1 mt-3">
                <div></div>
                <a href="{{ $setting->instagram_url }}" target="_blank" class="w-8">
                    <svg role="img" class="text-gray-600" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>Instagram</title>
                        <path
                            d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                    </svg>
                </a>
                <a href="{{ $setting->facebook_url }}" target="_blank" class="w-8">
                    <svg role="img" class="text-gray-600" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>Facebook</title>
                        <path
                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                    </svg>
                </a>
                <a href="{{ $setting->youtube_url }}" target="_blank" class="w-8">
                    <svg role="img" class="text-gray-600" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>YouTube</title>
                        <path
                            d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                    </svg>
                </a>
                <a href="{{ $setting->twitter_url }}" target="_blank" class="w-8">
                    <svg role="img" class="text-gray-600" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>Twitter</title>
                        <path
                            d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                    </svg>
                </a>

            </div>

            <x-tos />

        </div>
    </footer>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {

        slidesPerView: 3,
        spaceBetween: 10,
        slidesPerGroup: 3,
        speed: 400,
        autoplay: {
        delay: 4000,
        disableOnInteraction: false,
        },
        loopFillGroupWithBlank: true,
        breakpoints: {
            100: {
                slidesPerView: 1,
                spaceBetween: 15,
                slidesPerGroup: 1,
            },
            668: {
                slidesPerView: 2,
                spaceBetween: 20,
                slidesPerGroup: 2,
            },
            1100: {
                slidesPerView: 3,
                spaceBetween: 20,
                slidesPerGroup: 3,
            },
            1600: {
                slidesPerView: 5,
                spaceBetween: 10,
                slidesPerGroup: 5,
            },
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        });
    </script>
    <script>
        setTimeout(() => {
    document.querySelector('.loading').classList.remove('flex');
    document.querySelector('.loading').classList.add('hidden');
}, 1000);

    </script>
    @livewireScripts
</body>

</html>
