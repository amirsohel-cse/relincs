<div class="lg:text-md text-md" x-data="{showing : true}">
    <?php $__env->startPush('script'); ?>

   <script>
        window.addEventListener('fresh' , () => {
            window.location.reload();
        });
   </script>
    <?php $__env->stopPush(); ?>
    <?php if(auth()->guard()->check()): ?>
        <div class="w-full">
            <?php if($this->check_is_another_user()): ?>
                <?php if($this->check_is_join()): ?>
                    <button wire:click="Unjoin" x-on:dblclick="$wire.Unjoin()" wire:loading.scale
                        class="flex-no-shrink border border-red-500 bg-red-200 hover:bg-red-500 px-8 ml-4 py-2 lg:text-sm text-xs font-medium text-red-500 hover:text-white rounded-full transition ease-in duration-200 capitalize focus:outline-none flex justify-center items-center space-x-2">
                        Leave
                    </button>
                <?php else: ?>
                    <button wire:click="joining" x-on:dblclick="$wire.joining()" wire:loading.scale
                        class="flex-no-shrink border border-green-600 bg-<?php echo e($color); ?>-500 hover:bg-<?php echo e($color); ?>-600 px-8 ml-4 py-2 lg:text-sm text-xs font-medium text-white rounded-full transition ease-in duration-200 capitalize focus:outline-none flex justify-center items-center space-x-2">
                        Join
                    </button>
                <?php endif; ?>

            <?php else: ?>
            <?php endif; ?>
        </div>

    <?php endif; ?>

    <?php if(auth()->guard()->guest()): ?>
        <button disabled
            class="flex-no-shrink border border-red-500 bg-red-200 hover:bg-red-200 px-3 py-2 lg:text-sm text-xs font-medium text-gray-700 rounded-full transition ease-in duration-200 capitalize focus:outline-none flex justify-center items-center">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                </path>
            </svg>
        </button>
    <?php endif; ?>

</div>
<?php /**PATH /var/www/relincs.com/htdocs/local/resources/views/livewire/join.blade.php ENDPATH**/ ?>