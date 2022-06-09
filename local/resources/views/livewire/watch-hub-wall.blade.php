
<div class="w-full relative">
    @section('metas')
        <meta name="title" content="{{ $wall->title }}">
        <meta name="description" content="{{ $wall->description }}">
        <meta name="image" content="{{ $hub->photo() }}">
    @endsection
    @section('title')
         Watch {{ $wall->title }}
    @endsection


    <div
        class="mx-auto lg:flex hidden justify-center items-center filter blur-3xl animate-pulse duration-700 transition w-full">
        <div class=" mr-10 flex relative">
            <div class="p-24 rounded-full bg-gradient-to-r to-indigo-700 from-pink-900 absolute top-20 right-0">

            </div>
            <div class="p-24 rounded-full bg-gradient-to-r to-pink-700 from-indigo-900 absolute md:flex hidden">

            </div>
        </div>
        <!-- Right Side -->
        <div class="flex flex-col absolute top-8 right-10 space-y-4">

            <div
                class="p-5 rounded-full bg-gradient-to-r to-pink-700 via-red-500 from-indigo-900 absolute right-16 top-10">

            </div>
        </div>
        <div class="flex flex-col absolute bottom-8 right-10 space-y-4">

            <div class="p-10 rounded-full bg-gradient-to-r to-pink-700 from-indigo-900 absolute right-16 bottom-10">

            </div>
        </div>
        <!--  Left side -->
        <div class="flex flex-col space-y-4 filter animate-pulse duration-500">
            <div class="p-10 bg-gradient-to-r to-indigo-700 from-indigo-900 absolute top-20 left-20">

            </div>
            <div class="p-10 bg-gradient-to-r to-indigo-700 from-indigo-900 absolute bottom-20 right-20">

            </div>
        </div>
    </div>

    <div class="mx-auto flex justify-center max-w-xl shadow-md md:mb-8 mt-4 bg-white rounded-lg items-start relative md:p-0"
        :class="comment || tools ? '' : 'p-8'" x-data="{
        comment : false,
        tools : false,
    }">

        <div class="lg:w-11/12 w-full">
            <div class="py-2 px-2">
                <div class="flex justify-between items-center py-2">
                    <div class="relative mt-1 flex">
                        <div class="h-full">
                        
                            <img src="{{ $hub->photo() }}" alt="saman sayyar"
                                class="w-14 h-14 rounded-full object-cover">
                        </div>
                        <a href="{{ route('show.hubs', $hub->uid) }}" class="ml-1 text-md lg:text-md font-medium text-left flex justify-center items-center flex-col">
                                {{ $hub->name }}

                        </a>
                        <!-- <span class="text-xs mx-2">•</span>
                       <button class="text-indigo-500 text-sm capitalize flex justify-start items-start">follow</button> -->
                    </div>
                    {{-- <button type="button"
                        class="relative p-2 focus:outline-none border-none bg-gray-100 rounded-full">
                        <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                            </path>
                        </svg>
                    </button> --}}
                </div>
            </div>
            <div class="relative w-full h-full flex justify-center items-center" wire:ignore>
                    <div class="w-full h-full rounded-md">
                        <img src="{{ env('AWS_BUCKET_URL').$wall->path }}" class="bg-center object-cover w-full h-full rounded-md">
                    </div>

                {{-- <button id="video"
                    class="absolute z-50 focus:outline-none rounded-full flex justify-center items-center">
                    <svg class="lg:w-40 lg:h-40 w-28 h-28 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                        </path>
                    </svg>
                </button> --}}
            </div>
            <div class="w-full">

                <!-- Comment -->
                @livewire('all-comment', ['video' => $wall])


                <div class=" w-full absolute inset-0 bg-gray-600 bg-opacity-50 transform transition duration-100 z-30"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90" x-show="tools">
                    <div class="___class_+?72___">
                        <div class="flex justify-start items-center py-2 px-4 w-20 bg-white bg-opacity-70 cursor-pointer"
                            @click="tools = !tools">
                            <svg class="w-8 h-8 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="flex justify-center my-20 mx-auto flex-col space-y-4 items-center text-gray-50">
                        <button
                            class="focus:outline-none shadow rounded-lg py-2 px-20 bg-indigo-500 focus:bg-indigo-700 transition duration-200 bg-opacity-90 capitalize">report</button>
                        <button
                            class="focus:outline-none shadow rounded-lg py-2 px-20 bg-red-500 focus:bg-red-700 transition duration-200 bg-opacity-90 capitalize">delete</button>
                        <button
                            class="focus:outline-none shadow rounded-lg py-2 px-20 bg-yellow-500 focus:bg-yellow-700 transition duration-200 bg-opacity-90 capitalize">cancel</button>
                    </div>
                </div>
                <!-- System Like and tools Feed -->
                <div class="p-2 mt-1 w-full">
                    @auth
                    @livewire('hubswallvoting', [
                        'video' => $wall,
                        'hub' => $hub,
                        ])
                    @endauth

                    <div class="flex flex-col">
                        <div class="flex justify-start flex-col space-y-4 items-start pb-2 px-3">
                            <div class="relative mt-1 flex">
                                <div>
                                    <p class="text-gray-700 text-sm  leading-relaxed">

                                        {{ $wall->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 pt-1 w-full">
                            <p class="font-normal text-xs text-gray-500">{{ $wall->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
