<x-guest-layout>
    @section('title')
        Media
    @endsection
    <div class="md:px-6 lg:px-6 py-4 relative">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-6">
            <div class="flex flex-col items-center w-full md:col-span-9"
                :class="toggleCategory ? 'md:col-span-9' : 'md:col-span-12'">
                <div class="w-full scrollere overflow-x-scroll">
                    <nav class="md:pb-4 pb-2 md:py-3 flex flex-row relative capitalize">
                        <a class="md:px-6 px-5 mx-2 md:py-2 py-2 md:text-md text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                            href="#" :class="{ 'bg-gray-200': tab === 'media' }" @click="tab = 'media'">
                            <div class="___class_+?6___">media</div> &nbsp; <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                            </svg>
                        </a>
                        <a class="md:px-6 px-5 mx-2 md:py-2 py-2 md:text-md text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                            href="#" :class="{ 'bg-gray-200': tab === 'wall' }" @click="tab = 'wall'">
                            <div class="___class_+?9___">wall</div> &nbsp; <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                        </a>
                        <a class="md:px-6 px-5 mx-2 md:py-2 py-2 md:text-md text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                            href="#" :class="{ 'bg-gray-200': tab === 'hubs' }" @click="tab = 'hubs'">
                            <div class="___class_+?12___">hubs</div> &nbsp; <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                            </svg>
                        </a>
                        <a class="md:px-6 px-5 mx-2 md:py-2 py-2 md:text-md text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                            href="#" :class="{ 'bg-gray-200': tab === 'profiles' }" @click="tab = 'profiles'">
                            <div class="___class_+?15___">profiles</div> &nbsp; <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                        <!-- <a class="md:px-6 px-5 mx-2 md:py-2 py-2 md:text-md text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                            href="#" :class="{ 'bg-gray-200': tab === 'arshive' }" @click="tab = 'arshive'"><div class="___class_+?18___">arshive</div> &nbsp; <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                              </svg></a> -->
                    </nav>
                </div>
                <div class="my-2 mt-4 w-full">
                    <div class="w-full" x-show="tab === 'media'">
                        <div class="my-6 md:px-2 px-3">
                            <div
                                class="grid xl:grid-cols-3 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-4 place-items-center">
                                <div class="relative">
                                    <a href="./video.html"
                                        class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                        <div
                                            class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                            <div>
                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt="post"
                                                    class="bg-cover w-100 h-100 rounded shadow-md">
                                            </div>
                                            <div class="flex justify-center items-center flex-row">
                                                <div class="mr-3 w-16">
                                                    <img src="{{ asset('storage/img/post2.jpg') }}" alt=""
                                                        class="h-9 w-9 rounded-full shadow-md">
                                                </div>
                                                <div class="flex justify-start">
                                                    <div class="text-gray-900 text-sm text-left font-bold">
                                                        Amir Tataloo - Heyf Didid Raft - New Music Video (Coming Soon)
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ml-14 flex flex-col justify-start items-start">
                                                <div class="text-left">
                                                    <a href="#" class="md:text-sm text-xs text-gray-500 text-left">
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
                                    </a>
                                </div>
                                <div class="relative">
                                    <a href="./video.html"
                                        class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                        <div
                                            class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                            <div>
                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt="post"
                                                    class="bg-cover w-100 h-100 rounded shadow-md">
                                            </div>
                                            <div class="flex justify-center items-center flex-row">
                                                <div class="mr-3 w-16">
                                                    <img src="{{ asset('storage/img/post2.jpg') }}" alt=""
                                                        class="h-9 w-9 rounded-full shadow-md">
                                                </div>
                                                <div class="flex justify-start">
                                                    <div class="text-gray-900 text-sm text-left font-bold">
                                                        Amir Tataloo - Heyf Didid Raft - New Music Video (Coming Soon)
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ml-14 flex flex-col justify-start items-start">
                                                <div class="text-left">
                                                    <a href="#" class="md:text-sm text-xs text-gray-500 text-left">
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
                                    </a>
                                </div>
                                <div class="relative">
                                    <a href="./video.html"
                                        class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                        <div
                                            class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                            <div>
                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt="post"
                                                    class="bg-cover w-100 h-100 rounded shadow-md">
                                            </div>
                                            <div class="flex justify-center items-center flex-row">
                                                <div class="mr-3 w-16">
                                                    <img src="{{ asset('storage/img/post2.jpg') }}" alt=""
                                                        class="h-9 w-9 rounded-full shadow-md">
                                                </div>
                                                <div class="flex justify-start">
                                                    <div class="text-gray-900 text-sm text-left font-bold">
                                                        Amir Tataloo - Heyf Didid Raft - New Music Video (Coming Soon)
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ml-14 flex flex-col justify-start items-start">
                                                <div class="text-left">
                                                    <a href="#" class="md:text-sm text-xs text-gray-500 text-left">
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
                                    </a>
                                </div>
                                <div class="relative">
                                    <a href="./video.html"
                                        class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                        <div
                                            class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                            <div>
                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt="post"
                                                    class="bg-cover w-100 h-100 rounded shadow-md">
                                            </div>
                                            <div class="flex justify-center items-center flex-row">
                                                <div class="mr-3 w-16">
                                                    <img src="{{ asset('storage/img/post2.jpg') }}" alt=""
                                                        class="h-9 w-9 rounded-full shadow-md">
                                                </div>
                                                <div class="flex justify-start">
                                                    <div class="text-gray-900 text-sm text-left font-bold">
                                                        Amir Tataloo - Heyf Didid Raft - New Music Video (Coming Soon)
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ml-14 flex flex-col justify-start items-start">
                                                <div class="text-left">
                                                    <a href="#" class="md:text-sm text-xs text-gray-500 text-left">
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
                                    </a>
                                </div>
                                <div class="relative">
                                    <a href="./video.html"
                                        class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                        <div
                                            class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                            <div>
                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt="post"
                                                    class="bg-cover w-100 h-100 rounded shadow-md">
                                            </div>
                                            <div class="flex justify-center items-center flex-row">
                                                <div class="mr-3 w-16">
                                                    <img src="{{ asset('storage/img/post2.jpg') }}" alt=""
                                                        class="h-9 w-9 rounded-full shadow-md">
                                                </div>
                                                <div class="flex justify-start">
                                                    <div class="text-gray-900 text-sm text-left font-bold">
                                                        Amir Tataloo - Heyf Didid Raft - New Music Video (Coming Soon)
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ml-14 flex flex-col justify-start items-start">
                                                <div class="text-left">
                                                    <a href="#" class="md:text-sm text-xs text-gray-500 text-left">
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
                                    </a>
                                </div>
                                <div class="relative">
                                    <a href="#"
                                        class="max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                        <div
                                            class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                            <div>
                                                <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                    class="bg-cover w-100 h-100 rounded shadow-md">
                                            </div>
                                            <div class="flex justify-center items-center flex-row">
                                                <div class="mr-3 w-16">
                                                    <img src="{{ asset('storage/img/post2.jpg') }}" alt=""
                                                        class="h-9 w-9 rounded-full shadow-md">
                                                </div>
                                                <div class="flex justify-start">
                                                    <div class="text-gray-900 text-sm text-left font-bold">
                                                        Amir Tataloo - Heyf Didid Raft - New Music Video (Coming
                                                        Soon)
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ml-14 flex flex-col justify-start items-start">
                                                <div class="text-left">
                                                    <a href="#" class="text-sm text-gray-500 text-left">
                                                        Amir Tataloo
                                                    </a>
                                                </div>
                                                <div class="w-full">
                                                    <span href="#" class="text-sm font-base text-gray-500">
                                                        147K views &nbsp; &bullet; &nbsp; 2 days ago
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <ul class="flex">
                            <li class="mx-1 px-3 py-2 bg-gray-200 text-gray-500 rounded-lg">
                                <a class="flex items-center font-bold" href="#">
                                    <span class="mx-1">previous</span>
                                </a>
                            </li>
                            <li
                                class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">
                                <a class="font-bold" href="#">1</a>
                            </li>
                            <li
                                class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">
                                <a class="font-bold" href="#">2</a>
                            </li>
                            <li
                                class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">
                                <a class="font-bold" href="#">3</a>
                            </li>
                            <li
                                class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">
                                <a class="flex items-center font-bold" href="#">
                                    <span class="mx-1">Next</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="___class_+?121___" x-show="tab === 'wall'" x-data="{ tabs : 'album'}">

                        <!--  -->
                        <div class="w-full flex justify-center items-center">
                            <nav class="md:pb-4 pb-2 md:py-3 flex flex-row relative capitalize">
                                <a class="md:px-6 px-5 md:py-2 py-2 text-md font-medium bg-transparent flex items-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                    href="#" :class="{ 'bg-gray-200': tabs === 'album' }" @click="tabs = 'album'">album
                                    &nbsp; <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg></a>
                                <a class="md:px-6 px-5 md:py-2 py-2 text-md font-medium bg-transparent rounded-lg flex items-center dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                    href="#" :class="{ 'bg-gray-200': tabs === 'feed' }" @click="tabs = 'feed'">feed
                                    &nbsp; <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                    </svg></a>
                            </nav>
                        </div>
                        <!--  -->
                        <div class="my-4 md:px-4 px-2">
                            <div class="___class_+?129___" x-show="tabs === 'album'">
                                <div class="grid grid-cols-3 md:gap-2 gap-1 place-content-center">
                                    <div class="flex w-3/3 justify-center items-center shadow-md cursor-pointer z-20"
                                        x-data="{ hover : false , details : false }" @click="details = true"
                                        @mouseover="hover = !hover">
                                        <div class="w-full h-full relative">
                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="news"
                                                class="rounded-sm w-full h-full">
                                            <div
                                                class="absolute inset-0 hover:bg-gray-900 hover:bg-opacity-40 transition-all duration-200">
                                                <div class="flex text-white flex-col h-full w-full justify-center self-center items-center space-y-2"
                                                    x-show="hover" x-on:mouseout="hover = !hover">
                                                    <div class="flex items-center space-x-4">
                                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                            </path>
                                                        </svg>
                                                        <div class="___class_+?138___">
                                                            <span
                                                                class="text-white md:text-lg text-md font-bold">23</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center space-x-4">
                                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                                            </path>
                                                        </svg>
                                                        <div class="___class_+?142___">
                                                            <span
                                                                class="text-white md:text-lg text-md font-bold">23</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="flex justify-center items-center bg-black bg-opacity-50 absolute inset-0 h-full w-full mx-auto"
                                            x-show="details">
                                            <div
                                                class="bg-gray-50 absolute inset-0 m-auto my-6 text-gray-900 flex justify-center max-h-6xl max-w-5xl rounded-md shadow-lg py-1 px-3">
                                                <div class="flex justify-between flex-row h-10 w-full">
                                                    <div class="___class_+?147___"></div>
                                                    <button class="text-3xl focus:outline-none">
                                                        &times;
                                                    </button>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="flex w-3/3 justify-center items-center shadow-md cursor-pointer z-20"
                                        x-data="{ hover : false , details : false }" @click="details = true"
                                        @mouseover="hover = !hover">
                                        <div class="w-full h-full relative">
                                            <img src="{{ asset('storage/img/music2.jpg') }}" alt="news"
                                                class="rounded-sm w-full h-full">
                                            <div
                                                class="absolute inset-0 hover:bg-gray-900 hover:bg-opacity-40 transition-all duration-200">
                                                <div class="flex text-white flex-col h-full w-full justify-center self-center items-center space-y-2"
                                                    x-show="hover" x-on:mouseout="hover = !hover">
                                                    <div class="flex items-center space-x-4">
                                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                            </path>
                                                        </svg>
                                                        <div class="___class_+?156___">
                                                            <span
                                                                class="text-white md:text-lg text-md font-bold">23</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center space-x-4">
                                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                                            </path>
                                                        </svg>
                                                        <div class="___class_+?160___">
                                                            <span
                                                                class="text-white md:text-lg text-md font-bold">23</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="flex justify-center items-center bg-black bg-opacity-50 absolute inset-0 h-full w-full mx-auto"
                                            x-show="details">
                                            <div
                                                class="bg-gray-50 absolute inset-0 m-auto my-6 text-gray-900 flex justify-center max-h-6xl max-w-5xl rounded-md shadow-lg py-1 px-3">
                                                <div class="flex justify-between flex-row h-10 w-full">
                                                    <div class="___class_+?165___"></div>
                                                    <button class="text-3xl focus:outline-none">
                                                        &times;
                                                    </button>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="flex w-3/3 justify-center items-center shadow-md cursor-pointer z-20"
                                        x-data="{ hover : false , details : false }" @click="details = true"
                                        @mouseover="hover = !hover">
                                        <div class="w-full h-full relative">
                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="news"
                                                class="rounded-sm w-full h-full">
                                            <div
                                                class="absolute inset-0 hover:bg-gray-900 hover:bg-opacity-40 transition-all duration-200">
                                                <div class="flex text-white flex-col h-full w-full justify-center self-center items-center space-y-2"
                                                    x-show="hover" x-on:mouseout="hover = !hover">
                                                    <div class="flex items-center space-x-4">
                                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                            </path>
                                                        </svg>
                                                        <div class="___class_+?174___">
                                                            <span
                                                                class="text-white md:text-lg text-md font-bold">23</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center space-x-4">
                                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                                            </path>
                                                        </svg>
                                                        <div class="___class_+?178___">
                                                            <span
                                                                class="text-white md:text-lg text-md font-bold">23</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="flex justify-center items-center bg-black bg-opacity-50 absolute inset-0 h-full w-full mx-auto"
                                            x-show="details">
                                            <div
                                                class="bg-gray-50 absolute inset-0 m-auto my-6 text-gray-900 flex justify-center max-h-6xl max-w-5xl rounded-md shadow-lg py-1 px-3">
                                                <div class="flex justify-between flex-row h-10 w-full">
                                                    <div class="___class_+?183___"></div>
                                                    <button class="text-3xl focus:outline-none">
                                                        &times;
                                                    </button>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="flex w-3/3 justify-center items-center shadow-md cursor-pointer z-20"
                                        x-data="{ hover : false , details : false }" @click="details = true"
                                        @mouseover="hover = !hover">
                                        <div class="w-full h-full relative">
                                            <img src="{{ asset('storage/img/politics.jpg') }}" alt="news"
                                                class="rounded-sm w-full h-full">
                                            <div
                                                class="absolute inset-0 hover:bg-gray-900 hover:bg-opacity-40 transition-all duration-200">
                                                <div class="flex text-white flex-col h-full w-full justify-center self-center items-center space-y-2"
                                                    x-show="hover" x-on:mouseout="hover = !hover">
                                                    <div class="flex items-center space-x-4">
                                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                            </path>
                                                        </svg>
                                                        <div class="___class_+?192___">
                                                            <span
                                                                class="text-white md:text-lg text-md font-bold">23</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center space-x-4">
                                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                                            </path>
                                                        </svg>
                                                        <div class="___class_+?196___">
                                                            <span
                                                                class="text-white md:text-lg text-md font-bold">23</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="flex justify-center items-center bg-black bg-opacity-50 absolute inset-0 h-full w-full mx-auto"
                                            x-show="details">
                                            <div
                                                class="bg-gray-50 absolute inset-0 m-auto my-6 text-gray-900 flex justify-center max-h-6xl max-w-5xl rounded-md shadow-lg py-1 px-3">
                                                <div class="flex justify-between flex-row h-10 w-full">
                                                    <div class="___class_+?201___"></div>
                                                    <button class="text-3xl focus:outline-none">
                                                        &times;
                                                    </button>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="flex w-3/3 justify-center items-center shadow-md cursor-pointer z-20"
                                        x-data="{ hover : false , details : false }" @click="details = true"
                                        @mouseover="hover = !hover">
                                        <div class="w-full h-full relative">
                                            <img src="{{ asset('storage/img/post1.jpg') }}" alt="news"
                                                class="rounded-sm w-full h-full">
                                            <div
                                                class="absolute inset-0 hover:bg-gray-900 hover:bg-opacity-40 transition-all duration-200">
                                                <div class="flex text-white flex-col h-full w-full justify-center self-center items-center space-y-2"
                                                    x-show="hover" x-on:mouseout="hover = !hover">
                                                    <div class="flex items-center space-x-4">
                                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                            </path>
                                                        </svg>
                                                        <div class="___class_+?210___">
                                                            <span
                                                                class="text-white md:text-lg text-md font-bold">23</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center space-x-4">
                                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                                            </path>
                                                        </svg>
                                                        <div class="___class_+?214___">
                                                            <span
                                                                class="text-white md:text-lg text-md font-bold">23</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="flex justify-center items-center bg-black bg-opacity-50 absolute inset-0 h-full w-full mx-auto"
                                            x-show="details">
                                            <div
                                                class="bg-gray-50 absolute inset-0 m-auto my-6 text-gray-900 flex justify-center max-h-6xl max-w-5xl rounded-md shadow-lg py-1 px-3">
                                                <div class="flex justify-between flex-row h-10 w-full">
                                                    <div class="___class_+?219___"></div>
                                                    <button class="text-3xl focus:outline-none">
                                                        &times;
                                                    </button>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="flex w-3/3 justify-center items-center shadow-md cursor-pointer z-20"
                                        x-data="{ hover : false , details : false }" @click="details = true"
                                        @mouseover="hover = !hover">
                                        <div class="w-full h-full relative">
                                            <img src="{{ asset('storage/img/post2.jpg') }}" alt="news"
                                                class="rounded-sm w-full h-full">
                                            <div
                                                class="absolute inset-0 hover:bg-gray-900 hover:bg-opacity-40 transition-all duration-200">
                                                <div class="flex text-white flex-col h-full w-full justify-center self-center items-center space-y-2"
                                                    x-show="hover" x-on:mouseout="hover = !hover">
                                                    <div class="flex items-center space-x-4">
                                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                            </path>
                                                        </svg>
                                                        <div class="___class_+?228___">
                                                            <span
                                                                class="text-white md:text-lg text-md font-bold">23</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center space-x-4">
                                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                                            </path>
                                                        </svg>
                                                        <div class="___class_+?232___">
                                                            <span
                                                                class="text-white md:text-lg text-md font-bold">23</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="flex justify-center items-center bg-black bg-opacity-50 absolute inset-0 h-full w-full mx-auto"
                                            x-show="details">
                                            <div
                                                class="bg-gray-50 absolute inset-0 m-auto my-6 text-gray-900 flex justify-center max-h-6xl max-w-5xl rounded-md shadow-lg py-1 px-3">
                                                <div class="flex justify-between flex-row h-10 w-full">
                                                    <div class="___class_+?237___"></div>
                                                    <button class="text-3xl focus:outline-none">
                                                        &times;
                                                    </button>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="___class_+?239___" x-show="tabs === 'feed'">
                                <div class="grid grid-cols-3 md:gap-2 gap-1 place-content-center">
                                    <div class="flex w-3/3 justify-center items-center shadow-md cursor-pointer z-20"
                                        x-data="{ hover : false , details : false }" @click="details = true"
                                        @mouseover="hover = !hover">
                                        <div class="w-full h-full relative">
                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="news"
                                                class="rounded-sm w-full h-full">
                                            <div
                                                class="absolute inset-0 hover:bg-gray-900 hover:bg-opacity-40 transition-all duration-200">
                                                <div class="flex text-white flex-col h-full w-full justify-center self-center items-center space-y-2"
                                                    x-show="hover" x-on:mouseout="hover = !hover">
                                                    <div class="flex items-center space-x-4">
                                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                            </path>
                                                        </svg>
                                                        <div class="___class_+?248___">
                                                            <span
                                                                class="text-white md:text-lg text-md font-bold">23</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center space-x-4">
                                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                                            </path>
                                                        </svg>
                                                        <div class="___class_+?252___">
                                                            <span
                                                                class="text-white md:text-lg text-md font-bold">23</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="flex justify-center items-center bg-black bg-opacity-50 absolute inset-0 h-full w-full mx-auto"
                                            x-show="details">
                                            <div
                                                class="bg-gray-50 absolute inset-0 m-auto my-6 text-gray-900 flex justify-center max-h-6xl max-w-5xl rounded-md shadow-lg py-1 px-3">
                                                <div class="flex justify-between flex-row h-10 w-full">
                                                    <div class="___class_+?257___"></div>
                                                    <button class="text-3xl focus:outline-none">
                                                        &times;
                                                    </button>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="flex w-3/3 justify-center items-center shadow-md cursor-pointer z-20"
                                        x-data="{ hover : false , details : false }" @click="details = true"
                                        @mouseover="hover = !hover">
                                        <div class="w-full h-full relative">
                                            <img src="{{ asset('storage/img/music2.jpg') }}" alt="news"
                                                class="rounded-sm w-full h-full">
                                            <div
                                                class="absolute inset-0 hover:bg-gray-900 hover:bg-opacity-40 transition-all duration-200">
                                                <div class="flex text-white flex-col h-full w-full justify-center self-center items-center space-y-2"
                                                    x-show="hover" x-on:mouseout="hover = !hover">
                                                    <div class="flex items-center space-x-4">
                                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                            </path>
                                                        </svg>
                                                        <div class="___class_+?266___">
                                                            <span
                                                                class="text-white md:text-lg text-md font-bold">23</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center space-x-4">
                                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                                            </path>
                                                        </svg>
                                                        <div class="___class_+?270___">
                                                            <span
                                                                class="text-white md:text-lg text-md font-bold">23</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="flex justify-center items-center bg-black bg-opacity-50 absolute inset-0 h-full w-full mx-auto"
                                            x-show="details">
                                            <div
                                                class="bg-gray-50 absolute inset-0 m-auto my-6 text-gray-900 flex justify-center max-h-6xl max-w-5xl rounded-md shadow-lg py-1 px-3">
                                                <div class="flex justify-between flex-row h-10 w-full">
                                                    <div class="___class_+?275___"></div>
                                                    <button class="text-3xl focus:outline-none">
                                                        &times;
                                                    </button>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="flex w-3/3 justify-center items-center shadow-md cursor-pointer z-20"
                                        x-data="{ hover : false , details : false }" @click="details = true"
                                        @mouseover="hover = !hover">
                                        <div class="w-full h-full relative">
                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="news"
                                                class="rounded-sm w-full h-full">
                                            <div
                                                class="absolute inset-0 hover:bg-gray-900 hover:bg-opacity-40 transition-all duration-200">
                                                <div class="flex text-white flex-col h-full w-full justify-center self-center items-center space-y-2"
                                                    x-show="hover" x-on:mouseout="hover = !hover">
                                                    <div class="flex items-center space-x-4">
                                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                            </path>
                                                        </svg>
                                                        <div class="___class_+?284___">
                                                            <span
                                                                class="text-white md:text-lg text-md font-bold">23</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center space-x-4">
                                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                                            </path>
                                                        </svg>
                                                        <div class="___class_+?288___">
                                                            <span
                                                                class="text-white md:text-lg text-md font-bold">23</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="flex justify-center items-center bg-black bg-opacity-50 absolute inset-0 h-full w-full mx-auto"
                                            x-show="details">
                                            <div
                                                class="bg-gray-50 absolute inset-0 m-auto my-6 text-gray-900 flex justify-center max-h-6xl max-w-5xl rounded-md shadow-lg py-1 px-3">
                                                <div class="flex justify-between flex-row h-10 w-full">
                                                    <div class="___class_+?293___"></div>
                                                    <button class="text-3xl focus:outline-none">
                                                        &times;
                                                    </button>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="flex w-3/3 justify-center items-center shadow-md cursor-pointer z-20"
                                        x-data="{ hover : false , details : false }" @click="details = true"
                                        @mouseover="hover = !hover">
                                        <div class="w-full h-full relative">
                                            <img src="{{ asset('storage/img/politics.jpg') }}" alt="news"
                                                class="rounded-sm w-full h-full">
                                            <div
                                                class="absolute inset-0 hover:bg-gray-900 hover:bg-opacity-40 transition-all duration-200">
                                                <div class="flex text-white flex-col h-full w-full justify-center self-center items-center space-y-2"
                                                    x-show="hover" x-on:mouseout="hover = !hover">
                                                    <div class="flex items-center space-x-4">
                                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                            </path>
                                                        </svg>
                                                        <div class="___class_+?302___">
                                                            <span
                                                                class="text-white md:text-lg text-md font-bold">23</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center space-x-4">
                                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                                            </path>
                                                        </svg>
                                                        <div class="___class_+?306___">
                                                            <span
                                                                class="text-white md:text-lg text-md font-bold">23</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="flex justify-center items-center bg-black bg-opacity-50 absolute inset-0 h-full w-full mx-auto"
                                            x-show="details">
                                            <div
                                                class="bg-gray-50 absolute inset-0 m-auto my-6 text-gray-900 flex justify-center max-h-6xl max-w-5xl rounded-md shadow-lg py-1 px-3">
                                                <div class="flex justify-between flex-row h-10 w-full">
                                                    <div class="___class_+?311___"></div>
                                                    <button class="text-3xl focus:outline-none">
                                                        &times;
                                                    </button>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="flex w-3/3 justify-center items-center shadow-md cursor-pointer z-20"
                                        x-data="{ hover : false , details : false }" @click="details = true"
                                        @mouseover="hover = !hover">
                                        <div class="w-full h-full relative">
                                            <img src="{{ asset('storage/img/post1.jpg') }}" alt="news"
                                                class="rounded-sm w-full h-full">
                                            <div
                                                class="absolute inset-0 hover:bg-gray-900 hover:bg-opacity-40 transition-all duration-200">
                                                <div class="flex text-white flex-col h-full w-full justify-center self-center items-center space-y-2"
                                                    x-show="hover" x-on:mouseout="hover = !hover">
                                                    <div class="flex items-center space-x-4">
                                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                            </path>
                                                        </svg>
                                                        <div class="___class_+?320___">
                                                            <span
                                                                class="text-white md:text-lg text-md font-bold">23</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center space-x-4">
                                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                                            </path>
                                                        </svg>
                                                        <div class="___class_+?324___">
                                                            <span
                                                                class="text-white md:text-lg text-md font-bold">23</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="flex justify-center items-center bg-black bg-opacity-50 absolute inset-0 h-full w-full mx-auto"
                                            x-show="details">
                                            <div
                                                class="bg-gray-50 absolute inset-0 m-auto my-6 text-gray-900 flex justify-center max-h-6xl max-w-5xl rounded-md shadow-lg py-1 px-3">
                                                <div class="flex justify-between flex-row h-10 w-full">
                                                    <div class="___class_+?329___"></div>
                                                    <button class="text-3xl focus:outline-none">
                                                        &times;
                                                    </button>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="flex w-3/3 justify-center items-center shadow-md cursor-pointer z-20"
                                        x-data="{ hover : false , details : false }" @click="details = true"
                                        @mouseover="hover = !hover">
                                        <div class="w-full h-full relative">
                                            <img src="{{ asset('storage/img/post2.jpg') }}" alt="news"
                                                class="rounded-sm w-full h-full">
                                            <div
                                                class="absolute inset-0 hover:bg-gray-900 hover:bg-opacity-40 transition-all duration-200">
                                                <div class="flex text-white flex-col h-full w-full justify-center self-center items-center space-y-2"
                                                    x-show="hover" x-on:mouseout="hover = !hover">
                                                    <div class="flex items-center space-x-4">
                                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                            </path>
                                                        </svg>
                                                        <div class="___class_+?338___">
                                                            <span
                                                                class="text-white md:text-lg text-md font-bold">23</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center space-x-4">
                                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                                            </path>
                                                        </svg>
                                                        <div class="___class_+?342___">
                                                            <span
                                                                class="text-white md:text-lg text-md font-bold">23</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="flex justify-center items-center bg-black bg-opacity-50 absolute inset-0 h-full w-full mx-auto"
                                            x-show="details">
                                            <div
                                                class="bg-gray-50 absolute inset-0 m-auto my-6 text-gray-900 flex justify-center max-h-6xl max-w-5xl rounded-md shadow-lg py-1 px-3">
                                                <div class="flex justify-between flex-row h-10 w-full">
                                                    <div class="___class_+?347___"></div>
                                                    <button class="text-3xl focus:outline-none">
                                                        &times;
                                                    </button>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                    <div class="___class_+?349___" x-show="tab === 'hubs'">
                        <div class="my-4 md:px-4 px-2">
                            <div class="max-w-3xl w-full z-10">
                                <a href="#" class="flex flex-col">
                                    <div class="bg-white border border-white shadow-lg  rounded-3xl p-4 m-4">
                                        <div class="flex-none sm:flex">
                                            <div
                                                class="relative h-32 w-32 flex justify-center items-center sm:mb-0 mb-3">
                                                <img src="{{ asset('storage/img/samansayyar.jpg') }}"
                                                    alt="SamanSayyar" class=" w-32 h-32 object-cover  rounded-2xl">
                                                <!-- <a href="#"
                                                    class="absolute -right-2 bottom-2   -ml-3  text-white p-1 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                        class="h-4 w-4">
                                                        <path
                                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                        </path>
                                                    </svg>
                                                </a> -->
                                            </div>
                                            <div class="flex-auto sm:ml-5 justify-evenly">
                                                <div class="flex items-center justify-between sm:mt-2">
                                                    <div class="flex items-center">
                                                        <div class="flex flex-col">
                                                            <div
                                                                class="w-full flex-none text-lg text-gray-800 font-bold leading-none">
                                                                saman sayyar</div>
                                                            <div class="flex-auto text-sm text-gray-500 my-1">
                                                                <span class="mr-3 ">i am saman sayyar my job
                                                                    is:
                                                                    Programming and site designer...
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-row items-center">
                                                    <div class="flex">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" class="h-5 w-5 text-yellow-500">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" class="h-5 w-5 text-yellow-500">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor"
                                                            class="h-5 w-5 text-yellow-500">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor"
                                                            class="h-5 w-5 text-yellow-500">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor"
                                                            class="h-5 w-5 text-yellow-500">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-1 inline-flex  hidden items-center">
                                                        <img class="w-5 h-5"
                                                            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDY0IDY0IiBoZWlnaHQ9IjY0cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA2NCA2NCIgd2lkdGg9IjY0cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxwYXRoIGQ9Ik0zMiw3LjE3NEMxOC4zMTEsNy4xNzQsNy4xNzQsMTguMzExLDcuMTc0LDMyYzAsMTMuNjg5LDExLjEzNywyNC44MjYsMjQuODI2LDI0LjgyNmMxMy42ODksMCwyNC44MjYtMTEuMTM3LDI0LjgyNi0yNC44MjYgIEM1Ni44MjYsMTguMzExLDQ1LjY4OSw3LjE3NCwzMiw3LjE3NHogTTM4LjE3NCwzMi44NzRoLTQuMDM5YzAsNi40NTMsMCwxNC4zOTgsMCwxNC4zOThoLTUuOTg1YzAsMCwwLTcuODY4LDAtMTQuMzk4aC0yLjg0NXYtNS4wODggIGgyLjg0NXYtMy4yOTFjMC0yLjM1NywxLjEyLTYuMDQsNi4wNC02LjA0bDQuNDMzLDAuMDE3djQuOTM5YzAsMC0yLjY5NSwwLTMuMjE5LDBjLTAuNTI0LDAtMS4yNjgsMC4yNjItMS4yNjgsMS4zODZ2Mi45OWg0LjU2ICBMMzguMTc0LDMyLjg3NHoiLz48L3N2Zz4=">
                                                        <img class="w-5 h-5"
                                                            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDU2LjY5MyA1Ni42OTMiIGhlaWdodD0iNTYuNjkzcHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA1Ni42OTMgNTYuNjkzIiB3aWR0aD0iNTYuNjkzcHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxwYXRoIGQ9Ik0yOC4zNDgsNS4xNTdjLTEzLjYsMC0yNC42MjUsMTEuMDI3LTI0LjYyNSwyNC42MjVjMCwxMy42LDExLjAyNSwyNC42MjMsMjQuNjI1LDI0LjYyM2MxMy42LDAsMjQuNjIzLTExLjAyMywyNC42MjMtMjQuNjIzICBDNTIuOTcxLDE2LjE4NCw0MS45NDcsNS4xNTcsMjguMzQ4LDUuMTU3eiBNNDAuNzUyLDI0LjgxN2MwLjAxMywwLjI2NiwwLjAxOCwwLjUzMywwLjAxOCwwLjgwM2MwLDguMjAxLTYuMjQyLDE3LjY1Ni0xNy42NTYsMTcuNjU2ICBjLTMuNTA0LDAtNi43NjctMS4wMjctOS41MTMtMi43ODdjMC40ODYsMC4wNTcsMC45NzksMC4wODYsMS40OCwwLjA4NmMyLjkwOCwwLDUuNTg0LTAuOTkyLDcuNzA3LTIuNjU2ICBjLTIuNzE1LTAuMDUxLTUuMDA2LTEuODQ2LTUuNzk2LTQuMzExYzAuMzc4LDAuMDc0LDAuNzY3LDAuMTExLDEuMTY3LDAuMTExYzAuNTY2LDAsMS4xMTQtMC4wNzQsMS42MzUtMC4yMTcgIGMtMi44NC0wLjU3LTQuOTc5LTMuMDgtNC45NzktNi4wODRjMC0wLjAyNywwLTAuMDUzLDAuMDAxLTAuMDhjMC44MzYsMC40NjUsMS43OTMsMC43NDQsMi44MTEsMC43NzcgIGMtMS42NjYtMS4xMTUtMi43NjEtMy4wMTItMi43NjEtNS4xNjZjMC0xLjEzNywwLjMwNi0yLjIwNCwwLjg0LTMuMTJjMy4wNjEsMy43NTQsNy42MzQsNi4yMjUsMTIuNzkyLDYuNDgzICBjLTAuMTA2LTAuNDUzLTAuMTYxLTAuOTI4LTAuMTYxLTEuNDE0YzAtMy40MjYsMi43NzgtNi4yMDUsNi4yMDYtNi4yMDVjMS43ODUsMCwzLjM5NywwLjc1NCw0LjUyOSwxLjk1OSAgYzEuNDE0LTAuMjc3LDIuNzQyLTAuNzk1LDMuOTQxLTEuNTA2Yy0wLjQ2NSwxLjQ1LTEuNDQ4LDIuNjY2LTIuNzMsMy40MzNjMS4yNTctMC4xNSwyLjQ1My0wLjQ4NCwzLjU2NS0wLjk3NyAgQzQzLjAxOCwyMi44NDksNDEuOTY1LDIzLjk0Miw0MC43NTIsMjQuODE3eiIvPjwvc3ZnPg==">
                                                        <img class="w-5 h-5"
                                                            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGhlaWdodD0iNjdweCIgaWQ9IkxheWVyXzEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDY3IDY3OyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgNjcgNjciIHdpZHRoPSI2N3B4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48cGF0aCBkPSJNNTAuODM3LDQ4LjEzN1YzNi40MjVjMC02LjI3NS0zLjM1LTkuMTk1LTcuODE2LTkuMTk1ICBjLTMuNjA0LDAtNS4yMTksMS45ODMtNi4xMTksMy4zNzRWMjcuNzFoLTYuNzljMC4wOSwxLjkxNywwLDIwLjQyNywwLDIwLjQyN2g2Ljc5VjM2LjcyOWMwLTAuNjA5LDAuMDQ0LTEuMjE5LDAuMjI0LTEuNjU1ICBjMC40OS0xLjIyLDEuNjA3LTIuNDgzLDMuNDgyLTIuNDgzYzIuNDU4LDAsMy40NCwxLjg3MywzLjQ0LDQuNjE4djEwLjkyOUg1MC44Mzd6IE0yMi45NTksMjQuOTIyYzIuMzY3LDAsMy44NDItMS41NywzLjg0Mi0zLjUzMSAgYy0wLjA0NC0yLjAwMy0xLjQ3NS0zLjUyOC0zLjc5Ny0zLjUyOHMtMy44NDEsMS41MjQtMy44NDEsMy41MjhjMCwxLjk2MSwxLjQ3NCwzLjUzMSwzLjc1MywzLjUzMUgyMi45NTl6IE0zNCw2NCAgQzE3LjQzMiw2NCw0LDUwLjU2OCw0LDM0QzQsMTcuNDMxLDE3LjQzMiw0LDM0LDRzMzAsMTMuNDMxLDMwLDMwQzY0LDUwLjU2OCw1MC41NjgsNjQsMzQsNjR6IE0yNi4zNTQsNDguMTM3VjI3LjcxaC02Ljc4OXYyMC40MjcgIEgyNi4zNTR6IiBzdHlsZT0iZmlsbC1ydWxlOmV2ZW5vZGQ7Y2xpcC1ydWxlOmV2ZW5vZGQ7ZmlsbDojMDEwMTAxOyIvPjwvc3ZnPg==">

                                                    </div>
                                                </div>
                                                <div class="flex pt-2  text-sm text-gray-500">
                                                    <div class="flex-1 inline-flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path
                                                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                                            </path>
                                                        </svg>
                                                        <p class="___class_+?380___">1.2k Member</p>
                                                    </div>
                                                    <!-- <div class="flex-1 inline-flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                                                fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                    d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <p class="___class_+?383___">14 Components</p>
                                                        </div> -->
                                                    <button
                                                        class="flex-no-shrink bg-green-400 hover:bg-green-500 px-5 ml-4 py-2 text-xs shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-green-300 hover:border-green-500 text-white rounded-full transition ease-in duration-300 uppercase focus:outline-none">Join</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="max-w-3xl w-full z-10">
                                <a href="#" class="flex flex-col">
                                    <div class="bg-white border border-white shadow-lg  rounded-3xl p-4 m-4">
                                        <div class="flex-none sm:flex">
                                            <div
                                                class="relative h-32 w-32 flex justify-center items-center sm:mb-0 mb-3">
                                                <img src="{{ asset('storage/img/samansayyar.jpg') }}"
                                                    alt="SamanSayyar" class=" w-32 h-32 object-cover  rounded-2xl">
                                                <!-- <a href="#"
                                                    class="absolute -right-2 bottom-2   -ml-3  text-white p-1 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                        class="h-4 w-4">
                                                        <path
                                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                        </path>
                                                    </svg>
                                                </a> -->
                                            </div>
                                            <div class="flex-auto sm:ml-5 justify-evenly">
                                                <div class="flex items-center justify-between sm:mt-2">
                                                    <div class="flex items-center">
                                                        <div class="flex flex-col">
                                                            <div
                                                                class="w-full flex-none text-lg text-gray-800 font-bold leading-none">
                                                                saman sayyar</div>
                                                            <div class="flex-auto text-sm text-gray-500 my-1">
                                                                <span class="mr-3 ">
                                                                    <!-- Programmer</span><span class="mr-3 border-r border-gray-200  max-h-0"></span><span></span> UI/UX Designer -->
                                                                    i am saman sayyar my job is: Programming and site
                                                                    designer...
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-row items-center">
                                                    <div class="flex">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" class="h-5 w-5 text-yellow-500">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" class="h-5 w-5 text-yellow-500">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor"
                                                            class="h-5 w-5 text-yellow-500">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor"
                                                            class="h-5 w-5 text-yellow-500">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor"
                                                            class="h-5 w-5 text-yellow-500">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-1 inline-flex  hidden items-center">
                                                        <img class="w-5 h-5"
                                                            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDY0IDY0IiBoZWlnaHQ9IjY0cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA2NCA2NCIgd2lkdGg9IjY0cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxwYXRoIGQ9Ik0zMiw3LjE3NEMxOC4zMTEsNy4xNzQsNy4xNzQsMTguMzExLDcuMTc0LDMyYzAsMTMuNjg5LDExLjEzNywyNC44MjYsMjQuODI2LDI0LjgyNmMxMy42ODksMCwyNC44MjYtMTEuMTM3LDI0LjgyNi0yNC44MjYgIEM1Ni44MjYsMTguMzExLDQ1LjY4OSw3LjE3NCwzMiw3LjE3NHogTTM4LjE3NCwzMi44NzRoLTQuMDM5YzAsNi40NTMsMCwxNC4zOTgsMCwxNC4zOThoLTUuOTg1YzAsMCwwLTcuODY4LDAtMTQuMzk4aC0yLjg0NXYtNS4wODggIGgyLjg0NXYtMy4yOTFjMC0yLjM1NywxLjEyLTYuMDQsNi4wNC02LjA0bDQuNDMzLDAuMDE3djQuOTM5YzAsMC0yLjY5NSwwLTMuMjE5LDBjLTAuNTI0LDAtMS4yNjgsMC4yNjItMS4yNjgsMS4zODZ2Mi45OWg0LjU2ICBMMzguMTc0LDMyLjg3NHoiLz48L3N2Zz4=">
                                                        <img class="w-5 h-5"
                                                            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDU2LjY5MyA1Ni42OTMiIGhlaWdodD0iNTYuNjkzcHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA1Ni42OTMgNTYuNjkzIiB3aWR0aD0iNTYuNjkzcHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxwYXRoIGQ9Ik0yOC4zNDgsNS4xNTdjLTEzLjYsMC0yNC42MjUsMTEuMDI3LTI0LjYyNSwyNC42MjVjMCwxMy42LDExLjAyNSwyNC42MjMsMjQuNjI1LDI0LjYyM2MxMy42LDAsMjQuNjIzLTExLjAyMywyNC42MjMtMjQuNjIzICBDNTIuOTcxLDE2LjE4NCw0MS45NDcsNS4xNTcsMjguMzQ4LDUuMTU3eiBNNDAuNzUyLDI0LjgxN2MwLjAxMywwLjI2NiwwLjAxOCwwLjUzMywwLjAxOCwwLjgwM2MwLDguMjAxLTYuMjQyLDE3LjY1Ni0xNy42NTYsMTcuNjU2ICBjLTMuNTA0LDAtNi43NjctMS4wMjctOS41MTMtMi43ODdjMC40ODYsMC4wNTcsMC45NzksMC4wODYsMS40OCwwLjA4NmMyLjkwOCwwLDUuNTg0LTAuOTkyLDcuNzA3LTIuNjU2ICBjLTIuNzE1LTAuMDUxLTUuMDA2LTEuODQ2LTUuNzk2LTQuMzExYzAuMzc4LDAuMDc0LDAuNzY3LDAuMTExLDEuMTY3LDAuMTExYzAuNTY2LDAsMS4xMTQtMC4wNzQsMS42MzUtMC4yMTcgIGMtMi44NC0wLjU3LTQuOTc5LTMuMDgtNC45NzktNi4wODRjMC0wLjAyNywwLTAuMDUzLDAuMDAxLTAuMDhjMC44MzYsMC40NjUsMS43OTMsMC43NDQsMi44MTEsMC43NzcgIGMtMS42NjYtMS4xMTUtMi43NjEtMy4wMTItMi43NjEtNS4xNjZjMC0xLjEzNywwLjMwNi0yLjIwNCwwLjg0LTMuMTJjMy4wNjEsMy43NTQsNy42MzQsNi4yMjUsMTIuNzkyLDYuNDgzICBjLTAuMTA2LTAuNDUzLTAuMTYxLTAuOTI4LTAuMTYxLTEuNDE0YzAtMy40MjYsMi43NzgtNi4yMDUsNi4yMDYtNi4yMDVjMS43ODUsMCwzLjM5NywwLjc1NCw0LjUyOSwxLjk1OSAgYzEuNDE0LTAuMjc3LDIuNzQyLTAuNzk1LDMuOTQxLTEuNTA2Yy0wLjQ2NSwxLjQ1LTEuNDQ4LDIuNjY2LTIuNzMsMy40MzNjMS4yNTctMC4xNSwyLjQ1My0wLjQ4NCwzLjU2NS0wLjk3NyAgQzQzLjAxOCwyMi44NDksNDEuOTY1LDIzLjk0Miw0MC43NTIsMjQuODE3eiIvPjwvc3ZnPg==">
                                                        <img class="w-5 h-5"
                                                            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGhlaWdodD0iNjdweCIgaWQ9IkxheWVyXzEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDY3IDY3OyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgNjcgNjciIHdpZHRoPSI2N3B4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48cGF0aCBkPSJNNTAuODM3LDQ4LjEzN1YzNi40MjVjMC02LjI3NS0zLjM1LTkuMTk1LTcuODE2LTkuMTk1ICBjLTMuNjA0LDAtNS4yMTksMS45ODMtNi4xMTksMy4zNzRWMjcuNzFoLTYuNzljMC4wOSwxLjkxNywwLDIwLjQyNywwLDIwLjQyN2g2Ljc5VjM2LjcyOWMwLTAuNjA5LDAuMDQ0LTEuMjE5LDAuMjI0LTEuNjU1ICBjMC40OS0xLjIyLDEuNjA3LTIuNDgzLDMuNDgyLTIuNDgzYzIuNDU4LDAsMy40NCwxLjg3MywzLjQ0LDQuNjE4djEwLjkyOUg1MC44Mzd6IE0yMi45NTksMjQuOTIyYzIuMzY3LDAsMy44NDItMS41NywzLjg0Mi0zLjUzMSAgYy0wLjA0NC0yLjAwMy0xLjQ3NS0zLjUyOC0zLjc5Ny0zLjUyOHMtMy44NDEsMS41MjQtMy44NDEsMy41MjhjMCwxLjk2MSwxLjQ3NCwzLjUzMSwzLjc1MywzLjUzMUgyMi45NTl6IE0zNCw2NCAgQzE3LjQzMiw2NCw0LDUwLjU2OCw0LDM0QzQsMTcuNDMxLDE3LjQzMiw0LDM0LDRzMzAsMTMuNDMxLDMwLDMwQzY0LDUwLjU2OCw1MC41NjgsNjQsMzQsNjR6IE0yNi4zNTQsNDguMTM3VjI3LjcxaC02Ljc4OXYyMC40MjcgIEgyNi4zNTR6IiBzdHlsZT0iZmlsbC1ydWxlOmV2ZW5vZGQ7Y2xpcC1ydWxlOmV2ZW5vZGQ7ZmlsbDojMDEwMTAxOyIvPjwvc3ZnPg==">

                                                    </div>
                                                </div>
                                                <div class="flex pt-2  text-sm text-gray-500">
                                                    <div class="flex-1 inline-flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path
                                                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                                            </path>
                                                        </svg>
                                                        <p class="___class_+?415___">1.2k Member</p>
                                                    </div>
                                                    <!-- <div class="flex-1 inline-flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                                                fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                    d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <p class="___class_+?418___">14 Components</p>
                                                        </div> -->
                                                    <button
                                                        class="flex-no-shrink bg-green-400 hover:bg-green-500 px-5 ml-4 py-2 text-xs shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-green-300 hover:border-green-500 text-white rounded-full transition ease-in duration-300 uppercase focus:outline-none">Join</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="max-w-3xl w-full z-10">
                                <a href="#" class="flex flex-col">
                                    <div class="bg-white border border-white shadow-lg  rounded-3xl p-4 m-4">
                                        <div class="flex-none sm:flex">
                                            <div
                                                class="relative h-32 w-32 flex justify-center items-center sm:mb-0 mb-3">
                                                <img src="{{ asset('storage/img/samansayyar.jpg') }}"
                                                    alt="SamanSayyar" class=" w-32 h-32 object-cover  rounded-2xl">
                                                <!-- <a href="#"
                                                    class="absolute -right-2 bottom-2   -ml-3  text-white p-1 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                        class="h-4 w-4">
                                                        <path
                                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                        </path>
                                                    </svg>
                                                </a> -->
                                            </div>
                                            <div class="flex-auto sm:ml-5 justify-evenly">
                                                <div class="flex items-center justify-between sm:mt-2">
                                                    <div class="flex items-center">
                                                        <div class="flex flex-col">
                                                            <div
                                                                class="w-full flex-none text-lg text-gray-800 font-bold leading-none">
                                                                saman sayyar</div>
                                                            <div class="flex-auto text-sm text-gray-500 my-1">
                                                                <span class="mr-3 ">i am saman sayyar my job
                                                                    is:
                                                                    Programming and site designer...
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-row items-center">
                                                    <div class="flex">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" class="h-5 w-5 text-yellow-500">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" class="h-5 w-5 text-yellow-500">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor"
                                                            class="h-5 w-5 text-yellow-500">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor"
                                                            class="h-5 w-5 text-yellow-500">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor"
                                                            class="h-5 w-5 text-yellow-500">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-1 inline-flex  hidden items-center">
                                                        <img class="w-5 h-5"
                                                            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDY0IDY0IiBoZWlnaHQ9IjY0cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA2NCA2NCIgd2lkdGg9IjY0cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxwYXRoIGQ9Ik0zMiw3LjE3NEMxOC4zMTEsNy4xNzQsNy4xNzQsMTguMzExLDcuMTc0LDMyYzAsMTMuNjg5LDExLjEzNywyNC44MjYsMjQuODI2LDI0LjgyNmMxMy42ODksMCwyNC44MjYtMTEuMTM3LDI0LjgyNi0yNC44MjYgIEM1Ni44MjYsMTguMzExLDQ1LjY4OSw3LjE3NCwzMiw3LjE3NHogTTM4LjE3NCwzMi44NzRoLTQuMDM5YzAsNi40NTMsMCwxNC4zOTgsMCwxNC4zOThoLTUuOTg1YzAsMCwwLTcuODY4LDAtMTQuMzk4aC0yLjg0NXYtNS4wODggIGgyLjg0NXYtMy4yOTFjMC0yLjM1NywxLjEyLTYuMDQsNi4wNC02LjA0bDQuNDMzLDAuMDE3djQuOTM5YzAsMC0yLjY5NSwwLTMuMjE5LDBjLTAuNTI0LDAtMS4yNjgsMC4yNjItMS4yNjgsMS4zODZ2Mi45OWg0LjU2ICBMMzguMTc0LDMyLjg3NHoiLz48L3N2Zz4=">
                                                        <img class="w-5 h-5"
                                                            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDU2LjY5MyA1Ni42OTMiIGhlaWdodD0iNTYuNjkzcHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA1Ni42OTMgNTYuNjkzIiB3aWR0aD0iNTYuNjkzcHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxwYXRoIGQ9Ik0yOC4zNDgsNS4xNTdjLTEzLjYsMC0yNC42MjUsMTEuMDI3LTI0LjYyNSwyNC42MjVjMCwxMy42LDExLjAyNSwyNC42MjMsMjQuNjI1LDI0LjYyM2MxMy42LDAsMjQuNjIzLTExLjAyMywyNC42MjMtMjQuNjIzICBDNTIuOTcxLDE2LjE4NCw0MS45NDcsNS4xNTcsMjguMzQ4LDUuMTU3eiBNNDAuNzUyLDI0LjgxN2MwLjAxMywwLjI2NiwwLjAxOCwwLjUzMywwLjAxOCwwLjgwM2MwLDguMjAxLTYuMjQyLDE3LjY1Ni0xNy42NTYsMTcuNjU2ICBjLTMuNTA0LDAtNi43NjctMS4wMjctOS41MTMtMi43ODdjMC40ODYsMC4wNTcsMC45NzksMC4wODYsMS40OCwwLjA4NmMyLjkwOCwwLDUuNTg0LTAuOTkyLDcuNzA3LTIuNjU2ICBjLTIuNzE1LTAuMDUxLTUuMDA2LTEuODQ2LTUuNzk2LTQuMzExYzAuMzc4LDAuMDc0LDAuNzY3LDAuMTExLDEuMTY3LDAuMTExYzAuNTY2LDAsMS4xMTQtMC4wNzQsMS42MzUtMC4yMTcgIGMtMi44NC0wLjU3LTQuOTc5LTMuMDgtNC45NzktNi4wODRjMC0wLjAyNywwLTAuMDUzLDAuMDAxLTAuMDhjMC44MzYsMC40NjUsMS43OTMsMC43NDQsMi44MTEsMC43NzcgIGMtMS42NjYtMS4xMTUtMi43NjEtMy4wMTItMi43NjEtNS4xNjZjMC0xLjEzNywwLjMwNi0yLjIwNCwwLjg0LTMuMTJjMy4wNjEsMy43NTQsNy42MzQsNi4yMjUsMTIuNzkyLDYuNDgzICBjLTAuMTA2LTAuNDUzLTAuMTYxLTAuOTI4LTAuMTYxLTEuNDE0YzAtMy40MjYsMi43NzgtNi4yMDUsNi4yMDYtNi4yMDVjMS43ODUsMCwzLjM5NywwLjc1NCw0LjUyOSwxLjk1OSAgYzEuNDE0LTAuMjc3LDIuNzQyLTAuNzk1LDMuOTQxLTEuNTA2Yy0wLjQ2NSwxLjQ1LTEuNDQ4LDIuNjY2LTIuNzMsMy40MzNjMS4yNTctMC4xNSwyLjQ1My0wLjQ4NCwzLjU2NS0wLjk3NyAgQzQzLjAxOCwyMi44NDksNDEuOTY1LDIzLjk0Miw0MC43NTIsMjQuODE3eiIvPjwvc3ZnPg==">
                                                        <img class="w-5 h-5"
                                                            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGhlaWdodD0iNjdweCIgaWQ9IkxheWVyXzEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDY3IDY3OyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgNjcgNjciIHdpZHRoPSI2N3B4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48cGF0aCBkPSJNNTAuODM3LDQ4LjEzN1YzNi40MjVjMC02LjI3NS0zLjM1LTkuMTk1LTcuODE2LTkuMTk1ICBjLTMuNjA0LDAtNS4yMTksMS45ODMtNi4xMTksMy4zNzRWMjcuNzFoLTYuNzljMC4wOSwxLjkxNywwLDIwLjQyNywwLDIwLjQyN2g2Ljc5VjM2LjcyOWMwLTAuNjA5LDAuMDQ0LTEuMjE5LDAuMjI0LTEuNjU1ICBjMC40OS0xLjIyLDEuNjA3LTIuNDgzLDMuNDgyLTIuNDgzYzIuNDU4LDAsMy40NCwxLjg3MywzLjQ0LDQuNjE4djEwLjkyOUg1MC44Mzd6IE0yMi45NTksMjQuOTIyYzIuMzY3LDAsMy44NDItMS41NywzLjg0Mi0zLjUzMSAgYy0wLjA0NC0yLjAwMy0xLjQ3NS0zLjUyOC0zLjc5Ny0zLjUyOHMtMy44NDEsMS41MjQtMy44NDEsMy41MjhjMCwxLjk2MSwxLjQ3NCwzLjUzMSwzLjc1MywzLjUzMUgyMi45NTl6IE0zNCw2NCAgQzE3LjQzMiw2NCw0LDUwLjU2OCw0LDM0QzQsMTcuNDMxLDE3LjQzMiw0LDM0LDRzMzAsMTMuNDMxLDMwLDMwQzY0LDUwLjU2OCw1MC41NjgsNjQsMzQsNjR6IE0yNi4zNTQsNDguMTM3VjI3LjcxaC02Ljc4OXYyMC40MjcgIEgyNi4zNTR6IiBzdHlsZT0iZmlsbC1ydWxlOmV2ZW5vZGQ7Y2xpcC1ydWxlOmV2ZW5vZGQ7ZmlsbDojMDEwMTAxOyIvPjwvc3ZnPg==">

                                                    </div>
                                                </div>
                                                <div class="flex pt-2  text-sm text-gray-500">
                                                    <div class="flex-1 inline-flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path
                                                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                                            </path>
                                                        </svg>
                                                        <p class="___class_+?449___">1.2k Member</p>
                                                    </div>
                                                    <!-- <div class="flex-1 inline-flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                                                fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                    d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <p class="___class_+?452___">14 Components</p>
                                                        </div> -->
                                                    <button
                                                        class="flex-no-shrink bg-green-400 hover:bg-green-500 px-5 ml-4 py-2 text-xs shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-green-300 hover:border-green-500 text-white rounded-full transition ease-in duration-300 uppercase focus:outline-none">Join</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="___class_+?454___" x-show="tab === 'profiles'">
                        <div class="my-4 md:px-4 px-2">
                            <div class="max-w-3xl w-full z-10">
                                <a href="#" class="flex flex-col">
                                    <div class="bg-white border border-white shadow-lg  rounded-3xl p-4 m-4">
                                        <div class="flex-none sm:flex">
                                            <div
                                                class="relative h-32 w-32 flex justify-center items-center sm:mb-0 mb-3">
                                                <img src="{{ asset('storage/img/samansayyar.jpg') }}"
                                                    alt="SamanSayyar" class=" w-32 h-32 object-cover  rounded-2xl">
                                                <!-- <a href="#"
                                                    class="absolute -right-2 bottom-2   -ml-3  text-white p-1 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                        class="h-4 w-4">
                                                        <path
                                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                        </path>
                                                    </svg>
                                                </a> -->
                                            </div>
                                            <div class="flex-auto sm:ml-5 justify-evenly">
                                                <div class="flex items-center justify-between sm:mt-2">
                                                    <div class="flex items-center">
                                                        <div class="flex flex-col">
                                                            <div
                                                                class="w-full flex-none text-lg text-gray-800 font-bold leading-none">
                                                                saman sayyar</div>
                                                            <div class="flex-auto text-sm text-gray-500 my-1">
                                                                <span class="mr-3 ">i am saman sayyar my job
                                                                    is:
                                                                    Programming and site designer...
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-row items-center">
                                                    <div class="flex">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" class="h-5 w-5 text-yellow-500">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" class="h-5 w-5 text-yellow-500">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor"
                                                            class="h-5 w-5 text-yellow-500">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor"
                                                            class="h-5 w-5 text-yellow-500">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor"
                                                            class="h-5 w-5 text-yellow-500">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-1 inline-flex  hidden items-center">
                                                        <img class="w-5 h-5"
                                                            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDY0IDY0IiBoZWlnaHQ9IjY0cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA2NCA2NCIgd2lkdGg9IjY0cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxwYXRoIGQ9Ik0zMiw3LjE3NEMxOC4zMTEsNy4xNzQsNy4xNzQsMTguMzExLDcuMTc0LDMyYzAsMTMuNjg5LDExLjEzNywyNC44MjYsMjQuODI2LDI0LjgyNmMxMy42ODksMCwyNC44MjYtMTEuMTM3LDI0LjgyNi0yNC44MjYgIEM1Ni44MjYsMTguMzExLDQ1LjY4OSw3LjE3NCwzMiw3LjE3NHogTTM4LjE3NCwzMi44NzRoLTQuMDM5YzAsNi40NTMsMCwxNC4zOTgsMCwxNC4zOThoLTUuOTg1YzAsMCwwLTcuODY4LDAtMTQuMzk4aC0yLjg0NXYtNS4wODggIGgyLjg0NXYtMy4yOTFjMC0yLjM1NywxLjEyLTYuMDQsNi4wNC02LjA0bDQuNDMzLDAuMDE3djQuOTM5YzAsMC0yLjY5NSwwLTMuMjE5LDBjLTAuNTI0LDAtMS4yNjgsMC4yNjItMS4yNjgsMS4zODZ2Mi45OWg0LjU2ICBMMzguMTc0LDMyLjg3NHoiLz48L3N2Zz4=">
                                                        <img class="w-5 h-5"
                                                            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDU2LjY5MyA1Ni42OTMiIGhlaWdodD0iNTYuNjkzcHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA1Ni42OTMgNTYuNjkzIiB3aWR0aD0iNTYuNjkzcHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxwYXRoIGQ9Ik0yOC4zNDgsNS4xNTdjLTEzLjYsMC0yNC42MjUsMTEuMDI3LTI0LjYyNSwyNC42MjVjMCwxMy42LDExLjAyNSwyNC42MjMsMjQuNjI1LDI0LjYyM2MxMy42LDAsMjQuNjIzLTExLjAyMywyNC42MjMtMjQuNjIzICBDNTIuOTcxLDE2LjE4NCw0MS45NDcsNS4xNTcsMjguMzQ4LDUuMTU3eiBNNDAuNzUyLDI0LjgxN2MwLjAxMywwLjI2NiwwLjAxOCwwLjUzMywwLjAxOCwwLjgwM2MwLDguMjAxLTYuMjQyLDE3LjY1Ni0xNy42NTYsMTcuNjU2ICBjLTMuNTA0LDAtNi43NjctMS4wMjctOS41MTMtMi43ODdjMC40ODYsMC4wNTcsMC45NzksMC4wODYsMS40OCwwLjA4NmMyLjkwOCwwLDUuNTg0LTAuOTkyLDcuNzA3LTIuNjU2ICBjLTIuNzE1LTAuMDUxLTUuMDA2LTEuODQ2LTUuNzk2LTQuMzExYzAuMzc4LDAuMDc0LDAuNzY3LDAuMTExLDEuMTY3LDAuMTExYzAuNTY2LDAsMS4xMTQtMC4wNzQsMS42MzUtMC4yMTcgIGMtMi44NC0wLjU3LTQuOTc5LTMuMDgtNC45NzktNi4wODRjMC0wLjAyNywwLTAuMDUzLDAuMDAxLTAuMDhjMC44MzYsMC40NjUsMS43OTMsMC43NDQsMi44MTEsMC43NzcgIGMtMS42NjYtMS4xMTUtMi43NjEtMy4wMTItMi43NjEtNS4xNjZjMC0xLjEzNywwLjMwNi0yLjIwNCwwLjg0LTMuMTJjMy4wNjEsMy43NTQsNy42MzQsNi4yMjUsMTIuNzkyLDYuNDgzICBjLTAuMTA2LTAuNDUzLTAuMTYxLTAuOTI4LTAuMTYxLTEuNDE0YzAtMy40MjYsMi43NzgtNi4yMDUsNi4yMDYtNi4yMDVjMS43ODUsMCwzLjM5NywwLjc1NCw0LjUyOSwxLjk1OSAgYzEuNDE0LTAuMjc3LDIuNzQyLTAuNzk1LDMuOTQxLTEuNTA2Yy0wLjQ2NSwxLjQ1LTEuNDQ4LDIuNjY2LTIuNzMsMy40MzNjMS4yNTctMC4xNSwyLjQ1My0wLjQ4NCwzLjU2NS0wLjk3NyAgQzQzLjAxOCwyMi44NDksNDEuOTY1LDIzLjk0Miw0MC43NTIsMjQuODE3eiIvPjwvc3ZnPg==">
                                                        <img class="w-5 h-5"
                                                            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGhlaWdodD0iNjdweCIgaWQ9IkxheWVyXzEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDY3IDY3OyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgNjcgNjciIHdpZHRoPSI2N3B4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48cGF0aCBkPSJNNTAuODM3LDQ4LjEzN1YzNi40MjVjMC02LjI3NS0zLjM1LTkuMTk1LTcuODE2LTkuMTk1ICBjLTMuNjA0LDAtNS4yMTksMS45ODMtNi4xMTksMy4zNzRWMjcuNzFoLTYuNzljMC4wOSwxLjkxNywwLDIwLjQyNywwLDIwLjQyN2g2Ljc5VjM2LjcyOWMwLTAuNjA5LDAuMDQ0LTEuMjE5LDAuMjI0LTEuNjU1ICBjMC40OS0xLjIyLDEuNjA3LTIuNDgzLDMuNDgyLTIuNDgzYzIuNDU4LDAsMy40NCwxLjg3MywzLjQ0LDQuNjE4djEwLjkyOUg1MC44Mzd6IE0yMi45NTksMjQuOTIyYzIuMzY3LDAsMy44NDItMS41NywzLjg0Mi0zLjUzMSAgYy0wLjA0NC0yLjAwMy0xLjQ3NS0zLjUyOC0zLjc5Ny0zLjUyOHMtMy44NDEsMS41MjQtMy44NDEsMy41MjhjMCwxLjk2MSwxLjQ3NCwzLjUzMSwzLjc1MywzLjUzMUgyMi45NTl6IE0zNCw2NCAgQzE3LjQzMiw2NCw0LDUwLjU2OCw0LDM0QzQsMTcuNDMxLDE3LjQzMiw0LDM0LDRzMzAsMTMuNDMxLDMwLDMwQzY0LDUwLjU2OCw1MC41NjgsNjQsMzQsNjR6IE0yNi4zNTQsNDguMTM3VjI3LjcxaC02Ljc4OXYyMC40MjcgIEgyNi4zNTR6IiBzdHlsZT0iZmlsbC1ydWxlOmV2ZW5vZGQ7Y2xpcC1ydWxlOmV2ZW5vZGQ7ZmlsbDojMDEwMTAxOyIvPjwvc3ZnPg==">

                                                    </div>
                                                </div>
                                                <div class="flex pt-2  text-sm text-gray-500">
                                                    <div class="flex-1 inline-flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path
                                                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                                            </path>
                                                        </svg>
                                                        <p class="___class_+?485___">1.2k Followers</p>
                                                    </div>
                                                    <!-- <div class="flex-1 inline-flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                                                fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                    d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <p class="___class_+?488___">14 Components</p>
                                                        </div> -->
                                                    <button
                                                        class="flex-no-shrink bg-green-400 hover:bg-green-500 px-5 ml-4 py-2 text-xs shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-green-300 hover:border-green-500 text-white rounded-full transition ease-in duration-300 uppercase focus:outline-none">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="max-w-3xl w-full z-10">
                                <a href="#" class="flex flex-col">
                                    <div class="bg-white border border-white shadow-lg  rounded-3xl p-4 m-4">
                                        <div class="flex-none sm:flex">
                                            <div
                                                class="relative h-32 w-32 flex justify-center items-center sm:mb-0 mb-3">
                                                <img src="{{ asset('storage/img/samansayyar.jpg') }}"
                                                    alt="SamanSayyar" class=" w-32 h-32 object-cover  rounded-2xl">
                                                <!-- <a href="#"
                                                    class="absolute -right-2 bottom-2   -ml-3  text-white p-1 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                        class="h-4 w-4">
                                                        <path
                                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                        </path>
                                                    </svg>
                                                </a> -->
                                            </div>
                                            <div class="flex-auto sm:ml-5 justify-evenly">
                                                <div class="flex items-center justify-between sm:mt-2">
                                                    <div class="flex items-center">
                                                        <div class="flex flex-col">
                                                            <div
                                                                class="w-full flex-none text-lg text-gray-800 font-bold leading-none">
                                                                saman sayyar</div>
                                                            <div class="flex-auto text-sm text-gray-500 my-1">
                                                                <span class="mr-3 ">
                                                                    <!-- Programmer</span><span class="mr-3 border-r border-gray-200  max-h-0"></span><span></span> UI/UX Designer -->
                                                                    i am saman sayyar my job is: Programming and site
                                                                    designer...
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-row items-center">
                                                    <div class="flex">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" class="h-5 w-5 text-yellow-500">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" class="h-5 w-5 text-yellow-500">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor"
                                                            class="h-5 w-5 text-yellow-500">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor"
                                                            class="h-5 w-5 text-yellow-500">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor"
                                                            class="h-5 w-5 text-yellow-500">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-1 inline-flex  hidden items-center">
                                                        <img class="w-5 h-5"
                                                            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDY0IDY0IiBoZWlnaHQ9IjY0cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA2NCA2NCIgd2lkdGg9IjY0cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxwYXRoIGQ9Ik0zMiw3LjE3NEMxOC4zMTEsNy4xNzQsNy4xNzQsMTguMzExLDcuMTc0LDMyYzAsMTMuNjg5LDExLjEzNywyNC44MjYsMjQuODI2LDI0LjgyNmMxMy42ODksMCwyNC44MjYtMTEuMTM3LDI0LjgyNi0yNC44MjYgIEM1Ni44MjYsMTguMzExLDQ1LjY4OSw3LjE3NCwzMiw3LjE3NHogTTM4LjE3NCwzMi44NzRoLTQuMDM5YzAsNi40NTMsMCwxNC4zOTgsMCwxNC4zOThoLTUuOTg1YzAsMCwwLTcuODY4LDAtMTQuMzk4aC0yLjg0NXYtNS4wODggIGgyLjg0NXYtMy4yOTFjMC0yLjM1NywxLjEyLTYuMDQsNi4wNC02LjA0bDQuNDMzLDAuMDE3djQuOTM5YzAsMC0yLjY5NSwwLTMuMjE5LDBjLTAuNTI0LDAtMS4yNjgsMC4yNjItMS4yNjgsMS4zODZ2Mi45OWg0LjU2ICBMMzguMTc0LDMyLjg3NHoiLz48L3N2Zz4=">
                                                        <img class="w-5 h-5"
                                                            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDU2LjY5MyA1Ni42OTMiIGhlaWdodD0iNTYuNjkzcHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA1Ni42OTMgNTYuNjkzIiB3aWR0aD0iNTYuNjkzcHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxwYXRoIGQ9Ik0yOC4zNDgsNS4xNTdjLTEzLjYsMC0yNC42MjUsMTEuMDI3LTI0LjYyNSwyNC42MjVjMCwxMy42LDExLjAyNSwyNC42MjMsMjQuNjI1LDI0LjYyM2MxMy42LDAsMjQuNjIzLTExLjAyMywyNC42MjMtMjQuNjIzICBDNTIuOTcxLDE2LjE4NCw0MS45NDcsNS4xNTcsMjguMzQ4LDUuMTU3eiBNNDAuNzUyLDI0LjgxN2MwLjAxMywwLjI2NiwwLjAxOCwwLjUzMywwLjAxOCwwLjgwM2MwLDguMjAxLTYuMjQyLDE3LjY1Ni0xNy42NTYsMTcuNjU2ICBjLTMuNTA0LDAtNi43NjctMS4wMjctOS41MTMtMi43ODdjMC40ODYsMC4wNTcsMC45NzksMC4wODYsMS40OCwwLjA4NmMyLjkwOCwwLDUuNTg0LTAuOTkyLDcuNzA3LTIuNjU2ICBjLTIuNzE1LTAuMDUxLTUuMDA2LTEuODQ2LTUuNzk2LTQuMzExYzAuMzc4LDAuMDc0LDAuNzY3LDAuMTExLDEuMTY3LDAuMTExYzAuNTY2LDAsMS4xMTQtMC4wNzQsMS42MzUtMC4yMTcgIGMtMi44NC0wLjU3LTQuOTc5LTMuMDgtNC45NzktNi4wODRjMC0wLjAyNywwLTAuMDUzLDAuMDAxLTAuMDhjMC44MzYsMC40NjUsMS43OTMsMC43NDQsMi44MTEsMC43NzcgIGMtMS42NjYtMS4xMTUtMi43NjEtMy4wMTItMi43NjEtNS4xNjZjMC0xLjEzNywwLjMwNi0yLjIwNCwwLjg0LTMuMTJjMy4wNjEsMy43NTQsNy42MzQsNi4yMjUsMTIuNzkyLDYuNDgzICBjLTAuMTA2LTAuNDUzLTAuMTYxLTAuOTI4LTAuMTYxLTEuNDE0YzAtMy40MjYsMi43NzgtNi4yMDUsNi4yMDYtNi4yMDVjMS43ODUsMCwzLjM5NywwLjc1NCw0LjUyOSwxLjk1OSAgYzEuNDE0LTAuMjc3LDIuNzQyLTAuNzk1LDMuOTQxLTEuNTA2Yy0wLjQ2NSwxLjQ1LTEuNDQ4LDIuNjY2LTIuNzMsMy40MzNjMS4yNTctMC4xNSwyLjQ1My0wLjQ4NCwzLjU2NS0wLjk3NyAgQzQzLjAxOCwyMi44NDksNDEuOTY1LDIzLjk0Miw0MC43NTIsMjQuODE3eiIvPjwvc3ZnPg==">
                                                        <img class="w-5 h-5"
                                                            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGhlaWdodD0iNjdweCIgaWQ9IkxheWVyXzEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDY3IDY3OyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgNjcgNjciIHdpZHRoPSI2N3B4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48cGF0aCBkPSJNNTAuODM3LDQ4LjEzN1YzNi40MjVjMC02LjI3NS0zLjM1LTkuMTk1LTcuODE2LTkuMTk1ICBjLTMuNjA0LDAtNS4yMTksMS45ODMtNi4xMTksMy4zNzRWMjcuNzFoLTYuNzljMC4wOSwxLjkxNywwLDIwLjQyNywwLDIwLjQyN2g2Ljc5VjM2LjcyOWMwLTAuNjA5LDAuMDQ0LTEuMjE5LDAuMjI0LTEuNjU1ICBjMC40OS0xLjIyLDEuNjA3LTIuNDgzLDMuNDgyLTIuNDgzYzIuNDU4LDAsMy40NCwxLjg3MywzLjQ0LDQuNjE4djEwLjkyOUg1MC44Mzd6IE0yMi45NTksMjQuOTIyYzIuMzY3LDAsMy44NDItMS41NywzLjg0Mi0zLjUzMSAgYy0wLjA0NC0yLjAwMy0xLjQ3NS0zLjUyOC0zLjc5Ny0zLjUyOHMtMy44NDEsMS41MjQtMy44NDEsMy41MjhjMCwxLjk2MSwxLjQ3NCwzLjUzMSwzLjc1MywzLjUzMUgyMi45NTl6IE0zNCw2NCAgQzE3LjQzMiw2NCw0LDUwLjU2OCw0LDM0QzQsMTcuNDMxLDE3LjQzMiw0LDM0LDRzMzAsMTMuNDMxLDMwLDMwQzY0LDUwLjU2OCw1MC41NjgsNjQsMzQsNjR6IE0yNi4zNTQsNDguMTM3VjI3LjcxaC02Ljc4OXYyMC40MjcgIEgyNi4zNTR6IiBzdHlsZT0iZmlsbC1ydWxlOmV2ZW5vZGQ7Y2xpcC1ydWxlOmV2ZW5vZGQ7ZmlsbDojMDEwMTAxOyIvPjwvc3ZnPg==">

                                                    </div>
                                                </div>
                                                <div class="flex pt-2  text-sm text-gray-500">
                                                    <div class="flex-1 inline-flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path
                                                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                                            </path>
                                                        </svg>
                                                        <p class="___class_+?520___">1.2k Followers</p>
                                                    </div>
                                                    <!-- <div class="flex-1 inline-flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                                                fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                    d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <p class="___class_+?523___">14 Components</p>
                                                        </div> -->
                                                    <button
                                                        class="flex-no-shrink bg-green-400 hover:bg-green-500 px-5 ml-4 py-2 text-xs shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-green-300 hover:border-green-500 text-white rounded-full transition ease-in duration-300 uppercase focus:outline-none">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="max-w-3xl w-full z-10">
                                <a href="#" class="flex flex-col">
                                    <div class="bg-white border border-white shadow-lg  rounded-3xl p-4 m-4">
                                        <div class="flex-none sm:flex">
                                            <div
                                                class="relative h-32 w-32 flex justify-center items-center sm:mb-0 mb-3">
                                                <img src="{{ asset('storage/img/samansayyar.jpg') }}"
                                                    alt="SamanSayyar" class=" w-32 h-32 object-cover  rounded-2xl">
                                                <!-- <a href="#"
                                                    class="absolute -right-2 bottom-2   -ml-3  text-white p-1 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                        class="h-4 w-4">
                                                        <path
                                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                        </path>
                                                    </svg>
                                                </a> -->
                                            </div>
                                            <div class="flex-auto sm:ml-5 justify-evenly">
                                                <div class="flex items-center justify-between sm:mt-2">
                                                    <div class="flex items-center">
                                                        <div class="flex flex-col">
                                                            <div
                                                                class="w-full flex-none text-lg text-gray-800 font-bold leading-none">
                                                                saman sayyar</div>
                                                            <div class="flex-auto text-sm text-gray-500 my-1">
                                                                <span class="mr-3 ">i am saman sayyar my job
                                                                    is:
                                                                    Programming and site designer...
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-row items-center">
                                                    <div class="flex">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" class="h-5 w-5 text-yellow-500">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" class="h-5 w-5 text-yellow-500">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor"
                                                            class="h-5 w-5 text-yellow-500">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor"
                                                            class="h-5 w-5 text-yellow-500">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor"
                                                            class="h-5 w-5 text-yellow-500">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="flex-1 inline-flex  hidden items-center">
                                                        <img class="w-5 h-5"
                                                            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDY0IDY0IiBoZWlnaHQ9IjY0cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA2NCA2NCIgd2lkdGg9IjY0cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxwYXRoIGQ9Ik0zMiw3LjE3NEMxOC4zMTEsNy4xNzQsNy4xNzQsMTguMzExLDcuMTc0LDMyYzAsMTMuNjg5LDExLjEzNywyNC44MjYsMjQuODI2LDI0LjgyNmMxMy42ODksMCwyNC44MjYtMTEuMTM3LDI0LjgyNi0yNC44MjYgIEM1Ni44MjYsMTguMzExLDQ1LjY4OSw3LjE3NCwzMiw3LjE3NHogTTM4LjE3NCwzMi44NzRoLTQuMDM5YzAsNi40NTMsMCwxNC4zOTgsMCwxNC4zOThoLTUuOTg1YzAsMCwwLTcuODY4LDAtMTQuMzk4aC0yLjg0NXYtNS4wODggIGgyLjg0NXYtMy4yOTFjMC0yLjM1NywxLjEyLTYuMDQsNi4wNC02LjA0bDQuNDMzLDAuMDE3djQuOTM5YzAsMC0yLjY5NSwwLTMuMjE5LDBjLTAuNTI0LDAtMS4yNjgsMC4yNjItMS4yNjgsMS4zODZ2Mi45OWg0LjU2ICBMMzguMTc0LDMyLjg3NHoiLz48L3N2Zz4=">
                                                        <img class="w-5 h-5"
                                                            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDU2LjY5MyA1Ni42OTMiIGhlaWdodD0iNTYuNjkzcHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA1Ni42OTMgNTYuNjkzIiB3aWR0aD0iNTYuNjkzcHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxwYXRoIGQ9Ik0yOC4zNDgsNS4xNTdjLTEzLjYsMC0yNC42MjUsMTEuMDI3LTI0LjYyNSwyNC42MjVjMCwxMy42LDExLjAyNSwyNC42MjMsMjQuNjI1LDI0LjYyM2MxMy42LDAsMjQuNjIzLTExLjAyMywyNC42MjMtMjQuNjIzICBDNTIuOTcxLDE2LjE4NCw0MS45NDcsNS4xNTcsMjguMzQ4LDUuMTU3eiBNNDAuNzUyLDI0LjgxN2MwLjAxMywwLjI2NiwwLjAxOCwwLjUzMywwLjAxOCwwLjgwM2MwLDguMjAxLTYuMjQyLDE3LjY1Ni0xNy42NTYsMTcuNjU2ICBjLTMuNTA0LDAtNi43NjctMS4wMjctOS41MTMtMi43ODdjMC40ODYsMC4wNTcsMC45NzksMC4wODYsMS40OCwwLjA4NmMyLjkwOCwwLDUuNTg0LTAuOTkyLDcuNzA3LTIuNjU2ICBjLTIuNzE1LTAuMDUxLTUuMDA2LTEuODQ2LTUuNzk2LTQuMzExYzAuMzc4LDAuMDc0LDAuNzY3LDAuMTExLDEuMTY3LDAuMTExYzAuNTY2LDAsMS4xMTQtMC4wNzQsMS42MzUtMC4yMTcgIGMtMi44NC0wLjU3LTQuOTc5LTMuMDgtNC45NzktNi4wODRjMC0wLjAyNywwLTAuMDUzLDAuMDAxLTAuMDhjMC44MzYsMC40NjUsMS43OTMsMC43NDQsMi44MTEsMC43NzcgIGMtMS42NjYtMS4xMTUtMi43NjEtMy4wMTItMi43NjEtNS4xNjZjMC0xLjEzNywwLjMwNi0yLjIwNCwwLjg0LTMuMTJjMy4wNjEsMy43NTQsNy42MzQsNi4yMjUsMTIuNzkyLDYuNDgzICBjLTAuMTA2LTAuNDUzLTAuMTYxLTAuOTI4LTAuMTYxLTEuNDE0YzAtMy40MjYsMi43NzgtNi4yMDUsNi4yMDYtNi4yMDVjMS43ODUsMCwzLjM5NywwLjc1NCw0LjUyOSwxLjk1OSAgYzEuNDE0LTAuMjc3LDIuNzQyLTAuNzk1LDMuOTQxLTEuNTA2Yy0wLjQ2NSwxLjQ1LTEuNDQ4LDIuNjY2LTIuNzMsMy40MzNjMS4yNTctMC4xNSwyLjQ1My0wLjQ4NCwzLjU2NS0wLjk3NyAgQzQzLjAxOCwyMi44NDksNDEuOTY1LDIzLjk0Miw0MC43NTIsMjQuODE3eiIvPjwvc3ZnPg==">
                                                        <img class="w-5 h-5"
                                                            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGhlaWdodD0iNjdweCIgaWQ9IkxheWVyXzEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDY3IDY3OyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgNjcgNjciIHdpZHRoPSI2N3B4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48cGF0aCBkPSJNNTAuODM3LDQ4LjEzN1YzNi40MjVjMC02LjI3NS0zLjM1LTkuMTk1LTcuODE2LTkuMTk1ICBjLTMuNjA0LDAtNS4yMTksMS45ODMtNi4xMTksMy4zNzRWMjcuNzFoLTYuNzljMC4wOSwxLjkxNywwLDIwLjQyNywwLDIwLjQyN2g2Ljc5VjM2LjcyOWMwLTAuNjA5LDAuMDQ0LTEuMjE5LDAuMjI0LTEuNjU1ICBjMC40OS0xLjIyLDEuNjA3LTIuNDgzLDMuNDgyLTIuNDgzYzIuNDU4LDAsMy40NCwxLjg3MywzLjQ0LDQuNjE4djEwLjkyOUg1MC44Mzd6IE0yMi45NTksMjQuOTIyYzIuMzY3LDAsMy44NDItMS41NywzLjg0Mi0zLjUzMSAgYy0wLjA0NC0yLjAwMy0xLjQ3NS0zLjUyOC0zLjc5Ny0zLjUyOHMtMy44NDEsMS41MjQtMy44NDEsMy41MjhjMCwxLjk2MSwxLjQ3NCwzLjUzMSwzLjc1MywzLjUzMUgyMi45NTl6IE0zNCw2NCAgQzE3LjQzMiw2NCw0LDUwLjU2OCw0LDM0QzQsMTcuNDMxLDE3LjQzMiw0LDM0LDRzMzAsMTMuNDMxLDMwLDMwQzY0LDUwLjU2OCw1MC41NjgsNjQsMzQsNjR6IE0yNi4zNTQsNDguMTM3VjI3LjcxaC02Ljc4OXYyMC40MjcgIEgyNi4zNTR6IiBzdHlsZT0iZmlsbC1ydWxlOmV2ZW5vZGQ7Y2xpcC1ydWxlOmV2ZW5vZGQ7ZmlsbDojMDEwMTAxOyIvPjwvc3ZnPg==">

                                                    </div>
                                                </div>
                                                <div class="flex pt-2  text-sm text-gray-500">
                                                    <div class="flex-1 inline-flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path
                                                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                                            </path>
                                                        </svg>
                                                        <p class="___class_+?554___">1.2k Followers</p>
                                                    </div>
                                                    <!-- <div class="flex-1 inline-flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                                                fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                    d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <p class="___class_+?557___">14 Components</p>
                                                        </div> -->
                                                    <button
                                                        class="flex-no-shrink bg-green-400 hover:bg-green-500 px-5 ml-4 py-2 text-xs shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-green-300 hover:border-green-500 text-white rounded-full transition ease-in duration-300 uppercase focus:outline-none">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="___class_+?559___" x-show="tab === 'arshive'">
                        arshive

                    </div>
                </div>
            </div>
            <div :class="toggleCategory ? 'md:md:col-span-3' : 'md:md:col-span-1 hidden'"
                class="md:col-span-3 flex flex-col justify-start md:mt-14 space-y-3" x-transition.duration.250ms
                x-show="toggleCategory">
                <div class="mb-2 flex flex-row items-center justify-between space-x-2">
                    <h3 class="mx-1 font-bold text-left text-black text-lg capitalize">category</h3>
                    <div @click="toggleCategory = !toggleCategory" class="cursor-pointer">
                        <svg class="w-7 h-7 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </div>
                </div>
                <a href="#" class="w-full">
                    <div class="w-full bg-cover bg-center h-24 rounded-lg shadow-lg"
                        style="background-image: url('{{ asset('storage/img/news.jpg') }}');">
                        <div
                            class="flex items-center capitalize justify-center h-full w-full rounded-lg shadow-lg bg-gray-600 bg-opacity-70 hover:bg-opacity-75 transition-all duration-200">
                            <p class="text-white text-lg font-bold text-center">
                                news
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#" class="w-full">
                    <div class="w-full bg-cover bg-center h-24 rounded-lg shadow-lg"
                        style="background-image: url('{{ asset('storage/img/music2.jpg') }}');">
                        <div
                            class="flex items-center capitalize justify-center h-full w-full rounded-lg shadow-lg bg-opacity-70 hover:bg-opacity-75 transition-all duration-200">
                            <p class="text-white text-lg font-bold text-center">
                                music
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#" class="w-full">
                    <div class="w-full bg-cover bg-center h-24 rounded-lg shadow-lg"
                        style="background-image: url('{{ asset('storage/img/fashion.jpg') }}');">
                        <div
                            class="flex items-center capitalize justify-center h-full w-full rounded-lg shadow-lg bg-indigo-600 bg-opacity-70 hover:bg-opacity-75 transition-all duration-200">
                            <p class="text-white text-lg font-bold text-center">
                                fashion
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#" class="w-full">
                    <div class="w-full bg-cover bg-center h-24 rounded-lg shadow-lg"
                        style="background-image: url('{{ asset('storage/img/politics.jpg') }}');">
                        <div
                            class="flex items-center capitalize justify-center h-full w-full rounded-lg shadow-lg bg-indigo-600 bg-opacity-70 hover:bg-opacity-75 transition-all duration-200">
                            <p class="text-white text-lg font-bold text-center">
                                politics
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @livewire('show-feed')
    </div>
</x-guest-layout>
