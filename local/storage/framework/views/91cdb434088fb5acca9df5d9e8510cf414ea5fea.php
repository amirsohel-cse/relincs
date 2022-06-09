<div class="w-full">
    <div class="w-full">
        <?php $__env->startSection('title'); ?>
        List bulletin of Hubs
        <?php $__env->stopSection(); ?>

        <?php $__env->startPush('scripts'); ?>
        <script>
            window.addEventListener('delete_bulletin' , () => {
                Swal.fire({
                    icon: 'delete',
                    position: 'top-start',
                    icon: 'error',
                    title: 'bulletin deleted',
                    showConfirmButton: false,
                    timer: 2000
                });
            });
        </script>
        <?php $__env->stopPush(); ?>
         <?php $__env->slot('header', null, []); ?> 
            <?php echo e(__('List bulletin of Hubs')); ?>

         <?php $__env->endSlot(); ?>
        <div class="py-4">
            <div class="flex justify-center items-center mx-auto w-full py-3" wire:loading>
                <div class="flex justify-center items-center space-x-1 text-xl text-gray-700">

                    <svg fill='none' class="w-6 h-6 animate-spin" viewBox="0 0 32 32"
                        xmlns='http://www.w3.org/2000/svg'>
                        <path clip-rule='evenodd'
                            d='M15.165 8.53a.5.5 0 01-.404.58A7 7 0 1023 16a.5.5 0 011 0 8 8 0 11-9.416-7.874.5.5 0 01.58.404z'
                            fill='currentColor' fill-rule='evenodd' />
                    </svg>
                    <div>Loading ...</div>
                </div>
            </div>
            <div class="w-full mx-auto sm:px-2 lg:px-0">
                <div class="bg-white h-full sm:rounded-lg">
                    <div class="p-1 bg-white border-gray-200">
                        <?php if(filled($data)): ?>
                        <div class="inline-block min-w-full h-full  bg-white px-4 pt-1 rounded-bl-lg rounded-br-lg">
                            <table class="min-w-max w-full table-auto h-full" id="table_id">
                                <thead>
                                    <tr class="capitalize">
                                        <th
                                            class="px-2 py-3 border-b-2 border-gray-left text-left leading-2 text-indigo-500">
                                            #</th>
                                        <th
                                            class="px-2 py-3 border-b-2 border-gray-300 text-left text-sm leading-2 text-indigo-500">
                                            Title</th>
                                        <th
                                            class="px-2 py-3 border-b-2 border-gray-300 text-left text-sm leading-2 text-indigo-500">
                                            created At</th>
                                        <th
                                            class="px-2 py-3 border-b-2 border-gray-300 text-left text-sm leading-2 text-indigo-500">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr wire:loading.class="opacity-50">
                                        <td class="px-2 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="flex items-center">
                                                <div>
                                                    <div class="text-sm leading-5 text-gray-800"><?php echo e($key + 1); ?></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-2 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-indigo-900 sans-normal"><?php echo e($i->title); ?>

                                            </div>
                                        </td>
                                        <td class="px-2 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-indigo-900 sans-normal">
                                                <?php echo e($i->created_at->diffForHumans()); ?></div>
                                        </td>
                                        <td
                                            class="px-2 p-8 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 flex flex-row items-center space-x-4">
                                            
                                            

                                            <button wire:click.prevent="delete(<?php echo e($i->id); ?>)" title="delete"
                                                class="px-3 text-sm focus:outline-none border-none hover:bg-red-200 bg-red-100  py-1 rounded-md flex justify-center items-center transition duration-200">
                                                <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                    </path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <div class="my-2 mt-4">
                                <?php echo e($data->Links()); ?>

                            </div>
                            <?php else: ?>
                            <div class="mx-auto w-full">
                                <a href="<?php echo e(route('dash.list.hubs')); ?>"
                                    class="hover:bg-indigo-800 flex lg:w-56 w-full justify-center text-center  hover:text-white transition duration-200 rounded-full lg:px-8 px-4 py-2 lg:text-md text-sm text-gray-800 bg-gray-100">
                                    Create a New bulletin</a>
                                <h3 class="lg:text-lg my-3 lg:mt-3 mt-6 text-md text-center">bulletin Not Found :(</h3>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\relincs\local\resources\views/livewire/hubs/bulltien/display.blade.php ENDPATH**/ ?>