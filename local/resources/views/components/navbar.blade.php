<nav :class="{'flex': open, 'hidden': !open}"
class="flex-col flex-grow hidden  lg:pb-0 lg:flex  lg:justify-start items-center lg:bg-transparent lg:flex-row-reverse">
@guest
<div @click.away="open = false" class="relative" x-data="{ open: false }">
    <button @click="open = !open"
        class="flex flex-row text-gray-700 items-center w-full px-4 lg:py-2 py-3 mt-2 text-sm text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 lg:w-auto lg:inline lg:mt-0 lg:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
        <span>Sign Up</span>
        <svg fill="currentColor" viewBox="0 0 20 20"
            :class="{'rotate-180': open, 'rotate-0': !open}"
            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform lg:-mt-1">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
    </button>
    <div x-show="open" x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="lg:absolute right-0 w-full lg:max-w-screen-sm lg:w-screen mt-2 origin-top-right">
        <div
            class="px-2 pt-2 pb-4 lg:bg-gray-50 bg-gray-100 rounded-md shadow-lg dark-mode:bg-gray-700">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                <a href="{{ route('register') }}"
                    class="flex flex-row items-start rounded-lg bg-transparent p-2 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                    <div class="bg-indigo-500 text-white rounded-lg p-3">
                        <svg class="lg:h-6 lg:w-6 h-4 w-4" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                            </path>
                        </svg>
                        <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" ><path d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg> -->
                    </div>
                    <div class="ml-3">
                        <p class="___class_+?27___">Sign up</p>
                        <p class="text-xs mt-1">Register in the Panel</p>
                    </div>
                </a>

                <a href="{{ route('login') }}"
                    class="flex flex-row items-start rounded-lg bg-transparent p-2 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                    href="./login.html">
                    <div class="bg-indigo-500 text-white rounded-lg p-3">
                        <svg class="lg:h-6 lg:w-6 h-4 w-4" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                            </path>
                        </svg>

                    </div>
                    <div class="ml-3">
                        <p class="___class_+?33___">Log in</p>
                        <p class="text-sm">Log in to Panel</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endguest
@auth
<!-- Profile menu -->
<div @click.away="profile = false" class="relative" x-data="{ profile: false }">
    <button @click="profile = !profile"
        class="flex flex-row text-gray-700 items-center w-full px-4 lg:py-2 py-3 mt-2 text-sm text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 lg:w-auto lg:inline lg:mt-0 lg:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
        <img class="object-cover w-10 h-10 rounded-full"
            src="{{ Auth::user()->profile() }}" alt="" aria-hidden="true" />
    </button>

    <ul x-show="profile" x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-50 rounded-md shadow-md  "
        aria-label="submenu">
        <li class="flex">
            <a class="inline-flex items-center w-full px-2 py-2 text-sm font-medium transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800  "
                href="{{ route('gu.profile.show', ['name' => auth()->user()->id ]) }}">
                <img class="object-cover w-6 h-6 mr-3 rounded-full"
                    src="{{ Auth::user()->profile() }}" alt="" aria-hidden="true" />
                <span>{{Auth::user()->username}}</span>
            </a>
        </li>
        <li class="flex">
            <a class="inline-flex items-center w-full px-2 py-2 text-sm font-medium transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800  "
                href="{{ route('dash.create.hubs') }}">
                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                <span class="lowercase">Create hub</span>
            </a>
        </li>
        <li class="flex">
            <a class="inline-flex items-center w-full px-2 py-2 text-sm font-medium transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800  "
                href="{{ route('dash.createmedia') }}">
                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>

                <span class="lowercase">Create Media</span>
            </a>
        </li>
        <li class="flex">
            <a class="inline-flex items-center w-full px-2 py-2 text-sm font-medium transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800  "
                href="{{ route('dash.createwall') }}">
                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>

                <span class="lowercase">Create Wall</span>
            </a>
        </li>
        <form action="{{ route('logout') }}" method="post" class="flex">
            @csrf
            <button type="submit"
                class="inline-flex items-center w-full px-2 py-2 text-sm font-medium transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800  "
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
        </form>
    </ul>
</div>

@endauth
@if (!request()->routeIs('dash.show.message'))
<a class="font-bold px-4 py-2 mt-2 text-sm text-gray-700 hover:bg-midsky transition duration-100 rounded-lg lg:mt-0 lg:ml-4 focus:text-gray-900 hover:text-indigo-500 focus:bg-gray-200 lg:text-left text-center focus:outline-none focus:shadow-outline"
    href="{{ url('/chatify') }}">
    <svg class="w-6 h-6 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
        </path>
    </svg>
</a>
@endif
<button
    class="font-bold px-4 py-2 mt-2 text-sm text-gray-700 hover:bg-midsky transition duration-100 rounded-lg lg:mt-0 lg:ml-4 focus:text-gray-900 hover:text-indigo-500 focus:bg-gray-200 lg:text-left text-center focus:outline-none focus:shadow-outline"
    @click.prevent="isNotification = !isNotification">
    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
        <path
            d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
        </path>
    </svg>
</button>
<!-- Notifications menu -->
{{-- <button @click.prevent="support = !support" class="font-bold px-4 py-2 mt-2 text-sm  hover:bg-midsky transition duration-100 rounded-lg lg:mt-0 lg:ml-4 focus:text-gray-900 hover:text-gray-50 focus:bg-gray-200 lg:text-left text-center focus:outline-none focus:shadow-outline">
    Support</button> --}}
<a class="font-bold px-4 py-2 mt-2 text-sm  hover:bg-midsky transition duration-100 rounded-lg lg:mt-0 lg:ml-4 focus:text-gray-900 hover:text-gray-50 focus:bg-gray-200 lg:text-left text-center focus:outline-none focus:shadow-outline"
    href="{{ route('home') }}">Home</a>

<a class="font-bold px-4 py-2 mt-2 text-sm  hover:bg-midsky transition duration-100 rounded-lg lg:mt-0 lg:ml-4 focus:text-gray-900 hover:text-gray-50 focus:bg-gray-200 lg:text-left text-center focus:outline-none focus:shadow-outline"
    href="{{ route('gu.find') }}">Media</a>

<a class="font-bold px-4 py-2 mt-2 text-sm  hover:bg-midsky transition duration-100 rounded-lg lg:mt-0 lg:ml-4 focus:text-gray-900 hover:text-gray-50 focus:bg-gray-200 lg:text-left text-center focus:outline-none focus:shadow-outline"
    href="{{ route('gu.media') }}">Explore</a>

</nav>



