<!DOCTYPE html>
<html x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/tailwind.output.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <script src="../../node_modules/alpinejs/dist/alpine.js" defer></script>
    <!-- <script src="../node_modules/alpinejs/dist/alpine-ie11.js" defer></script> -->
    <script src="../assets/js/init-alpine.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script src="./assets/js/charts-lines.js" defer></script>
    <script src="./assets/js/charts-pie.js" defer></script> -->
</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900 capitalize" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        <aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
            <div class="py-4 text-gray-500 dark:text-gray-400">
                <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
                    Panel Videos
                </a>
                <ul class="mt-6">
                    <li class="relative px-6 py-3">
                        <span class="absolute inset-y-0 left-0 w-1 bg-indigo-600 rounded-tr-lg rounded-br-lg"
                            aria-hidden="true"></span>
                        <a class="inline-flex items-center w-full text-sm font-medium text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                            href="index.html">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            <span class="ml-4">profile</span>
                        </a>
                    </li>

                </ul>
                <ul>
                    <li class="relative px-6 py-3">
                        <button
                            class="inline-flex items-center justify-between w-full focus:outline-none text-sm font-medium transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            @click="toggleMediaMenu" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                </svg>
                                <span class="ml-4">Media</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <template x-if="isMediaMenuOpen">
                            <ul x-transition:enter="transition-all ease-in-out duration-300"
                                x-transition:enter-start="opacity-25 max-h-0"
                                x-transition:enter-end="opacity-100 max-h-xl"
                                x-transition:leave="transition-all ease-in-out duration-300"
                                x-transition:leave-start="opacity-100 max-h-xl"
                                x-transition:leave-end="opacity-0 max-h-0"
                                class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                                aria-label="submenu">
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="./create.html">
                                        Create Media</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="./lists.html">
                                        List Media</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="library.html">
                                        Library</a>
                                </li>
                            </ul>
                        </template>
                    </li>
                    <li class="relative px-6 py-3">
                        <button
                            class="inline-flex items-center justify-between w-full focus:outline-none text-sm font-medium transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            @click="toggleManageFollowersMenu" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                                </svg>
                                <span class="ml-4">Manage Followers</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <template x-if="isManageFollowersMenuOpen">
                            <ul x-transition:enter="transition-all ease-in-out duration-300"
                                x-transition:enter-start="opacity-25 max-h-0"
                                x-transition:enter-end="opacity-100 max-h-xl"
                                x-transition:leave="transition-all ease-in-out duration-300"
                                x-transition:leave-start="opacity-100 max-h-xl"
                                x-transition:leave-end="opacity-0 max-h-0"
                                class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                                aria-label="submenu">
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="./list-followers.html">
                                        followers list</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="./list-following.html">
                                        following list</a>
                                </li>

                            </ul>
                        </template>
                    </li>
                    <li class="relative px-6 py-3">
                        <button
                            class="inline-flex items-center justify-between w-full focus:outline-none text-sm font-medium transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            @click="toggleSettPMenu" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>

                                <span class="ml-4">Setting Profile</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <template x-if="isSettPMenuOpen">
                            <ul x-transition:enter="transition-all ease-in-out duration-300"
                                x-transition:enter-start="opacity-25 max-h-0"
                                x-transition:enter-end="opacity-100 max-h-xl"
                                x-transition:leave="transition-all ease-in-out duration-300"
                                x-transition:leave-start="opacity-100 max-h-xl"
                                x-transition:leave-end="opacity-0 max-h-0"
                                class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                                aria-label="submenu">
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="access.html">
                                        access
                                    </a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="notification.html">
                                        notification
                                    </a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="idenity.html">
                                        idenity
                                    </a>
                                </li>
                            </ul>
                        </template>
                    </li>
                    <li class="relative px-6 py-3">
                        <button
                            class="inline-flex items-center justify-between w-full focus:outline-none text-sm font-medium transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            @click="toggleSettHMenu" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>

                                <span class="ml-4">Setting trending</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <template x-if="isSettHMenuOpen">
                            <ul x-transition:enter="transition-all ease-in-out duration-300"
                                x-transition:enter-start="opacity-25 max-h-0"
                                x-transition:enter-end="opacity-100 max-h-xl"
                                x-transition:leave="transition-all ease-in-out duration-300"
                                x-transition:leave-start="opacity-100 max-h-xl"
                                x-transition:leave-end="opacity-0 max-h-0"
                                class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                                aria-label="submenu">
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="Library/create-account.html">
                                        favourites
                                    </a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="Library/create-account.html">
                                        pictures
                                    </a>
                                </li>
                            </ul>
                        </template>
                    </li>
                </ul>
                <div class="px-6 my-6">
                    <button
                        class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-indigo-600 border border-transparent rounded-lg active:bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:shadow-outline-indigo">
                        Upload videos
                        <span class="ml-2" aria-hidden="true">+</span>
                    </button>
                </div>
            </div>
        </aside>
        <!-- Mobile sidebar -->
        <!-- Backdrop -->
        <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
        <aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
            x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
            x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
            @keydown.escape="closeSideMenu">
            <div class="py-4 text-gray-500 dark:text-gray-400">
                <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
                    Panel Video
                </a>
                <ul class="mt-6">
                    <li class="relative px-6 py-3">
                        <span class="absolute inset-y-0 left-0 w-1 bg-indigo-600 rounded-tr-lg rounded-br-lg"
                            aria-hidden="true"></span>
                        <a class="inline-flex items-center w-full text-sm font-medium text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                            href="index.html">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            <span class="ml-4">Dashboard</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li class="relative px-6 py-3">
                        <button
                            class="inline-flex items-center justify-between w-full focus:outline-none text-sm font-medium transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            @click="toggleMediaMenu" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                </svg>
                                <span class="ml-4">Media</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <template x-if="isMediaMenuOpen">
                            <ul x-transition:enter="transition-all ease-in-out duration-300"
                                x-transition:enter-start="opacity-25 max-h-0"
                                x-transition:enter-end="opacity-100 max-h-xl"
                                x-transition:leave="transition-all ease-in-out duration-300"
                                x-transition:leave-start="opacity-100 max-h-xl"
                                x-transition:leave-end="opacity-0 max-h-0"
                                class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                                aria-label="submenu">
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="./create.html">
                                        Create Media</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="./lists.html">
                                        List Media</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="library.html">
                                        Library</a>
                                </li>
                            </ul>
                        </template>
                    </li>
                    <li class="relative px-6 py-3">
                        <button
                            class="inline-flex items-center justify-between w-full focus:outline-none text-sm font-medium transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            @click="toggleManageFollowersMenu" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                                </svg>
                                <span class="ml-4">Manage Followers</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <template x-if="isManageFollowersMenuOpen">
                            <ul x-transition:enter="transition-all ease-in-out duration-300"
                                x-transition:enter-start="opacity-25 max-h-0"
                                x-transition:enter-end="opacity-100 max-h-xl"
                                x-transition:leave="transition-all ease-in-out duration-300"
                                x-transition:leave-start="opacity-100 max-h-xl"
                                x-transition:leave-end="opacity-0 max-h-0"
                                class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                                aria-label="submenu">
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="./list-followers.html">
                                        followers list</a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="./list-following.html">
                                        following list</a>
                                </li>

                            </ul>
                        </template>
                    </li>
                    <li class="relative px-6 py-3">
                        <button
                            class="inline-flex items-center justify-between w-full focus:outline-none text-sm font-medium transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            @click="toggleSettPMenu" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>

                                <span class="ml-4">Setting Profile</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <template x-if="isSettPMenuOpen">
                            <ul x-transition:enter="transition-all ease-in-out duration-300"
                                x-transition:enter-start="opacity-25 max-h-0"
                                x-transition:enter-end="opacity-100 max-h-xl"
                                x-transition:leave="transition-all ease-in-out duration-300"
                                x-transition:leave-start="opacity-100 max-h-xl"
                                x-transition:leave-end="opacity-0 max-h-0"
                                class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                                aria-label="submenu">
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="access.html">
                                        access
                                    </a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="notification.html">
                                        notification
                                    </a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="idenity.html">
                                        idenity
                                    </a>
                                </li>
                            </ul>
                        </template>
                    </li>
                    <li class="relative px-6 py-3">
                        <button
                            class="inline-flex items-center justify-between w-full focus:outline-none text-sm font-medium transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            @click="toggleSettHMenu" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>

                                <span class="ml-4">Setting trending</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <template x-if="isSettHMenuOpen">
                            <ul x-transition:enter="transition-all ease-in-out duration-300"
                                x-transition:enter-start="opacity-25 max-h-0"
                                x-transition:enter-end="opacity-100 max-h-xl"
                                x-transition:leave="transition-all ease-in-out duration-300"
                                x-transition:leave-start="opacity-100 max-h-xl"
                                x-transition:leave-end="opacity-0 max-h-0"
                                class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                                aria-label="submenu">
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="Library/create-account.html">
                                        favourites
                                    </a>
                                </li>
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="Library/create-account.html">
                                        pictures
                                    </a>
                                </li>
                            </ul>
                        </template>
                    </li>
                </ul>
                <div class="px-6 my-6">
                    <button
                        class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-indigo-600 border border-transparent rounded-lg active:bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:shadow-outline-indigo">
                        Upload videos
                        <span class="ml-2" aria-hidden="true">+</span>
                    </button>
                </div>
            </div>
        </aside>
        <div class="flex flex-col flex-1 w-full">
            <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
                <div
                    class="container flex items-center justify-between h-full px-6 mx-auto text-indigo-600 dark:text-indigo-300">
                    <!-- Mobile hamburger -->
                    <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-indigo"
                        @click="toggleSideMenu" aria-label="Menu">
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <!-- Search input -->
                    <!-- <div class="flex justify-center flex-1 lg:mr-32">
                        <div class="relative w-full max-w-xl mr-6 focus-within:text-indigo-500">
                            <div class="absolute inset-y-0 flex items-center pl-2">
                                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input
                                class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-indigo-300 focus:outline-none focus:shadow-outline-indigo form-input"
                                type="text" placeholder="Search for projects" aria-label="Search" />
                        </div>
                    </div> -->
                    <div class=""></div>
                    <ul class="flex items-center flex-shrink-0 space-x-6">
                        <!-- Message blanek Page -->
                        <li class="flex">
                            <button
                                class="focus:outline-none border rounded-full py-2 border-indigo-500 px-4 hover:bg-indigo-600 hover:text-white focus:shadow-outline-indigo flex justify-center items-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                    </path>
                                </svg>
                                <div class="text-sm">&nbsp; Messages</div>
                            </button>
                        </li>
                        <!-- Notifications menu -->
                        <li class="relative">
                            <button
                                class="relative border py-2 border-indigo-500 px-2 hover:bg-indigo-600 hover:text-white align-middle rounded-full focus:outline-none focus:shadow-outline-indigo"
                                @click="toggleNotificationsMenu" @keydown.escape="closeNotificationsMenu"
                                aria-label="Notifications" aria-haspopup="true">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                                    </path>
                                </svg>
                                <!-- Notification badge -->
                                <span aria-hidden="true"
                                    class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"></span>
                            </button>
                            <template x-if="isNotificationsMenuOpen">
                                <ul x-transition:leave="transition ease-in duration-150"
                                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                    @click.away="closeNotificationsMenu" @keydown.escape="closeNotificationsMenu"
                                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700">
                                    <li class="flex">
                                        <a class="inline-flex items-center justify-between w-full focus:outline-none px-2 py-1 text-sm font-medium transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                            href="#">
                                            <span>Messages</span>
                                            <span
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
                                                13
                                            </span>
                                        </a>
                                    </li>
                                    <li class="flex">
                                        <a class="inline-flex items-center justify-between w-full focus:outline-none px-2 py-1 text-sm font-medium transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                            href="#">
                                            <span>Sales</span>
                                            <span
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
                                                2
                                            </span>
                                        </a>
                                    </li>
                                    <li class="flex">
                                        <a class="inline-flex items-center justify-between w-full focus:outline-none px-2 py-1 text-sm font-medium transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                            href="#">
                                            <span>Alerts</span>
                                        </a>
                                    </li>
                                </ul>
                            </template>
                        </li>
                        <!-- Profile menu -->
                        <li class="relative">
                            <button class="align-middle rounded-full focus:shadow-outline-indigo focus:outline-none"
                                @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account"
                                aria-haspopup="true">
                                <img class="object-cover w-10 h-10 rounded-full" src="../../img/samansayyar.jpg" alt=""
                                    aria-hidden="true" />
                            </button>
                            <template x-if="isProfileMenuOpen">
                                <ul x-transition:leave="transition ease-in duration-150"
                                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                    @click.away="closeProfileMenu" @keydown.escape="closeProfileMenu"
                                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
                                    aria-label="submenu">
                                    <li class="flex">
                                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-medium transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                            href="#">
                                            <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                                </path>
                                            </svg>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li class="flex">
                                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-medium transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                            href="#">
                                            <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path
                                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                                </path>
                                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li class="flex">
                                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-medium transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                            href="#">
                                            <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path
                                                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                                                </path>
                                            </svg>
                                            <span>Log out</span>
                                        </a>
                                    </li>
                                </ul>
                            </template>
                        </li>
                    </ul>
                </div>
            </header>

            <main class="h-full overflow-y-auto">
                <div class="container px-4 md:my-2 mx-auto grid">
                    <!-- Cards -->
                    <div class="flex items-center bg-white rounded-lg shadow-xs dark:bg-gray-800">
                        <div class="grid grid-cols-12 gap-4 md:mt-2 mt-6">
                            <div
                                class="px-5 py-3 flex bg-white flex-col md:justify-start md:items-center items-center justify-center md:col-span-3 col-span-12 text-gray-800">
                                <div class="md:w-60 w-40">
                                    <img src="../../img/samansayyar.jpg" class="w-full rounded-full" alt="">
                                </div>
                                <div class="mt-2 text-center flex justify-center">name trending</div>

                                <div class="w-full bg-gray-300 mt-4" style="height: .036rem;"></div>
                                <br>

                                <div class="w-full">
                                    <div class="w-full flex flex-col justify-start">
                                        <div class="mt-2">
                                            <p class="flex items-center text-gray-900 md:text-lg text-lg text-left capitalize font-base">
                                                <svg class="w-5 h-5 mr-2" aria-hidden="true" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path
                                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                                </path>
                                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                            setting 
                                            </p>
                                        </div>
                                        <ul class="flex justify-start w-full flex-col space-y-2">
                                            <a
                                                class="mt-3 transition duration-300 rounded-md cursor-pointer hover:bg-indigo-600 text-gray-800 hover:text-white bg-gray-100 md:text-md text-sm capitalize px-2 py-2 w-full">
                                                notification</a>
                                            <a
                                                class="transition duration-300 rounded-md cursor-pointer hover:bg-indigo-600 text-gray-800 hover:text-white bg-gray-100 md:text-md text-sm capitalize px-2 py-2 w-full">
                                                account</a>
                                            <a
                                                class="transition duration-300 rounded-md cursor-pointer hover:bg-indigo-600 text-gray-800 hover:text-white bg-gray-100 md:text-md text-sm capitalize px-2 py-2 w-full">
                                                privacy</a>
                                            <a
                                                class="transition duration-300 rounded-md cursor-pointer hover:bg-indigo-600 text-gray-800 hover:text-white bg-gray-100 md:text-md text-sm capitalize px-2 py-2 w-full">
                                                followers</a>
                                            <a
                                                class="transition duration-300 rounded-md cursor-pointer hover:bg-indigo-600 text-gray-800 hover:text-white bg-gray-100 md:text-md text-sm capitalize px-2 py-2 w-full">
                                                membership</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="p-2 w-full md:col-span-9 col-span-12">
                                <div class="flex flex-col items-center w-full md:col-span-10">
                                    <div class="w-full scrollere overflow-x-auto border-b">
                                        <nav class="md:pb-4 pb-2 md:py-3 flex flex-row relative capitalize">
                                            <a class="md:px-6 px-5 mx-2 md:py-2 py-2 md:text-md text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                                href="#" :class="{ 'bg-gray-200': tab === 'media' }"
                                                @click="tab = 'media'">
                                                <div class="">media</div> &nbsp; <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                                </svg>
                                            </a>
                                            <a class="md:px-6 px-5 mx-2 md:py-2 py-2 md:text-md text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                                href="#" :class="{ 'bg-gray-200': tab === 'wall' }"
                                                @click="tab = 'wall'">
                                                <div class="">wall</div> &nbsp; <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                                </svg>
                                            </a>
                                            <a class="md:px-6 px-5 mx-2 md:py-2 py-2 md:text-md text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                                href="#" :class="{ 'bg-gray-200': tab === 'bulletin' }"
                                                @click="tab = 'bulletin'">
                                                <div class="">bulletin</div> &nbsp; <svg
                                                    xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                                </svg>
                                            </a>
                                        </nav>
                                    </div>
                                    <div class="w-full">
                                        <div class="w-full" x-show.transition="tab === 'media'">
                                            <div class="w-full scrollere ">
                                                <nav
                                                    class="md:pb-4 pb-2 md:py-3 flex w-full lg:flex-row flex-col justify-center relative capitalize">
                                                    <a class="md:px-6 px-5 text-center mx-2 w-full md:py-2 py-2 md:text-sm text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                                        href="#" :class="{ 'bg-gray-200': tab_slug === 'latest' }"
                                                        @click="tab_slug = 'latest'">
                                                        <div class="">latest</div>
                                                    </a>
                                                    <a class="md:px-6 px-5 text-center mx-2 w-full md:py-2 py-2 md:text-sm text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                                        href="#" :class="{ 'bg-gray-200': tab_slug === 'top_rated' }"
                                                        @click="tab_slug = 'top_rated'">
                                                        <div class="">top rated</div>
                                                    </a>
                                                    <a class="md:px-6 px-5 text-center mx- w-full  md:py-2 py-2 md:text-sm text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                                        href="#" :class="{ 'bg-gray-200': tab_slug === 'trending' }"
                                                        @click="tab_slug = 'trending'">
                                                        <div class="">trending</div>
                                                    </a>
                                                </nav>
                                                <div class="my-2">
                                                    <div class="relative text-gray-600">
                                                        <input type="search" name="search" placeholder="Search"
                                                            class="bg-white h-10 border border-gray-400 text-gray-800 px-5 pr-10 rounded-full text-sm focus:outline-none">
                                                        <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                                                            <svg class="h-4 w-4 fill-current"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                                id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966"
                                                                style="enable-background:new 0 0 56.966 56.966;"
                                                                xml:space="preserve" width="512px" height="512px">
                                                                <path
                                                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="mt-8" x-show.transition="tab_slug === 'latest' ">

                                                    <div
                                                        class="md:px-4 space-y-6 flex justify-center items-center flex-col">

                                                        <div
                                                            class="flex flex-col justify-center items-center bg-indigo-200 border p-2">
                                                            <div
                                                                class="bg-transparent w-full sm:w-full h-auto sm:h-64 rounded-lg flex flex-col sm:flex-row gap-5 select-none">
                                                                <div
                                                                    class="relative h-52 sm:h-full sm:w-72 rounded-xl bg-gray-100 bg-center bg-cover object-cover">
                                                                    <img src="../../img/post1.jpg" alt="result"
                                                                        class="object-cover bg-cover rounded-xl h-52 sm:h-full sm:w-72">
                                                                    <div
                                                                        class="flex justify-center cursor-pointer  items-center absolute inset-0 text-white">
                                                                        <svg class="w-12 h-12 transition duration-300  hover:bg-indigo-500 shadow-md rounded-full"
                                                                            fill="none" stroke="currentColor"
                                                                            viewBox="0 0 24 24"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                                            </path>
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                            </path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="flex sm:flex-1 flex-col gap-2 p-1">
                                                                    <h1
                                                                        class="md:text-lg text-sm text-left font-bold  text-gray-900">
                                                                        This is the title for your card. This is really
                                                                        cool
                                                                    </h1>
                                                                    <!-- <p class="text-gray-500 text-sm sm:text-base line-clamp-3">
                                                                        This is the desctiption for your card. This is really really long. This is used to describe the content of the card. I hope you like the design...
                                                                    </p> -->
                                                                    <button
                                                                        class='border border-gray-200 rounded-full hover:bg-indigo-300 w-20 flex items-center justify-center gap-1 sm:text-md px-2 py-1  transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                                        <span>public</span>
                                                                    </button>
                                                                    <div
                                                                        class="flex items-center justify-start md:text-sm text-xs w-40">
                                                                        <div class="w-8 ">
                                                                            <img src="../../img/samansayyar.jpg"
                                                                                alt="admin_hubs_posted"
                                                                                class="w-full rounded-full">
                                                                        </div>
                                                                        <div class="ml-2">
                                                                            <p class="text-xs text-gray-600">Samansayyar
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex gap-4 md:mt-auto mt-5">
                                                                        <button
                                                                            class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                                            <svg stroke="currentColor"
                                                                                fill="currentColor" stroke-width="0"
                                                                                viewBox="0 0 1024 1024" height="1em"
                                                                                width="1em"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M923 283.6a260.04 260.04 0 0 0-56.9-82.8 264.4 264.4 0 0 0-84-55.5A265.34 265.34 0 0 0 679.7 125c-49.3 0-97.4 13.5-139.2 39-10 6.1-19.5 12.8-28.5 20.1-9-7.3-18.5-14-28.5-20.1-41.8-25.5-89.9-39-139.2-39-35.5 0-69.9 6.8-102.4 20.3-31.4 13-59.7 31.7-84 55.5a258.44 258.44 0 0 0-56.9 82.8c-13.9 32.3-21 66.6-21 101.9 0 33.3 6.8 68 20.3 103.3 11.3 29.5 27.5 60.1 48.2 91 32.8 48.9 77.9 99.9 133.9 151.6 92.8 85.7 184.7 144.9 188.6 147.3l23.7 15.2c10.5 6.7 24 6.7 34.5 0l23.7-15.2c3.9-2.5 95.7-61.6 188.6-147.3 56-51.7 101.1-102.7 133.9-151.6 20.7-30.9 37-61.5 48.2-91 13.5-35.3 20.3-70 20.3-103.3.1-35.3-7-69.6-20.9-101.9zM512 814.8S156 586.7 156 385.5C156 283.6 240.3 201 344.3 201c73.1 0 136.5 40.8 167.7 100.4C543.2 241.8 606.6 201 679.7 201c104 0 188.3 82.6 188.3 184.5 0 201.2-356 429.3-356 429.3z">
                                                                                </path>
                                                                            </svg>
                                                                            <span>556</span>
                                                                        </button>
                                                                        <button
                                                                            class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                                            <svg stroke="currentColor"
                                                                                fill="currentColor" stroke-width="0"
                                                                                viewBox="0 0 1024 1024" height="1em"
                                                                                width="1em"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M464 512a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm200 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm-400 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm661.2-173.6c-22.6-53.7-55-101.9-96.3-143.3a444.35 444.35 0 0 0-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9a445.35 445.35 0 0 0-142 96.5c-40.9 41.3-73 89.3-95.2 142.8-23 55.4-34.6 114.3-34.3 174.9A449.4 449.4 0 0 0 112 714v152a46 46 0 0 0 46 46h152.1A449.4 449.4 0 0 0 510 960h2.1c59.9 0 118-11.6 172.7-34.3a444.48 444.48 0 0 0 142.8-95.2c41.3-40.9 73.8-88.7 96.5-142 23.6-55.2 35.6-113.9 35.9-174.5.3-60.9-11.5-120-34.8-175.6zm-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8 69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9 44.6 18.7 84.6 45.6 119 80 34.3 34.3 61.3 74.4 80 119 19.4 46.2 29.1 95.2 28.9 145.8-.6 99.6-39.7 192.9-110.1 262.7z">
                                                                                </path>
                                                                            </svg>
                                                                            <span>56</span>
                                                                        </button>
                                                                        <button
                                                                            class='ml-auto flex items-center gap-1 bg-indigo-700 text-white border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-800 hover:text-white transition-colors focus:bg-gray-900  focus:outline-none focus-visible:border-gray-500'>
                                                                            <span>Read more</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="flex flex-col justify-center items-center bg-white border p-2">
                                                            <div
                                                                class="bg-transparent w-80 w-full sm:w-full h-auto sm:h-64 rounded-lg flex flex-col sm:flex-row gap-5 select-none">
                                                                <div
                                                                    class="relative h-52 sm:h-full sm:w-72 rounded-xl bg-gray-100 bg-center bg-cover object-cover">
                                                                    <img src="../../img/post1.jpg" alt="result"
                                                                        class="object-cover bg-cover rounded-xl h-52 sm:h-full sm:w-72">
                                                                    <div
                                                                        class="flex justify-center cursor-pointer  items-center absolute inset-0 text-white">
                                                                        <svg class="w-12 h-12 transition duration-300  hover:bg-indigo-500 shadow-md rounded-full"
                                                                            fill="none" stroke="currentColor"
                                                                            viewBox="0 0 24 24"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                                            </path>
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                            </path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="flex sm:flex-1 flex-col gap-2 p-1">
                                                                    <h1
                                                                        class="md:text-lg text-sm text-left font-bold  text-gray-900">
                                                                        This is the title for your card. This is really
                                                                        cool
                                                                    </h1>
                                                                    <!-- <p class="text-gray-500 text-sm sm:text-base line-clamp-3">
                                                                        This is the desctiption for your card. This is really really long. This is used to describe the content of the card. I hope you like the design...
                                                                    </p> -->
                                                                    <button
                                                                        class='border border-gray-200 rounded-full hover:bg-indigo-300 w-20 flex items-center justify-center gap-1 sm:text-md px-2 py-1  transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                                        <span>public</span>
                                                                    </button>
                                                                    <div
                                                                        class="flex items-center justify-start md:text-sm text-xs w-40">
                                                                        <div class="w-8 ">
                                                                            <img src="../../img/samansayyar.jpg"
                                                                                alt="admin_hubs_posted"
                                                                                class="w-full rounded-full">
                                                                        </div>
                                                                        <div class="ml-2">
                                                                            <p class="text-xs text-gray-600">Samansayyar
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex gap-4 md:mt-auto mt-5">
                                                                        <button
                                                                            class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                                            <svg stroke="currentColor"
                                                                                fill="currentColor" stroke-width="0"
                                                                                viewBox="0 0 1024 1024" height="1em"
                                                                                width="1em"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M923 283.6a260.04 260.04 0 0 0-56.9-82.8 264.4 264.4 0 0 0-84-55.5A265.34 265.34 0 0 0 679.7 125c-49.3 0-97.4 13.5-139.2 39-10 6.1-19.5 12.8-28.5 20.1-9-7.3-18.5-14-28.5-20.1-41.8-25.5-89.9-39-139.2-39-35.5 0-69.9 6.8-102.4 20.3-31.4 13-59.7 31.7-84 55.5a258.44 258.44 0 0 0-56.9 82.8c-13.9 32.3-21 66.6-21 101.9 0 33.3 6.8 68 20.3 103.3 11.3 29.5 27.5 60.1 48.2 91 32.8 48.9 77.9 99.9 133.9 151.6 92.8 85.7 184.7 144.9 188.6 147.3l23.7 15.2c10.5 6.7 24 6.7 34.5 0l23.7-15.2c3.9-2.5 95.7-61.6 188.6-147.3 56-51.7 101.1-102.7 133.9-151.6 20.7-30.9 37-61.5 48.2-91 13.5-35.3 20.3-70 20.3-103.3.1-35.3-7-69.6-20.9-101.9zM512 814.8S156 586.7 156 385.5C156 283.6 240.3 201 344.3 201c73.1 0 136.5 40.8 167.7 100.4C543.2 241.8 606.6 201 679.7 201c104 0 188.3 82.6 188.3 184.5 0 201.2-356 429.3-356 429.3z">
                                                                                </path>
                                                                            </svg>
                                                                            <span>556</span>
                                                                        </button>
                                                                        <button
                                                                            class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                                            <svg stroke="currentColor"
                                                                                fill="currentColor" stroke-width="0"
                                                                                viewBox="0 0 1024 1024" height="1em"
                                                                                width="1em"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M464 512a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm200 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm-400 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm661.2-173.6c-22.6-53.7-55-101.9-96.3-143.3a444.35 444.35 0 0 0-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9a445.35 445.35 0 0 0-142 96.5c-40.9 41.3-73 89.3-95.2 142.8-23 55.4-34.6 114.3-34.3 174.9A449.4 449.4 0 0 0 112 714v152a46 46 0 0 0 46 46h152.1A449.4 449.4 0 0 0 510 960h2.1c59.9 0 118-11.6 172.7-34.3a444.48 444.48 0 0 0 142.8-95.2c41.3-40.9 73.8-88.7 96.5-142 23.6-55.2 35.6-113.9 35.9-174.5.3-60.9-11.5-120-34.8-175.6zm-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8 69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9 44.6 18.7 84.6 45.6 119 80 34.3 34.3 61.3 74.4 80 119 19.4 46.2 29.1 95.2 28.9 145.8-.6 99.6-39.7 192.9-110.1 262.7z">
                                                                                </path>
                                                                            </svg>
                                                                            <span>56</span>
                                                                        </button>
                                                                        <button
                                                                            class='ml-auto flex items-center gap-1 bg-indigo-700 text-white border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-800 hover:text-white transition-colors focus:bg-gray-900 focus:outline-none focus-visible:border-gray-500'>
                                                                            <span>Read more</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="mt-8" x-show.transition="tab_slug === 'top_rated' ">

                                                    <div
                                                        class="flex flex-col justify-center items-center bg-indigo-200 border p-2">
                                                        <div
                                                            class="bg-transparent  w-80 sm:w-full h-auto sm:h-64 rounded-lg flex flex-col sm:flex-row gap-5 select-none">
                                                            <div
                                                                class="relative h-52 sm:h-full sm:w-72 rounded-xl bg-gray-100 bg-center bg-cover object-cover">
                                                                <img src="../../img/post1.jpg" alt="result"
                                                                    class="object-cover bg-cover rounded-xl h-52 sm:h-full sm:w-72">
                                                                <div
                                                                    class="flex justify-center cursor-pointer  items-center absolute inset-0 text-white">
                                                                    <svg class="w-12 h-12 transition duration-300  hover:bg-indigo-500 shadow-md rounded-full"
                                                                        fill="none" stroke="currentColor"
                                                                        viewBox="0 0 24 24"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                                        </path>
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="flex sm:flex-1 flex-col gap-2 p-1">
                                                                <h1
                                                                    class="md:text-lg text-sm text-left font-bold  text-gray-900">
                                                                    This is the title for your card. This is really cool
                                                                </h1>
                                                                <!-- <p class="text-gray-500 text-sm sm:text-base line-clamp-3">
                                                                    This is the desctiption for your card. This is really really long. This is used to describe the content of the card. I hope you like the design...
                                                                </p> -->
                                                                <button
                                                                    class='border border-gray-200 rounded-full hover:bg-indigo-300 w-20 flex items-center justify-center gap-1 sm:text-md px-2 py-1  transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                                    <span>public</span>
                                                                </button>
                                                                <div class="flex gap-4 md:mt-auto mt-5">
                                                                    <button
                                                                        class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                                        <svg stroke="currentColor" fill="currentColor"
                                                                            stroke-width="0" viewBox="0 0 1024 1024"
                                                                            height="1em" width="1em"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M923 283.6a260.04 260.04 0 0 0-56.9-82.8 264.4 264.4 0 0 0-84-55.5A265.34 265.34 0 0 0 679.7 125c-49.3 0-97.4 13.5-139.2 39-10 6.1-19.5 12.8-28.5 20.1-9-7.3-18.5-14-28.5-20.1-41.8-25.5-89.9-39-139.2-39-35.5 0-69.9 6.8-102.4 20.3-31.4 13-59.7 31.7-84 55.5a258.44 258.44 0 0 0-56.9 82.8c-13.9 32.3-21 66.6-21 101.9 0 33.3 6.8 68 20.3 103.3 11.3 29.5 27.5 60.1 48.2 91 32.8 48.9 77.9 99.9 133.9 151.6 92.8 85.7 184.7 144.9 188.6 147.3l23.7 15.2c10.5 6.7 24 6.7 34.5 0l23.7-15.2c3.9-2.5 95.7-61.6 188.6-147.3 56-51.7 101.1-102.7 133.9-151.6 20.7-30.9 37-61.5 48.2-91 13.5-35.3 20.3-70 20.3-103.3.1-35.3-7-69.6-20.9-101.9zM512 814.8S156 586.7 156 385.5C156 283.6 240.3 201 344.3 201c73.1 0 136.5 40.8 167.7 100.4C543.2 241.8 606.6 201 679.7 201c104 0 188.3 82.6 188.3 184.5 0 201.2-356 429.3-356 429.3z">
                                                                            </path>
                                                                        </svg>
                                                                        <span>556</span>
                                                                    </button>
                                                                    <button
                                                                        class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                                        <svg stroke="currentColor" fill="currentColor"
                                                                            stroke-width="0" viewBox="0 0 1024 1024"
                                                                            height="1em" width="1em"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M464 512a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm200 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm-400 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm661.2-173.6c-22.6-53.7-55-101.9-96.3-143.3a444.35 444.35 0 0 0-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9a445.35 445.35 0 0 0-142 96.5c-40.9 41.3-73 89.3-95.2 142.8-23 55.4-34.6 114.3-34.3 174.9A449.4 449.4 0 0 0 112 714v152a46 46 0 0 0 46 46h152.1A449.4 449.4 0 0 0 510 960h2.1c59.9 0 118-11.6 172.7-34.3a444.48 444.48 0 0 0 142.8-95.2c41.3-40.9 73.8-88.7 96.5-142 23.6-55.2 35.6-113.9 35.9-174.5.3-60.9-11.5-120-34.8-175.6zm-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8 69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9 44.6 18.7 84.6 45.6 119 80 34.3 34.3 61.3 74.4 80 119 19.4 46.2 29.1 95.2 28.9 145.8-.6 99.6-39.7 192.9-110.1 262.7z">
                                                                            </path>
                                                                        </svg>
                                                                        <span>56</span>
                                                                    </button>
                                                                    <button
                                                                        class='ml-auto flex items-center gap-1 bg-indigo-700 text-white border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-800 hover:text-white transition-colors focus:bg-gray-900  focus:outline-none focus-visible:border-gray-500'>
                                                                        <span>Read more</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex flex-col justify-center items-center bg-white border p-2">
                                                        <div
                                                            class="bg-transparent w-80  sm:w-full h-auto sm:h-64 rounded-lg flex flex-col sm:flex-row gap-5 select-none">
                                                            <div
                                                                class="relative h-52 sm:h-full sm:w-72 rounded-xl bg-gray-100 bg-center bg-cover object-cover">
                                                                <img src="../../img/post1.jpg" alt="result"
                                                                    class="object-cover bg-cover rounded-xl h-52 sm:h-full sm:w-72">
                                                                <div
                                                                    class="flex justify-center cursor-pointer  items-center absolute inset-0 text-white">
                                                                    <svg class="w-12 h-12 transition duration-300  hover:bg-indigo-500 shadow-md rounded-full"
                                                                        fill="none" stroke="currentColor"
                                                                        viewBox="0 0 24 24"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                                        </path>
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="flex sm:flex-1 flex-col gap-2 p-1">
                                                                <h1
                                                                    class="md:text-lg text-sm text-left font-bold  text-gray-900">
                                                                    This is the title for your card. This is really cool
                                                                </h1>
                                                                <!-- <p class="text-gray-500 text-sm sm:text-base line-clamp-3">
                                                                    This is the desctiption for your card. This is really really long. This is used to describe the content of the card. I hope you like the design...
                                                                </p> -->
                                                                <button
                                                                    class='border border-gray-200 rounded-full hover:bg-indigo-300 w-20 flex items-center justify-center gap-1 sm:text-md px-2 py-1  transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                                    <span>public</span>
                                                                </button>
                                                                <div class="flex gap-4 md:mt-auto mt-5">
                                                                    <button
                                                                        class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                                        <svg stroke="currentColor" fill="currentColor"
                                                                            stroke-width="0" viewBox="0 0 1024 1024"
                                                                            height="1em" width="1em"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M923 283.6a260.04 260.04 0 0 0-56.9-82.8 264.4 264.4 0 0 0-84-55.5A265.34 265.34 0 0 0 679.7 125c-49.3 0-97.4 13.5-139.2 39-10 6.1-19.5 12.8-28.5 20.1-9-7.3-18.5-14-28.5-20.1-41.8-25.5-89.9-39-139.2-39-35.5 0-69.9 6.8-102.4 20.3-31.4 13-59.7 31.7-84 55.5a258.44 258.44 0 0 0-56.9 82.8c-13.9 32.3-21 66.6-21 101.9 0 33.3 6.8 68 20.3 103.3 11.3 29.5 27.5 60.1 48.2 91 32.8 48.9 77.9 99.9 133.9 151.6 92.8 85.7 184.7 144.9 188.6 147.3l23.7 15.2c10.5 6.7 24 6.7 34.5 0l23.7-15.2c3.9-2.5 95.7-61.6 188.6-147.3 56-51.7 101.1-102.7 133.9-151.6 20.7-30.9 37-61.5 48.2-91 13.5-35.3 20.3-70 20.3-103.3.1-35.3-7-69.6-20.9-101.9zM512 814.8S156 586.7 156 385.5C156 283.6 240.3 201 344.3 201c73.1 0 136.5 40.8 167.7 100.4C543.2 241.8 606.6 201 679.7 201c104 0 188.3 82.6 188.3 184.5 0 201.2-356 429.3-356 429.3z">
                                                                            </path>
                                                                        </svg>
                                                                        <span>556</span>
                                                                    </button>
                                                                    <button
                                                                        class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                                        <svg stroke="currentColor" fill="currentColor"
                                                                            stroke-width="0" viewBox="0 0 1024 1024"
                                                                            height="1em" width="1em"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M464 512a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm200 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm-400 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm661.2-173.6c-22.6-53.7-55-101.9-96.3-143.3a444.35 444.35 0 0 0-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9a445.35 445.35 0 0 0-142 96.5c-40.9 41.3-73 89.3-95.2 142.8-23 55.4-34.6 114.3-34.3 174.9A449.4 449.4 0 0 0 112 714v152a46 46 0 0 0 46 46h152.1A449.4 449.4 0 0 0 510 960h2.1c59.9 0 118-11.6 172.7-34.3a444.48 444.48 0 0 0 142.8-95.2c41.3-40.9 73.8-88.7 96.5-142 23.6-55.2 35.6-113.9 35.9-174.5.3-60.9-11.5-120-34.8-175.6zm-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8 69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9 44.6 18.7 84.6 45.6 119 80 34.3 34.3 61.3 74.4 80 119 19.4 46.2 29.1 95.2 28.9 145.8-.6 99.6-39.7 192.9-110.1 262.7z">
                                                                            </path>
                                                                        </svg>
                                                                        <span>56</span>
                                                                    </button>
                                                                    <button
                                                                        class='ml-auto flex items-center gap-1 bg-indigo-700 text-white border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-800 hover:text-white transition-colors focus:bg-gray-900  focus:outline-none focus-visible:border-gray-500'>
                                                                        <span>Read more</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-8" x-show.transition="tab_slug === 'trending' ">


                                                    <div
                                                        class="flex flex-col justify-center items-center bg-indigo-200 border p-2">
                                                        <div
                                                            class="bg-transparent  w-80 sm:w-full h-auto sm:h-64 rounded-lg flex flex-col sm:flex-row gap-5 select-none">
                                                            <div
                                                                class="relative h-52 sm:h-full sm:w-72 rounded-xl bg-gray-100 bg-center bg-cover object-cover">
                                                                <img src="../../img/post1.jpg" alt="result"
                                                                    class="object-cover bg-cover rounded-xl h-52 sm:h-full sm:w-72">
                                                                <div
                                                                    class="flex justify-center cursor-pointer  items-center absolute inset-0 text-white">
                                                                    <svg class="w-12 h-12 transition duration-300  hover:bg-indigo-500 shadow-md rounded-full"
                                                                        fill="none" stroke="currentColor"
                                                                        viewBox="0 0 24 24"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                                        </path>
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="flex sm:flex-1 flex-col gap-2 p-1">
                                                                <h1
                                                                    class="md:text-lg text-sm text-left font-bold  text-gray-900">
                                                                    This is the title for your card. This is really cool
                                                                </h1>
                                                                <!-- <p class="text-gray-500 text-sm sm:text-base line-clamp-3">
                                                                    This is the desctiption for your card. This is really really long. This is used to describe the content of the card. I hope you like the design...
                                                                </p> -->
                                                                <button
                                                                    class='border border-gray-200 rounded-full hover:bg-indigo-300 w-20 flex items-center justify-center gap-1 sm:text-md px-2 py-1  transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                                    <span>public</span>
                                                                </button>
                                                                <div class="flex gap-4 md:mt-auto mt-5">
                                                                    <button
                                                                        class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                                        <svg stroke="currentColor" fill="currentColor"
                                                                            stroke-width="0" viewBox="0 0 1024 1024"
                                                                            height="1em" width="1em"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M923 283.6a260.04 260.04 0 0 0-56.9-82.8 264.4 264.4 0 0 0-84-55.5A265.34 265.34 0 0 0 679.7 125c-49.3 0-97.4 13.5-139.2 39-10 6.1-19.5 12.8-28.5 20.1-9-7.3-18.5-14-28.5-20.1-41.8-25.5-89.9-39-139.2-39-35.5 0-69.9 6.8-102.4 20.3-31.4 13-59.7 31.7-84 55.5a258.44 258.44 0 0 0-56.9 82.8c-13.9 32.3-21 66.6-21 101.9 0 33.3 6.8 68 20.3 103.3 11.3 29.5 27.5 60.1 48.2 91 32.8 48.9 77.9 99.9 133.9 151.6 92.8 85.7 184.7 144.9 188.6 147.3l23.7 15.2c10.5 6.7 24 6.7 34.5 0l23.7-15.2c3.9-2.5 95.7-61.6 188.6-147.3 56-51.7 101.1-102.7 133.9-151.6 20.7-30.9 37-61.5 48.2-91 13.5-35.3 20.3-70 20.3-103.3.1-35.3-7-69.6-20.9-101.9zM512 814.8S156 586.7 156 385.5C156 283.6 240.3 201 344.3 201c73.1 0 136.5 40.8 167.7 100.4C543.2 241.8 606.6 201 679.7 201c104 0 188.3 82.6 188.3 184.5 0 201.2-356 429.3-356 429.3z">
                                                                            </path>
                                                                        </svg>
                                                                        <span>556</span>
                                                                    </button>
                                                                    <button
                                                                        class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                                        <svg stroke="currentColor" fill="currentColor"
                                                                            stroke-width="0" viewBox="0 0 1024 1024"
                                                                            height="1em" width="1em"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M464 512a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm200 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm-400 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm661.2-173.6c-22.6-53.7-55-101.9-96.3-143.3a444.35 444.35 0 0 0-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9a445.35 445.35 0 0 0-142 96.5c-40.9 41.3-73 89.3-95.2 142.8-23 55.4-34.6 114.3-34.3 174.9A449.4 449.4 0 0 0 112 714v152a46 46 0 0 0 46 46h152.1A449.4 449.4 0 0 0 510 960h2.1c59.9 0 118-11.6 172.7-34.3a444.48 444.48 0 0 0 142.8-95.2c41.3-40.9 73.8-88.7 96.5-142 23.6-55.2 35.6-113.9 35.9-174.5.3-60.9-11.5-120-34.8-175.6zm-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8 69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9 44.6 18.7 84.6 45.6 119 80 34.3 34.3 61.3 74.4 80 119 19.4 46.2 29.1 95.2 28.9 145.8-.6 99.6-39.7 192.9-110.1 262.7z">
                                                                            </path>
                                                                        </svg>
                                                                        <span>56</span>
                                                                    </button>
                                                                    <button
                                                                        class='ml-auto flex items-center gap-1 bg-indigo-700 text-white border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-800 hover:text-white transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                                        <span>Read more</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex flex-col justify-center items-center bg-white border p-2">
                                                        <div
                                                            class="bg-transparent w-80 w-full sm:w-full h-auto sm:h-64 rounded-lg flex flex-col sm:flex-row gap-5 select-none">
                                                            <div
                                                                class="relative h-52 sm:h-full sm:w-72 rounded-xl bg-gray-100 bg-center bg-cover object-cover">
                                                                <img src="../../img/post1.jpg" alt="result"
                                                                    class="object-cover bg-cover rounded-xl h-52 sm:h-full sm:w-72">
                                                                <div
                                                                    class="flex justify-center cursor-pointer  items-center absolute inset-0 text-white">
                                                                    <svg class="w-12 h-12 transition duration-300  hover:bg-indigo-500 shadow-md rounded-full"
                                                                        fill="none" stroke="currentColor"
                                                                        viewBox="0 0 24 24"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                                        </path>
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="flex sm:flex-1 flex-col gap-2 p-1">
                                                                <h1
                                                                    class="md:text-lg text-sm text-left font-bold  text-gray-900">
                                                                    This is the title for your card. This is really cool
                                                                </h1>
                                                                <!-- <p class="text-gray-500 text-sm sm:text-base line-clamp-3">
                                                                    This is the desctiption for your card. This is really really long. This is used to describe the content of the card. I hope you like the design...
                                                                </p> -->
                                                                <button
                                                                    class='border border-gray-200 rounded-full hover:bg-indigo-300 w-20 flex items-center justify-center gap-1 sm:text-md px-2 py-1  transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                                    <span>public</span>
                                                                </button>
                                                                <div class="flex gap-4 md:mt-auto mt-5">
                                                                    <button
                                                                        class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                                        <svg stroke="currentColor" fill="currentColor"
                                                                            stroke-width="0" viewBox="0 0 1024 1024"
                                                                            height="1em" width="1em"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M923 283.6a260.04 260.04 0 0 0-56.9-82.8 264.4 264.4 0 0 0-84-55.5A265.34 265.34 0 0 0 679.7 125c-49.3 0-97.4 13.5-139.2 39-10 6.1-19.5 12.8-28.5 20.1-9-7.3-18.5-14-28.5-20.1-41.8-25.5-89.9-39-139.2-39-35.5 0-69.9 6.8-102.4 20.3-31.4 13-59.7 31.7-84 55.5a258.44 258.44 0 0 0-56.9 82.8c-13.9 32.3-21 66.6-21 101.9 0 33.3 6.8 68 20.3 103.3 11.3 29.5 27.5 60.1 48.2 91 32.8 48.9 77.9 99.9 133.9 151.6 92.8 85.7 184.7 144.9 188.6 147.3l23.7 15.2c10.5 6.7 24 6.7 34.5 0l23.7-15.2c3.9-2.5 95.7-61.6 188.6-147.3 56-51.7 101.1-102.7 133.9-151.6 20.7-30.9 37-61.5 48.2-91 13.5-35.3 20.3-70 20.3-103.3.1-35.3-7-69.6-20.9-101.9zM512 814.8S156 586.7 156 385.5C156 283.6 240.3 201 344.3 201c73.1 0 136.5 40.8 167.7 100.4C543.2 241.8 606.6 201 679.7 201c104 0 188.3 82.6 188.3 184.5 0 201.2-356 429.3-356 429.3z">
                                                                            </path>
                                                                        </svg>
                                                                        <span>556</span>
                                                                    </button>
                                                                    <button
                                                                        class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                                        <svg stroke="currentColor" fill="currentColor"
                                                                            stroke-width="0" viewBox="0 0 1024 1024"
                                                                            height="1em" width="1em"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M464 512a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm200 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm-400 0a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm661.2-173.6c-22.6-53.7-55-101.9-96.3-143.3a444.35 444.35 0 0 0-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9a445.35 445.35 0 0 0-142 96.5c-40.9 41.3-73 89.3-95.2 142.8-23 55.4-34.6 114.3-34.3 174.9A449.4 449.4 0 0 0 112 714v152a46 46 0 0 0 46 46h152.1A449.4 449.4 0 0 0 510 960h2.1c59.9 0 118-11.6 172.7-34.3a444.48 444.48 0 0 0 142.8-95.2c41.3-40.9 73.8-88.7 96.5-142 23.6-55.2 35.6-113.9 35.9-174.5.3-60.9-11.5-120-34.8-175.6zm-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8 69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9 44.6 18.7 84.6 45.6 119 80 34.3 34.3 61.3 74.4 80 119 19.4 46.2 29.1 95.2 28.9 145.8-.6 99.6-39.7 192.9-110.1 262.7z">
                                                                            </path>
                                                                        </svg>
                                                                        <span>56</span>
                                                                    </button>
                                                                    <button
                                                                        class='ml-auto flex items-center gap-1 bg-indigo-700 text-white border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-800 hover:text-white transition-colors focus:bg-gray-900 bg-white focus:outline-none focus-visible:border-gray-500'>
                                                                        <span>Read more</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="" x-show.transition="tab === 'wall'">
                                            <div class="my-4 md:px-4 px-2">
                                                <div class="grid md:grid-cols-3 grid-cols-2 md:gap-10 gap-6">

                                                    <div
                                                        class="relative flex-none flex md:flex-row flex-col cursor-pointer">
                                                        <a href="#"
                                                            class="absolute z-50 right-2 top-2   -ml-3  text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <a href="#"
                                                            class="absolute z-50 -right-2 bottom-0   -ml-3  text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div
                                                            class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                                            <img src="../../img/post1.jpg" alt="SamanSayyar"
                                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">

                                                            <a href="#"
                                                                class="absolute flex justify-center items-center -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none"
                                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                                    </path>
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                </svg>
                                                            </a>
                                                        </div>

                                                    </div>

                                                    <div
                                                        class="relative flex-none flex md:flex-row flex-col cursor-pointer">
                                                        <a href="#"
                                                            class="absolute z-50 right-2 top-2   -ml-3  text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <a href="#"
                                                            class="absolute z-50 -right-2 bottom-0   -ml-3  text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div
                                                            class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                                            <img src="../../img/post1.jpg" alt="SamanSayyar"
                                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                                            <a href="#"
                                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none"
                                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                                    </path>
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="relative flex-none flex md:flex-row flex-col cursor-pointer">
                                                        <a href="#"
                                                            class="absolute z-50 right-2 top-2   -ml-3  text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <a href="#"
                                                            class="absolute z-50 -right-2 bottom-0   -ml-3  text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div
                                                            class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                                            <img src="../../img/post1.jpg" alt="SamanSayyar"
                                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                                            <a href="#"
                                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none"
                                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                                    </path>
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="relative flex-none flex md:flex-row flex-col cursor-pointer">
                                                        <a href="#"
                                                            class="absolute z-50 right-2 top-2   -ml-3  text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <a href="#"
                                                            class="absolute z-50 -right-2 bottom-0   -ml-3  text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div
                                                            class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                                            <img src="../../img/post1.jpg" alt="SamanSayyar"
                                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                                            <a href="#"
                                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none"
                                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                                    </path>
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="relative flex-none flex md:flex-row flex-col cursor-pointer">
                                                        <a href="#"
                                                            class="absolute z-50 right-2 top-2   -ml-3  text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <a href="#"
                                                            class="absolute z-50 -right-2 bottom-0   -ml-3  text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div
                                                            class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                                            <img src="../../img/post1.jpg" alt="SamanSayyar"
                                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                                            <a href="#"
                                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none"
                                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                                    </path>
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="relative flex-none flex md:flex-row flex-col cursor-pointer">
                                                        <a href="#"
                                                            class="absolute z-50 right-2 top-2   -ml-3  text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <a href="#"
                                                            class="absolute z-50 -right-2 bottom-0   -ml-3  text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div
                                                            class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                                            <img src="../../img/post1.jpg" alt="SamanSayyar"
                                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                                            <a href="#"
                                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none"
                                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                                    </path>
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="relative flex-none flex md:flex-row flex-col cursor-pointer">
                                                        <a href="#"
                                                            class="absolute z-50 right-2 top-2   -ml-3  text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <a href="#"
                                                            class="absolute z-50 -right-2 bottom-0   -ml-3  text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div
                                                            class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                                            <img src="../../img/post1.jpg" alt="SamanSayyar"
                                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                                            <a href="#"
                                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none"
                                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                                    </path>
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="relative flex-none flex md:flex-row flex-col cursor-pointer">
                                                        <a href="#"
                                                            class="absolute z-50 right-2 top-2   -ml-3  text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <a href="#"
                                                            class="absolute z-50 -right-2 bottom-0   -ml-3  text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div
                                                            class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                                            <img src="../../img/post1.jpg" alt="SamanSayyar"
                                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                                            <a href="#"
                                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none"
                                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                                    </path>
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="relative flex-none flex md:flex-row flex-col cursor-pointer">
                                                        <a href="#"
                                                            class="absolute z-50 right-2 top-2   -ml-3  text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <a href="#"
                                                            class="absolute z-50 -right-2 bottom-0   -ml-3  text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div
                                                            class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                                            <img src="../../img/post1.jpg" alt="SamanSayyar"
                                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                                            <a href="#"
                                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none"
                                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                                    </path>
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="relative flex-none flex md:flex-row flex-col cursor-pointer">
                                                        <a href="#"
                                                            class="absolute z-50 right-2 top-2   -ml-3  text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <a href="#"
                                                            class="absolute z-50 -right-2 bottom-0   -ml-3  text-white p-2 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div
                                                            class="relative  w-full h-full flex justify-center items-center sm:mb-0 mb-3">
                                                            <img src="../../img/post1.jpg" alt="SamanSayyar"
                                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                                            <a href="#"
                                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                                <svg class="md:w-14 md:h-14 w-8 h-8" fill="none"
                                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                                    </path>
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="" x-show.transition="tab === 'bulletin'">
                                            bulletin
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
