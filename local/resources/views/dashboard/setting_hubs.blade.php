<x-app-layout>
    @section('title')
        Setting Hubs
    @endsection

    <x-slot name="header">
        {{ __('Setting Hubs') }}
    </x-slot>
    <div class="w-full">
        <div class="my-4">
            <div>
                <h4 class="text-xl mb-2 font-medium text-indigo-700 dark:text-gray-200">
                    identity
                </h4>
                <form action="" method="POST">
                    <div class="flex items-center flex-col">
                        <div class="w-full mt-3">
                            <div class=" text-sm">
                                <span class="text-gray-700 dark:text-gray-400 capitalize">name hubs</span>
                                <x-input 
                                type="text"
                                class="block mt-1 w-full"
                                id="name_channel"
                                name="name_channel"
                                value="channel_music"
                                autofocus
                                autocomplete="current-title"
                                required />
                            </div>
                        </div>
                        <div class="w-full mt-4">
                            <div class=" text-sm">
                                <span class="text-gray-700 dark:text-gray-400 capitalize">username admin</span>
                                <x-input 
                                type="text"
                                class="block mt-1 w-full"
                                id="usernameAdmin"
                                name="usernameAdmin"
                                value="saman sayyar"
                                autofocus
                                autocomplete="current-title"
                                required />
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <br>
            <br>
            <hr>
            <div class="mt-3">
                <h4 class="text-xl mb-2 font-medium text-indigo-700 dark:text-gray-200">
                    Privacy
                </h4>


                <form action="" class="w-full">
                    <ul class="flex w-full list-decimal justify-around items-center mr-2 px-2 py-2">
                        <div class="text-gray-800 text-sm dark:text-gray-100">
                            Who should see your profile
                        </div>
                        <div class="flex justify-center items-center">
                            <label for="checkbox" class=" inline-flex items-center cursor-pointer">
                                <div class="relative">
                                    <label class="text-sm">
                                        <select
                                            class="text-sm lg:w-48 w-36 bg-gray-100 dark:text-gray-300 border-none dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option>followers</option>
                                            <option>anyone</option>
                                            <option>none</option>
                                            <option>only those i send a link to can see my profile</option>
                                        </select>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </ul>
                    <ul class="flex w-full list-decimal justify-around items-center px-2 py-2">
                        <div class="text-gray-800 text-sm dark:text-gray-100">
                            Who can message you ?
                        </div>
                        <div class="flex justify-center items-center">
                            <label for="checkbox" class=" inline-flex items-center cursor-pointer">
                                <div class="relative">
                                    <label class="text-sm">
                                        <select
                                            class="text-sm lg:w-48 w-36 bg-gray-100 border-none dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option>followers only</option>
                                            <option>only</option>
                                            <option>none</option>
                                        </select>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </ul>
                    <ul class="flex w-full list-decimal justify-around items-center px-2 py-2">
                        <div class="text-gray-800 text-sm dark:text-gray-100">
                            Who can message you ?
                        </div>
                        <div class="flex justify-center items-center">
                            <label for="checkbox" class=" inline-flex items-center cursor-pointer">
                                <div class="relative">
                                    <label class="text-sm">
                                        <select
                                            class="text-sm lg:w-48 w-36 bg-gray-100 border-none dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option>followers only</option>
                                            <option>only</option>
                                            <option>none</option>
                                        </select>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </ul>
                    <ul class="flex w-full list-decimal justify-around items-center px-2 py-2">
                        <div class="text-gray-800 text-sm dark:text-gray-100">
                            Who can message you ?
                        </div>
                        <div class="flex justify-center items-center">
                            <label for="checkbox" class=" inline-flex items-center cursor-pointer">
                                <div class="relative">
                                    <label class="text-sm">
                                        <select
                                            class="text-sm lg:w-48 w-36 bg-gray-100 border-none dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option>followers only</option>
                                            <option>only</option>
                                            <option>none</option>
                                        </select>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </ul>
                    <ul class="flex w-full list-decimal justify-around items-center px-2 py-2">
                        <div class="text-gray-800 text-sm dark:text-gray-100">
                            Who can message you ?
                        </div>
                        <div class="flex justify-center items-center">
                            <label for="checkbox" class=" inline-flex items-center cursor-pointer">
                                <div class="relative">
                                    <label class="text-sm">
                                        <select
                                            class="text-sm lg:w-48 w-36 bg-gray-100 border-none dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option>followers only</option>
                                            <option>only</option>
                                            <option>none</option>
                                        </select>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </ul>
                    <ul class="flex w-full list-decimal justify-around items-center px-2 py-2">
                        <div class="text-gray-800 text-sm dark:text-gray-100">
                            Who can message you ?
                        </div>
                        <div class="flex justify-center items-center">
                            <label for="checkbox" class=" inline-flex items-center cursor-pointer">
                                <div class="relative">
                                    <label class="text-sm">
                                        <select
                                            class="text-sm lg:w-48 w-36 bg-gray-100 border-none dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option>followers only</option>
                                            <option>only</option>
                                            <option>none</option>
                                        </select>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </ul>
                </form>

            </div>

            <div class="mt-3">
                <h4 class="text-xl mb-2 font-medium text-indigo-700 dark:text-gray-200">
                    audience
                </h4>
            </div>
        </div>
    </div>
</x-app-layout>
