<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startSection('title'); ?>
        Cashe - Fun Pays
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('link'); ?>
        <link href="https://unpkg.com/video.js/dist/video-js.min.css" rel="stylesheet">
    <?php $__env->stopSection(); ?>
    <?php $__env->startPush('script'); ?>
        <script src="https://unpkg.com/video.js/dist/video.min.js"></script>
        
        <script>
            function getData() {
                if (window.sidebar && window.sidebar.addPanel) { // Mozilla Firefox Bookmark
                    window.sidebar.addPanel(document.title, window.location.href, '');
                } else if (window.external && ('AddFavorite' in window.external)) { // IE Favorite
                    window.external.AddFavorite(location.href, document.title);
                } else if (window.opera && window.print) { // Opera Hotlist
                    this.title = document.title;
                    return true;
                } else { // webkit - safari/chrome
                    alert('Press ' + (navigator.userAgent.toLowerCase().indexOf('mac') != -1 ? 'Command/Cmd' : 'CTRL') +
                        ' + D to bookmark this page.');
                }
            }
        </script>
    <?php $__env->stopPush(); ?>
    

    <div class="lg:p-3 w-full flex items-center justify-center lg:flex-row flex-col">

        <div class="w-full select-none">
            <div class="capitalize lg:mx-4 py-4">
                <div class="grid grid-cols-12 lg:gap-x-4 gap-x-1">
                    <div class="flex justify-start flex-col w-full lg:col-span-8 col-span-12 lg:px-0 px-2 w-full">
                        <div class="swiper wraping w-full">
                            <div class="swiper-wrapper mt-2">
                                <?php $__currentLoopData = $showlastmedia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="swiper-slide w-full">
                                        <div class="w-full relative" wire:ignore>
                                            <video id="<?php echo e($item->id); ?>"
                                                class="video-js vjs-fluid vjs-styles=default vjs-big-play-centered"
                                                controls preload="none" data-setup="{}"
                                                poster="<?php echo e(env('AWS_BUCKET_URL') . 'media/' . $item->uid . '/' . $item->thumbnail_image); ?>">
                                                <source
                                                    src="<?php echo e(env('AWS_BUCKET_URL') . 'media/' . $item->uid . '/' . $item->processed_file); ?>"
                                                    type="application/x-mpegURL" />
                                                <p class="vjs-no-js">
                                                    To view this video please enable JavaScript, and consider upgrading
                                                    to a
                                                    web browser that
                                                    <a href="https://videojs.com/html5-video-support/" target="_blank">
                                                        supports HTML5 video
                                                    </a>
                                                </p>
                                            </video>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <div class="flex justify-start flex-col lg:mt-1 mt-6 lg:col-span-4 col-span-12 w-full">
                        <h3 class="text-md text-gray-700 ml-2 font-bold mb-2 w-60 my-2">Recommend media</h3>
                        <div class="w-full grid grid-cols-1 gap-4 lg:px-1 px-3">

                            <?php $__currentLoopData = $show_data_section; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $user = App\Models\User::find($i->user_id);
                                ?>
                                <div
                                    class=" flex lg:w-full w-full flex-row  ml-2 hover:bg-gray-100 transition duration-200">
                                    <a href="<?php echo e(route('watch.media', $i->uid)); ?>" class="w-full mr-2">
                                        <img src="<?php echo e(env('AWS_BUCKET_URL') . 'media/' . $i->uid . '/' . $i->thumbnail_image); ?>"
                                            alt="<?php echo e($i->title); ?>"
                                            class="w-5/6 h-28 bg-center rounded-lg shadow-lg object-cover" />
                                    </a>
                                    <div class="flex w-full flex-col justify-between py-1">
                                        <a href="" class="text-sm font-normal text-gray-900 text-left mr-4">
                                            <?php echo e($i->title); ?>

                                        </a>
                                        <div class="">
                                            <div class="text-left">
                                                <a href="javascript:void(0)"
                                                    class="tmd:ext-sm text-xs text-gray-500 text-left">
                                                    <?php echo e($user->username); ?>

                                                </a>
                                            </div>
                                            <a href="#" class="w-full">
                                                <span class="md:text-sm text-xs font-base text-gray-500 full">
                                                    <?php echo e($i->views); ?> views &nbsp; &bullet; &nbsp;
                                                    <?php echo e($i->created_at->diffForHumans()); ?>

                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="p-10 w-full">
        <h2 class="text-gray-600 ml-1 lg:text-xl text-lg text-center font-bold ">See latest Wall</h2>
        <div class="mt-10 w-full">
            <div class="swiper mySwiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper w-full mx-auto">
                    <?php $__currentLoopData = $wall_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trending): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card-wall','data' => ['data' => $trending]]); ?>
<?php $component->withName('card-wall'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($trending)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <!-- Right -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            
        </div>
    </div>

    <div class="p-10 w-full">
        <p class="text-xl ml-10 font-extrabold leading-none text-gray-600 py- text-center mb-2 pb-8 w-full">See latest
            Hubs</p>

        <ul class="grid lg:grid-cols-5 grid-cols-2 gap-6">
            <?php $__currentLoopData = $hubs_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="flex flex-col items-center space-y-1 ">
                    <div class="bg-gradient-to-tr from-sky via-sky to-indigo-600 p-1 rounded-full">
                        <a href="<?php echo e(route('show.hubs', $data->uid)); ?>"
                            class=" bg-white block rounded-full p-1 hover:-rotate-6 transform transition" href="#">
                            <img class="h-32 w-32 rounded-full"
                                src="<?php echo e(env('AWS_BUCKET_URL') . 'public/profile_hubs/' . $data->profile); ?>"
                                alt="cute kitty" />
                            
                        </a>
                    </div>
                    <a href="<?php echo e(route('show.hubs', $data->uid)); ?>" class="font-pop">
                        <?php echo e($data->name); ?>

                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <li class="flex flex-col items-center space-y-1 ">
                <div class="bg-gradient-to-tr from-sky via-sky to-indigo-600 p-1 rounded-full">
                    <a href="<?php echo e(route('gu.ehubs')); ?>"
                        class=" bg-white block rounded-full p-1 hover:-rotate-6 transform transition" href="#">
                        <svg class="w-32 h-32 text-gray-700" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM14 11a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z">
                            </path>
                        </svg>
                    </a>
                </div>
                <a href="#">
                    See more
                </a>
            </li>
        </ul>
    </div>
    
    
    

    


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\relincs\local\resources\views/index.blade.php ENDPATH**/ ?>