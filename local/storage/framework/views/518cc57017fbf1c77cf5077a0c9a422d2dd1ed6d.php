<?php $__env->startSection('title'); ?>
    explorer - wall
<?php $__env->stopSection(); ?>
<div class="w-full"  x-data="{ tabs : 'feed'}">
    <div class="pl-2">
        <div class=" flex relative text-gray-700 w-full px-2 py-1">
            <input type="search" wire:model="search" placeholder="Search"
                class="bg-gray-50 border border-gray-200 px-6 lg:w-2/6 w-4/6 py-3 text-md rounded-full text-sm focus:outline-none">
        </div>
    </div>
    
    <div class="relative">
        <div class="w-full flex justify-center items-center">
            <nav class="md:pb-4 pb-2 md:py-3 flex flex-row space-x-2 relative capitalize">
                
                <a class="md:px-6 lg:px-5 px-4 md:py-2 py-2 lg:text-md text-sm font-medium bg-transparent rounded-lg flex items-center dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                    href="#" :class="{ 'bg-gray-200': tabs === 'feed' }" @click="tabs = 'feed'">feed
                    &nbsp; <svg xmlns="http://www.w3.org/2000/svg" class="lg:h-6 lg:w-6 w-5 h-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg></a>
            </nav>
        </div>
        <!--  -->
        <div class="my-4 md:px-4 px-2" wire:loading.class='opacity-50'>
            <div class="___class_+?129___" x-show="tabs === 'video'">
                <div class="grid grid-cols-2 md:gap-2 gap-1 place-content-center">
                    <?php $__empty_1 = true; $__currentLoopData = $video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trending): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php
                    $user_data = App\Models\User::select('username','image_profile')->find($trending->user_id);
                    $likes = $trending->Likes()->count();
                    $comments = $trending->Comments()->count();
                    ?>
                    <a class="flex w-3/3 h-80 justify-center items-center shadow-md cursor-pointer z-20"
                        href="<?php echo e(route('show.wall.feed',$trending->uid)); ?>" x-data="{ hover : false , details : false }"
                        @click="details = true" @mouseover="hover = true">
                        <div class="w-full h-full relative">
                        <?php if(str_contains($trending->path,'.mp4')): ?>
                            <img src="<?php echo e(env('AWS_BUCKET_URL').'video/'. $trending->uid.'/'.$trending->uid.'.png'); ?>" alt="<?php echo e($trending->title); ?>"
                                class="rounded-sm w-full h-full object-cover">
                            <?php else: ?>
                            <img src="<?php echo e(env('AWS_BUCKET_URL'). $trending->path); ?>" alt="<?php echo e($trending->title); ?>"
                                class="rounded-sm w-full h-full object-cover">
                            <?php endif; ?>
                             <div
                                class="absolute inset-0 hover:bg-gray-900 hover:bg-opacity-60 transition-all duration-200">
                                <div class="flex text-white flex-col h-full w-full justify-center self-center items-center space-y-2"
                                    x-show="hover" @mouseover.away="hover = false">
                                    <div class="flex items-center space-x-4">
                                        <svg class="md:w-7 md:h-7 w-5 h-5 fill-current text-red-600" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                            </path>
                                        </svg>
                                        <div class="relative">
                                            <span class="text-white md:text-lg text-md font-bold"><?php echo e($likes); ?></span>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                            </path>
                                        </svg>
                                        <div class="___class_+?252___">
                                            <span class="text-white md:text-lg text-md font-bold"><?php echo e($comments); ?></span>
                                        </div>
                                    </div>
                                    <h1 class="text-lg mt-2"><?php echo e($trending->title); ?></h1>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="flex justify-center items-center bg-black bg-opacity-50 absolute inset-0 h-full w-full mx-auto"
                                            x-show="details">
                                            <div
                                                class="bg-gray-50 absolute inset-0 m-auto my-6 text-gray-900 flex justify-center max-h-6xl max-w-5xl rounded-md shadow-lg py-1 px-3">
                                                <div class="flex justify-between flex-row h-10 w-full">
                                                    <div class="___class_+?257___"></div>
                                                    <button class="text-3xl focus:outline-none">
                                                        &times;
                                                    </button>
                                                </div>
                                            </div>
                                        </div> -->
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="text-center text-lg w-full mx-auto col-span-2">Video not found :(</p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="___class_+?239___" x-show="tabs === 'feed'">
                <div class="grid lg:grid-cols-3 grid-cols-2 md:gap-2 gap-1 place-content-center">
                    <?php $__currentLoopData = $feed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trending): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $user_data = App\Models\User::select('username','image_profile')->find($trending->user_id);
                    $likes = $trending->Likes()->count();
                    $comments = $trending->Comments()->count();
                    ?>
                    
                    <a class="flex w-3/3 h-60 justify-center items-center shadow-md rounded-md cursor-pointer z-20"
                        href="<?php echo e(route('show.wall.feed',$trending->uid)); ?>" x-data="{ hover : false , details : false }"
                        @mouseover="hover = true">
                        <div class="w-full h-full relative">
                            <?php if(str_contains($trending->path,'.mp4')): ?>
                            <img src="<?php echo e(env('AWS_BUCKET_URL').'video/'. $trending->uid.'/'.$trending->thumbnail_image); ?>" alt="<?php echo e($trending->title); ?>"
                                class="rounded-sm w-full h-full object-cover">
                            <?php else: ?>
                            <img src="<?php echo e(env('AWS_BUCKET_URL'). $trending->path); ?>" alt="<?php echo e($trending->title); ?>"
                                class="rounded-sm w-full h-full object-cover">
                            <?php endif; ?>
                            
                            <div
                                class="absolute inset-0 hover:bg-gray-900 hover:bg-opacity-60 transition-all duration-200">
                                <div class="flex text-white flex-col h-full w-full justify-center self-center items-center space-y-2"
                                    x-show="hover" @mouseover.away="hover = false">
                                    <div class="flex items-center space-x-4">
                                        <svg class="md:w-7 md:h-7 w-5 h-5 fill-current text-red-600" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                            </path>
                                        </svg>
                                        <div class="relative">
                                            <span class="text-white md:text-lg text-md font-bold"><?php echo e($likes); ?></span>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                            </path>
                                        </svg>
                                        <div class="___class_+?252___">
                                            <span class="text-white md:text-lg text-md font-bold"><?php echo e($comments); ?></span>
                                        </div>
                                    </div>
                                    <h1 class="text-lg mt-2"><?php echo e($trending->title); ?></h1>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="flex justify-center items-center bg-black bg-opacity-50 absolute inset-0 h-full w-full mx-auto"
                                            x-show="details">
                                            <div
                                                class="bg-gray-50 absolute inset-0 m-auto my-6 text-gray-900 flex justify-center max-h-6xl max-w-5xl rounded-md shadow-lg py-1 px-3">
                                                <div class="flex justify-between flex-row h-10 w-full">
                                                    <div class="___class_+?257___"></div>
                                                    <button class="text-3xl focus:outline-none">
                                                        &times;
                                                    </button>
                                                </div>
                                            </div>
                                        </div> -->
                    </a>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php if($feed->total() > 1 && $feed->count() < $feed->total()): ?>
                    <div wire:click.prevent="load" wire:loading.class='opacity-50'
                        class="w-full mx-auto flex justify-center items-center mt-6">
                        <button
                            class="py-3 px-8 flex justify-center items-center bg-gray-200 text-gray-700 rounded-2xl lg:text-md text-sm shadow-md">
                            <svg class="w-5 h-5 mr-1 text-gray-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                            <span wire:target="load" wire:loading.remove>
                                Load more...
                            </span>
                            <span wire:loading wire:target="load">
                                Loading...
                            </span>
                        </button>
                    </div>
                    <?php endif; ?>
            </div>
        </div>
    </div>
    <!--  -->
</div>
</div>
<?php /**PATH C:\laragon\www\relincs\local\resources\views/livewire/explorer/wall.blade.php ENDPATH**/ ?>