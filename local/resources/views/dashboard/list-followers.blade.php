<x-app-layout>
    @section('title')
     My Followers
    @endsection

    <x-slot name="header">
            {{ __('My Followers') }}
    </x-slot>

    <div class="w-full">
        <div class="flex justify-center mx-auto w-full items-center flex-col">
            <div class="relative w-full max-w-3xl focus-within:text-indigo-500">
                <div class="absolute inset-y-0 flex items-center pl-2">
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input
                    class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-indigo-300 focus:outline-none focus:shadow-outline-purple form-input"
                    type="text" placeholder="Search in followers" aria-label="Search" />
            </div>
            <div class="mb-6 mt-10 w-full mx-auto ">
                <div class="flex flex-col space-y-10 bg-gray-100 bg-opacity-25 max-w-3xl rounded-md px-3 py-2 mx-auto">
                    {{-- @foreach ($followers as $f) --}}
                    <div class="">
                        <div class="flex justify-between items-center w-full">
                            <div class="flex justify-start items-center w-full">
                               <div class=""> 
                                <img src="{{ asset('storage/img/samansayyar.jpg') }}" alt="" class="rounded-full w-20">
                               </div>
                                <div class="w-full ml-5">
                                   <p class="text-md font-medium">
                                       saman sayyar
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
                            <div class="w-full h-full items-center flex justify-end mr-4">
                                <div class="flex flex-row-reverse justify-center items-center space-x-3 lg:mt-0 mt-4">
                                    <button
                                        class="focus:outline-none ml-3 bg-indigo-600 focus:ring-2 hover:bg-indigo-100 shadow-xl trasition duration-300 focus:ring-indigo-500 w-12 py-2 px-2 h-12 rounded-full flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                                    </button>
                                    <button
                                        class="focus:outline-none bg-white focus:ring-2 hover:bg-indigo-100 shadow-xl trasition duration-300 focus:ring-indigo-500 w-12 py-2 px-2 h-12 rounded-full flex items-center justify-center"><svg
                                            class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                                        </svg>
                                    </button>
                                    <button
                                        class="focus:outline-none bg-white focus:ring-2 hover:bg-indigo-100 shadow-xl trasition duration-300 focus:ring-indigo-500 w-12 py-2 px-2 h-12 rounded-full flex items-center justify-center"><svg
                                            class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                             </div>
                        </div>
                    </div>
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
