<style>

    @media only screen and (min-width: 1024px) {
        #desktopSBtn{
            display: block;
        }
        #mobileSBtn{
            display: none;
        }
    }
    @media only screen and (max-width: 1023px) {
        #mobileSBtn{
            display: block;
        }
        #desktopSBtn{
            display: none;
        }
    }
</style>
<nav :class="{'flex': open, 'hidden': !open}"
class="flex-col flex-grow hidden  lg:pb-0 lg:flex  lg:justify-start items-center lg:bg-transparent lg:flex-row-reverse">
@guest
<div @click.away="open = false" class="relative" x-data="{ open: false }">
    <button @click="open = !open"
        class="flex flex-row text-gray-700 items-center w-full px-4 lg:py-2 py-3 mt-2 text-sm text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 lg:w-auto lg:inline lg:mt-0 lg:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
        <span>Sign Up / Log In</span>
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
<a href="{{ route('downloadMobileApp') }}" style="display: flex; background-color: #E5E7EB;" id="notification_btn" class="font-bold px-4 py-2 mt-2 text-sm text-gray-700 hover:bg-midsky transition duration-100 rounded-lg lg:mt-0 lg:ml-4 focus:text-gray-900 hover:text-indigo-500 focus:bg-gray-200 lg:text-left text-center focus:outline-none focus:shadow-outline">
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-mobile" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <rect x="7" y="4" width="10" height="16" rx="1" />
        <line x1="11" y1="5" x2="13" y2="5" />
        <line x1="12" y1="17" x2="12" y2="17.01" />
    </svg>
    <span style="margin-top: 3px;">Download App</span>
</a>
{{-- @auth
    <button @click.prevent="support = !support" id="desktopSBtn" class="font-bold px-4 py-2 mt-2 text-sm  hover:bg-midsky transition duration-100 rounded-lg lg:mt-0 lg:ml-4 focus:text-gray-900 hover:text-gray-50 focus:bg-gray-200 lg:text-left text-center focus:outline-none focus:shadow-outline">
    Support</button>
@endauth --}}
@auth
<!-- Profile menu -->
<div @click.away="profile = false" class="relative" x-data="{ profile: false }">
    <button @click="profile = !profile"
        class="flex flex-row text-gray-700 items-center w-full px-4 lg:py-2 py-3 mt-2 text-sm text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 lg:w-auto lg:inline lg:mt-0 lg:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
        <img class="object-cover w-10 h-10 rounded-full"
            src="{{ Auth::user()->profile() }}" onerror="this.onerror=null;this.src='https://relincsca.s3.amazonaws.com/public/profile_image/62a21b9f0e60cElizabeth.png';" alt="" aria-hidden="true" />
    </button>

    <ul x-show="profile" x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-50 rounded-md shadow-md  "
        aria-label="submenu">
        <li class="flex">
            <a class="inline-flex items-center w-full px-2 py-2 text-sm font-medium transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800  "
                href="{{ route('gu.profile.show', ['name' => auth()->user()->id ]) }}">
                <img class="object-cover w-6 h-6 mr-3 rounded-full"
                    src="{{ Auth::user()->profile() }}" onerror="this.onerror=null;this.src='https://relincsca.s3.amazonaws.com/public/profile_image/62a21b9f0e60cElizabeth.png';" alt="" aria-hidden="true" />
                <span>{{Auth::user()->username}}</span>
            </a>
        </li>
        @if (Auth::user()->role == 'admin')
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
        @endif
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
<button id="notification_btn"
    class="font-bold px-4 py-2 mt-2 text-sm text-gray-700 hover:bg-midsky transition duration-100 rounded-lg lg:mt-0 lg:ml-4 focus:text-gray-900 hover:text-indigo-500 focus:bg-gray-200 lg:text-left text-center focus:outline-none focus:shadow-outline"
    @click="isNotification = !isNotification">
    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36"><path fill="currentColor" d="m32.85 28.13l-.34-.3A14.37 14.37 0 0 1 30 24.9a12.63 12.63 0 0 1-1.35-4.81v-4.94A10.81 10.81 0 0 0 19.21 4.4V3.11a1.33 1.33 0 1 0-2.67 0v1.31a10.81 10.81 0 0 0-9.33 10.73v4.94a12.63 12.63 0 0 1-1.35 4.81a14.4 14.4 0 0 1-2.47 2.93l-.34.3v2.82h29.8Z" class="clr-i-solid clr-i-solid-path-1"/><path fill="currentColor" d="M15.32 32a2.65 2.65 0 0 0 5.25 0Z" class="clr-i-solid clr-i-solid-path-2"/><path fill="none" d="M0 0h36v36H0z"/></svg>

    {{-- <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36"><path fill="currentColor" d="M18 34.28A2.67 2.67 0 0 0 20.58 32h-5.26A2.67 2.67 0 0 0 18 34.28Z" class="clr-i-solid--badged clr-i-solid-path-1--badged"/><path fill="currentColor" d="m32.85 28.13l-.34-.3A14.37 14.37 0 0 1 30 24.9a12.63 12.63 0 0 1-1.35-4.81v-4.94a10.92 10.92 0 0 0-.16-1.79A7.5 7.5 0 0 1 22.5 6v-.63a10.57 10.57 0 0 0-3.32-1V3.11a1.33 1.33 0 1 0-2.67 0v1.31a10.81 10.81 0 0 0-9.3 10.73v4.94a12.63 12.63 0 0 1-1.35 4.81a14.4 14.4 0 0 1-2.47 2.93l-.34.3v2.82h29.8Z" class="clr-i-solid--badged clr-i-solid-path-2--badged"/><circle cx="30" cy="6" r="5" fill="red" class="clr-i-solid--badged clr-i-solid-path-3--badged clr-i-badge"/><path fill="none" d="M0 0h36v36H0z"/></svg> --}}
</button>

<!-- Notifications menu -->
{{-- <button @click.prevent="support = !support" class="font-bold px-4 py-2 mt-2 text-sm  hover:bg-midsky transition duration-100 rounded-lg lg:mt-0 lg:ml-4 focus:text-gray-900 hover:text-gray-50 focus:bg-gray-200 lg:text-left text-center focus:outline-none focus:shadow-outline">
    Support</button> --}}
@auth
    <a class="font-bold px-4 py-2 mt-2 text-sm  hover:bg-midsky transition duration-100 rounded-lg lg:mt-0 lg:ml-4 focus:text-gray-900 hover:text-gray-50 focus:bg-gray-200 lg:text-left text-center focus:outline-none focus:shadow-outline" href="{{ route('home') }}">Home</a>
@else
    <a class="font-bold px-4 py-2 mt-2 text-sm  hover:bg-midsky transition duration-100 rounded-lg lg:mt-0 lg:ml-4 focus:text-gray-900 hover:text-gray-50 focus:bg-gray-200 lg:text-left text-center focus:outline-none focus:shadow-outline"
    href="{{ route('login') }}">Home</a>
@endauth
<a class="font-bold px-4 py-2 mt-2 text-sm  hover:bg-midsky transition duration-100 rounded-lg lg:mt-0 lg:ml-4 focus:text-gray-900 hover:text-gray-50 focus:bg-gray-200 lg:text-left text-center focus:outline-none focus:shadow-outline"
    href="{{ route('gu.media') }}">Media</a>
<a class="font-bold px-4 py-2 mt-2 text-sm  hover:bg-midsky transition duration-100 rounded-lg lg:mt-0 lg:ml-4 focus:text-gray-900 hover:text-gray-50 focus:bg-gray-200 lg:text-left text-center focus:outline-none focus:shadow-outline"
    href="{{ route('gu.find') }}">Latest</a>

@auth
    <button @click.prevent="support = !support" id="mobileSBtn" class="font-bold px-4 py-2 mt-2 text-sm  hover:bg-midsky transition duration-100 rounded-lg lg:mt-0 lg:ml-4 focus:text-gray-900 hover:text-gray-50 focus:bg-gray-200 lg:text-left text-center focus:outline-none focus:shadow-outline">
    Support</button>
@endauth

</nav>



