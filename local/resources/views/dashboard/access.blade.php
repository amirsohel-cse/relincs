<x-app-layout>
    @section('title')
    Access
    @endsection

    <x-slot name="header">

            {{ __('Access') }}

    </x-slot>


    <div>
        <div class="container md:px-4 px-2 py-6 flex flex-col justify-start items-start">

            <form action="" class="w-full">
                <ul class="flex w-full list-decimal justify-around items-center px-2 py-2 space-x-8">
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
                <ul class="flex w-full list-decimal justify-around items-center px-2 py-2 space-x-8">
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
                <ul class="flex w-full list-decimal justify-around items-center px-2 py-2 space-x-8">
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
                <ul class="flex w-full list-decimal justify-around items-center px-2 py-2 space-x-8">
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
                <ul class="flex w-full list-decimal justify-around items-center px-2 py-2 space-x-8">
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
                <ul class="flex w-full list-decimal justify-around items-center px-2 py-2 space-x-8">
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
    </div>
    
</x-app-layout>
