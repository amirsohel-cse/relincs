<div class="w-full">
    <div class="flex flex-col w-full divide-y divide-gray-300 justify-center" @click.away="tools = false">

        <?php if($steps == false): ?>
        <button wire:click.prevent="toggle()"
            class="py-4 rounded-t-lg text-center transition duration-150 hover:text-white hover:bg-indigo-600" href="#">
            <li class="list-none px-5 flex justify-start items-center">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"></path>
                </svg>
                <p class="ml-10">
                    Forward to Hub
                </p>
            </li>
        </button>
            <?php if($video->user_id === auth()->user()->id): ?>
            <button
                class="py-4 rounded-b-lg text-center transition duration-150 text-red-600 hover:text-white hover:bg-red-600"
                wire:click.prevent="delete('<?php echo e($video->uid); ?>')">
                <li class="list-none px-5 flex justify-start items-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                        </path>
                    </svg>
                    <p class="ml-10 capitalize">
                        delete
                    </p>
                </li>
            </button>
            <a class="py-4 rounded-b-lg text-center transition duration-150 text-yellow-600 hover:text-white hover:bg-yellow-600"
                href="<?php echo e(route('dash.edit.video', ['video' => $video->uid])); ?>">
                <li class="list-none px-5 flex justify-start items-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                        </path>
                    </svg>
                    <p class="ml-10 capitalize">
                        edit
                    </p>
                </li>
            </a>
            <?php endif; ?>
        <?php endif; ?>

        <?php if($steps == true): ?>
        <div class="flex justify-between items-center my-2 px-2 py-1 text-md text-gray-800 text-left">
            <div class="flex flex-col">
                Choosing a hub

                <div class="text-gray-500 text-xs">
                    This WALL is uploaded in your Hub section
                </div>
            </div>
            <button wire:click.prevent="toggle()">
                <svg class="w-6 h-6 text-gray-600 transform rotate-180" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                </svg>
            </button>
        </div>

        <?php if(filled($all_my_hubs)): ?>
            <?php $__currentLoopData = $all_my_hubs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <button wire:click.ptevent="select(<?php echo e($item->id); ?>)"
                class="py-2 text-center transition duration-150 hover:text-white bg-gray-50 hover:bg-indigo-500" href="#">
                <li class="list-none px-4 py-3 flex justify-start items-center">
                    <img src="<?php echo e($item->photo()); ?>" alt="<?php echo e($item->name); ?>" class="w-14 h-14 shadow rounded-full object-cover">
                    <p class="ml-10">
                        <?php echo e($item->name); ?>

                    </p>
                </li>
            </button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <?php endif; ?>

    </div>
</div>
<?php /**PATH /var/www/relincs.com/htdocs/local/resources/views/livewire/components/tools-wall.blade.php ENDPATH**/ ?>