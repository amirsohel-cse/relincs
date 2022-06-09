<div class="w-full">
    <?php $__env->startSection('title'); ?>
    hubs bulletin for Hub <?php echo e($data->name); ?>

    <?php $__env->stopSection(); ?>


    <?php $__env->startPush('scripts'); ?>
    <script>
        window.addEventListener('b_uploaded', () => {
                Swal.fire({
                    icon: 'success',
                    title: 'bulletin done Successfully',
                    showConfirmButton: false,
                    timer: 1500
                });
            });
    </script>
    <?php $__env->stopPush(); ?>

     <?php $__env->slot('header', null, []); ?> 
        <?php echo e(__(' hubs bulletin for Hub').' '.$data->name); ?>

     <?php $__env->endSlot(); ?>
    <div class="w-full">
        <form wire:submit.prevent="addbulletin" wire:keydown.enter="addbulletin"
            class="flex flex-col justify-center w-full">

            <div class="flex justify-center items-center mx-auto w-full" wire:target="addbulletin" wire:loading>
                <div class="flex justify-center items-center space-x-1 text-xl text-gray-700">

                    <svg fill='none' class="w-6 h-6 animate-spin" viewBox="0 0 32 32"
                        xmlns='http://www.w3.org/2000/svg'>
                        <path clip-rule='evenodd'
                            d='M15.165 8.53a.5.5 0 01-.404.58A7 7 0 1023 16a.5.5 0 011 0 8 8 0 11-9.416-7.874.5.5 0 01.58.404z'
                            fill='currentColor' fill-rule='evenodd' />
                    </svg>


                    <div>Loading...</div>
                </div>
            </div>
            <div class="-full">
                <div class="w-full">
                    <div class=" text-sm">
                        <span class="text-gray-700 dark:text-gray-400 capitalize">title
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['id' => 'title','class' => 'block mt-2 w-full','type' => 'text','wire:model' => 'title','required' => true,'autocomplete' => 'current-title']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'title','class' => 'block mt-2 w-full','type' => 'text','wire:model' => 'title','required' => true,'autocomplete' => 'current-title']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-xs text-red-500 font-bold mt-1">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="w-full mt-3">
                    <div class=" text-sm">
                        <span class="text-gray-700 dark:text-gray-400 capitalize">link</span>

                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['id' => 'link','class' => 'block mt-1 w-full','type' => 'text','placeholder' => 'insert link : https://www.example.com','wire:model' => 'link','autocomplete' => 'current-title']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'link','class' => 'block mt-1 w-full','type' => 'text','placeholder' => 'insert link : https://www.example.com','wire:model' => 'link','autocomplete' => 'current-title']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php $__errorArgs = ['link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-xs text-red-500 font-bold mt-1">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="w-full mt-3">

                    <div class=" mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Description</span>
                        <textarea wire:model="description"
                            class="block rounded-md w-full mt-1 text-sm shadow-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 border border-gray-300 focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            rows="6" id="description" placeholder="Enter some long form content for post."></textarea>
                        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-xs text-red-500 font-bold mt-1">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                
            </div>

            <div class="w-full mb-3 flex flex-row mt-4">
                <div>
                    <button
                        class="capitalize px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-indigo-600 border border-transparent rounded-md active:bg-indigo-700 hover:bg-indigo-700 focus:outline-none focus:shadow-outline-blue">
                        post bulletin
                    </button>
                </div>
            </div>
            <!-- <hr>

        <div class="w-full mb-8 mt-4 flex flex-row  space-x-8">
                <div>
                    <button
                        class="capitalize px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-indigo-600 border border-transparent rounded-md active:bg-indigo-700 hover:bg-indigo-700 focus:outline-none focus:shadow-outline-blue">
                        freeze Account
                    </button>
                </div>
                <div>
                    <button
                        class="capitalize px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-md active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple">
                        delete account
                    </button>
                </div>
            </div> -->
        </form>
    </div>
</div>
<?php /**PATH C:\laragon\www\relincs\local\resources\views/livewire/hubs/bulltien/create.blade.php ENDPATH**/ ?>