
<x-app-layout>
    @section('title')
    hubs bulletin
   @endsection

   <x-slot name="header">
           {{ __('hubs bulletin') }}
   </x-slot>

<div class="w-full">
    <div class="flex flex-col justify-center w-full">
        <!-- <div class="flex md:flex-row flex-col items-center justify-between w-full md:space-x-8"> -->
        <div class="w-full">
            <div class=" text-sm">
                <span class="text-gray-700 dark:text-gray-400 capitalize">link</span>

                    <x-input id="link" class="block mt-1 w-full"
                    type="text"
                    placeholder="insert link : https://www.example.com"
                    name="link"
                    required autocomplete="current-title" />
            </div>
        </div>
        <div class="w-full mt-3">
            <div class=" text-sm">
                <span class="text-gray-700 dark:text-gray-400 capitalize">date</span>
                    <x-input id="date" class="block mt-1 w-full"
                    type="date"
                    placeholder="20-12-2021"
                    name="date"
                    required autocomplete="current-title" />
            </div>
        </div>
        <div class="mt-3">
            <div class="w-full">
                <div class=" text-sm">
                    <span class="text-gray-700 dark:text-gray-400 capitalize">title
                        <x-input id="title" class="block mt-1 w-full"
                        type="text"
                        placeholder="title"
                        name="title"
                        required autocomplete="current-title" />
                    </div>
            </div>
            <div class="w-full mt-3">

                <div class=" mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Description</span>
                    <textarea
                    class="block w-full mt-1 text-sm shadow-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 border border-gray-300 focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                    rows="3" id="description" placeholder="Enter some long form content for post."></textarea>
                </div>
            </div>

            <div class="w-full flex space-x-4 items-center justify-start my-8" x-data="{ one : 'no' }">
                <label class=" text-sm">
                    <span class="text-gray-700 dark:text-gray-400 capitalize">show my profile as the
                        uploader : </span>
                </label>
                <div class="">
                    <label for="checkbox" class="mt-3 inline-flex items-center cursor-pointer"
                        @click="one === 'no' ? one = 'yes' : one = 'no'">
                        <span class="relative">
                            <span class="block w-10 h-6 bg-gray-400 rounded-full shadow-inner"
                                :class="[one === 'yes' ? 'bg-indigo-300' : 'bg-gray-400']"></span>
                            <span
                                :class="[one === 'yes' ? 'translate-x-4 bg-indigo-600' : 'translate-x-0 bg-white']"
                                class="absolute block w-4 h-4 mt-1 ml-1 transform  bg-white rounded-full shadow inset-y-0 left-0 focus-within:shadow-outline transition-all duration-300 ease-in-out">
                                <input type="text" id="one" x-model="one" type="checkbox"
                                    class="absolute opacity-0 w-0 h-0" value="yes" />

                            </span>
                        </span>
                    </label>
                </div>
                <div class="">
                    <p class="text-gray-700 text-sm" for="checkbox" x-text="one"></p>
                </div>
            </div>
        </div>

        <div class="w-full mb-3 flex flex-row ">
            <div>
                <button
                    class="capitalize px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-indigo-600 border border-transparent rounded-md active:bg-indigo-700 hover:bg-indigo-700 focus:outline-none focus:shadow-outline-blue">
                    post
                </button>
            </div>
        </div>
        <!-- <hr>

        <div class="w-full mb-8 mt-4 flex flex-row  space-x-8">
                <div>
                    <button
                        class="capitalize px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-indigo-600 border border-transparent rounded-md active:bg-indigo-700 hover:bg-indigo-700 focus:outline-none focus:shadow-outline-blue">
                        freeze Account
                    </button>
                </div>
                <div>
                    <button
                        class="capitalize px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-md active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple">
                        delete account
                    </button>
                </div>
            </div> -->
    </div>
</div>

</x-app-layout>
