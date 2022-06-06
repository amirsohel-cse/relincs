<x-app-layout>
    @section('title')
     Library
    @endsection

    <x-slot name="header">
            {{ __('Library') }}
    </x-slot>

    <div class="w-full">
        <div class="my-6 md:px-2 px-3">
            <div class="mx-3">
                <p class="capitalize my-2 text-2xl font-normal">
                    History
                </p>
                    <div
                        class="grid xl:grid-cols-3 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-4 place-items-center">
                        <div class="relative border border-gray-100 rounded-md shadow-md cursor-pointer">
                            <a href="#"
                                class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                <div
                                    class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                    <div>
                                        <img src="{{ asset('storage/img/post1.jpg') }}" alt="post"
                                            class="bg-cover w-100 h-100 rounded shadow-md">
                                    </div>
                                    <div class="flex justify-center items-center flex-row my-4 px-2">
                                        <div class="mr-3 w-16">
                                            <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                class="w-9 rounded-full shadow-md">
                                        </div>
                                        <div class="flex justify-start">
                                            <div class="text-gray-900 md:text-sm text-xs text-left font-bold">
                                                Amir Tataloo - Heyf Didid Raft - New Music Video (Coming
                                                Soon)
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="ml-14 flex flex-col justify-start items-start">
                                        <div class="text-left">
                                            <a href="#" class="text-sm text-gray-500 text-left">
                                                Amir Tataloo
                                            </a>
                                        </div>
                                        <div class="w-full">
                                            <span href="#" class="text-xs font-base text-gray-500">
                                                147K views &nbsp; &bullet; &nbsp; 2 days ago
                                            </span>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                        <div class="relative border border-gray-100 rounded-md shadow-md cursor-pointer">
                            <a href="#"
                                class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                <div
                                    class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                    <div>
                                        <img src="{{ asset('storage/img/post1.jpg') }}" alt="post"
                                            class="bg-cover w-100 h-100 rounded shadow-md">
                                    </div>
                                    <div class="flex justify-center items-center flex-row my-4 px-2">
                                        <div class="mr-3 w-16">
                                            <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                class="w-9 rounded-full shadow-md">
                                        </div>
                                        <div class="flex justify-start">
                                            <div class="text-gray-900 md:text-sm text-xs text-left font-bold">
                                                Amir Tataloo - Heyf Didid Raft - New Music Video (Coming
                                                Soon)
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="ml-14 flex flex-col justify-start items-start">
                                        <div class="text-left">
                                            <a href="#" class="text-sm text-gray-500 text-left">
                                                Amir Tataloo
                                            </a>
                                        </div>
                                        <div class="w-full">
                                            <span href="#" class="text-xs font-base text-gray-500">
                                                147K views &nbsp; &bullet; &nbsp; 2 days ago
                                            </span>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                        <div class="relative border border-gray-100 rounded-md shadow-md cursor-pointer">
                            <a href="#"
                                class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                <div
                                    class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                    <div>
                                        <img src="{{ asset('storage/img/post1.jpg') }}" alt="post"
                                            class="bg-cover w-100 h-100 rounded shadow-md">
                                    </div>
                                    <div class="flex justify-center items-center flex-row my-4 px-2">
                                        <div class="mr-3 w-16">
                                            <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                class="w-9 rounded-full shadow-md">
                                        </div>
                                        <div class="flex justify-start">
                                            <div class="text-gray-900 md:text-sm text-xs text-left font-bold">
                                                Amir Tataloo - Heyf Didid Raft - New Music Video (Coming
                                                Soon)
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="ml-14 flex flex-col justify-start items-start">
                                        <div class="text-left">
                                            <a href="#" class="text-sm text-gray-500 text-left">
                                                Amir Tataloo
                                            </a>
                                        </div>
                                        <div class="w-full">
                                            <span href="#" class="text-xs font-base text-gray-500">
                                                147K views &nbsp; &bullet; &nbsp; 2 days ago
                                            </span>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                    </div>
            </div>
            <div class="mx-3 my-2 border-t border-gray-300 py-3">
                <p class="capitalize my-2 text-2xl font-normal">
                    watch later
                </p>
                    <div
                        class="grid xl:grid-cols-3 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-4 place-items-center">
                        <div class="relative border border-gray-100 rounded-md shadow-md cursor-pointer">
                            <a href="#"
                                class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                <div
                                    class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                    <div>
                                        <img src="{{ asset('storage/img/post1.jpg') }}" alt="post"
                                            class="bg-cover w-100 h-100 rounded shadow-md">
                                    </div>
                                    <div class="flex justify-center items-center flex-row my-4 px-2">
                                        <div class="mr-3 w-16">
                                            <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                class="w-9 rounded-full shadow-md">
                                        </div>
                                        <div class="flex justify-start">
                                            <div class="text-gray-900 md:text-sm text-xs text-left font-bold">
                                                Amir Tataloo - Heyf Didid Raft - New Music Video (Coming
                                                Soon)
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="ml-14 flex flex-col justify-start items-start">
                                        <div class="text-left">
                                            <a href="#" class="text-sm text-gray-500 text-left">
                                                Amir Tataloo
                                            </a>
                                        </div>
                                        <div class="w-full">
                                            <span href="#" class="text-xs font-base text-gray-500">
                                                147K views &nbsp; &bullet; &nbsp; 2 days ago
                                            </span>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                        <div class="relative border border-gray-100 rounded-md shadow-md cursor-pointer">
                            <a href="#"
                                class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                <div
                                    class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                    <div>
                                        <img src="{{ asset('storage/img/post1.jpg') }}" alt="post"
                                            class="bg-cover w-100 h-100 rounded shadow-md">
                                    </div>
                                    <div class="flex justify-center items-center flex-row my-4 px-2">
                                        <div class="mr-3 w-16">
                                            <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                class="w-9 rounded-full shadow-md">
                                        </div>
                                        <div class="flex justify-start">
                                            <div class="text-gray-900 md:text-sm text-xs text-left font-bold">
                                                Amir Tataloo - Heyf Didid Raft - New Music Video (Coming
                                                Soon)
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="ml-14 flex flex-col justify-start items-start">
                                        <div class="text-left">
                                            <a href="#" class="text-sm text-gray-500 text-left">
                                                Amir Tataloo
                                            </a>
                                        </div>
                                        <div class="w-full">
                                            <span href="#" class="text-xs font-base text-gray-500">
                                                147K views &nbsp; &bullet; &nbsp; 2 days ago
                                            </span>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                        <div class="relative border border-gray-100 rounded-md shadow-md cursor-pointer">
                            <a href="#"
                                class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                <div
                                    class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                    <div>
                                        <img src="{{ asset('storage/img/post1.jpg') }}" alt="post"
                                            class="bg-cover w-100 h-100 rounded shadow-md">
                                    </div>
                                    <div class="flex justify-center items-center flex-row my-4 px-2">
                                        <div class="mr-3 w-16">
                                            <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                class="w-9 rounded-full shadow-md">
                                        </div>
                                        <div class="flex justify-start">
                                            <div class="text-gray-900 md:text-sm text-xs text-left font-bold">
                                                Amir Tataloo - Heyf Didid Raft - New Music Video (Coming
                                                Soon)
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="ml-14 flex flex-col justify-start items-start">
                                        <div class="text-left">
                                            <a href="#" class="text-sm text-gray-500 text-left">
                                                Amir Tataloo
                                            </a>
                                        </div>
                                        <div class="w-full">
                                            <span href="#" class="text-xs font-base text-gray-500">
                                                147K views &nbsp; &bullet; &nbsp; 2 days ago
                                            </span>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                    </div>
            </div>
            <div class="mx-3 my-2 border-t border-gray-300 py-3">
                <p class="capitalize my-2 text-2xl font-normal">
                    favourites
                </p>
                    <div
                        class="grid xl:grid-cols-3 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-4 place-items-center">
                        <div class="relative border border-gray-100 rounded-md shadow-md cursor-pointer">
                            <a href="#"
                                class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                <div
                                    class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                    <div>
                                        <img src="{{ asset('storage/img/post1.jpg') }}" alt="post"
                                            class="bg-cover w-100 h-100 rounded shadow-md">
                                    </div>
                                    <div class="flex justify-center items-center flex-row my-4 px-2">
                                        <div class="mr-3 w-16">
                                            <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                class="w-9 rounded-full shadow-md">
                                        </div>
                                        <div class="flex justify-start">
                                            <div class="text-gray-900 md:text-sm text-xs text-left font-bold">
                                                Amir Tataloo - Heyf Didid Raft - New Music Video (Coming
                                                Soon)
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="ml-14 flex flex-col justify-start items-start">
                                        <div class="text-left">
                                            <a href="#" class="text-sm text-gray-500 text-left">
                                                Amir Tataloo
                                            </a>
                                        </div>
                                        <div class="w-full">
                                            <span href="#" class="text-xs font-base text-gray-500">
                                                147K views &nbsp; &bullet; &nbsp; 2 days ago
                                            </span>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                        <div class="relative border border-gray-100 rounded-md shadow-md cursor-pointer">
                            <a href="#"
                                class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                <div
                                    class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                    <div>
                                        <img src="{{ asset('storage/img/post1.jpg') }}" alt="post"
                                            class="bg-cover w-100 h-100 rounded shadow-md">
                                    </div>
                                    <div class="flex justify-center items-center flex-row my-4 px-2">
                                        <div class="mr-3 w-16">
                                            <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                class="w-9 rounded-full shadow-md">
                                        </div>
                                        <div class="flex justify-start">
                                            <div class="text-gray-900 md:text-sm text-xs text-left font-bold">
                                                Amir Tataloo - Heyf Didid Raft - New Music Video (Coming
                                                Soon)
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="ml-14 flex flex-col justify-start items-start">
                                        <div class="text-left">
                                            <a href="#" class="text-sm text-gray-500 text-left">
                                                Amir Tataloo
                                            </a>
                                        </div>
                                        <div class="w-full">
                                            <span href="#" class="text-xs font-base text-gray-500">
                                                147K views &nbsp; &bullet; &nbsp; 2 days ago
                                            </span>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                        <div class="relative border border-gray-100 rounded-md shadow-md cursor-pointer">
                            <a href="#"
                                class=" text-left max-w-xs space-y-2 transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
                                <div
                                    class="max-w-xs  pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                                    <div>
                                        <img src="{{ asset('storage/img/post1.jpg') }}" alt="post"
                                            class="bg-cover w-100 h-100 rounded shadow-md">
                                    </div>
                                    <div class="flex justify-center items-center flex-row my-4 px-2">
                                        <div class="mr-3 w-16">
                                            <img src="{{ asset('storage/img/post1.jpg') }}" alt=""
                                                class="w-9 rounded-full shadow-md">
                                        </div>
                                        <div class="flex justify-start">
                                            <div class="text-gray-900 md:text-sm text-xs text-left font-bold">
                                                Amir Tataloo - Heyf Didid Raft - New Music Video (Coming
                                                Soon)
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="ml-14 flex flex-col justify-start items-start">
                                        <div class="text-left">
                                            <a href="#" class="text-sm text-gray-500 text-left">
                                                Amir Tataloo
                                            </a>
                                        </div>
                                        <div class="w-full">
                                            <span href="#" class="text-xs font-base text-gray-500">
                                                147K views &nbsp; &bullet; &nbsp; 2 days ago
                                            </span>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>