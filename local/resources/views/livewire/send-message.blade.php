<div>
      <!-- Message blanek Page -->
      <li class="flex">
        <button wire:click.prevent="send({{$user_id}})"
            class="py-1 lg:px-6 px-4 lg:w-auto   border border-indigo-500  text-sm rounded-md shadow-md bg-indigo-100 text-indigo-500 flex items-center justify-center">
            <svg class="lg:w-5 lg:h-5 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"
                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                </path>
            </svg>
            <div class="text-xs">&nbsp;Message</div>
        </button>
    </li>
</div>
