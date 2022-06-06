<x-guest-layout>
    @section('title')
    Profile {{$name}}
    @endsection

    <div class="bg-gray-100 relative">
        <div class="md:absolute inset-4 flex space-y-4 flex-col">
            <button
                class="focus:outline-none bg-indigo-600 w-40 text-sm text-center px-4 py-3 capitalize shadow-md rounded-md text-white flex justify-center items-center transition-colors hover:bg-indigo-700 duration-300">Upload
                video</button>
            <button
                class="focus:outline-none bg-pink-600 w-40 text-sm text-center px-4 py-3 capitalize shadow-md rounded-md text-white flex justify-center items-center transition-colors hover:bg-pink-700 duration-300">video
                manager</button>
        </div>
        <div class="flex flex-col items-center md:max-w-5xl w-full mx-auto p-4">
            <div class="grid md:grid-cols-12 grid-cols-1 place-content-around w-full">
                <div class="w-full md:p-10 md:col-span-4 col-span-12">
                    <div class="flex flex-col justify-center items-center space-y-3">
                        <div class="">
                            <img src="{{asset('storage/img/samansayyar.jpg')}}" class="w-full rounded-full shadow-md" alt="">
                        </div>
                        <div class="flex space-x-1">
                            <svg class="w-8 h-8 text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-8 h-8 text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-8 h-8 text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-8 h-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-8 h-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full p-10 md:col-span-8 col-span-12 flex flex-col md:items-baseline items-center md:justify-evenly justify-center">
                    <div class="flex justify-start items-center gap-x-3 text-gray-800">
                        <div class="">
                            <p class="md:text-2xl text-lg saman font-normal">{{$name}}</p>
                        </div>
    
                        <div class="flex w-full">
                            <div class="z-40">
                                <button
                                    class="fucos:outline-none border transition-colors hover:bg-gray-200 duration-200 border-gray-300 px-3 rounded-lg text-sm py-1 bg-white capitalize">edit
                                    profile</button>
                            </div>
                            <div class="z-40">
                                <button class="fucos:outline-none">
                                    <svg class="w-7 h-7 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 w-96">
                        <div class="flex flex-row justify-between items-center">
                            <div class="flex items-center">
                                <p class="text-md">1</p>
                                <p class="text-md ml-2 capitalize">post</p>
                            </div>
                            <div class="flex items-center">
                                <p class="text-md">14k</p>
                                <p class="text-md ml-2 capitalize">followers</p>
                            </div>
                            <div class="flex items-center">
                                <p class="text-md">100</p>
                                <p class="text-md ml-2 capitalize">following</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 border-t border-gray-300">
                        <div class="mt-3 w-96">
                            <div class="py-2">
                                <caption class="text-gray-700 text-md">
                                    {{$name}}
                                    Programmer💻🎟️🚀
                                    <br>
                                    «چون که اسرارت نهان در دل شود ، آن مرادت زودتر حاصل شود»
                                </caption>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scrollere overflow-auto w-full">
                <div class="border-t w-full p-2" x-data="{tab_profile : 'media' }">
                    <nav
                        class="pb-1  md:py-1 py-2 flex flex-row mx-auto md:justify-evenly justify-between relative capitalize">
                        <a class="md:px-6 mx-1 px-5 md:py-2 py-2 md:text-md text-sm font-medium bg-transparent flex justify-center items-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                            href="#" :class="{ 'bg-gray-200': tab_profile === 'media' }" @click="tab_profile = 'media'">
                            <div class=""> media</div> &nbsp;
                        </a>
                        <a class="md:px-6 mx-1 px-5 md:py-2 py-2 md:text-md text-sm font-medium bg-transparent flex justify-center items-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                            href="#" :class="{ 'bg-gray-200': tab_profile === 'followers' }"
                            @click="tab_profile = 'followers'">
                            <div class=""> followers</div> &nbsp;
                        </a>
    
                        <a class="md:px-6 mx-1 px-5 md:py-2 py-2 md:text-md text-sm font-medium bg-transparent flex justify-center items-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                            href="#" :class="{ 'bg-gray-200': tab_profile === 'favourites' }"
                            @click="tab_profile = 'favourites'">
                            <div class=""> favourites</div> &nbsp;
                        </a>
                    </nav>
                    <!-- Show Steps of media -->
                    <div class="mt-4 border-t">
                        <div class="fl" x-show="tab_profile === 'media'">
                            <div class="mt-4 md:px-4 px-2">
                                <div class="grid grid-cols-3 md:gap-3 gap-3">
    
                                    <div class="flex-none flex md:flex-row flex-col cursor-pointer" @click="box = !box">
                                        <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                            <img src="{{ asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg') }}" alt="SamanSayyar"
                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                            <a href="#"
                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="flex-none flex md:flex-row flex-col cursor-pointer" @click="box = !box">
                                        <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                            <img src="{{ asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg') }}" alt="SamanSayyar"
                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                            <a href="#"
                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="flex-none flex md:flex-row flex-col cursor-pointer" @click="box = !box">
                                        <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                            <img src="{{ asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg') }}" alt="SamanSayyar"
                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                            <a href="#"
                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="flex-none flex md:flex-row flex-col cursor-pointer" @click="box = !box">
                                        <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                            <img src="{{ asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg') }}" alt="SamanSayyar"
                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                            <a href="#"
                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="flex-none flex md:flex-row flex-col cursor-pointer" @click="box = !box">
                                        <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                            <img src="{{ asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg') }}" alt="SamanSayyar"
                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                            <a href="#"
                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="flex-none flex md:flex-row flex-col cursor-pointer" @click="box = !box">
                                        <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                            <img src="{{ asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg') }}" alt="SamanSayyar"
                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                            <a href="#"
                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="flex-none flex md:flex-row flex-col cursor-pointer" @click="box = !box">
                                        <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                            <img src="{{ asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg') }}" alt="SamanSayyar"
                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                            <a href="#"
                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="flex-none flex md:flex-row flex-col cursor-pointer" @click="box = !box">
                                        <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                            <img src="{{ asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg') }}" alt="SamanSayyar"
                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                            <a href="#"
                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="flex-none flex md:flex-row flex-col cursor-pointer" @click="box = !box">
                                        <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                            <img src="{{ asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg') }}" alt="SamanSayyar"
                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                            <a href="#"
                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="" x-show="tab_profile === 'followers' ">
                            <div class="mt-4 md:px-4 px-2">
                                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                                    <div class="flex justify-center mx-auto w-full items-center flex-col">
                                        <div class="relative w-full max-w-3xl focus-within:text-indigo-500">
                                            <div class="absolute inset-y-0 flex items-center pl-2">
                                                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <input
                                                class="w-full pl-8 py-3 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray-400 dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-gray-100 focus:border-indigo-300 focus:outline-none focus:shadow-outline-purple form-input"
                                                type="text" placeholder="Search in followers" aria-label="Search" />
                                        </div>
                                        <div class="mb-6 mt-10 w-full mx-auto ">
                                            <div
                                                class="flex flex-col space-y-10  bg-gray-100 bg-opacity-25 max-w-3xl rounded-md px-3 py-2 mx-auto">
                                                <div class="relative">
                                                    <div
                                                        class="flex justify-between md:flex-row flex-col items-center w-full">
                                                        <div class="flex justify-start items-center w-full">
                                                            <div class="">
                                                                <img src="{{asset('storage/img/samansayyar.jpg')}}" alt=""
                                                                    class="rounded-full md:w-20 w-16">
                                                            </div>
                                                            <div class="w-full ml-5">
                                                                <p class="text-md font-medium">
                                                                    {{$name}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full items-center flex justify-start">
                                                            <div class="flex justify-center flex-col items-center w-full">
                                                                <p class="flex justify-center items-center w-full text-xs">
                                                                    <!-- <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg> -->
                                                                    followers
                                                                    &nbsp;
                                                                    1245
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="ml-1">
                                                            <div class="flex space-x-1">
                                                                <svg class="md:w-6 md:h-6 w-4 h-4 text-yellow-500"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                    fill="currentColor">
                                                                    <path
                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                </svg>
                                                                <svg class="md:w-6 md:h-6 w-4 h-4 text-yellow-500"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                    fill="currentColor">
                                                                    <path
                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                </svg>
                                                                <svg class="md:w-6 md:h-6 w-4 h-4 text-yellow-500"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                    fill="currentColor">
                                                                    <path
                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                </svg>
                                                                <svg class="md:w-6 md:h-6 w-4 h-4 text-gray-500"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                    fill="currentColor">
                                                                    <path
                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                </svg>
                                                                <svg class="md:w-6 md:h-6 w-4 h-4 text-gray-500"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                    fill="currentColor">
                                                                    <path
                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="w-full h-full items-center flex md:justify-end justify-center mr-4">
                                                            <div
                                                                class="flex flex-row-reverse justify-center items-center space-x-3 lg:mt-0 mt-4">
                                                                <button
                                                                    class="focus:outline-none ml-3 bg-indigo-600 focus:ring-2 hover:bg-indigo-100 shadow-md trasition duration-300 focus:ring-indigo-500 text-white hover:text-black py-2 px-2  rounded-md flex items-center justify-center">
                                                                    follow
                                                                </button>
                                                                <button
                                                                    class="focus:outline-none bg-white focus:ring-2 hover:bg-indigo-100 shadow-md trasition duration-300 focus:ring-indigo-500 md:w-12 py-2 px-2 md:h-12 w-10 h-10 rounded-md flex items-center justify-center"><svg
                                                                        class="w-5 h-5 text-gray-700" fill="none"
                                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            stroke-width="2"
                                                                            d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636">
                                                                        </path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="relative">
                                                    <div
                                                        class="flex justify-between md:flex-row flex-col items-center w-full">
                                                        <div class="flex justify-start items-center w-full">
                                                            <div class="">
                                                                <img src="{{asset('storage/img/samansayyar.jpg')}}" alt=""
                                                                    class="rounded-full md:w-20 w-16">
                                                            </div>
                                                            <div class="w-full ml-5">
                                                                <p class="text-md font-medium">
                                                                    {{$name}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full items-center flex justify-start">
                                                            <div class="flex justify-center flex-col items-center w-full">
                                                                <p class="flex justify-center items-center w-full text-xs">
                                                                    <!-- <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg> -->
                                                                    followers
                                                                    &nbsp;
                                                                    1245
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="ml-1">
                                                            <div class="flex space-x-1">
                                                                <svg class="md:w-6 md:h-6 w-4 h-4 text-yellow-500"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                    fill="currentColor">
                                                                    <path
                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                </svg>
                                                                <svg class="md:w-6 md:h-6 w-4 h-4 text-yellow-500"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                    fill="currentColor">
                                                                    <path
                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                </svg>
                                                                <svg class="md:w-6 md:h-6 w-4 h-4 text-yellow-500"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                    fill="currentColor">
                                                                    <path
                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                </svg>
                                                                <svg class="md:w-6 md:h-6 w-4 h-4 text-gray-500"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                    fill="currentColor">
                                                                    <path
                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                </svg>
                                                                <svg class="md:w-6 md:h-6 w-4 h-4 text-gray-500"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                    fill="currentColor">
                                                                    <path
                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="w-full h-full items-center flex md:justify-end justify-center mr-4">
                                                            <div
                                                                class="flex flex-row-reverse justify-center items-center space-x-3 lg:mt-0 mt-4">
                                                                <button
                                                                    class="focus:outline-none ml-3 bg-indigo-100 focus:ring-2 hover:bg-indigo-100 shadow-md trasition duration-300 focus:ring-indigo-500 text-black  py-2 px-2  rounded-md flex items-center justify-center">
                                                                    Unfollow
                                                                </button>
                                                                <button
                                                                    class="focus:outline-none bg-white focus:ring-2 hover:bg-indigo-100 shadow-md trasition duration-300 focus:ring-indigo-500 md:w-12 py-2 px-2 md:h-12 w-10 h-10 rounded-md flex items-center justify-center"><svg
                                                                        class="w-5 h-5 text-gray-700" fill="none"
                                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            stroke-width="2"
                                                                            d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636">
                                                                        </path>
                                                                    </svg>
                                                                </button>
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
                        <div class="" x-show="tab_profile === 'favourites' ">
                            <div class="my-6 md:px-4 px-2">
                                <div class="my-4">
                                    <h3 class="mx-2 font-bold text-black text-xl capitalize">profile</h3>
                                </div>
                                <div class="grid md:grid-cols-5 grid-cols-2 md:gap-4 gap-3">
                                    <div href="#"
                                        class="flex py-3 px-4 flex-col bg-indigo-500 bg-opacity-50 justify-between items-center shadow-md rounded-lg transition duration-300 hover:shadow-xl hover:bg-opacity-70">
                                        <div class="object-cover p-1 transform">
                                            <img class="w-32 h-32 object-cover bg-cover rounded-lg"
                                                src="{{asset('storage/img/samansayyar.jpg')}}">
                                        </div>
                                        <div class="object-cover p-1 mt-3 px-2">
                                            <p class="md:text-lg text-md font-bold text-gray-900 capitalis">
                                                {{$name}}
                                            </p>
                                        </div>
                                        <div
                                            class="w-full h-full items-center z-40 flex md:justify-end justify-center mr-4">
                                            <div
                                                class="flex flex-row-reverse justify-center items-center space-x-3 lg:mt-0 mt-4">
                                                <button
                                                    class="focus:outline-none ml-3 bg-indigo-100 focus:ring-2 hover:bg-indigo-100 shadow-md trasition duration-300 focus:ring-indigo-500 text-black  py-2 px-2  rounded-md flex items-center justify-center">
                                                    Unfollow
                                                </button>
                                                <button
                                                    class="focus:outline-none bg-white focus:ring-2 hover:bg-indigo-100 shadow-md trasition duration-300 focus:ring-indigo-500  py-2 px-2 rounded-md flex items-center justify-center"><svg
                                                        class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        </d>
                                    </div>
                                </div>
                                <hr />
                                <div class="my-6 md:px-4 px-2">
                                    <div class="my-4">
                                        <h3 class="mx-2 font-bold text-black text-xl capitalize">hubs channel</h3>
                                    </div>
                                    <div class="grid md:grid-cols-5 grid-cols-2 md:gap-4 gap-3">
                                        <div href="#"
                                            class="flex py-3 px-4 flex-col bg-green-500 bg-opacity-50 justify-between items-center shadow-md rounded-lg transition duration-300 hover:shadow-xl hover:bg-opacity-70">
                                            <div class="object-cover p-1 transform">
                                                <img class="w-32 h-32 object-cover bg-cover rounded-lg"
                                                    src="{{asset('storage/img/samansayyar.jpg')}}">
                                            </div>
                                            <div class="object-cover p-1 mt-3 px-2">
                                                <p class="md:text-lg text-md font-bold text-gray-900 capitalis">
                                                    {{$name}}
                                                </p>
                                            </div>
                                            <div
                                                class="w-full h-full items-center z-40 flex md:justify-end justify-center mr-4">
                                                <div
                                                    class="flex flex-row-reverse justify-center items-center space-x-3 lg:mt-0 mt-4">
                                                    <button
                                                        class="focus:outline-none ml-3 bg-indigo-100 focus:ring-2 hover:bg-indigo-100 shadow-md trasition duration-300 focus:ring-indigo-500 text-black  py-2 px-2  rounded-md flex items-center justify-center">
                                                        Unfollow
                                                    </button>
                                                    <button
                                                        class="focus:outline-none bg-white focus:ring-2 hover:bg-indigo-100 shadow-md trasition duration-300 focus:ring-indigo-500  py-2 px-2 rounded-md flex items-center justify-center"><svg
                                                            class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636">
                                                            </path>
                                                        </svg>
                                                    </button>
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
        </div>
    </div>
</x-guest-layout>