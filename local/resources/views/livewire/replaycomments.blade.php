<div>
    <div class="mt-4">
        <div class="flex justify-center items-center w-full">
            <div class="w-full flex justify-center items-center">
                <input type="text" wire:model="body" wire:keydown.enter="addComment()" placeholder="Add A Comment..."
                    class="w-full text-sm py-2 px-3 shadow-lg focus:outline-none border border-gray-200  focus:border-none focus:border-transparent focus:ring-inset">
            </div>
            <div class="">
                <button type="button"  wire:click.prevent="addComment()"
                class="text-xs px-4 py-3 bg-gray-200 transition-all duration-150 hover:bg-indigo-600 hover:text-white">
                Post</button>
            </div>
        </div>
    </div>
</div>
