<?php $__env->startSection('metas'); ?>
    <meta name="title" content="<?php echo e($media->title); ?>">
    <meta name="description" content="<?php echo e($media->description); ?>">
    <meta name="image" content="<?php echo e(env('AWS_BUCKET_URL') . 'media/'.$media->uid . '/' .$media->thumbnail_image); ?>">
<?php $__env->stopSection(); ?>
<div class="w-full overflow-hidden">
    <?php $__env->startSection('title'); ?>
    Watch Video <?php echo e($media->title); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('link'); ?>
    <link href="https://unpkg.com/video.js/dist/video-js.min.css" rel="stylesheet">
    <?php $__env->stopSection(); ?>
    <?php $__env->startPush('script'); ?>

    <script>
        $(document).ready(function() {
            toastr.options = {
                "progressBar": true,
                "positionClass": "toast-bottom-right"
            }
        });

        window.addEventListener('success', event => {
            toastr.success(event.detail.message);
        });
    </script>

    <script src="https://unpkg.com/video.js/dist/video.min.js"></script>
    
    <?php $__env->stopPush(); ?>
    <div class="w-full select-none">
        <div class="capitalize lg:mx-4 py-4">
            <div class="grid grid-cols-12 lg:gap-x-4 gap-x-1">
                <div class="flex justify-start flex-col w-full lg:col-span-8 col-span-12 lg:px-0 px-2">
                    <div class="w-full">
                        <div class="container w-full" wire:ignore>
                            <video id="watchwall"
                                class="video-js vjs-fluid vjs-styles=default vjs-big-play-centered"
                                 controls preload="none"  data-setup="{}"
                                poster="<?php echo e(env('AWS_BUCKET_URL') . 'media/'.$media->uid . '/' .$media->thumbnail_image); ?>">
                                <source src="<?php echo e(env('AWS_BUCKET_URL') . 'media/'. $media->uid . '/' . $media->processed_file); ?>" type="application/x-mpegURL" />
                                <p class="vjs-no-js">
                                    To view this video please enable JavaScript, and consider upgrading to a
                                    web browser that
                                    <a href="https://videojs.com/html5-video-support/" target="_blank">
                                        supports HTML5 video
                                    </a>
                                </p>
                            </video>
                        </div>
                    </div>
                    <!-- Details  -->
                    <div class="w-full my-4">
                        <div
                            class="flex md:flex-row flex-col justify-between md:space-y-1 space-y-3 border-b border-gray-100 pb-3">
                            <div class="flex flex-col jsutify-between">
                                <div class="flex flex-col w-full">
                                    <h3 class="md:text-md text-sm text-gray-900"><?php echo e($media->title); ?></h3>
                                </div>
                                <div class="mt-3 text-gray-500 md:text-sm text-xs">
                                    <?php echo e($media->views); ?> views &nbsp; &bullet; &nbsp; <?php echo e($media->date_string()); ?>

                                </div>
                            </div>

                            <div class="flex flex-row space-x-2 items-center">

                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('likedislike', ['video' => $media])->html();
} elseif ($_instance->childHasBeenRendered('l4125528141-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l4125528141-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4125528141-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4125528141-0');
} else {
    $response = \Livewire\Livewire::mount('likedislike', ['video' => $media]);
    $html = $response->html();
    $_instance->logRenderedChild('l4125528141-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                                <?php if(auth()->guard()->check()): ?>
                                <div class="flex flex-row space-x-2 justify-center items-center pb-3 capitalize">
                                    <button type="button" id="shareButton"
                                        class="flex items-center text-sm text-gray-700 focus:outline-none">
                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                            </path>
                                        </svg>
                                        <span class="ml-1 capitalize" id="shareButton">share</span>
                                    </button>
                                    <div class="flex items-center justify-center mx-1 text-gray-600">|</div>
                                </div>
                                <div class="flex flex-row space-x-2 justify-center items-center pb-4 capitalize">
                                    <button type="button" wire:click.prevent="report" wire:loading.attr='disabled'
                                        class="flex items-center text-sm text-gray-700 focus:outline-none">
                                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636">
                                            </path>
                                        </svg>
                                        <?php if($rstatus == 0): ?>
                                            <span class="ml-1 capitalize">
                                                report<span wire:loading wire:target='report' wire:key='report'>...</span>
                                            </span> 
                                        <?php else: ?>
                                            <span class="ml-1" style="color: green;">Reported</span>
                                        <?php endif; ?>
                                    </button>
                                </div>
                                <?php endif; ?>

                            </div>
                        </div>
                        <br>

                        <div class="">
                            <div class="flex flex-row justify-between items-center border-b border-gray-100 pb-3">
                                <div class="flex justify-center items-center" wire:ignore>
                                    <a href="<?php echo e(route('gu.profile.show' , ['name' => $user->id ])); ?>" class="w-full h-full lg:block hidden">
                                        <img src="<?php echo e($this->profile_published()); ?>" onerror="this.onerror=null;this.src='https://relincsca.s3.amazonaws.com/public/profile_image/62a21b9f0e60cElizabeth.png';" alt="picture user"
                                            class="shadow-md rounded-full w-14 h-14 object-cover">
                                    </a>
                                    <div class="flex mx-3 flex-col items-centerw-full">
                                        <a  href="<?php echo e(route('gu.profile.show', ['name' => $user])); ?>"
                                        class="text-gray-800 font-medium lg:w-80 w-auto md:text-md text-sm mb-1">
                                            <?php echo e($user->username); ?></a>
                                        <p wire:ignore.self wire:poll.4000ms='count_subscribe()' class="text-gray-600 font-normal capitalize flex items-center w-full md:text-sm text-xs">
                                            <?php echo e($this->count_subscribe()); ?>

                                            Subscribers</p>
                                    </div>
                                </div>
                                <div class="mr-6">

                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('subscribe', ['user_id' => $media->user_id])->html();
} elseif ($_instance->childHasBeenRendered('l4125528141-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l4125528141-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4125528141-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4125528141-1');
} else {
    $response = \Livewire\Livewire::mount('subscribe', ['user_id' => $media->user_id]);
    $html = $response->html();
    $_instance->logRenderedChild('l4125528141-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                </div>
                            </div>

                            <div class="m-3 mt-6">
                                <p class="flex w-full h-full relative text-gray-800 font-base md:text-md text-sm">
                                    <?php echo e($media->description); ?>

                                </p>
                            </div>
                            <div class="m-3 w-full border-t border-gray-400 mt-6">
                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('add-comment-video',['data' => $media,'col' => 0])->html();
} elseif ($_instance->childHasBeenRendered('l4125528141-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l4125528141-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4125528141-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4125528141-2');
} else {
    $response = \Livewire\Livewire::mount('add-comment-video',['data' => $media,'col' => 0]);
    $html = $response->html();
    $_instance->logRenderedChild('l4125528141-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                            </div>
                        </div>
                    </div>
                    <!-- Details  -->
                </div>
                <div class="flex justify-start lg:col-span-4 col-span-12">
                    <div class="flex flex-col lg:space-x-2 space-y-3 lg:w-auto w-full">
                        <div></div>
                        <?php $__empty_1 = true; $__currentLoopData = App\Models\Media::where("id",'!=', $media->id)->take('5')->inRandomOrder()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php
                        $user = App\Models\User::find($i->user_id);
                        ?>
                        <div class=" flex lg:w-full w-80 flex-row  ml-2 hover:bg-gray-100 transition duration-200">
                            <a <?php echo e(route('watch.media' , ['media' => $i->uid])); ?> class="w-full mr-2">
                                <img src="<?php echo e(env('AWS_BUCKET_URL') . 'media/' . $i->uid . '/' . $i->thumbnail_image); ?>" alt="<?php echo e($i->title); ?>"
                                    class="lg:w-48 w-40 h-28 bg-center rounded-lg shadow-lg object-cover" />
                            </a>
                            <div class="flex w-full flex-col justify-between py-1">
                                <a href="<?php echo e(route('watch.media' , ['media' => $i->uid])); ?>" class="text-sm font-normal text-gray-900 text-left mr-4">
                                    <?php echo e($i->title); ?>

                                </a>
                                <div class="">
                                    <div class="text-left">
                                        <a href="javascript:void(0)" class="tmd:ext-sm text-xs text-gray-500 text-left">
                                            <?php echo e($user->username); ?>

                                        </a>
                                    </div>
                                    <a href="#" class="w-full">
                                        <span class="md:text-sm text-xs font-base text-gray-500 full">
                                            <?php echo e($i->views); ?> views &nbsp; &bullet; &nbsp; <?php echo e($i->created_at->diffForHumans()); ?>

                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="w-full text-center capitalize my-3 px-1 lg:text-md text-sm text-gray-700">Media not found :(</div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden" id="modal_share" wire:ignore>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.share-button','data' => ['title' => $media->title]]); ?>
<?php $component->withName('share-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($media->title)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
    <script src="<?php echo e(asset('js/share.js')); ?>"></script>

    <script>
        var ply = videojs('watchwall');
        ply.on('timeupdate', function() {
            if(this.currentTime() > 3){
                ply.off('timeupdate');
                Livewire.emit('VideoViewed');
                console.log('Ok... Update Views');
            }
        });
    </script>

    
</div>
<?php /**PATH C:\laragon\www\relincs\local\resources\views/livewire/watchmedia.blade.php ENDPATH**/ ?>