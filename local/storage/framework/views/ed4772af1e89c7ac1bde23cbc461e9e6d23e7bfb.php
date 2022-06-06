<div class="z-20" x-data="{showinger : true}">
    <?php if(auth()->guard()->check()): ?>
        <div class="w-full flex space-x-3">
            <div></div>
            <?php if($this->check_is_another_user()): ?>
                <?php if($this->check_is_follow()): ?>
                <button type="button" wire:click="Unfollow" x-on:dblclick="$wire.Unfollow()"
                    class="py-1 lg:px-6 px-5  border border-red-500  text-sm rounded-md shadow-md bg-red-100 text-red-500">
                    unfollow
                </button>

                <?php else: ?>
                <button type="button" wire:click="Following" x-on:dblclick="$wire.Following()"
                class="py-1 lg:px-6 px-5 hover:bg-<?php echo e($color); ?>-800 text-sm rounded-md shadow-md bg-<?php echo e($color); ?>-600 text-white"
                >
                follow
                
            </button>


            <?php endif; ?>
            <?php else: ?>

<div class="flex w-full items-center justify-center space-x-3">
                <button wire:click.prevent="redirectToEditProfile"
            class="flex-shrink border border-indigo-600 bg-white hover:bg-ehite px-4 ml-2 py-1 text-xs font-medium text-black rounded-full transition ease-in duration-200 capitalize focus:outline-none flex justify-center items-center space-x-2">
            edit</button>
            
                                            <a class="font-bold ml-2 px-4 py-2 mt-2 text-sm  hover:bg-midsky transition duration-100 rounded-lg lg:mt-0 lg:ml-4 focus:text-gray-900 hover:text-gray-50 focus:bg-gray-200 lg:text-left text-center focus:outline-none focus:shadow-outline"
                                    href="<?php echo e(route('dash.page.marked')); ?>">Marked</a>
</div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <?php if(auth()->guard()->guest()): ?>
        <button disabled
            class="flex-no-shrink border border-indigo-600 bg-indigo-200 hover:bg-indigo-200 px-3 py-2 text-sm font-medium text-gray-700 rounded-full transition ease-in duration-200 capitalize focus:outline-none flex justify-center items-center">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                </path>
            </svg>
        </button>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/relincs.com/htdocs/local/resources/views/livewire/following.blade.php ENDPATH**/ ?>