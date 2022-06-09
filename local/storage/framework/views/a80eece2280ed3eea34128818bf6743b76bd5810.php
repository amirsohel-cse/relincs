
<div class="w-full relative">
    <?php $__env->startSection('metas'); ?>
        <meta name="title" content="<?php echo e($wall->title); ?>">
        <meta name="description" content="<?php echo e($wall->description); ?>">
        <meta name="image" content="<?php echo e($hub->photo()); ?>">
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('title'); ?>
         Watch <?php echo e($wall->title); ?>

    <?php $__env->stopSection(); ?>


    <div
        class="mx-auto lg:flex hidden justify-center items-center filter blur-3xl animate-pulse duration-700 transition w-full">
        <div class=" mr-10 flex relative">
            <div class="p-24 rounded-full bg-gradient-to-r to-indigo-700 from-pink-900 absolute top-20 right-0">

            </div>
            <div class="p-24 rounded-full bg-gradient-to-r to-pink-700 from-indigo-900 absolute md:flex hidden">

            </div>
        </div>
        <!-- Right Side -->
        <div class="flex flex-col absolute top-8 right-10 space-y-4">

            <div
                class="p-5 rounded-full bg-gradient-to-r to-pink-700 via-red-500 from-indigo-900 absolute right-16 top-10">

            </div>
        </div>
        <div class="flex flex-col absolute bottom-8 right-10 space-y-4">

            <div class="p-10 rounded-full bg-gradient-to-r to-pink-700 from-indigo-900 absolute right-16 bottom-10">

            </div>
        </div>
        <!--  Left side -->
        <div class="flex flex-col space-y-4 filter animate-pulse duration-500">
            <div class="p-10 bg-gradient-to-r to-indigo-700 from-indigo-900 absolute top-20 left-20">

            </div>
            <div class="p-10 bg-gradient-to-r to-indigo-700 from-indigo-900 absolute bottom-20 right-20">

            </div>
        </div>
    </div>

    <div class="mx-auto flex justify-center max-w-xl shadow-md md:mb-8 mt-4 bg-white rounded-lg items-start relative md:p-0"
        :class="comment || tools ? '' : 'p-8'" x-data="{
        comment : false,
        tools : false,
    }">

        <div class="lg:w-11/12 w-full">
            <div class="py-2 px-2">
                <div class="flex justify-between items-center py-2">
                    <div class="relative mt-1 flex">
                        <div class="h-full">
                        
                            <img src="<?php echo e($hub->photo()); ?>" alt="saman sayyar"
                                class="w-14 h-14 rounded-full object-cover">
                        </div>
                        <a href="<?php echo e(route('show.hubs', $hub->uid)); ?>" class="ml-1 text-md lg:text-md font-medium text-left flex justify-center items-center flex-col">
                                <?php echo e($hub->name); ?>


                        </a>
                        <!-- <span class="text-xs mx-2">•</span>
                       <button class="text-indigo-500 text-sm capitalize flex justify-start items-start">follow</button> -->
                    </div>
                    
                </div>
            </div>
            <div class="relative w-full h-full flex justify-center items-center" wire:ignore>
                    <div class="w-full h-full rounded-md">
                        <img src="<?php echo e(env('AWS_BUCKET_URL').$wall->path); ?>" class="bg-center object-cover w-full h-full rounded-md">
                    </div>

                
            </div>
            <div class="w-full">

                <!-- Comment -->
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('all-comment', ['video' => $wall])->html();
} elseif ($_instance->childHasBeenRendered('l89094197-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l89094197-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l89094197-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l89094197-0');
} else {
    $response = \Livewire\Livewire::mount('all-comment', ['video' => $wall]);
    $html = $response->html();
    $_instance->logRenderedChild('l89094197-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>


                <div class=" w-full absolute inset-0 bg-gray-600 bg-opacity-50 transform transition duration-100 z-30"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90" x-show="tools">
                    <div class="___class_+?72___">
                        <div class="flex justify-start items-center py-2 px-4 w-20 bg-white bg-opacity-70 cursor-pointer"
                            @click="tools = !tools">
                            <svg class="w-8 h-8 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="flex justify-center my-20 mx-auto flex-col space-y-4 items-center text-gray-50">
                        <button
                            class="focus:outline-none shadow rounded-lg py-2 px-20 bg-indigo-500 focus:bg-indigo-700 transition duration-200 bg-opacity-90 capitalize">report</button>
                        <button
                            class="focus:outline-none shadow rounded-lg py-2 px-20 bg-red-500 focus:bg-red-700 transition duration-200 bg-opacity-90 capitalize">delete</button>
                        <button
                            class="focus:outline-none shadow rounded-lg py-2 px-20 bg-yellow-500 focus:bg-yellow-700 transition duration-200 bg-opacity-90 capitalize">cancel</button>
                    </div>
                </div>
                <!-- System Like and tools Feed -->
                <div class="p-2 mt-1 w-full">
                    <?php if(auth()->guard()->check()): ?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('hubswallvoting', [
                        'video' => $wall,
                        'hub' => $hub,
                        ])->html();
} elseif ($_instance->childHasBeenRendered('l89094197-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l89094197-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l89094197-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l89094197-1');
} else {
    $response = \Livewire\Livewire::mount('hubswallvoting', [
                        'video' => $wall,
                        'hub' => $hub,
                        ]);
    $html = $response->html();
    $_instance->logRenderedChild('l89094197-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    <?php endif; ?>

                    <div class="flex flex-col">
                        <div class="flex justify-start flex-col space-y-4 items-start pb-2 px-3">
                            <div class="relative mt-1 flex">
                                <div>
                                    <p class="text-gray-700 text-sm  leading-relaxed">

                                        <?php echo e($wall->description); ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 pt-1 w-full">
                            <p class="font-normal text-xs text-gray-500"><?php echo e($wall->created_at->diffForHumans()); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\relincs\local\resources\views/livewire/watch-hub-wall.blade.php ENDPATH**/ ?>