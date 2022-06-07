<div class="lg:text-md text-md" x-data="{showing : true}">
    @push('script')
        <script>
                window.addEventListener('fresh' , () => {
                    window.location.reload();
                });
        </script>
    @endpush
    @auth
        <div class="w-full">
            @if ($this->check_is_another_user())
                @if ($this->check_is_join())
                    <button wire:click="Unjoin" x-on:dblclick="$wire.Unjoin()" wire:loading.scale
                        class="flex-no-shrink border border-red-500 bg-red-200 hover:bg-red-500 px-8 ml-4 py-2 lg:text-sm text-xs font-medium text-red-500 hover:text-white rounded-full transition ease-in duration-200 capitalize focus:outline-none flex justify-center items-center space-x-2">
                        Leave
                    </button>
                @else
                    <button wire:click="joining" x-on:dblclick="$wire.joining()" wire:loading.scale
                        class="flex-no-shrink border border-green-600 bg-{{ $color }}-500 hover:bg-{{ $color }}-600 px-8 ml-4 py-2 lg:text-sm text-xs font-medium text-white rounded-full transition ease-in duration-200 capitalize focus:outline-none flex justify-center items-center space-x-2">
                        Join
                    </button>
                @endif

            @else
            @endif
        </div>

    @endauth

    @guest
    <div class="w-full">
        <button disabled
            class="flex-no-shrink border border-red-500 bg-red-200 hover:bg-red-200 px-3 py-2 lg:text-sm text-xs font-medium text-gray-700 rounded-full transition ease-in duration-200 capitalize focus:outline-none flex justify-center items-center">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                </path>
            </svg>
        </button>
    </div>
    @endguest

</div>
