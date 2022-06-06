<x-app-layout>
    @section('title')
    Profile
    @endsection

    <x-slot name="header">
        {{ __('Profile') }}
    </x-slot>

    <div class="w-full">
        <div class="container md:px-4 px-2 py-6 flex flex-col justify-start items-center justify-center">
            <form action="" class="w-full">
                <div class="mb-2 w-full">
                    <div class="w-full">
                        <div class="px-2">
                            <div
                                class="flex lg:justify-between justify-center lg:flex-row flex-col w-full items-center bg-gray-100 py-6 px-3">
                                <div class="flex lg:flex-row flex-col items-center space-x-3">
                                    <div class="w-full flex flex-col justify-center items-center">
                                        <img src="{{ asset('storage/img/amir.jpg') }}" alt="Amir Tataloo"
                                            class="w-32 h-32 object-cover rounded-full lg:block flex justify-center items-center shadow-md">
                                        <div class="">
                                            <input type="file"
                                                class=" w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                                        </div>
                                    </div>
                                    <div class="flex lg:mx-3 flex-col justify-between mt-4 w-full">
                                        <x-label for="username" :value="__('username')"></x-label>

                                        <x-input id="username" class="block w-full" type="text" name="username"
                                            value="amir tataloo" required autocomplete="current-title" />
                                    </div>
                                </div>

                                <!-- <div
                                                            class="flex flex-row lg:justify-start lg:mt-0 mt-4 justify-center items-center space-x-16">
                                                            <div
                                                                class="flex flex-row items-center capitalize space-x-6 text-gray-700">
                                                                <p class="mr-2">followers</p>
                                                                <span>8200</span>
                                                            </div>
                                                            <div class="flex flex-row items-center capitalize text-gray-700">
                                                                <p class="mr-2">following</p>
                                                                <span>2533</span>
                                                            </div>
                                                        </div> -->
                                <!-- 
                                                        <div
                                                            class="flex flex-row-reverse justify-center items-center space-x-3 lg:mt-0 mt-4">
                                                            <button
                                                                class="focus:outline-none ml-3 bg-white focus:ring-2 hover:bg-indigo-100 shadow-2xl trasition duration-300 focus:ring-indigo-500 w-12 py-2 px-2 h-12 rounded-full flex items-center justify-center"><svg
                                                                    class="w-6 h-6 text-gray-700" fill="none"
                                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                            <button
                                                                class="focus:outline-none bg-white focus:ring-2 hover:bg-indigo-100 shadow-2xl trasition duration-300 focus:ring-indigo-500 w-12 py-2 px-2 h-12 rounded-full flex items-center justify-center"><svg
                                                                    class="w-6 h-6 text-gray-700" fill="none"
                                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                            <button
                                                                class="focus:outline-none bg-white focus:ring-2 hover:bg-indigo-100 shadow-2xl trasition duration-300 focus:ring-indigo-500 w-12 py-2 px-2 h-12 rounded-full flex items-center justify-center"><svg
                                                                    class="w-6 h-6 text-gray-700" fill="none"
                                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                            <button
                                                                class="focus:outline-none text-white focus:text-gray-900 bg-indigo-700 focus:ring-2 hover:bg-indigo-800 shadow-2xl trasition duration-300 focus:ring-indigo-500 w-32 py-2 px-2 h-12 rounded-full flex items-center justify-center">

                                                                Follow
                                                            </button>
                                                        </div> -->
                            </div>
                            <div class="my-2 md:mt-3 mt-10">
                                <div class="flex justify-center items-center">
                                    <div class="w-full flex justify-center items-center">
                                        <div
                                            class="flex w-full flex-row border-b-2 md:border-none border-indigo-200 lg:my-10">
                                            <div
                                                class="grid lg:grid-cols-2 grid-cols-1 place-content-center place-items-center gap-x-4 w-full space-y-4">
                                                <div
                                                    class="flex w-full flex-col space-y-2 text-black items-center justify-center capitalize  md:text-md text-sm">

                                                    <label class="w-full text-sm">
                                                        <p class="mr-2 w-full">name :</p>
                                                        <x-input id="name" class="block w-full" type="text" name="name"
                                                            value="amir tataloo" required
                                                            autocomplete="current-title" />
                                                    </label>
                                                </div>
                                                <div
                                                    class="flex w-full flex-col  text-black items-center justify-center capitalize  md:text-md text-sm">
                                                    <label class="w-full text-sm mb-3">
                                                        <p class="mr-2 w-full">country :</p>
                                                        <x-input id="country" class="block w-full" type="text"
                                                            name="country" value="amir tataloo" required
                                                            autocomplete="current-title" />
                                                    </label>
                                                </div>
                                                <div
                                                    class="flex w-full flex-col space-y-2 text-black items-center justify-center capitalize  md:text-md text-sm">

                                                    <label class="w-full text-sm">
                                                        <p class="mr-2 w-full">occupation :</p>
                                                        <x-input id="occupation" class="block w-full" type="text"
                                                            name="occupation" value="occupation" required
                                                            autocomplete="current-title" />
                                                    </label>
                                                </div>
                                                <div
                                                    class="flex w-full flex-col space-y-2 text-black items-center justify-center capitalize  md:text-md text-sm">
                                                    <label class="w-full text-sm">
                                                        <p class="mr-2 w-full">online interest :
                                                        </p>
                                                        <x-input id="onlineinterest" class="block w-full" type="text"
                                                            name="onlineinterest" value="History" required
                                                            autocomplete="current-title" />
                                                    </label>
                                                </div>
                                                <div
                                                    class="flex w-full flex-col space-y-2 text-black items-center  capitalize  md:text-md text-sm flex-wrap">
                                                    <label class="w-full text-sm">
                                                        <p class="mr-2 w-full">short intro :</p>
                                                        <textarea rows="8"
                                                            class="block w-full mt-1 text-sm shadow-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 border border-gray-300 focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">this moreprofile is dedicted
                                                                </textarea>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </form>

        </div>
    </div>

</x-app-layout>