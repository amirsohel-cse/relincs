<div>
    <div class="flex space-x-2 items-center">
        <button type="button" class="focus:outline-none
        @if ($marked) text-indigo-500 fill-current transition duration-200  @endif"
         wire:click.prevent="mark"
       wire:target="mark" wire:loading.class="text-indigo-400">
            <svg class="w-8 h-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6"
                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
            </svg>
        </button>
    </div>
</div>