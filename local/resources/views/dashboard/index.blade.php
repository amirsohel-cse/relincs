<x-app-layout>
    @section('title')
    Dashboard
    @endsection

    <x-slot name="header">

        {{ __('Dashboard') }}

    </x-slot>

    <div class="w-full">
        @if (auth()->user()->checkAdmin())
                <!-- Cards -->
                <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                    <!-- Card -->
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <div
                            class="p-3 mr-4 text-pink-500 bg-pink-100 rounded-full dark:text-pink-100 dark:bg-pink-500">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                                </path>
                            </svg>
                        </div>
                        <div class="w-full">
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400 capitalize">
                                total users
                            </p>
                            <div class="flex justify-between  items-center">
                                <p class="text-lg font-medium text-gray-700 dark:text-gray-200">
                                    {{$counts['users']}}
                                </p>
                                <a href="javascript:void(0);" class="flex justify-center items-center text-xs font-base text-pink-600 dark:text-gray-200">
                                    manage users
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <div
                            class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"></path></svg>
                        </div>
                        <div class="w-full">
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400 capitalize">
                                total walls
                            </p>
                            <div class="flex justify-between  items-center">
                                <p class="text-lg font-medium text-gray-700 dark:text-gray-200">
                                    {{$counts['wall']}}
                                </p>
                                <a href="javascript:void(0);"
                                    class="flex justify-center items-center text-xs font-base text-green-600 dark:text-gray-200">
                                    {{-- manage wall --}}
                                    For Develop
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <div
                            class="p-3 mr-4 text-indigo-500 bg-indigo-100 rounded-full dark:text-indigo-100 dark:bg-indigo-500">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                                </path>
                            </svg>
                        </div>
                        <div class="w-full">
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                total media
                            </p>
                            <div class="flex justify-between  items-center">
                                <p class="text-lg font-medium text-gray-700 dark:text-gray-200">
                                    {{$counts['wall']}}
                                </p>
                                <a href="javascript:void(0);"
                                    class="flex justify-center items-center text-xs font-base text-indigo-600 dark:text-gray-200">
                                    {{-- manage wall --}}
                                    For Develop
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <div
                            class="p-3 mr-4 text-indigo-500 bg-indigo-100 rounded-full dark:text-indigo-100 dark:bg-indigo-500">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="w-full">
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                total likes
                            </p>
                            <div class="flex justify-between  items-center">
                                <p class="text-lg font-medium text-gray-700 dark:text-gray-200">
                                    {{$counts['like']}}
                                </p>
                                <a href="javascript:void(0);"
                                    class="flex justify-center items-center text-xs font-base text-indigo-600 dark:text-gray-200">
                                    {{-- manage wall --}}
                                    For Develop
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


        @else
        <div class="mb-6">
            <h2 class="lg:text-xl text-lf font-bold text-left text-gray-700">List of Members</h2>
            <div class="w-full mx-auto">
                <div class="relative lg:px-4 px-1 w-full flex justify-center items-center flex-col">
                    <div class="my-4 md:px-4 px-2 grid lg:grid-cols-2 grid-cols-1 gap-3 w-full">
                        @forelse ($users as $user)
                        <div class="w-full z-10">
                            <div class="flex flex-col">
                                <div class="bg-white border border-white shadow-lg  rounded-3xl p-4 m-4">
                                    <div class="flex-none sm:flex justify-center items-center">
                                        <a href="{{route('gu.profile.show' , ['name' => $user->id ])}}"
                                            class="relative lg:h-32 lg:w-32 w-full h-full flex mx-auto justify-center items-center sm:mb-0 mb-3">
                                            <img src="{{ $user->profile() }}" alt="{{$user->username}}"
                                                class=" w-32 h-32 object-cover rounded-2xl">
                                            <!-- <a href="#"
                                                            class="absolute -right-2 bottom-2   -ml-3  text-white p-1 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                                class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a> -->
                                        </a>
                                        <div class="flex-auto sm:ml-5 justify-evenly">
                                            <a href="{{route('gu.profile.show' , ['name' => $user->id ])}}" class="flex items-center justify-between sm:mt-2">
                                                <div class="flex items-center">
                                                    <div class="flex flex-col">
                                                        <div
                                                            class="w-full flex-none lg:text-left text-center text-lg text-gray-800 font-bold leading-none">
                                                            {{$user->username}}</div>
                                                        <div class="flex-auto text-sm text-gray-500 mt-3 my-1">
                                                            <!--{{$user->about ?? null}}-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="flex lg:flex-row flex-col w-full text-sm text-gray-500">
                                                <!-- <div class="flex-1 inline-flex items-center">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                                                        fill="currentColor">
                                                                        <path fill-rule="evenodd"
                                                                            d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                                                            clip-rule="evenodd"></path>
                                                                    </svg>
                                                                    <p class="___class_+?488___">14 Components</p>
                                                                </div> -->
                                                <div class="w-full flex flex-col justify-end items-center mt-4">
                                                    @livewire('following', ['user_id' => $user->id])
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="p-3 my-2 text-gray-500 text-center mx-auto">Profile not Found :(</div>
                        @endforelse
                    </div>
                    <div class="lg:w-6/12">
                        {{$users->links('vendor.pagination.simple-tailwind')}}
                    </div>

                </div>
            </div>
        </div>
        @endif
    </div>

</x-app-layout>
