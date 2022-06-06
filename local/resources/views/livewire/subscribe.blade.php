<div>
    @auth
        <div class="relative">
            @if ($this->check_is_another_user())
                @if ($this->check_is_follow())
                <button wire:click.prevent="Unfollow"
                    class="flex-no-shrink bg-gray-500 hover:bg-gray-600 px-6 ml-2 py-2 shadow-sm text-xs hover:shadow-lg font-medium border-2 border-gray-200 hover:border-gray-500 text-white rounded-md transition ease-in duration-200 capitalize focus:outline-none flex justify-center items-center space-x-2">
                    Unsubscribe
                    {{-- <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg> --}}
                </button>
                @else
                <button wire:click.prevent="Following"
                class="flex-no-shrink bg-{{ $color }}-500 hover:bg-{{ $color }}-600 px-8 ml-2 py-3 shadow-sm text-xs hover:shadow-lg font-medium border-2 border-{{ $color }}-200 hover:border-{{ $color }}-500 text-white rounded-md transition ease-in duration-200 capitalize focus:outline-none flex justify-center items-center space-x-2">
                subscribe
                {{-- <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg> --}}
            </button>
                @endif
            @else

                <button disabled
                    class="flex-no-shrink bg-indigo-200 hover:bg-indigo-200 px-6 ml-4 py-2 shadow-sm text-xs hover:shadow-lg font-medium border-2 border-indigo-200 hover:border-indigo-200 text-gray-700 rounded-md transition ease-in duration-200 capitalize focus:outline-none flex justify-center items-center space-x-2">
                    Dashboard
                    {{-- <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg> --}}
                </button>
            @endif
        </div>
    @endauth

    @guest
        <button disabled
            class="flex-no-shrink bg-indigo-200 hover:bg-indigo-200 px-5 py-3 shadow-sm text-xs hover:shadow-lg font-medium border-2 border-indigo-200 hover:border-indigo-200 text-gray-700 rounded-md transition ease-in duration-200 capitalize focus:outline-none flex justify-center items-center">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                </path>
            </svg>
        </button>
    @endguest
</div>
