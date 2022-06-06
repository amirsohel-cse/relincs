<div class="w-full">
    @section('title')
    Setting Hubs
    @endsection

    <x-slot name="header">
        {{ __('Setting Hubs') }}
    </x-slot>
    <div class="w-full">
        <div class="my-4 w-full">
            <div>
                <h4 class="text-xl mb-2 font-medium text-indigo-700 dark:text-gray-200">
                    identity
                </h4>
                <form action="" method="POST">
                    <div class="flex items-center flex-col">
                        <div class="w-full mt-3">
                            <div class=" text-sm">
                                <span class="text-gray-700 dark:text-gray-400 capitalize">name hubs</span>
                                <x-input type="text" class="block mt-1 w-full" id="name_channel" name="name_channel"
                                    value="channel_music" autofocus autocomplete="current-title" required />
                            </div>
                        </div>
                        <div class="w-full mt-4">
                            <div class=" text-sm">
                                <span class="text-gray-700 dark:text-gray-400 capitalize">username admin</span>
                                <x-input type="text" class="block mt-1 w-full" id="usernameAdmin" name="usernameAdmin"
                                    value="saman sayyar" autofocus autocomplete="current-title" required />
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <br>
            <br>
            <hr>
            <div class="mt-3 w-full">
                <h4 class="text-xl mb-2 font-medium text-indigo-700 dark:text-gray-200">
                    Privacy
                </h4>


                <div action="" class="w-full flex justify-start items-center flex-col">
                    <ul class="flex w-full list-decimal justify-between items-center mr-2 px-2 py-2">
                        <div class="text-gray-800 text-sm dark:text-gray-100 w-full flex">
                            who should have access to this hub and its content
                        </div>
                        <div class="flex justify-center w-full">
                            <label for="checkbox" class=" inline-flex items-center cursor-pointer w-full">
                                <div class="relative">
                                    <label class="text-sm">
                                        <select
                                            class="text-sm lg:w-48 w-36 bg-gray-100 dark:text-gray-300 border-none dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option>anyone (open)</option>
                                            <option>only members (closed)</option>
                                            <option>only those</option>
                                            <option>who i invite (private)</option>
                                        </select>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </ul>
                    <ul class="flex w-full list-decimal justify-between items-center mr-2 px-2 py-2">
                        <div class="text-gray-800 text-sm dark:text-gray-100 w-full flex">
                            who should be able to see this hub
                        </div>
                        <div class="flex justify-center w-full">
                            <label for="checkbox" class=" inline-flex items-center cursor-pointer w-full">
                                <div class="relative">
                                    <label class="text-sm">
                                        <select
                                            class="text-sm lg:w-48 w-36 bg-gray-100 dark:text-gray-300 border-none dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option>anyone</option>
                                            <option>those whom i invite</option>
                                        </select>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </ul>
                    <ul class="flex w-full list-decimal justify-between items-center mr-2 px-2 py-2">
                        <div class="text-gray-800 text-sm dark:text-gray-100 w-full flex">
                            Do you want your private profile to be linked to this hub
                        </div>
                        <div class="flex justify-center w-full">
                            <label for="checkbox" class=" inline-flex items-center cursor-pointer w-full">
                                <div class="relative">
                                    <label class="text-sm">
                                        <select
                                            class="text-sm lg:w-48 w-36 bg-gray-100 dark:text-gray-300 border-none dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option>yes</option>
                                            <option>no</option>
                                        </select>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </ul>
                    <ul class="flex w-full list-decimal justify-between items-center mr-2 px-2 py-2">
                        <div class="text-gray-800 text-sm dark:text-gray-100 w-full flex">
                           who should contact you at your hub email box
                        </div>
                        <div class="flex justify-center w-full">
                            <label for="checkbox" class=" inline-flex items-center cursor-pointer w-full">
                                <div class="relative">
                                    <label class="text-sm">
                                        <select
                                            class="text-sm lg:w-48 w-36 bg-gray-100 dark:text-gray-300 border-none dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option>only member</option>
                                            <option>anyone</option>
                                        </select>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </ul>
                </div>
            </div>

            <div class="mt-3">
                <h4 class="text-xl mb-2 font-medium text-indigo-700 dark:text-gray-200">
                    audience
                </h4>


                <div action="" class="w-full flex justify-start items-center flex-col">
                    <ul class="flex w-full list-decimal justify-between items-center mr-2 px-2 py-2">
                        <div class="text-gray-800 text-sm dark:text-gray-100 w-full flex">
                            when he clicks on this optin, he gets to the audience
                        </div>
                        <div class="flex justify-center w-full">
                            <label for="checkbox" class=" inline-flex items-center cursor-pointer w-full">
                                <div class="relative">
                                    <label class="text-sm">
                                        <select
                                            class="text-sm lg:w-48 w-36 bg-gray-100 dark:text-gray-300 border-none dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option>anyone (open)</option>
                                            <option>only members (closed)</option>
                                            <option>only those</option>
                                            <option>who i invite (private)</option>
                                        </select>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
