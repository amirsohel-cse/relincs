<div>
    
    <div class="flex flex-row space-x-2 justify-center items-center pb-4 capitalize mr-5">
        <button type="button" wire:click.prevent="like"
            class="flex items-center text-sm bg-transparent hover:text-indigo-600 <?php if($likeActive): ?> text-indigo-600  <?php endif; ?>  duration-200 transition focus:outline-none">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5">
                </path>
            </svg>
            <span class="ml-1"><?php echo e($likes); ?></span>
        </button>
        <div class="flex items-center justify-center mx-1 text-gray-600">|</div>


        <button type="button" wire:click.prevent="dislike"
            class="flex items-center text-sm bg-transparent hover:text-indigo-600 <?php if($dislikeActive): ?> text-indigo-600  <?php endif; ?>  duration-200 transition focus:outline-none">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14H5.236a2 2 0 01-1.789-2.894l3.5-7A2 2 0 018.736 3h4.018a2 2 0 01.485.06l3.76.94m-7 10v5a2 2 0 002 2h.096c.5 0 .905-.405.905-.904 0-.715.211-1.413.608-2.008L17 13V4m-7 10h2m5-10h2a2 2 0 012 2v6a2 2 0 01-2 2h-2.5">
                </path>
            </svg>
            <span class="ml-1"><?php echo e($dislikes); ?></span>
        </button>
    </div>
</div><?php /**PATH C:\laragon\www\relincs\local\resources\views/livewire/likedislike.blade.php ENDPATH**/ ?>