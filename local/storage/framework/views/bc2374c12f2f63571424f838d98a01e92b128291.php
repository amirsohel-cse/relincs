<div class="w-full">
    <?php $__env->startSection('title'); ?>
    Explorer - media
    <?php $__env->stopSection(); ?>
    
    <div class="pl-2">
        <div class=" flex relative text-gray-700 w-full px-2 py-1">
            <input type="search" wire:model="search" placeholder="Search"
                class="bg-gray-50 border border-gray-200 px-6 lg:w-2/6 w-4/6 py-3 text-md rounded-full text-sm focus:outline-none">
        </div>
    </div>
    

    <div class="w-full">
        <div class="my-6 md:px-2 px-3 flex flex-col justify-center items-center">

            <div wire:loading.class='opacity-80'
                class="grid xl:grid-cols-3 w-full lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-3 place-items-center">
                <?php $__currentLoopData = $medias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card-media','data' => ['data' => $data,'is' => 2]]); ?>
<?php $component->withName('card-media'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data),'is' => 2]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>



            <?php if($medias->total() > 1 && $medias->count() < $medias->total()): ?>
                <div wire:dblclick.prevent="load" wire:loading.class='opacity-50'
                    class="w-full mx-auto flex justify-center items-center mt-6">
                    <button
                        class="py-3 px-8 flex justify-center items-center bg-gray-200 text-gray-700 rounded-2xl lg:text-md text-sm shadow-md">
                        <svg class="w-5 h-5 mr-1 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                        <span wire:target="load" wire:loading.remove>
                            Load more... (Double click)
                        </span>
                        <span wire:loading wire:target="load">
                            Loading...
                        </span>
                    </button>
                </div>
                <?php endif; ?>
        </div>
    </div>


</div><?php /**PATH /var/www/relincs.com/htdocs/local/resources/views/livewire/allmedias.blade.php ENDPATH**/ ?>