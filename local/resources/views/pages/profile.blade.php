<x-guest-layout>
    @section('title')
        Profile
    @endsection
    <!-- Profile Visitor -->
    <div class="md:px-6 lg:px-6 relative" x-data="{ tab : 'profile' }">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-6">
            <div class="flex flex-col items-center w-full md:col-span-12"
                >
                <div class="w-full scrollere overflow-x-scroll">
                    <nav class="md:pb-4 pb-2  md:py-3 py-2 flex flex-row relative capitalize">

                        <a class="md:px-6 mx-1 px-5 md:py-2 py-2 md:text-md text-sm font-medium bg-transparent justify-center flex items-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                            href="#" :class="{ 'bg-gray-200': tab === 'profile' }" @click="tab = 'profile'">
                            <div class=""> profile</div> &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </a>

                        <a class="md:px-6 mx-1 px-5 md:py-2 py-2 md:text-md text-sm font-medium bg-transparent flex justify-center items-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                            href="#" :class="{ 'bg-gray-200': tab === 'media' }" @click="tab = 'media'">
                            <div class=""> media</div> &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                            </svg>
                        </a>

                        <a class="md:px-6 mx-1 px-5 md:py-2 py-2 md:text-md text-sm font-medium bg-transparent flex justify-center items-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                            href="#" :class="{ 'bg-gray-200': tab === 'wall' }" @click="tab = 'wall'">
                            <div class=""> wall</div> &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                            </svg>
                        </a>
                        <a class="md:px-6 mx-1 px-5 md:py-2 py-2 md:text-md text-sm font-medium bg-transparent flex justify-center items-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                            href="#" :class="{ 'bg-gray-200': tab === 'galery' }" @click="tab = 'galery'">
                            <div class=""> galery</div> &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" stroke="currentColor"
                                viewBox="0 0 24 24" fill="none">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                        </a>

                        <a class="md:px-6 mx-1 px-5 md:py-2 py-2 md:text-md text-sm font-medium bg-transparent flex justify-center items-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                            href="#" :class="{ 'bg-gray-200': tab === 'favourites' }" @click="tab = 'favourites'">
                            <div class=""> favourites</div> &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                        </a>

                        <a class="md:px-6 mx-1 px-5 md:py-2 py-2 md:text-md text-sm font-medium bg-transparent flex justify-center items-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                            href="#" :class="{ 'bg-gray-200': tab === 'about' }" @click="tab = 'about'">
                            <div class=""> about</div> &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </a>
                    </nav>
                </div>
                <div class="mb-2 w-full">
                    <div class="w-full" x-show="tab === 'profile'">
                        <div class="px-2">
                            <div
                                class="flex lg:justify-between justify-center lg:flex-row flex-col w-full items-center bg-gray-100 py-6 px-3">
                                <div class="flex lg:flex-row flex-col items-center space-x-3">
                                    <div class="w-full lg:block flex justify-center items-center">
                                        <img src="{{ asset('storage/img/amir.jpg') }}" alt="Amir Tataloo"
                                            class="w-32 h-32 object-cover rounded-full lg:block flex justify-center items-center shadow-md">
                                    </div>
                                    <div class="flex lg:mx-3 flex-col justify-between mt-4">
                                        <p
                                            class="text-gray-800 font-medium text-center capitalize lg:w-40 md:text-2xl text-xl mb-1">
                                            amir
                                            tataloo</p>
                                        <!-- <p
                                                class="text-gray-800 text-center font-medium capitalize lg:w-40 mt-2 md:text-md text-sm">
                                                281k
                                                followers</p> -->
                                    </div>
                                </div>

                                <div
                                    class="flex flex-row lg:justify-start lg:mt-0 mt-4 justify-center items-center space-x-16">
                                    <div class="flex flex-row items-center capitalize space-x-6 text-gray-700">
                                        <p class="mr-2">followers</p>
                                        <span>8200</span>
                                    </div>
                                    <div class="flex flex-row items-center capitalize text-gray-700">
                                        <p class="mr-2">following</p>
                                        <span>2533</span>
                                    </div>
                                </div>

                                <div class="flex flex-row-reverse justify-center items-center space-x-3 lg:mt-0 mt-4">
                                    <button
                                        class="focus:outline-none ml-3 bg-white focus:ring-2 hover:bg-indigo-100 shadow-2xl trasition duration-300 focus:ring-indigo-500 w-12 py-2 px-2 h-12 rounded-full flex items-center justify-center"><svg
                                            class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                                            </path>
                                        </svg>
                                    </button>
                                    <button
                                        class="focus:outline-none bg-white focus:ring-2 hover:bg-indigo-100 shadow-2xl trasition duration-300 focus:ring-indigo-500 w-12 py-2 px-2 h-12 rounded-full flex items-center justify-center"><svg
                                            class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                                        </svg>
                                    </button>
                                    <button
                                        class="focus:outline-none bg-white focus:ring-2 hover:bg-indigo-100 shadow-2xl trasition duration-300 focus:ring-indigo-500 w-12 py-2 px-2 h-12 rounded-full flex items-center justify-center"><svg
                                            class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636">
                                            </path>
                                        </svg>
                                    </button>
                                    <button
                                        class="focus:outline-none text-white focus:text-gray-900 bg-indigo-700 focus:ring-2 hover:bg-indigo-800 shadow-2xl trasition duration-300 focus:ring-indigo-500 w-32 py-2 px-2 h-12 rounded-full flex items-center justify-center">

                                        Follow
                                    </button>
                                </div>
                            </div>
                            <div class="my-2 md:mt-3 mt-10">
                                <div class="flex justify-center items-center">
                                    <div class="grid md:grid-cols-12 grid-cols-1 gap-3 w-full">
                                        <div
                                            class="flex md:col-span-9 flex-row border-b-2 md:border-none border-indigo-200 lg:my-10">
                                            <div class="flex flex-col space-y-4">
                                                <div
                                                    class="flex w-full flex-row text-black items-center capitalize pb-3 md:text-md text-sm">
                                                    <p class="mr-2 md:w-auto w-28">name :</p>
                                                    <span class="text-gray-700 font-bold ">Amir Tataloo</span>
                                                </div>
                                                <div
                                                    class="flex w-full flex-row text-black items-center capitalize pb-3 md:text-md text-sm">
                                                    <p class="mr-2 md:w-auto w-28">country :</p>
                                                    <span class="text-gray-700 font-bold ">sweeden</span>
                                                </div>
                                                <div
                                                    class="flex w-full flex-row text-black items-center capitalize pb-3 md:text-md text-sm">
                                                    <p class="mr-2 md:w-auto w-28">occupation :</p>
                                                    <span class="text-gray-700 font-bold ">elevator technician</span>
                                                </div>
                                                <div
                                                    class="flex w-full flex-row text-black items-center capitalize pb-3 md:text-md text-sm">
                                                    <p class="mr-2 md:w-auto w-28">online interest :</p>
                                                    <span class="text-gray-700 font-bold ">history</span>
                                                </div>
                                                <div
                                                    class="flex w-full flex-row text-black items-center capitalize pb-3 md:text-md text-sm">
                                                    <p class="mr-2 md:w-auto w-28">short intro :</p>
                                                    <span class="text-gray-700 font-bold ">this more profile is dedicted
                                                        to helping
                                                        hungry people. erc</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex md:col-span-3 flex-col space-y-4">
                                            <div>
                                                <p class="text-left text-gray-900 lg:text-2xl text-lg font-bold">
                                                    links
                                                </p>
                                            </div>

                                            <div class="my-2 flex flex-col items-start space-y-4">
                                                <a href="#" class="flex items-center justify-center space-x-4">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-8 h-8 fill-current text-pink-600"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z">
                                                            </path>
                                                            <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                                            <path
                                                                d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <span>instagram</span>
                                                </a>
                                                <a href="#" class="flex items-center justify-center space-x-4">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-8 h-8 fill-current text-red-600"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M21.593,7.203c-0.23-0.858-0.905-1.535-1.762-1.766C18.265,5.007,12,5,12,5S5.736,4.993,4.169,5.404 c-0.84,0.229-1.534,0.921-1.766,1.778c-0.413,1.566-0.417,4.814-0.417,4.814s-0.004,3.264,0.406,4.814 c0.23,0.857,0.905,1.534,1.763,1.765c1.582,0.43,7.83,0.437,7.83,0.437s6.265,0.007,7.831-0.403c0.856-0.23,1.534-0.906,1.767-1.763 C21.997,15.281,22,12.034,22,12.034S22.02,8.769,21.593,7.203z M9.996,15.005l0.005-6l5.207,3.005L9.996,15.005z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <span>youtube</span>
                                                </a>
                                                <a href="#" class="flex items-center justify-center space-x-4">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-8 h-8 fill-current text-indigo-700"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M12.001,2.002c-5.522,0-9.999,4.477-9.999,9.999c0,4.99,3.656,9.126,8.437,9.879v-6.988h-2.54v-2.891h2.54V9.798 c0-2.508,1.493-3.891,3.776-3.891c1.094,0,2.24,0.195,2.24,0.195v2.459h-1.264c-1.24,0-1.628,0.772-1.628,1.563v1.875h2.771 l-0.443,2.891h-2.328v6.988C18.344,21.129,22,16.992,22,12.001C22,6.479,17.523,2.002,12.001,2.002z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <span>facebook</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="" x-show="tab === 'media'" x-data="{ tabs : 'latest'}">
                        <!--  -->
                        <div
                            class="w-full flex justify-around md:flex-row-reverse flex-col md:space-y-1 space-y-3 items-center pt-4">
                            <div class="relative text-gray-600">
                                <input type="search" name="search" placeholder="Search"
                                    class="bg-white h-10 border border-gray-400 text-gray-800 px-5 pr-10 rounded-full text-sm focus:outline-none">
                                <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px"
                                        y="0px" viewBox="0 0 56.966 56.966"
                                        style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                                        width="512px" height="512px">
                                        <path
                                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="flex justify-center items-center">
                                <nav
                                    class="md:pb-4 pb-2 md:py-3 overflow-hidden w-full scrolleer flex flex-row relative capitalize">
                                    <a class="md:px-6 px-5 md:py-2 py-2 md:text-md text-sm font-medium bg-transparent flex items-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                        href="#" :class="{ 'bg-gray-200': tabs === 'latest' }"
                                        @click="tabs = 'latest'">latest
                                    </a>
                                    <a class="md:px-6 px-5 md:py-2 py-2 md:text-md text-sm font-medium bg-transparent rounded-lg flex items-center dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                        href="#" :class="{ 'bg-gray-200': tabs === 'oldest' }"
                                        @click="tabs = 'oldest'">oldest
                                    </a>
                                    <a class="md:px-6 px-5 md:py-2 py-2 md:text-md text-sm font-medium bg-transparent rounded-lg flex items-center dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                        href="#" :class="{ 'bg-gray-200': tabs === 'top rate' }"
                                        @click="tabs = 'top rate'">top rate
                                    </a>
                                    <a class="md:px-6 px-5 md:py-2 py-2 md:text-md text-sm font-medium bg-transparent rounded-lg flex items-center dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                        href="#" :class="{ 'bg-gray-200': tabs === 'favourites' }"
                                        @click="tabs = 'favourites'">favourites
                                    </a>
                                </nav>

                            </div>
                        </div>

                        <div x-show="tabs == 'latest'" class="mx-4 mb-5">
                            <div class="flex justify-center items-center">
                                <div class="grid md:grid-cols-12 grid-cols-1 gap-3 w-full">
                                    <div
                                        class="flex md:col-span-10 flex-col border-b-2 md:border-none border-indigo-200 lg:my-6">
                                        <div class="grid md:grid-cols-3 grid-cols-1 gap-6 place-items-center">
                                            <div class="relative">
                                                <a href="#"
                                                    class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                                    <div
                                                        class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                                        <div>
                                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                                class="bg-cover w-100 h-100 rounded shadow-md">
                                                        </div>
                                                        <div class="flex justify-center items-center flex-row">
                                                            <div class="mr-3 w-16">
                                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                                    class="h-9 w-9 rounded-full shadow-md">
                                                            </div>
                                                            <div class="flex justify-start">
                                                                <div class="text-gray-900 text-sm text-left font-bold">
                                                                    Amir Tataloo - Heyf Didid Raft - New Music Video
                                                                    (Coming
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
                                            <div class="relative">
                                                <a href="#"
                                                    class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                                    <div
                                                        class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                                        <div>
                                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                                class="bg-cover w-100 h-100 rounded shadow-md">
                                                        </div>
                                                        <div class="flex justify-center items-center flex-row">
                                                            <div class="mr-3 w-16">
                                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                                    class="h-9 w-9 rounded-full shadow-md">
                                                            </div>
                                                            <div class="flex justify-start">
                                                                <div class="text-gray-900 text-sm text-left font-bold">
                                                                    Amir Tataloo - Heyf Didid Raft - New Music Video
                                                                    (Coming
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
                                            <div class="relative">
                                                <a href="#"
                                                    class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                                    <div
                                                        class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                                        <div>
                                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                                class="bg-cover w-100 h-100 rounded shadow-md">
                                                        </div>
                                                        <div class="flex justify-center items-center flex-row">
                                                            <div class="mr-3 w-16">
                                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                                    class="h-9 w-9 rounded-full shadow-md">
                                                            </div>
                                                            <div class="flex justify-start">
                                                                <div class="text-gray-900 text-sm text-left font-bold">
                                                                    Amir Tataloo - Heyf Didid Raft - New Music Video
                                                                    (Coming
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
                                            <div class="relative">
                                                <a href="#"
                                                    class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                                    <div
                                                        class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                                        <div>
                                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                                class="bg-cover w-100 h-100 rounded shadow-md">
                                                        </div>
                                                        <div class="flex justify-center items-center flex-row">
                                                            <div class="mr-3 w-16">
                                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                                    class="h-9 w-9 rounded-full shadow-md">
                                                            </div>
                                                            <div class="flex justify-start">
                                                                <div class="text-gray-900 text-sm text-left font-bold">
                                                                    Amir Tataloo - Heyf Didid Raft - New Music Video
                                                                    (Coming
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
                                            <div class="relative">
                                                <a href="#"
                                                    class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                                    <div
                                                        class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                                        <div>
                                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                                class="bg-cover w-100 h-100 rounded shadow-md">
                                                        </div>
                                                        <div class="flex justify-center items-center flex-row">
                                                            <div class="mr-3 w-16">
                                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                                    class="h-9 w-9 rounded-full shadow-md">
                                                            </div>
                                                            <div class="flex justify-start">
                                                                <div class="text-gray-900 text-sm text-left font-bold">
                                                                    Amir Tataloo - Heyf Didid Raft - New Music Video
                                                                    (Coming
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
                                            <div class="relative">
                                                <a href="#"
                                                    class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                                    <div
                                                        class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                                        <div>
                                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                                class="bg-cover w-100 h-100 rounded shadow-md">
                                                        </div>
                                                        <div class="flex justify-center items-center flex-row">
                                                            <div class="mr-3 w-16">
                                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                                    class="h-9 w-9 rounded-full shadow-md">
                                                            </div>
                                                            <div class="flex justify-start">
                                                                <div class="text-gray-900 text-sm text-left font-bold">
                                                                    Amir Tataloo - Heyf Didid Raft - New Music Video
                                                                    (Coming
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
                                    <div
                                        class="flex md:col-span-2 flex-row border-b-2 md:border-none border-indigo-200 lg:my-6">

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

                            </div>
                        </div>
                        <div x-show="tabs == 'oldest'" class="mx-4 mb-5">
                            <div class="flex justify-center items-center">
                                <div class="grid md:grid-cols-12 grid-cols-1 gap-3 w-full">
                                    <div
                                        class="flex md:col-span-10 flex-row border-b-2 md:border-none border-indigo-200 lg:my-6">
                                        <div
                                            class="grid md:grid-cols-3 grid-cols-1 gap-6 place-items-center">
                                            <div class="relative">
                                                <a href="#"
                                                    class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                                    <div
                                                        class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                                        <div>
                                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                                class="bg-cover w-100 h-100 rounded shadow-md">
                                                        </div>
                                                        <div class="flex justify-center items-center flex-row">
                                                            <div class="mr-3 w-16">
                                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                                    class="h-9 w-9 rounded-full shadow-md">
                                                            </div>
                                                            <div class="flex justify-start">
                                                                <div class="text-gray-900 text-sm text-left font-bold">
                                                                    Amir Tataloo - Heyf Didid Raft - New Music Video
                                                                    (Coming
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
                                            <div class="relative">
                                                <a href="#"
                                                    class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                                    <div
                                                        class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                                        <div>
                                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                                class="bg-cover w-100 h-100 rounded shadow-md">
                                                        </div>
                                                        <div class="flex justify-center items-center flex-row">
                                                            <div class="mr-3 w-16">
                                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                                    class="h-9 w-9 rounded-full shadow-md">
                                                            </div>
                                                            <div class="flex justify-start">
                                                                <div class="text-gray-900 text-sm text-left font-bold">
                                                                    Amir Tataloo - Heyf Didid Raft - New Music Video
                                                                    (Coming
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
                                            <div class="relative">
                                                <a href="#"
                                                    class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                                    <div
                                                        class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                                        <div>
                                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                                class="bg-cover w-100 h-100 rounded shadow-md">
                                                        </div>
                                                        <div class="flex justify-center items-center flex-row">
                                                            <div class="mr-3 w-16">
                                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                                    class="h-9 w-9 rounded-full shadow-md">
                                                            </div>
                                                            <div class="flex justify-start">
                                                                <div class="text-gray-900 text-sm text-left font-bold">
                                                                    Amir Tataloo - Heyf Didid Raft - New Music Video
                                                                    (Coming
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
                                            <div class="relative">
                                                <a href="#"
                                                    class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                                    <div
                                                        class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                                        <div>
                                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                                class="bg-cover w-100 h-100 rounded shadow-md">
                                                        </div>
                                                        <div class="flex justify-center items-center flex-row">
                                                            <div class="mr-3 w-16">
                                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                                    class="h-9 w-9 rounded-full shadow-md">
                                                            </div>
                                                            <div class="flex justify-start">
                                                                <div class="text-gray-900 text-sm text-left font-bold">
                                                                    Amir Tataloo - Heyf Didid Raft - New Music Video
                                                                    (Coming
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
                                            <div class="relative">
                                                <a href="#"
                                                    class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                                    <div
                                                        class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                                        <div>
                                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                                class="bg-cover w-100 h-100 rounded shadow-md">
                                                        </div>
                                                        <div class="flex justify-center items-center flex-row">
                                                            <div class="mr-3 w-16">
                                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                                    class="h-9 w-9 rounded-full shadow-md">
                                                            </div>
                                                            <div class="flex justify-start">
                                                                <div class="text-gray-900 text-sm text-left font-bold">
                                                                    Amir Tataloo - Heyf Didid Raft - New Music Video
                                                                    (Coming
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
                                            <div class="relative">
                                                <a href="#"
                                                    class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                                    <div
                                                        class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                                        <div>
                                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                                class="bg-cover w-100 h-100 rounded shadow-md">
                                                        </div>
                                                        <div class="flex justify-center items-center flex-row">
                                                            <div class="mr-3 w-16">
                                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                                    class="h-9 w-9 rounded-full shadow-md">
                                                            </div>
                                                            <div class="flex justify-start">
                                                                <div class="text-gray-900 text-sm text-left font-bold">
                                                                    Amir Tataloo - Heyf Didid Raft - New Music Video
                                                                    (Coming
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
                                    <div
                                        class="flex md:col-span-2 flex-row border-b-2 md:border-none border-indigo-200 lg:my-6">

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

                            </div>
                        </div>
                        <div x-show="tabs == 'top rate'" class="mx-4 mb-5">
                            <div class="flex justify-center items-center">
                                <div class="grid md:grid-cols-12 grid-cols-1 gap-3 w-full">
                                    <div
                                        class="flex md:col-span-10 flex-row border-b-2 md:border-none border-indigo-200 lg:my-6">
                                        <div
                                            class="grid md:grid-cols-3 grid-cols-1 gap-6 place-items-center">
                                            <div class="relative">
                                                <a href="#"
                                                    class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                                    <div
                                                        class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                                        <div>
                                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                                class="bg-cover w-100 h-100 rounded shadow-md">
                                                        </div>
                                                        <div class="flex justify-center items-center flex-row">
                                                            <div class="mr-3 w-16">
                                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                                    class="h-9 w-9 rounded-full shadow-md">
                                                            </div>
                                                            <div class="flex justify-start">
                                                                <div class="text-gray-900 text-sm text-left font-bold">
                                                                    Amir Tataloo - Heyf Didid Raft - New Music Video
                                                                    (Coming
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
                                            <div class="relative">
                                                <a href="#"
                                                    class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                                    <div
                                                        class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                                        <div>
                                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                                class="bg-cover w-100 h-100 rounded shadow-md">
                                                        </div>
                                                        <div class="flex justify-center items-center flex-row">
                                                            <div class="mr-3 w-16">
                                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                                    class="h-9 w-9 rounded-full shadow-md">
                                                            </div>
                                                            <div class="flex justify-start">
                                                                <div class="text-gray-900 text-sm text-left font-bold">
                                                                    Amir Tataloo - Heyf Didid Raft - New Music Video
                                                                    (Coming
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
                                            <div class="relative">
                                                <a href="#"
                                                    class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                                    <div
                                                        class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                                        <div>
                                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                                class="bg-cover w-100 h-100 rounded shadow-md">
                                                        </div>
                                                        <div class="flex justify-center items-center flex-row">
                                                            <div class="mr-3 w-16">
                                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                                    class="h-9 w-9 rounded-full shadow-md">
                                                            </div>
                                                            <div class="flex justify-start">
                                                                <div class="text-gray-900 text-sm text-left font-bold">
                                                                    Amir Tataloo - Heyf Didid Raft - New Music Video
                                                                    (Coming
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
                                            <div class="relative">
                                                <a href="#"
                                                    class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                                    <div
                                                        class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                                        <div>
                                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                                class="bg-cover w-100 h-100 rounded shadow-md">
                                                        </div>
                                                        <div class="flex justify-center items-center flex-row">
                                                            <div class="mr-3 w-16">
                                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                                    class="h-9 w-9 rounded-full shadow-md">
                                                            </div>
                                                            <div class="flex justify-start">
                                                                <div class="text-gray-900 text-sm text-left font-bold">
                                                                    Amir Tataloo - Heyf Didid Raft - New Music Video
                                                                    (Coming
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
                                            <div class="relative">
                                                <a href="#"
                                                    class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                                    <div
                                                        class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                                        <div>
                                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                                class="bg-cover w-100 h-100 rounded shadow-md">
                                                        </div>
                                                        <div class="flex justify-center items-center flex-row">
                                                            <div class="mr-3 w-16">
                                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                                    class="h-9 w-9 rounded-full shadow-md">
                                                            </div>
                                                            <div class="flex justify-start">
                                                                <div class="text-gray-900 text-sm text-left font-bold">
                                                                    Amir Tataloo - Heyf Didid Raft - New Music Video
                                                                    (Coming
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
                                            <div class="relative">
                                                <a href="#"
                                                    class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                                    <div
                                                        class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                                        <div>
                                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                                class="bg-cover w-100 h-100 rounded shadow-md">
                                                        </div>
                                                        <div class="flex justify-center items-center flex-row">
                                                            <div class="mr-3 w-16">
                                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                                    class="h-9 w-9 rounded-full shadow-md">
                                                            </div>
                                                            <div class="flex justify-start">
                                                                <div class="text-gray-900 text-sm text-left font-bold">
                                                                    Amir Tataloo - Heyf Didid Raft - New Music Video
                                                                    (Coming
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
                                    <div
                                        class="flex md:col-span-2 flex-row border-b-2 md:border-none border-indigo-200 lg:my-6">

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

                            </div>
                        </div>

                        <div x-show="tabs == 'favourites'" class="mx-4 mb-5">
                            <div class="flex justify-center items-center">
                                <div class="grid md:grid-cols-12 grid-cols-1 gap-3 w-full">
                                    <div
                                        class="flex md:col-span-10 flex-row border-b-2 md:border-none border-indigo-200 lg:my-6">
                                        <div
                                            class="grid md:grid-cols-3 grid-cols-1 gap-6 place-items-center">
                                            <div class="relative">
                                                <a href="#"
                                                    class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                                    <div
                                                        class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                                        <div>
                                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                                class="bg-cover w-100 h-100 rounded shadow-md">
                                                        </div>
                                                        <div class="flex justify-center items-center flex-row">
                                                            <div class="mr-3 w-16">
                                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                                    class="h-9 w-9 rounded-full shadow-md">
                                                            </div>
                                                            <div class="flex justify-start">
                                                                <div class="text-gray-900 text-sm text-left font-bold">
                                                                    Amir Tataloo - Heyf Didid Raft - New Music Video
                                                                    (Coming
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
                                            <div class="relative">
                                                <a href="#"
                                                    class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                                    <div
                                                        class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                                        <div>
                                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                                class="bg-cover w-100 h-100 rounded shadow-md">
                                                        </div>
                                                        <div class="flex justify-center items-center flex-row">
                                                            <div class="mr-3 w-16">
                                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                                    class="h-9 w-9 rounded-full shadow-md">
                                                            </div>
                                                            <div class="flex justify-start">
                                                                <div class="text-gray-900 text-sm text-left font-bold">
                                                                    Amir Tataloo - Heyf Didid Raft - New Music Video
                                                                    (Coming
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
                                            <div class="relative">
                                                <a href="#"
                                                    class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                                    <div
                                                        class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                                        <div>
                                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                                class="bg-cover w-100 h-100 rounded shadow-md">
                                                        </div>
                                                        <div class="flex justify-center items-center flex-row">
                                                            <div class="mr-3 w-16">
                                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                                    class="h-9 w-9 rounded-full shadow-md">
                                                            </div>
                                                            <div class="flex justify-start">
                                                                <div class="text-gray-900 text-sm text-left font-bold">
                                                                    Amir Tataloo - Heyf Didid Raft - New Music Video
                                                                    (Coming
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
                                            <div class="relative">
                                                <a href="#"
                                                    class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                                    <div
                                                        class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                                        <div>
                                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                                class="bg-cover w-100 h-100 rounded shadow-md">
                                                        </div>
                                                        <div class="flex justify-center items-center flex-row">
                                                            <div class="mr-3 w-16">
                                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                                    class="h-9 w-9 rounded-full shadow-md">
                                                            </div>
                                                            <div class="flex justify-start">
                                                                <div class="text-gray-900 text-sm text-left font-bold">
                                                                    Amir Tataloo - Heyf Didid Raft - New Music Video
                                                                    (Coming
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
                                            <div class="relative">
                                                <a href="#"
                                                    class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                                    <div
                                                        class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                                        <div>
                                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                                class="bg-cover w-100 h-100 rounded shadow-md">
                                                        </div>
                                                        <div class="flex justify-center items-center flex-row">
                                                            <div class="mr-3 w-16">
                                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                                    class="h-9 w-9 rounded-full shadow-md">
                                                            </div>
                                                            <div class="flex justify-start">
                                                                <div class="text-gray-900 text-sm text-left font-bold">
                                                                    Amir Tataloo - Heyf Didid Raft - New Music Video
                                                                    (Coming
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
                                            <div class="relative">
                                                <a href="#"
                                                    class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                                    <div
                                                        class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                                        <div>
                                                            <img src="{{ asset('storage/img/music.jpg') }}" alt="post"
                                                                class="bg-cover w-100 h-100 rounded shadow-md">
                                                        </div>
                                                        <div class="flex justify-center items-center flex-row">
                                                            <div class="mr-3 w-16">
                                                                <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                                    class="h-9 w-9 rounded-full shadow-md">
                                                            </div>
                                                            <div class="flex justify-start">
                                                                <div class="text-gray-900 text-sm text-left font-bold">
                                                                    Amir Tataloo - Heyf Didid Raft - New Music Video
                                                                    (Coming
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
                                    <div
                                        class="flex md:col-span-12 flex-row border-b-2 md:border-none border-indigo-200 lg:my-6">

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

                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>

                <div class="w-full" x-show="tab === 'wall'">
                    <div class="my-4 md:px-4 px-2">
                        <div class="grid md:grid-cols-5 grid-cols-3 md:gap-3 gap-3">

                            <div class="flex-none flex md:flex-row flex-col cursor-pointer">
                                <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                    <img src="{{asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg')}}" alt="SamanSayyar"
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
                            <div class="flex-none flex md:flex-row flex-col cursor-pointer">
                                <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                    <img src="{{asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg')}}" alt="SamanSayyar"
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
                            <div class="flex-none flex md:flex-row flex-col cursor-pointer">
                                <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                    <img src="{{asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg')}}" alt="SamanSayyar"
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
                            <div class="flex-none flex md:flex-row flex-col cursor-pointer">
                                <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                    <img src="{{asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg')}}" alt="SamanSayyar"
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
                            <div class="flex-none flex md:flex-row flex-col cursor-pointer">
                                <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                    <img src="{{asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg')}}" alt="SamanSayyar"
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
                            <div class="flex-none flex md:flex-row flex-col cursor-pointer">
                                <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                    <img src="{{asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg')}}" alt="SamanSayyar"
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
                            <div class="flex-none flex md:flex-row flex-col cursor-pointer">
                                <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                    <img src="{{asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg')}}" alt="SamanSayyar"
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
                            <div class="flex-none flex md:flex-row flex-col cursor-pointer">
                                <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                    <img src="{{asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg')}}" alt="SamanSayyar"
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
                            <div class="flex-none flex md:flex-row flex-col cursor-pointer">
                                <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                    <img src="{{asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg')}}" alt="SamanSayyar"
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
                            <div class="flex-none flex md:flex-row flex-col cursor-pointer">
                                <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                    <img src="{{asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg')}}" alt="SamanSayyar"
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

                <div class="w-full" x-show="tab === 'galery'">
                    <div class="my-4 md:px-4 px-2">
                        <div class="grid md:grid-cols-5 grid-cols-3 md:gap-3 gap-3">

                            <div class="flex-none flex md:flex-row flex-col cursor-pointer">
                                <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                    <img src="{{asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg')}}" alt="SamanSayyar"
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
                            <div class="flex-none flex md:flex-row flex-col cursor-pointer">
                                <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                    <img src="{{asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg')}}" alt="SamanSayyar"
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
                            <div class="flex-none flex md:flex-row flex-col cursor-pointer">
                                <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                    <img src="{{asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg')}}" alt="SamanSayyar"
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
                            <div class="flex-none flex md:flex-row flex-col cursor-pointer">
                                <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                    <img src="{{asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg')}}" alt="SamanSayyar"
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
                            <div class="flex-none flex md:flex-row flex-col cursor-pointer">
                                <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                    <img src="{{asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg')}}" alt="SamanSayyar"
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
                            <div class="flex-none flex md:flex-row flex-col cursor-pointer">
                                <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                    <img src="{{asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg')}}" alt="SamanSayyar"
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
                            <div class="flex-none flex md:flex-row flex-col cursor-pointer">
                                <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                    <img src="{{asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg')}}" alt="SamanSayyar"
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
                            <div class="flex-none flex md:flex-row flex-col cursor-pointer">
                                <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                    <img src="{{asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg')}}" alt="SamanSayyar"
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
                            <div class="flex-none flex md:flex-row flex-col cursor-pointer">
                                <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                    <img src="{{asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg')}}" alt="SamanSayyar"
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
                            <div class="flex-none flex md:flex-row flex-col cursor-pointer">
                                <div class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                    <img src="{{asset('storage/img/bec-brown-7RIm0GqvvkM-unsplash.jpg')}}" alt="SamanSayyar"
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

                <div class="" x-show="tab === 'favourites'">
                    <div class="my-6 md:px-4 px-2">
                        <div class="my-4">
                            <h3 class="mx-2 font-bold text-black text-xl capitalize">profile</h3>
                        </div>
                        <div class="grid md:grid-cols-5 grid-cols-2 md:gap-4 gap-3">
                            <a href="#"
                                class="flex py-3 px-4 flex-col bg-indigo-500 bg-opacity-50 justify-between items-center shadow-md rounded-lg transition duration-300 hover:shadow-xl hover:bg-opacity-70">
                                <div class="object-cover p-1 transform">
                                    <img class="w-32 h-32 object-cover bg-cover rounded-lg" src="./img/samansayyar.jpg">
                                </div>
                                <div class="object-cover p-1 mt-3 px-2">
                                    <p class="md:text-lg text-md font-bold text-gray-900 capitalis">
                                        saman sayyar
                                    </p>
                                </div>
                            </a>
                            <a href="#"
                                class="flex py-3 px-4 flex-col bg-indigo-500 bg-opacity-50 justify-between items-center shadow-md rounded-lg transition duration-300 hover:shadow-xl hover:bg-opacity-70">
                                <div class="object-cover p-1 transform">
                                    <img class="w-32 h-32 object-cover bg-cover rounded-lg" src="./img/samansayyar.jpg">
                                </div>
                                <div class="object-cover p-1 mt-3 px-2">
                                    <p class="md:text-lg text-md font-bold text-gray-900 capitalis">
                                        saman sayyar
                                    </p>
                                </div>
                            </a>
                            <a href="#"
                                class="flex py-3 px-4 flex-col bg-indigo-500 bg-opacity-50 justify-between items-center shadow-md rounded-lg transition duration-300 hover:shadow-xl hover:bg-opacity-70">
                                <div class="object-cover p-1 transform">
                                    <img class="w-32 h-32 object-cover bg-cover rounded-lg" src="./img/samansayyar.jpg">
                                </div>
                                <div class="object-cover p-1 mt-3 px-2">
                                    <p class="md:text-lg text-md font-bold text-gray-900 capitalis">
                                        saman sayyar
                                    </p>
                                </div>
                            </a>
                            <a href="#"
                                class="flex py-3 px-4 flex-col bg-indigo-500 bg-opacity-50 justify-between items-center shadow-md rounded-lg transition duration-300 hover:shadow-xl hover:bg-opacity-70">
                                <div class="object-cover p-1 transform">
                                    <img class="w-32 h-32 object-cover bg-cover rounded-lg" src="./img/samansayyar.jpg">
                                </div>
                                <div class="object-cover p-1 mt-3 px-2">
                                    <p class="md:text-lg text-md font-bold text-gray-900 capitalis">
                                        saman sayyar
                                    </p>
                                </div>
                            </a>
                            <a href="#"
                                class="flex py-3 px-4 flex-col bg-indigo-500 bg-opacity-50 justify-between items-center shadow-md rounded-lg transition duration-300 hover:shadow-xl hover:bg-opacity-70">
                                <div class="object-cover p-1 transform">
                                    <img class="w-32 h-32 object-cover bg-cover rounded-lg" src="./img/samansayyar.jpg">
                                </div>
                                <div class="object-cover p-1 mt-3 px-2">
                                    <p class="md:text-lg text-md font-bold text-gray-900 capitalis">
                                        saman sayyar
                                    </p>
                                </div>
                            </a>
                            <a href="#"
                                class="flex py-3 px-4 flex-col bg-indigo-500 bg-opacity-50 justify-between items-center shadow-md rounded-lg transition duration-300 hover:shadow-xl hover:bg-opacity-70">
                                <div class="object-cover p-1 transform">
                                    <img class="w-32 h-32 object-cover bg-cover rounded-lg" src="./img/samansayyar.jpg">
                                </div>
                                <div class="object-cover p-1 mt-3 px-2">
                                    <p class="md:text-lg text-md font-bold text-gray-900 capitalis">
                                        saman sayyar
                                    </p>
                                </div>
                            </a>
                            <a href="#"
                                class="flex py-3 px-4 flex-col bg-indigo-500 bg-opacity-50 justify-between items-center shadow-md rounded-lg transition duration-300 hover:shadow-xl hover:bg-opacity-70">
                                <div class="object-cover p-1 transform">
                                    <img class="w-32 h-32 object-cover bg-cover rounded-lg" src="./img/samansayyar.jpg">
                                </div>
                                <div class="object-cover p-1 mt-3 px-2">
                                    <p class="md:text-lg text-md font-bold text-gray-900 capitalis">
                                        saman sayyar
                                    </p>
                                </div>
                            </a>
                            <a href="#"
                                class="flex py-3 px-4 flex-col bg-indigo-500 bg-opacity-50 justify-between items-center shadow-md rounded-lg transition duration-300 hover:shadow-xl hover:bg-opacity-70">
                                <div class="object-cover p-1 transform">
                                    <img class="w-32 h-32 object-cover bg-cover rounded-lg" src="./img/samansayyar.jpg">
                                </div>
                                <div class="object-cover p-1 mt-3 px-2">
                                    <p class="md:text-lg text-md font-bold text-gray-900 capitalis">
                                        saman sayyar
                                    </p>
                                </div>
                            </a>
                            <a href="#"
                                class="flex py-3 px-4 flex-col bg-indigo-500 bg-opacity-50 justify-between items-center shadow-md rounded-lg transition duration-300 hover:shadow-xl hover:bg-opacity-70">
                                <div class="object-cover p-1 transform">
                                    <img class="w-32 h-32 object-cover bg-cover rounded-lg" src="./img/samansayyar.jpg">
                                </div>
                                <div class="object-cover p-1 mt-3 px-2">
                                    <p class="md:text-lg text-md font-bold text-gray-900 capitalis">
                                        saman sayyar
                                    </p>
                                </div>
                            </a>
                            <a href="#"
                                class="flex py-3 px-4 flex-col bg-indigo-500 bg-opacity-50 justify-between items-center shadow-md rounded-lg transition duration-300 hover:shadow-xl hover:bg-opacity-70">
                                <div class="object-cover p-1 transform">
                                    <img class="w-32 h-32 object-cover bg-cover rounded-lg" src="./img/samansayyar.jpg">
                                </div>
                                <div class="object-cover p-1 mt-3 px-2">
                                    <p class="md:text-lg text-md font-bold text-gray-900 capitalis">
                                        saman sayyar
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <hr />
                    <div class="my-6 md:px-4 px-2">
                        <div class="my-4">
                            <h3 class="mx-2 font-bold text-black text-xl capitalize">hubs channel</h3>
                        </div>
                        <div class="grid md:grid-cols-5 grid-cols-2 md:gap-4 gap-3">
                            <a href="#"
                                class="flex py-3 px-4 flex-col bg-green-500 bg-opacity-50 justify-between items-center shadow-md rounded-lg transition duration-300 hover:shadow-xl hover:bg-opacity-70">
                                <div class="object-cover p-1 transform">
                                    <img class="w-32 h-32 object-cover bg-cover rounded-lg" src="./img/samansayyar.jpg">
                                </div>
                                <div class="object-cover p-1 mt-3 px-2">
                                    <p class="md:text-lg text-md font-bold text-gray-900 capitalis">
                                        saman sayyar
                                    </p>
                                </div>
                            </a>
                            <a href="#"
                                class="flex py-3 px-4 flex-col bg-green-500 bg-opacity-50 justify-between items-center shadow-md rounded-lg transition duration-300 hover:shadow-xl hover:bg-opacity-70">
                                <div class="object-cover p-1 transform">
                                    <img class="w-32 h-32 object-cover bg-cover rounded-lg" src="./img/samansayyar.jpg">
                                </div>
                                <div class="object-cover p-1 mt-3 px-2">
                                    <p class="md:text-lg text-md font-bold text-gray-900 capitalis">
                                        saman sayyar
                                    </p>
                                </div>
                            </a>
                            <a href="#"
                                class="flex py-3 px-4 flex-col bg-green-500 bg-opacity-50 justify-between items-center shadow-md rounded-lg transition duration-300 hover:shadow-xl hover:bg-opacity-70">
                                <div class="object-cover p-1 transform">
                                    <img class="w-32 h-32 object-cover bg-cover rounded-lg" src="./img/samansayyar.jpg">
                                </div>
                                <div class="object-cover p-1 mt-3 px-2">
                                    <p class="md:text-lg text-md font-bold text-gray-900 capitalis">
                                        saman sayyar
                                    </p>
                                </div>
                            </a>
                            <a href="#"
                                class="flex py-3 px-4 flex-col bg-green-500 bg-opacity-50 justify-between items-center shadow-md rounded-lg transition duration-300 hover:shadow-xl hover:bg-opacity-70">
                                <div class="object-cover p-1 transform">
                                    <img class="w-32 h-32 object-cover bg-cover rounded-lg" src="./img/samansayyar.jpg">
                                </div>
                                <div class="object-cover p-1 mt-3 px-2">
                                    <p class="md:text-lg text-md font-bold text-gray-900 capitalis">
                                        saman sayyar
                                    </p>
                                </div>
                            </a>
                            <a href="#"
                                class="flex py-3 px-4 flex-col bg-green-500 bg-opacity-50 justify-between items-center shadow-md rounded-lg transition duration-300 hover:shadow-xl hover:bg-opacity-70">
                                <div class="object-cover p-1 transform">
                                    <img class="w-32 h-32 object-cover bg-cover rounded-lg" src="./img/samansayyar.jpg">
                                </div>
                                <div class="object-cover p-1 mt-3 px-2">
                                    <p class="md:text-lg text-md font-bold text-gray-900 capitalis">
                                        saman sayyar
                                    </p>
                                </div>
                            </a>
                            <a href="#"
                                class="flex py-3 px-4 flex-col bg-green-500 bg-opacity-50 justify-between items-center shadow-md rounded-lg transition duration-300 hover:shadow-xl hover:bg-opacity-70">
                                <div class="object-cover p-1 transform">
                                    <img class="w-32 h-32 object-cover bg-cover rounded-lg" src="./img/samansayyar.jpg">
                                </div>
                                <div class="object-cover p-1 mt-3 px-2">
                                    <p class="md:text-lg text-md font-bold text-gray-900 capitalis">
                                        saman sayyar
                                    </p>
                                </div>
                            </a>
                            <a href="#"
                                class="flex py-3 px-4 flex-col bg-green-500 bg-opacity-50 justify-between items-center shadow-md rounded-lg transition duration-300 hover:shadow-xl hover:bg-opacity-70">
                                <div class="object-cover p-1 transform">
                                    <img class="w-32 h-32 object-cover bg-cover rounded-lg" src="./img/samansayyar.jpg">
                                </div>
                                <div class="object-cover p-1 mt-3 px-2">
                                    <p class="md:text-lg text-md font-bold text-gray-900 capitalis">
                                        saman sayyar
                                    </p>
                                </div>
                            </a>
                            <a href="#"
                                class="flex py-3 px-4 flex-col bg-green-500 bg-opacity-50 justify-between items-center shadow-md rounded-lg transition duration-300 hover:shadow-xl hover:bg-opacity-70">
                                <div class="object-cover p-1 transform">
                                    <img class="w-32 h-32 object-cover bg-cover rounded-lg" src="./img/samansayyar.jpg">
                                </div>
                                <div class="object-cover p-1 mt-3 px-2">
                                    <p class="md:text-lg text-md font-bold text-gray-900 capitalis">
                                        saman sayyar
                                    </p>
                                </div>
                            </a>
                            <a href="#"
                                class="flex py-3 px-4 flex-col bg-green-500 bg-opacity-50 justify-between items-center shadow-md rounded-lg transition duration-300 hover:shadow-xl hover:bg-opacity-70">
                                <div class="object-cover p-1 transform">
                                    <img class="w-32 h-32 object-cover bg-cover rounded-lg" src="./img/samansayyar.jpg">
                                </div>
                                <div class="object-cover p-1 mt-3 px-2">
                                    <p class="md:text-lg text-md font-bold text-gray-900 capitalis">
                                        saman sayyar
                                    </p>
                                </div>
                            </a>
                            <a href="#"
                                class="flex py-3 px-4 flex-col bg-green-500 bg-opacity-50 justify-between items-center shadow-md rounded-lg transition duration-300 hover:shadow-xl hover:bg-opacity-70">
                                <div class="object-cover p-1 transform">
                                    <img class="w-32 h-32 object-cover bg-cover rounded-lg" src="./img/samansayyar.jpg">
                                </div>
                                <div class="object-cover p-1 mt-3 px-2">
                                    <p class="md:text-lg text-md font-bold text-gray-900 capitalis">
                                        saman sayyar
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="w-full " x-show="tab === 'about'">
                    <div class="my-10 flex flex-col space-y-4  w-full mx-auto text-center h-screen">
                        <div class="my-4">
                            <h3 class="mx-2 font-bold text-black md:text-2xl w-full text-lg capitalize">about</h3>
                        </div>
                        <p
                            class="md:text-md leading-7 md:px-0 px-3 text-center mx-auto text-sm md:max-w-3xl max-w-xl text-gray-800">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
