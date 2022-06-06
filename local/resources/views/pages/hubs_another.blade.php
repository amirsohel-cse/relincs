<x-guest-layout>
    @section('title')
        Hubs
    @endsection

    <div class="my-3 mx-2" x-data="{ tab : 'media' , tab_slug : 'latest'}">
        <div class="grid grid-cols-12 gap-4 md:mt-2 mt-6">
            <div
                class="px-5 py-3 flex bg-white flex-col md:justify-start md:items-center items-center justify-center md:col-span-3 col-span-12 text-gray-800">
                <div class="md:w-60 w-40">
                    <img src="./img/amir.jpg" class="w-full rounded-full" alt="">
                </div>
                <div class="mt-2 text-center  md:text-2xl text-xl flex justify-center">name trending</div>

                <div class="w-full bg-gray-300 mt-4" style="height: .036rem;"></div>
                <br>

                <div class="w-full">
                    <div class="w-full flex flex-col justify-start">
                        <div class="mt-2">
                            <p
                                class="flex items-center text-gray-900 md:text-lg text-lg text-left capitalize font-base">
                                <svg class="w-5 h-5 mr-2" aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                    </path>
                                    <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                setting
                            </p>
                        </div>
                        <ul class="flex justify-start w-full flex-col space-y-2">
                            <a
                                class="mt-3 transition duration-300 rounded-md cursor-pointer hover:bg-indigo-600 text-gray-800 hover:text-white bg-gray-100 md:text-md text-sm capitalize px-2 py-2 w-full">
                                notification</a>
                            <a
                                class="transition duration-300 rounded-md cursor-pointer hover:bg-indigo-600 text-gray-800 hover:text-white bg-gray-100 md:text-md text-sm capitalize px-2 py-2 w-full">
                                account</a>
                            <a
                                class="transition duration-300 rounded-md cursor-pointer hover:bg-indigo-600 text-gray-800 hover:text-white bg-gray-100 md:text-md text-sm capitalize px-2 py-2 w-full">
                                privacy</a>
                            <a
                                class="transition duration-300 rounded-md cursor-pointer hover:bg-indigo-600 text-gray-800 hover:text-white bg-gray-100 md:text-md text-sm capitalize px-2 py-2 w-full">
                                followers</a>
                            <a
                                class="transition duration-300 rounded-md cursor-pointer hover:bg-indigo-600 text-gray-800 hover:text-white bg-gray-100 md:text-md text-sm capitalize px-2 py-2 w-full">
                                membership</a>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="p-2 w-full md:col-span-9 col-span-12">
                <div class="flex flex-col items-center w-full md:col-span-10">
                    <div class="w-full scrollere overflow-x-auto border-b">
                        <nav class="md:pb-4 pb-2 md:py-3 flex flex-row relative capitalize">
                            <a class="md:px-6 px-5 mx-2 md:py-2 py-2 md:text-md text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                href="#" :class="{ 'bg-gray-200': tab === 'media' }" @click="tab = 'media'">
                                <div class="">media</div> &nbsp; <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                </svg>
                            </a>
                            <a class="md:px-6 px-5 mx-2 md:py-2 py-2 md:text-md text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                href="#" :class="{ 'bg-gray-200': tab === 'wall' }" @click="tab = 'wall'">
                                <div class="">wall</div> &nbsp; <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                </svg>
                            </a>
                            <a class="md:px-6 px-5 mx-2 md:py-2 py-2 md:text-md text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                href="#" :class="{ 'bg-gray-200': tab === 'bulletin' }" @click="tab = 'bulletin'">
                                <div class="">bulletin</div> &nbsp; <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                </svg>
                            </a>
                        </nav>
                    </div>
                    <div class="w-full">
                        <div class="w-full" x-show.transition="tab === 'media'">
                            <div class="w-full scrollere ">
                                <nav
                                    class="md:pb-4 pb-2 md:py-3 flex w-full lg:flex-row flex-col justify-center relative capitalize">
                                    <a class="md:px-6 px-5 text-center mx-2 w-full md:py-2 py-2 md:text-sm text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                        href="#" :class="{ 'bg-gray-200': tab_slug === 'latest' }"
                                        @click="tab_slug = 'latest'">
                                        <div class="">latest</div>
                                    </a>
                                    <a class="md:px-6 px-5 text-center mx-2 w-full md:py-2 py-2 md:text-sm text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                        href="#" :class="{ 'bg-gray-200': tab_slug === 'top_rated' }"
                                        @click="tab_slug = 'top_rated'">
                                        <div class="">top rated</div>
                                    </a>
                                    <a class="md:px-6 px-5 text-center mx- w-full  md:py-2 py-2 md:text-sm text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                        href="#" :class="{ 'bg-gray-200': tab_slug === 'trending' }"
                                        @click="tab_slug = 'trending'">
                                        <div class="">trending</div>
                                    </a>
                                </nav>
                                <div class="my-2">
                                    <div class="relative text-gray-600">
                                        <input type="search" name="search" placeholder="Search"
                                            class="bg-white h-10 border border-gray-400 text-gray-800 px-5 pr-10 rounded-full text-sm focus:outline-none">
                                        <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                                            <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                                x="0px" y="0px" viewBox="0 0 56.966 56.966"
                                                style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                                                width="512px" height="512px">
                                                <path
                                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-8" x-show.transition="tab_slug === 'latest' ">

                                <div class="md:px-4 space-y-6 flex justify-center items-center flex-col">
                                    <div class="flex flex-col justify-center items-center bg-indigo-200 border w-full p-2">
                                        <div
                                            class="bg-transparent  w-80 sm:w-full h-auto sm:h-64 rounded-lg flex flex-col sm:flex-row gap-5 select-none">
                                            <div
                                                class="relative h-52 sm:h-full sm:w-72 rounded-xl bg-gray-100 bg-center bg-cover object-cover">
                                                <img src="./img/luca-bravo-O453M2Liufs-unsplash.jpg" alt="result"
                                                    class="object-cover bg-cover rounded-xl h-52 sm:h-full sm:w-72">
                                                <div
                                                    class="flex justify-center cursor-pointer  items-center absolute inset-0 text-white">
                                                    <svg class="w-12 h-12 transition duration-300  hover:bg-indigo-500 shadow-md rounded-full"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="flex sm:flex-1 flex-col gap-2 p-1">
                                                <h1 class="md:text-lg text-sm text-left font-bold  text-gray-900">
                                                    This is the title for your card. This is really
                                                    cool
                                                </h1>
                                                <!-- <p class="text-gray-500 text-sm sm:text-base line-clamp-3">
                                                                        This is the desctiption for your card. This is really really long. This is used to describe the content of the card. I hope you like the design...
                                                                    </p> -->
                                                <button
                                                    class='border border-gray-200 rounded-full hover:bg-indigo-300 w-20 flex items-center justify-center bg-indigo-200 gap-1 sm:text-md px-2 py-1  transition-colors focus:bg-gray-900  focus:outline-none focus-visible:border-gray-500'>
                                                    <span>public</span>
                                                </button>
                                                <div class="flex items-center justify-start md:text-sm text-xs w-40">
                                                    <div class="w-8 ">
                                                        <img src="./img/amir.jpg" alt="admin_hubs_posted"
                                                            class="w-full rounded-full">
                                                    </div>
                                                    <div class="ml-2">
                                                        <p class="text-xs text-gray-600">Samansayyar
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flex gap-4 md:mt-auto mt-5">
                                                    <button
                                                        class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                            viewBox="0 0 1024 1024" height="1em" width="1em"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M923 283.6a260.04 260.04 0 0 0-56.9-82.8 264.4 264.4 0 0 0-84-55.5A265.34 265.34 0 0 0 679.7 125c-49.3 0-97.4 13.5-139.2 39-10 6.1-19.5 12.8-28.5 20.1-9-7.3-18.5-14-28.5-20.1-41.8-25.5-89.9-39-139.2-39-35.5 0-69.9 6.8-102.4 20.3-31.4 13-59.7 31.7-84 55.5a258.44 258.44 0 0 0-56.9 82.8c-13.9 32.3-21 66.6-21 101.9 0 33.3 6.8 68 20.3 103.3 11.3 29.5 27.5 60.1 48.2 91 32.8 48.9 77.9 99.9 133.9 151.6 92.8 85.7 184.7 144.9 188.6 147.3l23.7 15.2c10.5 6.7 24 6.7 34.5 0l23.7-15.2c3.9-2.5 95.7-61.6 188.6-147.3 56-51.7 101.1-102.7 133.9-151.6 20.7-30.9 37-61.5 48.2-91 13.5-35.3 20.3-70 20.3-103.3.1-35.3-7-69.6-20.9-101.9zM512 814.8S156 586.7 156 385.5C156 283.6 240.3 201 344.3 201c73.1 0 136.5 40.8 167.7 100.4C543.2 241.8 606.6 201 679.7 201c104 0 188.3 82.6 188.3 184.5 0 201.2-356 429.3-356 429.3z">
                                                            </path>
                                                        </svg>
                                                        <span>556</span>
                                                    </button>
                                                    <button
                                                        class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                            viewBox="0 0 1024 1024" height="1em" width="1em"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M464 512a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm200 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm-400 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm661.2-173.6c-22.6-53.7-55-101.9-96.3-143.3a444.35 444.35 0 0 0-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9a445.35 445.35 0 0 0-142 96.5c-40.9 41.3-73 89.3-95.2 142.8-23 55.4-34.6 114.3-34.3 174.9A449.4 449.4 0 0 0 112 714v152a46 46 0 0 0 46 46h152.1A449.4 449.4 0 0 0 510 960h2.1c59.9 0 118-11.6 172.7-34.3a444.48 444.48 0 0 0 142.8-95.2c41.3-40.9 73.8-88.7 96.5-142 23.6-55.2 35.6-113.9 35.9-174.5.3-60.9-11.5-120-34.8-175.6zm-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8 69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9 44.6 18.7 84.6 45.6 119 80 34.3 34.3 61.3 74.4 80 119 19.4 46.2 29.1 95.2 28.9 145.8-.6 99.6-39.7 192.9-110.1 262.7z">
                                                            </path>
                                                        </svg>
                                                        <span>56</span>
                                                    </button>
                                                    <button
                                                        class='ml-auto flex items-center gap-1 bg-indigo-700  border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-800 hover:text-white transition-colors focus:bg-gray-900 focus:outline-none focus-visible:border-gray-500 text-white'>
                                                        <span>Read more</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col justify-center items-center bg-gray-100 border p-2 w-full">
                                        <div
                                            class="bg-transparent  w-80 sm:w-full h-auto sm:h-64 rounded-lg flex flex-col sm:flex-row gap-5 select-none">
                                            <div
                                                class="relative h-52 sm:h-full sm:w-72 rounded-xl bg-gray-100 bg-center bg-cover object-cover">
                                                <img src="./img/luca-bravo-O453M2Liufs-unsplash.jpg" alt="result"
                                                    class="object-cover bg-cover rounded-xl h-52 sm:h-full sm:w-72">
                                                <div
                                                    class="flex justify-center cursor-pointer  items-center absolute inset-0 text-white">
                                                    <svg class="w-12 h-12 transition duration-300  hover:bg-indigo-500 shadow-md rounded-full"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="flex sm:flex-1 flex-col gap-2 p-1">
                                                <h1 class="md:text-lg text-sm text-left font-bold  text-gray-900">
                                                    This is the title for your card. This is really
                                                    cool
                                                </h1>
                                                <!-- <p class="text-gray-500 text-sm sm:text-base line-clamp-3">
                                                                        This is the desctiption for your card. This is really really long. This is used to describe the content of the card. I hope you like the design...
                                                                    </p> -->
                                                <button
                                                    class='border border-gray-200 rounded-full hover:bg-indigo-300 w-20 flex items-center justify-center bg-indigo-200 gap-1 sm:text-md px-2 py-1  transition-colors focus:bg-gray-900 focus:outline-none focus-visible:border-gray-500'>
                                                    <span>public</span>
                                                </button>
                                                <div class="flex items-center justify-start md:text-sm text-xs w-40">
                                                    <div class="w-8 ">
                                                        <img src="./img/amir.jpg" alt="admin_hubs_posted"
                                                            class="w-full rounded-full">
                                                    </div>
                                                    <div class="ml-2">
                                                        <p class="text-xs text-gray-600">Samansayyar
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flex gap-4 md:mt-auto mt-5">
                                                    <button
                                                        class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                            viewBox="0 0 1024 1024" height="1em" width="1em"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M923 283.6a260.04 260.04 0 0 0-56.9-82.8 264.4 264.4 0 0 0-84-55.5A265.34 265.34 0 0 0 679.7 125c-49.3 0-97.4 13.5-139.2 39-10 6.1-19.5 12.8-28.5 20.1-9-7.3-18.5-14-28.5-20.1-41.8-25.5-89.9-39-139.2-39-35.5 0-69.9 6.8-102.4 20.3-31.4 13-59.7 31.7-84 55.5a258.44 258.44 0 0 0-56.9 82.8c-13.9 32.3-21 66.6-21 101.9 0 33.3 6.8 68 20.3 103.3 11.3 29.5 27.5 60.1 48.2 91 32.8 48.9 77.9 99.9 133.9 151.6 92.8 85.7 184.7 144.9 188.6 147.3l23.7 15.2c10.5 6.7 24 6.7 34.5 0l23.7-15.2c3.9-2.5 95.7-61.6 188.6-147.3 56-51.7 101.1-102.7 133.9-151.6 20.7-30.9 37-61.5 48.2-91 13.5-35.3 20.3-70 20.3-103.3.1-35.3-7-69.6-20.9-101.9zM512 814.8S156 586.7 156 385.5C156 283.6 240.3 201 344.3 201c73.1 0 136.5 40.8 167.7 100.4C543.2 241.8 606.6 201 679.7 201c104 0 188.3 82.6 188.3 184.5 0 201.2-356 429.3-356 429.3z">
                                                            </path>
                                                        </svg>
                                                        <span>556</span>
                                                    </button>
                                                    <button
                                                        class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                            viewBox="0 0 1024 1024" height="1em" width="1em"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M464 512a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm200 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm-400 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm661.2-173.6c-22.6-53.7-55-101.9-96.3-143.3a444.35 444.35 0 0 0-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9a445.35 445.35 0 0 0-142 96.5c-40.9 41.3-73 89.3-95.2 142.8-23 55.4-34.6 114.3-34.3 174.9A449.4 449.4 0 0 0 112 714v152a46 46 0 0 0 46 46h152.1A449.4 449.4 0 0 0 510 960h2.1c59.9 0 118-11.6 172.7-34.3a444.48 444.48 0 0 0 142.8-95.2c41.3-40.9 73.8-88.7 96.5-142 23.6-55.2 35.6-113.9 35.9-174.5.3-60.9-11.5-120-34.8-175.6zm-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8 69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9 44.6 18.7 84.6 45.6 119 80 34.3 34.3 61.3 74.4 80 119 19.4 46.2 29.1 95.2 28.9 145.8-.6 99.6-39.7 192.9-110.1 262.7z">
                                                            </path>
                                                        </svg>
                                                        <span>56</span>
                                                    </button>
                                                    <button
                                                        class='ml-auto flex items-center gap-1 bg-indigo-700  border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-800 hover:text-white transition-colors focus:bg-gray-900 focus:outline-none focus-visible:border-gray-500 text-white'>
                                                        <span>Read more</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-8" x-show.transition="tab_slug === 'top_rated' ">
                                <div class="md:px-4 space-y-6 flex justify-center items-center flex-col">
                                    <div class="flex flex-col justify-center items-center bg-indigo-200 border w-full p-2">
                                        <div
                                            class="bg-transparent  w-80 sm:w-full h-auto sm:h-64 rounded-lg flex flex-col sm:flex-row gap-5 select-none">
                                            <div
                                                class="relative h-52 sm:h-full sm:w-72 rounded-xl bg-gray-100 bg-center bg-cover object-cover">
                                                <img src="./img/luca-bravo-O453M2Liufs-unsplash.jpg" alt="result"
                                                    class="object-cover bg-cover rounded-xl h-52 sm:h-full sm:w-72">
                                                <div
                                                    class="flex justify-center cursor-pointer  items-center absolute inset-0 text-white">
                                                    <svg class="w-12 h-12 transition duration-300  hover:bg-indigo-500 shadow-md rounded-full"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="flex sm:flex-1 flex-col gap-2 p-1">
                                                <h1 class="md:text-lg text-sm text-left font-bold  text-gray-900">
                                                    This is the title for your card. This is really
                                                    cool
                                                </h1>
                                                <!-- <p class="text-gray-500 text-sm sm:text-base line-clamp-3">
                                                                        This is the desctiption for your card. This is really really long. This is used to describe the content of the card. I hope you like the design...
                                                                    </p> -->
                                                <button
                                                    class='border border-gray-200 rounded-full hover:bg-indigo-300 w-20 flex items-center justify-center bg-indigo-200 gap-1 sm:text-md px-2 py-1  transition-colors focus:bg-gray-900 focus:outline-none focus-visible:border-gray-500'>
                                                    <span>public</span>
                                                </button>
                                                <div class="flex items-center justify-start md:text-sm text-xs w-40">
                                                    <div class="w-8 ">
                                                        <img src="./img/amir.jpg" alt="admin_hubs_posted"
                                                            class="w-full rounded-full">
                                                    </div>
                                                    <div class="ml-2">
                                                        <p class="text-xs text-gray-600">Samansayyar
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flex gap-4 md:mt-auto mt-5">
                                                    <button
                                                        class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                            viewBox="0 0 1024 1024" height="1em" width="1em"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M923 283.6a260.04 260.04 0 0 0-56.9-82.8 264.4 264.4 0 0 0-84-55.5A265.34 265.34 0 0 0 679.7 125c-49.3 0-97.4 13.5-139.2 39-10 6.1-19.5 12.8-28.5 20.1-9-7.3-18.5-14-28.5-20.1-41.8-25.5-89.9-39-139.2-39-35.5 0-69.9 6.8-102.4 20.3-31.4 13-59.7 31.7-84 55.5a258.44 258.44 0 0 0-56.9 82.8c-13.9 32.3-21 66.6-21 101.9 0 33.3 6.8 68 20.3 103.3 11.3 29.5 27.5 60.1 48.2 91 32.8 48.9 77.9 99.9 133.9 151.6 92.8 85.7 184.7 144.9 188.6 147.3l23.7 15.2c10.5 6.7 24 6.7 34.5 0l23.7-15.2c3.9-2.5 95.7-61.6 188.6-147.3 56-51.7 101.1-102.7 133.9-151.6 20.7-30.9 37-61.5 48.2-91 13.5-35.3 20.3-70 20.3-103.3.1-35.3-7-69.6-20.9-101.9zM512 814.8S156 586.7 156 385.5C156 283.6 240.3 201 344.3 201c73.1 0 136.5 40.8 167.7 100.4C543.2 241.8 606.6 201 679.7 201c104 0 188.3 82.6 188.3 184.5 0 201.2-356 429.3-356 429.3z">
                                                            </path>
                                                        </svg>
                                                        <span>556</span>
                                                    </button>
                                                    <button
                                                        class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                            viewBox="0 0 1024 1024" height="1em" width="1em"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M464 512a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm200 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm-400 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm661.2-173.6c-22.6-53.7-55-101.9-96.3-143.3a444.35 444.35 0 0 0-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9a445.35 445.35 0 0 0-142 96.5c-40.9 41.3-73 89.3-95.2 142.8-23 55.4-34.6 114.3-34.3 174.9A449.4 449.4 0 0 0 112 714v152a46 46 0 0 0 46 46h152.1A449.4 449.4 0 0 0 510 960h2.1c59.9 0 118-11.6 172.7-34.3a444.48 444.48 0 0 0 142.8-95.2c41.3-40.9 73.8-88.7 96.5-142 23.6-55.2 35.6-113.9 35.9-174.5.3-60.9-11.5-120-34.8-175.6zm-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8 69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9 44.6 18.7 84.6 45.6 119 80 34.3 34.3 61.3 74.4 80 119 19.4 46.2 29.1 95.2 28.9 145.8-.6 99.6-39.7 192.9-110.1 262.7z">
                                                            </path>
                                                        </svg>
                                                        <span>56</span>
                                                    </button>
                                                    <button
                                                        class='ml-auto flex items-center gap-1 bg-indigo-700  border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-800 hover:text-white transition-colors focus:bg-gray-900 focus:outline-none focus-visible:border-gray-500 text-white'>
                                                        <span>Read more</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col justify-center items-center bg-gray-100 border p-2 w-full">
                                        <div
                                            class="bg-transparent  w-80 sm:w-full h-auto sm:h-64 rounded-lg flex flex-col sm:flex-row gap-5 select-none">
                                            <div
                                                class="relative h-52 sm:h-full sm:w-72 rounded-xl bg-gray-100 bg-center bg-cover object-cover">
                                                <img src="./img/luca-bravo-O453M2Liufs-unsplash.jpg" alt="result"
                                                    class="object-cover bg-cover rounded-xl h-52 sm:h-full sm:w-72">
                                                <div
                                                    class="flex justify-center cursor-pointer  items-center absolute inset-0 text-white">
                                                    <svg class="w-12 h-12 transition duration-300  hover:bg-indigo-500 shadow-md rounded-full"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="flex sm:flex-1 flex-col gap-2 p-1">
                                                <h1 class="md:text-lg text-sm text-left font-bold  text-gray-900">
                                                    This is the title for your card. This is really
                                                    cool
                                                </h1>
                                                <!-- <p class="text-gray-500 text-sm sm:text-base line-clamp-3">
                                                                        This is the desctiption for your card. This is really really long. This is used to describe the content of the card. I hope you like the design...
                                                                    </p> -->
                                                <button
                                                    class='border border-gray-200 rounded-full hover:bg-indigo-300 w-20 flex items-center justify-center bg-indigo-200 gap-1 sm:text-md px-2 py-1  transition-colors focus:bg-gray-900 focus:outline-none focus-visible:border-gray-500'>
                                                    <span>public</span>
                                                </button>
                                                <div class="flex items-center justify-start md:text-sm text-xs w-40">
                                                    <div class="w-8 ">
                                                        <img src="./img/amir.jpg" alt="admin_hubs_posted"
                                                            class="w-full rounded-full">
                                                    </div>
                                                    <div class="ml-2">
                                                        <p class="text-xs text-gray-600">Samansayyar
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flex gap-4 md:mt-auto mt-5">
                                                    <button
                                                        class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                            viewBox="0 0 1024 1024" height="1em" width="1em"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M923 283.6a260.04 260.04 0 0 0-56.9-82.8 264.4 264.4 0 0 0-84-55.5A265.34 265.34 0 0 0 679.7 125c-49.3 0-97.4 13.5-139.2 39-10 6.1-19.5 12.8-28.5 20.1-9-7.3-18.5-14-28.5-20.1-41.8-25.5-89.9-39-139.2-39-35.5 0-69.9 6.8-102.4 20.3-31.4 13-59.7 31.7-84 55.5a258.44 258.44 0 0 0-56.9 82.8c-13.9 32.3-21 66.6-21 101.9 0 33.3 6.8 68 20.3 103.3 11.3 29.5 27.5 60.1 48.2 91 32.8 48.9 77.9 99.9 133.9 151.6 92.8 85.7 184.7 144.9 188.6 147.3l23.7 15.2c10.5 6.7 24 6.7 34.5 0l23.7-15.2c3.9-2.5 95.7-61.6 188.6-147.3 56-51.7 101.1-102.7 133.9-151.6 20.7-30.9 37-61.5 48.2-91 13.5-35.3 20.3-70 20.3-103.3.1-35.3-7-69.6-20.9-101.9zM512 814.8S156 586.7 156 385.5C156 283.6 240.3 201 344.3 201c73.1 0 136.5 40.8 167.7 100.4C543.2 241.8 606.6 201 679.7 201c104 0 188.3 82.6 188.3 184.5 0 201.2-356 429.3-356 429.3z">
                                                            </path>
                                                        </svg>
                                                        <span>556</span>
                                                    </button>
                                                    <button
                                                        class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                            viewBox="0 0 1024 1024" height="1em" width="1em"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M464 512a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm200 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm-400 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm661.2-173.6c-22.6-53.7-55-101.9-96.3-143.3a444.35 444.35 0 0 0-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9a445.35 445.35 0 0 0-142 96.5c-40.9 41.3-73 89.3-95.2 142.8-23 55.4-34.6 114.3-34.3 174.9A449.4 449.4 0 0 0 112 714v152a46 46 0 0 0 46 46h152.1A449.4 449.4 0 0 0 510 960h2.1c59.9 0 118-11.6 172.7-34.3a444.48 444.48 0 0 0 142.8-95.2c41.3-40.9 73.8-88.7 96.5-142 23.6-55.2 35.6-113.9 35.9-174.5.3-60.9-11.5-120-34.8-175.6zm-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8 69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9 44.6 18.7 84.6 45.6 119 80 34.3 34.3 61.3 74.4 80 119 19.4 46.2 29.1 95.2 28.9 145.8-.6 99.6-39.7 192.9-110.1 262.7z">
                                                            </path>
                                                        </svg>
                                                        <span>56</span>
                                                    </button>
                                                    <button
                                                        class='ml-auto flex items-center gap-1 bg-indigo-700  border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-800 hover:text-white transition-colors focus:bg-gray-900 focus:outline-none focus-visible:border-gray-500 text-white'>
                                                        <span>Read more</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-8" x-show.transition="tab_slug === 'trending' ">
                                <div class="md:px-4 space-y-6 flex justify-center items-center flex-col">
                                    <div class="flex flex-col justify-center items-center bg-indigo-200 border w-full p-2">
                                        <div
                                            class="bg-transparent  w-80 sm:w-full h-auto sm:h-64 rounded-lg flex flex-col sm:flex-row gap-5 select-none">
                                            <div
                                                class="relative h-52 sm:h-full sm:w-72 rounded-xl bg-gray-100 bg-center bg-cover object-cover">
                                                <img src="./img/luca-bravo-O453M2Liufs-unsplash.jpg" alt="result"
                                                    class="object-cover bg-cover rounded-xl h-52 sm:h-full sm:w-72">
                                                <div
                                                    class="flex justify-center cursor-pointer  items-center absolute inset-0 text-white">
                                                    <svg class="w-12 h-12 transition duration-300  hover:bg-indigo-500 shadow-md rounded-full"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="flex sm:flex-1 flex-col gap-2 p-1">
                                                <h1 class="md:text-lg text-sm text-left font-bold  text-gray-900">
                                                    This is the title for your card. This is really
                                                    cool
                                                </h1>
                                                <!-- <p class="text-gray-500 text-sm sm:text-base line-clamp-3">
                                                                        This is the desctiption for your card. This is really really long. This is used to describe the content of the card. I hope you like the design...
                                                                    </p> -->
                                                <button
                                                    class='border border-gray-200 rounded-full hover:bg-indigo-300 w-20 flex items-center justify-center bg-indigo-200 gap-1 sm:text-md px-2 py-1  transition-colors focus:bg-gray-900 focus:outline-none focus-visible:border-gray-500'>
                                                    <span>public</span>
                                                </button>
                                                <div class="flex items-center justify-start md:text-sm text-xs w-40">
                                                    <div class="w-8 ">
                                                        <img src="./img/amir.jpg" alt="admin_hubs_posted"
                                                            class="w-full rounded-full">
                                                    </div>
                                                    <div class="ml-2">
                                                        <p class="text-xs text-gray-600">Samansayyar
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flex gap-4 md:mt-auto mt-5">
                                                    <button
                                                        class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                            viewBox="0 0 1024 1024" height="1em" width="1em"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M923 283.6a260.04 260.04 0 0 0-56.9-82.8 264.4 264.4 0 0 0-84-55.5A265.34 265.34 0 0 0 679.7 125c-49.3 0-97.4 13.5-139.2 39-10 6.1-19.5 12.8-28.5 20.1-9-7.3-18.5-14-28.5-20.1-41.8-25.5-89.9-39-139.2-39-35.5 0-69.9 6.8-102.4 20.3-31.4 13-59.7 31.7-84 55.5a258.44 258.44 0 0 0-56.9 82.8c-13.9 32.3-21 66.6-21 101.9 0 33.3 6.8 68 20.3 103.3 11.3 29.5 27.5 60.1 48.2 91 32.8 48.9 77.9 99.9 133.9 151.6 92.8 85.7 184.7 144.9 188.6 147.3l23.7 15.2c10.5 6.7 24 6.7 34.5 0l23.7-15.2c3.9-2.5 95.7-61.6 188.6-147.3 56-51.7 101.1-102.7 133.9-151.6 20.7-30.9 37-61.5 48.2-91 13.5-35.3 20.3-70 20.3-103.3.1-35.3-7-69.6-20.9-101.9zM512 814.8S156 586.7 156 385.5C156 283.6 240.3 201 344.3 201c73.1 0 136.5 40.8 167.7 100.4C543.2 241.8 606.6 201 679.7 201c104 0 188.3 82.6 188.3 184.5 0 201.2-356 429.3-356 429.3z">
                                                            </path>
                                                        </svg>
                                                        <span>556</span>
                                                    </button>
                                                    <button
                                                        class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                            viewBox="0 0 1024 1024" height="1em" width="1em"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M464 512a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm200 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm-400 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm661.2-173.6c-22.6-53.7-55-101.9-96.3-143.3a444.35 444.35 0 0 0-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9a445.35 445.35 0 0 0-142 96.5c-40.9 41.3-73 89.3-95.2 142.8-23 55.4-34.6 114.3-34.3 174.9A449.4 449.4 0 0 0 112 714v152a46 46 0 0 0 46 46h152.1A449.4 449.4 0 0 0 510 960h2.1c59.9 0 118-11.6 172.7-34.3a444.48 444.48 0 0 0 142.8-95.2c41.3-40.9 73.8-88.7 96.5-142 23.6-55.2 35.6-113.9 35.9-174.5.3-60.9-11.5-120-34.8-175.6zm-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8 69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9 44.6 18.7 84.6 45.6 119 80 34.3 34.3 61.3 74.4 80 119 19.4 46.2 29.1 95.2 28.9 145.8-.6 99.6-39.7 192.9-110.1 262.7z">
                                                            </path>
                                                        </svg>
                                                        <span>56</span>
                                                    </button>
                                                    <button
                                                        class='ml-auto flex items-center gap-1 bg-indigo-700  border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-800 hover:text-white transition-colors focus:bg-gray-900 focus:outline-none focus-visible:border-gray-500 text-white'>
                                                        <span>Read more</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col justify-center items-center bg-gray-100 border p-2 w-full">
                                        <div
                                            class="bg-transparent  w-80 sm:w-full h-auto sm:h-64 rounded-lg flex flex-col sm:flex-row gap-5 select-none">
                                            <div
                                                class="relative h-52 sm:h-full sm:w-72 rounded-xl bg-gray-100 bg-center bg-cover object-cover">
                                                <img src="./img/luca-bravo-O453M2Liufs-unsplash.jpg" alt="result"
                                                    class="object-cover bg-cover rounded-xl h-52 sm:h-full sm:w-72">
                                                <div
                                                    class="flex justify-center cursor-pointer  items-center absolute inset-0 text-white">
                                                    <svg class="w-12 h-12 transition duration-300  hover:bg-indigo-500 shadow-md rounded-full"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="flex sm:flex-1 flex-col gap-2 p-1">
                                                <h1 class="md:text-lg text-sm text-left font-bold  text-gray-900">
                                                    This is the title for your card. This is really
                                                    cool
                                                </h1>
                                                <!-- <p class="text-gray-500 text-sm sm:text-base line-clamp-3">
                                                                        This is the desctiption for your card. This is really really long. This is used to describe the content of the card. I hope you like the design...
                                                                    </p> -->
                                                <button
                                                    class='border border-gray-200 rounded-full hover:bg-indigo-300 w-20 flex items-center justify-center bg-indigo-200 gap-1 sm:text-md px-2 py-1  transition-colors focus:bg-gray-900 focus:outline-none focus-visible:border-gray-500'>
                                                    <span>public</span>
                                                </button>
                                                <div class="flex items-center justify-start md:text-sm text-xs w-40">
                                                    <div class="w-8 ">
                                                        <img src="./img/amir.jpg" alt="admin_hubs_posted"
                                                            class="w-full rounded-full">
                                                    </div>
                                                    <div class="ml-2">
                                                        <p class="text-xs text-gray-600">Samansayyar
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flex gap-4 md:mt-auto mt-5">
                                                    <button
                                                        class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                            viewBox="0 0 1024 1024" height="1em" width="1em"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M923 283.6a260.04 260.04 0 0 0-56.9-82.8 264.4 264.4 0 0 0-84-55.5A265.34 265.34 0 0 0 679.7 125c-49.3 0-97.4 13.5-139.2 39-10 6.1-19.5 12.8-28.5 20.1-9-7.3-18.5-14-28.5-20.1-41.8-25.5-89.9-39-139.2-39-35.5 0-69.9 6.8-102.4 20.3-31.4 13-59.7 31.7-84 55.5a258.44 258.44 0 0 0-56.9 82.8c-13.9 32.3-21 66.6-21 101.9 0 33.3 6.8 68 20.3 103.3 11.3 29.5 27.5 60.1 48.2 91 32.8 48.9 77.9 99.9 133.9 151.6 92.8 85.7 184.7 144.9 188.6 147.3l23.7 15.2c10.5 6.7 24 6.7 34.5 0l23.7-15.2c3.9-2.5 95.7-61.6 188.6-147.3 56-51.7 101.1-102.7 133.9-151.6 20.7-30.9 37-61.5 48.2-91 13.5-35.3 20.3-70 20.3-103.3.1-35.3-7-69.6-20.9-101.9zM512 814.8S156 586.7 156 385.5C156 283.6 240.3 201 344.3 201c73.1 0 136.5 40.8 167.7 100.4C543.2 241.8 606.6 201 679.7 201c104 0 188.3 82.6 188.3 184.5 0 201.2-356 429.3-356 429.3z">
                                                            </path>
                                                        </svg>
                                                        <span>556</span>
                                                    </button>
                                                    <button
                                                        class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                            viewBox="0 0 1024 1024" height="1em" width="1em"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M464 512a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm200 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm-400 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm661.2-173.6c-22.6-53.7-55-101.9-96.3-143.3a444.35 444.35 0 0 0-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9a445.35 445.35 0 0 0-142 96.5c-40.9 41.3-73 89.3-95.2 142.8-23 55.4-34.6 114.3-34.3 174.9A449.4 449.4 0 0 0 112 714v152a46 46 0 0 0 46 46h152.1A449.4 449.4 0 0 0 510 960h2.1c59.9 0 118-11.6 172.7-34.3a444.48 444.48 0 0 0 142.8-95.2c41.3-40.9 73.8-88.7 96.5-142 23.6-55.2 35.6-113.9 35.9-174.5.3-60.9-11.5-120-34.8-175.6zm-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8 69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9 44.6 18.7 84.6 45.6 119 80 34.3 34.3 61.3 74.4 80 119 19.4 46.2 29.1 95.2 28.9 145.8-.6 99.6-39.7 192.9-110.1 262.7z">
                                                            </path>
                                                        </svg>
                                                        <span>56</span>
                                                    </button>
                                                    <button
                                                        class='ml-auto flex items-center gap-1 bg-indigo-700  border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-800 hover:text-white transition-colors focus:bg-gray-900  focus:outline-none focus-visible:border-gray-500 text-white'>
                                                        <span>Read more</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="" x-show.transition="tab === 'wall'">
                            <div class="my-4 md:px-4 px-2">
                                <div class="grid md:grid-cols-3 grid-cols-2 md:gap-10 gap-6">

                                    <div class="relative flex-none flex md:flex-row flex-col cursor-pointer">
                                        <a href="#"
                                            class="absolute z-50 right-0 bottom-0   text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-4 w-4">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="absolute z-50 left-0 bottom-0   text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-4 w-4">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>
                                        <div
                                            class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                            <img src="./img/luca-bravo-O453M2Liufs-unsplash.jpg" alt="SamanSayyar"
                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">

                                            <a href="#"
                                                class="absolute flex justify-center items-center -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="relative flex-none flex md:flex-row flex-col cursor-pointer">
                                        <a href="#"
                                            class="absolute z-50 right-0 bottom-0   text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-4 w-4">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="absolute z-50 left-0 bottom-0   text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-4 w-4">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>
                                        <div
                                            class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                            <img src="./img/luca-bravo-O453M2Liufs-unsplash.jpg" alt="SamanSayyar"
                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                            <a href="#"
                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="relative flex-none flex md:flex-row flex-col cursor-pointer">
                                        <a href="#"
                                            class="absolute z-50 right-0 bottom-0   text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-4 w-4">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="absolute z-50 left-0 bottom-0   text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-4 w-4">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>
                                        <div
                                            class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                            <img src="./img/luca-bravo-O453M2Liufs-unsplash.jpg" alt="SamanSayyar"
                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                            <a href="#"
                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="relative flex-none flex md:flex-row flex-col cursor-pointer">
                                        <a href="#"
                                            class="absolute z-50 right-0 bottom-0   text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-4 w-4">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="absolute z-50 left-0 bottom-0   text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-4 w-4">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>
                                        <div
                                            class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                            <img src="./img/luca-bravo-O453M2Liufs-unsplash.jpg" alt="SamanSayyar"
                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                            <a href="#"
                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="relative flex-none flex md:flex-row flex-col cursor-pointer">
                                        <a href="#"
                                            class="absolute z-50 right-0 bottom-0   text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-4 w-4">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="absolute z-50 left-0 bottom-0   text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-4 w-4">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>
                                        <div
                                            class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                            <img src="./img/luca-bravo-O453M2Liufs-unsplash.jpg" alt="SamanSayyar"
                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                            <a href="#"
                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="relative flex-none flex md:flex-row flex-col cursor-pointer">
                                        <a href="#"
                                            class="absolute z-50 right-0 bottom-0   text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-4 w-4">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="absolute z-50 left-0 bottom-0   text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-4 w-4">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>
                                        <div
                                            class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                            <img src="./img/luca-bravo-O453M2Liufs-unsplash.jpg" alt="SamanSayyar"
                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                            <a href="#"
                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="relative flex-none flex md:flex-row flex-col cursor-pointer">
                                        <a href="#"
                                            class="absolute z-50 right-0 bottom-0   text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-4 w-4">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="absolute z-50 left-0 bottom-0   text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-4 w-4">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>
                                        <div
                                            class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                            <img src="./img/luca-bravo-O453M2Liufs-unsplash.jpg" alt="SamanSayyar"
                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                            <a href="#"
                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="relative flex-none flex md:flex-row flex-col cursor-pointer">
                                        <a href="#"
                                            class="absolute z-50 right-0 bottom-0   text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-4 w-4">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="absolute z-50 left-0 bottom-0   text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-4 w-4">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>
                                        <div
                                            class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                            <img src="./img/luca-bravo-O453M2Liufs-unsplash.jpg" alt="SamanSayyar"
                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                            <a href="#"
                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="relative flex-none flex md:flex-row flex-col cursor-pointer">
                                        <a href="#"
                                            class="absolute z-50 right-0 bottom-0   text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-4 w-4">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="absolute z-50 left-0 bottom-0   text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-4 w-4">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>
                                        <div
                                            class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                            <img src="./img/luca-bravo-O453M2Liufs-unsplash.jpg" alt="SamanSayyar"
                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                            <a href="#"
                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="relative flex-none flex md:flex-row flex-col cursor-pointer">
                                        <a href="#"
                                            class="absolute z-50 right-0 bottom-0   text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-4 w-4">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="absolute z-50 left-0 bottom-0   text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-4 w-4">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>
                                        <div
                                            class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                            <img src="./img/luca-bravo-O453M2Liufs-unsplash.jpg" alt="SamanSayyar"
                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                            <a href="#"
                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="" x-show.transition="tab === 'bulletin'">
                            <div class="my-2 mt-2 flex space-y-4 items-start justify-center w-full flex-col">

                                <div class="bg-gray-50 p-4 pl-8 flex border-t border-gray-300">
                                    <div class="lg:w-12 w-40 mr-2 flex-no-shrink">
                                        <img class="p-2 rounded" src="../public/img/samansayyar.jpg">
                                    </div>
                                    <div class="p-2 flex-grow">
                                        <header>
                                            <a href="#" class="text-black no-underline">
                                                <span class="font-medium">Saman sayyar</span>
                                            </a>
                                            <div class="text-xs text-grey flex items-center my-1">
                                                <span class="font-base text-gray-500 text-xs">@saman.sayr</span>
                                                &nbsp;
                                                &nbsp;
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="h-4 w-4 mr-1 feather feather-calendar">
                                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                                </svg>
                                                <span>Just now</span>
                                            </div>
                                        </header>
                                        <article class="py-4 text-gray-800 leading-normal  font-article">
                                            Lorem ipsum no lo se dolores ametandum no come,
                                            astare pero canime perferme <a class="no-underline text-indigo-600"
                                                href="#">@samansayyar</a>
                                        </article>
                                        <footer class="border-t border-grey-lighter text-sm flex">
                                            <a href="#"
                                                class="no-underline text-black flex px-4 py-2 items-center hover:bg-grey-lighter">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-600" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-thumbs-up h-6 w-6 mr-1">
                                                    <path
                                                        d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                    </path>
                                                </svg>
                                                <span class="ml-1">Like</span>
                                            </a>
                                            <a href="#"
                                                class="no-underline text-black flex px-4 py-2 items-center hover:bg-grey-lighter">
                                                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                    </path>
                                                </svg>
                                                <span class="ml-1">Share</span>
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                                <div class="bg-gray-50 p-4 pl-8 flex border-t border-gray-300">
                                    <div class="lg:w-12 w-40 mr-2 flex-no-shrink">
                                        <img class="p-2 rounded" src="../public/img/samansayyar.jpg">
                                    </div>
                                    <div class="p-2 flex-grow">
                                        <header>
                                            <a href="#" class="text-black no-underline">
                                                <span class="font-medium">Saman sayyar</span>
                                            </a>
                                            <div class="text-xs text-grey flex items-center my-1">
                                                <span class="font-base text-gray-500 text-xs">@saman.sayr</span>
                                                &nbsp;
                                                &nbsp;
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="h-4 w-4 mr-1 feather feather-calendar">
                                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                                </svg>
                                                <span>Just now</span>
                                            </div>
                                        </header>
                                        <article class="py-4 text-gray-800 leading-normal  font-article">
                                            Lorem ipsum no lo se dolores ametandum no come,
                                            astare pero canime perferme <a class="no-underline text-indigo-600"
                                                href="#">@samansayyar</a>
                                        </article>
                                        <footer class="border-t border-grey-lighter text-sm flex">
                                            <a href="#"
                                                class="no-underline text-black flex px-4 py-2 items-center hover:bg-grey-lighter">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-600" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-thumbs-up h-6 w-6 mr-1">
                                                    <path
                                                        d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                    </path>
                                                </svg>
                                                <span class="ml-1">Like</span>
                                            </a>
                                            <a href="#"
                                                class="no-underline text-black flex px-4 py-2 items-center hover:bg-grey-lighter">
                                                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                    </path>
                                                </svg>
                                                <span class="ml-1">Share</span>
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                                <div class="bg-gray-50 p-4 pl-8 flex border-t border-gray-300">
                                    <div class="lg:w-12 w-40 mr-2 flex-no-shrink">
                                        <img class="p-2 rounded" src="../public/img/samansayyar.jpg">
                                    </div>
                                    <div class="p-2 flex-grow">
                                        <header>
                                            <a href="#" class="text-black no-underline">
                                                <span class="font-medium">Saman sayyar</span>
                                            </a>
                                            <div class="text-xs text-grey flex items-center my-1">
                                                <span class="font-base text-gray-500 text-xs">@saman.sayr</span>
                                                &nbsp;
                                                &nbsp;
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="h-4 w-4 mr-1 feather feather-calendar">
                                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                                </svg>
                                                <span>Just now</span>
                                            </div>
                                        </header>
                                        <article class="py-4 text-gray-800 leading-normal  font-article">
                                            Lorem ipsum no lo se dolores ametandum no come,
                                            astare pero canime perferme <a class="no-underline text-indigo-600"
                                                href="#">@samansayyar</a>
                                        </article>
                                        <footer class="border-t border-grey-lighter text-sm flex">
                                            <a href="#"
                                                class="no-underline text-black flex px-4 py-2 items-center hover:bg-grey-lighter">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-600" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-thumbs-up h-6 w-6 mr-1">
                                                    <path
                                                        d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                    </path>
                                                </svg>
                                                <span class="ml-1">Like</span>
                                            </a>
                                            <a href="#"
                                                class="no-underline text-black flex px-4 py-2 items-center hover:bg-grey-lighter">
                                                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                    </path>
                                                </svg>
                                                <span class="ml-1">Share</span>
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                                <div class="bg-gray-50 p-4 pl-8 flex border-t border-gray-300">
                                    <div class="lg:w-12 w-40 mr-2 flex-no-shrink">
                                        <img class="p-2 rounded" src="../public/img/samansayyar.jpg">
                                    </div>
                                    <div class="p-2 flex-grow">
                                        <header>
                                            <a href="#" class="text-black no-underline">
                                                <span class="font-medium">Saman sayyar</span>
                                            </a>
                                            <div class="text-xs text-grey flex items-center my-1">
                                                <span class="font-base text-gray-500 text-xs">@saman.sayr</span>
                                                &nbsp;
                                                &nbsp;
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="h-4 w-4 mr-1 feather feather-calendar">
                                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                                </svg>
                                                <span>Just now</span>
                                            </div>
                                        </header>
                                        <article class="py-4 text-gray-800 leading-normal  font-article">
                                            Lorem ipsum no lo se dolores ametandum no come,
                                            astare pero canime perferme <a class="no-underline text-indigo-600"
                                                href="#">@samansayyar</a>
                                        </article>
                                        <footer class="border-t border-grey-lighter text-sm flex">
                                            <a href="#"
                                                class="no-underline text-black flex px-4 py-2 items-center hover:bg-grey-lighter">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-600" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-thumbs-up h-6 w-6 mr-1">
                                                    <path
                                                        d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                    </path>
                                                </svg>
                                                <span class="ml-1">Like</span>
                                            </a>
                                            <a href="#"
                                                class="no-underline text-black flex px-4 py-2 items-center hover:bg-grey-lighter">
                                                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                    </path>
                                                </svg>
                                                <span class="ml-1">Share</span>
                                            </a>
                                        </footer>
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
