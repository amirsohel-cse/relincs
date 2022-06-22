<div class="h-full w-full" x-data="{
    prev : false,
    next : false,
}">
    <?php $__env->startSection('title'); ?>
    Watch <?php echo e($video->title); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('link'); ?>
    <link href="https://unpkg.com/video.js/dist/video-js.min.css" rel="stylesheet">
    <?php $__env->stopSection(); ?>
    <?php $__env->startPush('script'); ?>
    <script src="https://unpkg.com/video.js/dist/video.min.js"></script>
    <script>
        window.scroll({
      top: 100,
      behavior: 'smooth'
    });
        window.addEventListener('success_delete' , () => {
            Swal.fire({
                icon: 'info',
                title: 'Wall was deleted',
                showConfirmButton: true,
                timer: 2500
            });
        });
        window.addEventListener('Not_dublicate' , () => {
            Swal.fire({
                icon: 'error',
                title: 'This wall has already been added',
                showConfirmButton: true,
                timer: 2500
            });
        });
        window.addEventListener('fresh' , () => {
            window.location.reload();
        });

        window.addEventListener('copy_wall_to_hubs' , () => {
            Swal.fire({
                icon: 'success',
                title: 'The wall was copied in the hub wall',
                showConfirmButton: true,
                timer: 2500
            });
        });
    </script>

    <?php $__env->stopPush(); ?>

    <div
        class="mx-auto lg:flex hidden justify-center items-center filter blur-3xl animate-pulse duration-700 transition w-full">
        <div class=" mr-10 flex relative">
            <div class="p-40 rounded-full bg-gradient-to-r to-indigo-700 from-pink-900 absolute top-20 right-0">

            </div>
            <div class="p-44 rounded-full bg-gradient-to-r to-indigo-500 from-indigo-900 absolute md:flex hidden">

            </div>
        </div>
        <!-- Right Side -->
        <div class="flex flex-col absolute top-8 right-10 space-y-4">

            <div
                class="p-10 rounded-full bg-gradient-to-r to-indigo-700 via-red-500 from-indigo-900 absolute right-16 top-10">

            </div>
        </div>
        <div class="flex flex-col absolute bottom-8 right-10 space-y-4">

            <div class="p-10 rounded-full bg-gradient-to-r to-indigo-700 from-indigo-900 absolute right-16 bottom-10">

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

        <div class="lg:w-10/12 w-full">
            <div class="flex w-full justify-between items-center px-2 my-1 mb-2 z-50">
                <div class="absolute left-0 transform ">
                    <?php if($prev !== null): ?>
                    <a href="<?php echo e(route('show.wall.feed',$prev->uid)); ?>" @mouseover.away="prev = false"
                        x-on:mouseover="prev = true"
                        class="lg:px-5 px-4 lg:py-3 py-2 text-white bg-gray-700 shadow-md rounded-r-md capitalize flex justify-center items-center pr-4">
                        <svg class="w-6 h-6 transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                        <span x-transition x-show="prev" class="mx-1 pl-3"><?php echo e($prev->title); ?></span>
                    </a>
                    <?php endif; ?>
                </div>
                <div class="absolute right-0 transform ">
                    <?php if($next !== null): ?>
                    <a href="<?php echo e(route('show.wall.feed',$next->uid)); ?>" @mouseover.away="next = false"
                        x-on:mouseover="next = true"
                        class="lg:px-5 px-4 lg:py-3 py-2 text-white bg-gray-700 shadow-md rounded-l-md capitalize flex justify-center items-center pl-4">
                        <span x-transition x-show="next" class="mx-1 pl-3"><?php echo e($next->title); ?></span>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="py-2 px-1">
                <div class="flex justify-between items-center py-2">
                    <div class="relative mt-1 flex">
                        <div class="mr-2">
                            <img src="<?php echo e($user->profile()); ?>" onerror="this.onerror=null;this.src='https://relincsca.s3.amazonaws.com/public/profile_image/62a21b9f0e60cElizabeth.png';" alt="saman sayyar"
                                class="w-12 h-12 rounded-full object-cover">
                        </div>
                        <div class="ml-1 w-full flex justify-start flex-col ">
                            <a href="<?php echo e(route('gu.profile.show', ['name' => $user])); ?>"
                                class="w-full text-gray-700 text-md">
                                <?php echo e($user->username); ?>

                            </a>
                        </div>
                        <!-- <span class="text-xs mx-2">•</span>
                       <button class="text-indigo-500 text-sm capitalize flex justify-start items-start">follow</button> -->
                    </div>
                </div>
            </div>
          
            <div class="relative w-full h-full flex justify-center items-center" wire:ignore>
                <?php if($video->thumbnail_image === NULL && $video->processed_file === NULL): ?>
                <div class="w-full h-full rounded-sm">
                    <img src="<?php echo e(env('AWS_BUCKET_URL').$video->path); ?>" class="bg-center object-cover rounded-md"
                        width="500px" height="450px">
                </div>
                <?php else: ?>
                <video id="watch" class="video-js vjs-fluid vjs-styles=default vjs-big-play-centered z-10"
                    preload="auto" controls width="100%" height="100%" type="application/x-mpegURL" data-setup='{}'
                    poster="<?php echo e(env('AWS_BUCKET_URL').'video/'.$video->uid.'/'.$video->thumbnail_image); ?>"
                    >
                    <source src="<?php echo e(env('AWS_BUCKET_URL').'video/'.$video->uid.'/'.$video->processed_file); ?>" >
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank">
                            supports HTML5 video
                        </a>
                    </p>
                </video>
                <?php endif; ?>
            </div>
            <div class="w-full">
                <!-- Comment -->
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('all-comments', ['video' => $video])->html();
} elseif ($_instance->childHasBeenRendered('l1951056965-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1951056965-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1951056965-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1951056965-0');
} else {
    $response = \Livewire\Livewire::mount('all-comments', ['video' => $video]);
    $html = $response->html();
    $_instance->logRenderedChild('l1951056965-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                <div class="w-full absolute bg-black bg-opacity-75 inset-0 shadow-lg transform transition duration-100 z-30"
                    x-transition:enter="transition ease-out" x-transition:enter-start="opacity-0 transform scale-20"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-20" x-show="tools">

                    <div
                        class="w-11/12 mt-40 shadow-lg m-auto flex justify-center items-center rounded-lg flex-col space-y-2 relative bg-white">
                        <div class="py-1 px-2 w-full flex justify-end items-center">
                            <button class="rounded-full bg-red-300 p-2">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.tools-wall', ['video' => $video])->html();
} elseif ($_instance->childHasBeenRendered($video->id)) {
    $componentId = $_instance->getRenderedChildComponentId($video->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($video->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($video->id);
} else {
    $response = \Livewire\Livewire::mount('components.tools-wall', ['video' => $video]);
    $html = $response->html();
    $_instance->logRenderedChild($video->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                    </div>

                </div>
                <!-- System Like and tools Feed -->
                <div class="p-2 mt-1 w-full">
                    <?php if(auth()->guard()->check()): ?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('voting', [
                    'video' => $video,
                    'user' => $user,
                    ])->html();
} elseif ($_instance->childHasBeenRendered('l1951056965-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l1951056965-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1951056965-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1951056965-2');
} else {
    $response = \Livewire\Livewire::mount('voting', [
                    'video' => $video,
                    'user' => $user,
                    ]);
    $html = $response->html();
    $_instance->logRenderedChild('l1951056965-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    
                    <?php endif; ?>

                    <div class="flex flex-col w-full">
                        <div class="flex justify-start flex-col space-y-4 items-start pb-2 px-3">
                            <div class="relative mt-1 w-full flex flex-col">
                                <h1 class="text-md font-bold text-black"><?php echo e($video->title); ?></h1>
                                <p class="font-sans text-gray-700 text-sm  leading-relaxed">
                                    <?php echo e($video->description); ?>

                                </p>

                            </div>
                        </div>
                        <div class="p-2 pt-1">
                            <p class="font-normal text-xs text-gray-500"><?php echo e($video->created_at->diffForHumans()); ?></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div><?php /**PATH C:\laragon\www\relincs\local\resources\views/livewire/show-feed.blade.php ENDPATH**/ ?>