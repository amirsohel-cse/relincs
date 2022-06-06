<div>
    <div class="flex justify-between border-b items-center w-full"
    wire:target="addComment()" wire:loading.class="opacity-50"
        :class="comment ? '' : '' ">
        <div class="w-full border-t">
            <input type="text" wire:model="body" wire:keydown.enter="addComment()" id="comment" placeholder="Add A Comment..."
                class="w-full text-sm py-4 px-3 rounded-none  border-none">
        </div>
        <div class="w-20">
            <button  wire:click.prevent="addComment()" class="border-none text-sm px-4 bg-white py-4 text-indigo-600 focus:outline-none 
            @if ($body)
            opacity-100
                @else
                opacity-50
            @endif">Post</button>
        </div>
    </div>

    <div class="w-full m-auto">
        <x-loading classText="text-lg" classSvg="w-6 h-6"  wire:target="addComment" wire:loading  />
    </div>
</div>
