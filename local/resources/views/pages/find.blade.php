<x-guest-layout>
    @section('title')
    Find
    @endsection
    <div class="w-full" x-data="{ search : '' , toggleFilter : false }">
        <!-- Find-->
        <div class="relative">
            <div class="bg-indigo-700 w-full flex flex-col jusify-center items-center transform">
                <!-- video Hubs search box -->
                <div class="mx-auto w-full flex flex-row justify-between  py-4 z-50">
                    <form method="GET"
                        class=" bg-white rounded flex  lg:w-6/12 mx-auto w-12/12  pl-2 py-2 shadow-md border border-gray-200">
                        @csrf
                        {{-- <button class="bg-white rounded-md -ml-2 px-2 focus:outline-none"
                            @click.prevent="toggleFilter = !toggleFilter"><svg class="w-6 h-6" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z">
                                </path>
                            </svg></button> --}}
                        <input type="search" id="search" placeholder="search for videos" name="search" class=" pl-4 text-md outline-none bg-transparent  lg:w-9/12 w-full
                            @error('search') border border-red-400  @else border-none @enderror">
                        <select class="px-4 lg:w-32 w-20 lg:text-md text-sm outline-none border-none h-full bg-transparent capitalize
                            @error('type')  text-red-400 border border-red-300 bg-red-100  @enderror" name="type" id="type">
                            <option value="">Type</option>
                            <option value="wall">wall</option>
                            <option value="media">media</option>
                            <option value="hubs">hubs</option>
                            <option value="users">users</option>
                        </select>
                        <button type="submit"
                            class="outline-none focus:outline-none w-16 text-center h-full py-1 flex justify-center items-center">
                            <svg class=" w-6 text-center text-gray-600 h-6 cursor-pointer" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                    </form>
                </div>

                <div x-show="toggleFilter" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform scale-25"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90" style="z-index: 999999;"
                    class="flex mx-auto z-50 my-3 items-center justify-center bg-gray-50 max-w-4xl max-h-4xl shadow-md rounded-md  w-full">
                    <div class="max-h-4xl w-full z-50">
                        <div
                            class="flex flex-row justify-between items-center w-full h-10 px-4 py-2 border-b border-gray-300">
                            <div class="">
                                <p class="text-lg font-bold text-gray-900">
                                    Filter
                                </p>
                            </div>
                            <button class="focus:outline-none" @click="toggleFilter = false">
                                <p class="text-lg font-bold text-gray-900">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </p>
                            </button>
                        </div>
                        <div class="w-full h-full px-5 py-3 capitalize">
                            <form action="#" class="flex flex-col mt-3" autocomplete="off">
                                <div class="grid md:grid-cols-4 grid-cols-2 gap-y-4 gap-x-3">
                                    <div class="flex flex-col space-y-1 w-full md:col-span-1 col-span-4">
                                        <label for="rating" class="text-sm font-medium text-gray-700">rating</label>
                                        <select name="rating" id="rating" autofocus
                                            class="px-4 py-2 bg-white transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-indigo-200">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col space-y-1 w-full md:col-span-1 col-span-4">
                                        <label for="upload_date" class="text-sm font-medium text-gray-700">length
                                            video</label>
                                        <select name="upload_date" id="upload_date" autofocus
                                            class="px-4 py-2 bg-white transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-indigo-200">
                                            <option value="2min">2 min</option>
                                            <option value="today">10 min</option>
                                            <option value="etc">20 +</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col space-y-1 w-full md:col-span-1 col-span-4">
                                        <label for="upload_date"
                                            class="text-sm font-medium text-gray-700">quality</label>
                                        <select name="upload_date" id="upload_date" autofocus
                                            class="px-4 py-2 bg-white transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-indigo-200">
                                            <option value="hd">hd</option>
                                            <option value="etc">etc</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col space-y-1 w-full col-span-4">
                                        <label for="upload_date"
                                            class="text-sm font-medium text-gray-700">language</label>
                                        <select name="upload_date" id="upload_date" autofocus
                                            class="px-4 py-2 bg-white transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-indigo-200">
                                            <option value="english">english</option>
                                            <option value="etc">etc</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End  Find -->
        <div class="mx-auto container md:px-6 px-2 py-6 mb-10 flex flex-col justify-center -z-10 relative">
            <div class="my-6 md:px-2 px-3">
                <div class="w-full ">
                    <div class="my-4 mx-auto ">
                        {{-- @if($result)
                        <h3 class="mx-2 font-bold text-black text-xl capitalize">Result : &nbsp;
                            <span>{{$search}}</span>
                        </h3>
                        @else --}}
                        {{-- <h3
                            class="mx-auto  font-bold text-gray-900 text-opacity-30 text-xl capitalize flex flex-col space-y-6">
                            <span></span>
                            <svg class="lg:w-40 w-24 lg:h-40 h-24" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z">
                                </path>
                            </svg>
                            <p class="lg:text-lg text-md font-base text-gray-5">
                                Find Videos and users...
                            </p>
                        </h3> --}}
                    </div>
                    <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-4">
                        <div class="relative border rounded">
                            <a
                                class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                <div
                                    class=" pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                    <div class="bg-gray-800 w-full h-full">
                                        <img loading="lazy" lazy src="#" alt="post"
                                            class=" w-full h-48 rounded shadow-md">
                                    </div>
                                    <div class="flex justify-center items-center flex-row">
                                        <div class="mr-1 w-16">
                                            <img src="#" alt="" class="object-cover h-9 w-9 rounded-full shadow-md">
                                        </div>
                                        <div class="flex justify-start">
                                            <div class="text-gray-900 text-sm text-left font-bold">
                                                saman sayyar
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ml-14 flex flex-col justify-start items-start">
                                        <div class="text-left">
                                            <a href="#" class="md:text-sm text-xs text-gray-500 text-left">
                                                saman sayyar
                                            </a>
                                        </div>
                                        <div class="w-full">
                                            <span href="#" class="md:text-sm text-xs font-base text-gray-500">
                                                {{-- {{$i->views}} views &nbsp; &bullet; &nbsp; --}}
                                                12 Hours Ago
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <ul class="flex my-3  mt-10">
                        {{-- pagination Links --}}
                        <ul class="flex justify-center items-center">
                            {{-- @if($this->find())
                            {{$result->links('vendor.pagination.tailwind')}}
                            @endif --}}
                        </ul>
                    </ul>
                </div>
            </div>
            <div class="w-full" wire:target="find" wire:loading>
                <x-loading classSvg="w-12 h-12" classText="text-xl" />
            </div>
        </div>
    </div>

</x-guest-layout>
