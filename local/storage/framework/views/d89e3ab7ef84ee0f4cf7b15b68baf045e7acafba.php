<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <?php echo $__env->yieldContent('metas'); ?>

    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Styles -->
    <?php
        $fav_icon = DB::table('setting_websites')->where('id', 1)->first()->fav_icon;
    ?>
    <!-- App favicon -->
    <link rel="shortcut icon" href="https://relincsca.s3.amazonaws.com/public/media/<?php echo e($fav_icon); ?>">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>
    
    <script defer src="https://unpkg.com/alpinejs@3.9.3/dist/cdn.min.js"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <?php echo $__env->yieldContent('link'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo $__env->yieldPushContent('script'); ?>
    <script class="jsbin" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    

</head>
<style>
    .scroller::-webkit-scrollbar {
        background: rgba(7, 7, 7, 0.041);
        width: 7px;
    }

    .scroller::-webkit-scrollbar-thumb {
        background: #0707077a;
        border-radius: 1rem;
    }

    .drop-zone {
        max-width: 100%;
        height: 200px;
        padding: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-family: "Quicksand", sans-serif;
        font-weight: 500;
        font-size: 20px;
        cursor: pointer;
        color: #cccccc;
        border: 4px dashed #1814e2dc;
        border-radius: 10px;
    }

    .drop-zone--over {
        border-style: solid;
    }

    .drop-zone__input {
        display: none;
    }

    .drop-zone__thumb {
        width: 100%;
        height: 100%;
        border-radius: 10px;
        overflow: hidden;
        background-color: #cccccc;
        background-size: cover;
        position: relative;
        display: none;
    }

    .drop-zone__thumb::after {
        content: attr(data-label);
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 5px 0;
        color: #ffffff;
        background: rgba(0, 0, 0, 0.75);
        font-size: 14px;
        text-align: center;
    }

    #journal-scroll::-webkit-scrollbar {
        width: 4px;
        cursor: pointer;
        /*background-color: rgba(229, 231, 235, var(--bg-opacity));*/

    }

    #journal-scroll::-webkit-scrollbar-track {
        background-color: rgba(229, 231, 235, var(--bg-opacity));
        cursor: pointer;
        /*background: red;*/
    }

    #journal-scroll::-webkit-scrollbar-thumb {
        cursor: pointer;
        background-color: #a0aec0;
        /*outline: 1px solid slategrey;*/
    }


    .loading {
        z-index: 99999999999;
    }

    #animationWindow {
        width: 80%;
        height: 80%;
    }
</style>

<body class="scroller text-gray-900 antialiased select-none" x-data="{
    open : false,
    tab : 'media',
    openSearch : false,
    box : false,
    toggleMenu : 'true',
    opimg : false,
    notic : false,
    listFollow : false,
    tab_follow : 'Followers',
    tools : false,
    support : false,
    isNotification : false,
    }">
    
    <div class="loading overflow-hidden fixed justify-center items-center inset-0 bg-gray-100 w-full h-full">
        <div class="w-full overflow-hidden h-full flex-col flex justify-center items-center mx-auto">
            <div class="animate-bounce">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.application-logo','data' => ['class' => 'w-14 h-14 fill-current text-gray-500']]); ?>
<?php $component->withName('application-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-14 h-14 fill-current text-gray-500']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
            <div class="mt-4 flex items-center justify-center">
                <div class="animate-spin rounded-full h-8 w-8 border-t-2 border-b-2 border-gray-800"></div>
                <span class="text-xl animate-pulse ml-2">Loading . . .</span>
            </div>
        </div>
    </div>

    <div class="relative z-50">
        <div class="z-50">
            <div class="antialiased dark-mode:bg-gray-900" x-show="toggleMenu"
                x-transition:enter="transition transform duration-300 ease-out"
                x-transition:enter-start="-translate-x-12" x-transition:leave-end="translate-x-0">
                <div
                    class="w-full text-gray-700 lg:bg-gray-50 bg-gray-100 dark-mode:text-gray-200 dark-mode:bg-gray-800">
                    <div x-data="{ open  : false }"
                        class="flex flex-col  max-w-screen-xl lg:px-4 px-0 mx-auto lg:items-center lg:justify-between lg:flex-row">
                        <div class="flex flex-row items-center justify-between px-4">
                            <a href="<?php echo e(route('home')); ?>"
                                class="text-lg  tracking-widest text-gray-900 capitalize rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.application-logo','data' => ['class' => 'w-8 h-8 fill-current text-gray-500']]); ?>
<?php $component->withName('application-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-8 h-8 fill-current text-gray-500']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                            </a>
                            <div class="relative flex justify-center items-center lg:ml-20 ml-0">
                                
                                <?php if(request()->routeIs('gu.media')): ?>
                                <button :class="toggleCategory ? 'hidden' : 'flex'"
                                    class="flex items-center justify-center rounded-lg focus:outline-none focus:shadow-outline mx-4"
                                    @click="toggleCategory = !toggleCategory">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4">
                                        </path>
                                    </svg>
                                </button>
                                <?php endif; ?>

                            </div>
                            <button class="rounded-lg lg:hidden focus:outline-none focus:shadow-outline"
                                @click="open = !open">
                                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                    <path x-show="!open" fill-rule="evenodd"
                                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                    <path x-show="open" fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>

                        </div>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.navbar','data' => []]); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        
                        
                    </div>
                </div>
                
            </div>
            
        </div>
        
        
    </div>

    <div x-show="support" style="z-index: 999" class="fixed inset-0 w-full h-full flex flex-col bg-white text-gray-800">
        <div class="overflow-y-scroll">
            <div class="py-2 px-3 w-full flex justify-between items-center">
                <h1 class="text-md font-pop">
                    Support
                </h1>
                <button @click.prevent="support = !support" class="rounded-full bg-red-300 p-2">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div class=" border-t border-gray">
                <div class="w-full">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.support','data' => []]); ?>
<?php $component->withName('support'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php echo e($slot); ?>

    <?php if(auth()->guard()->check()): ?>

    <div x-show="isNotification" style="z-index: 999"
        class="fixed inset-0 bg-gray-900 backdrop-filter backdrop-blur-md bg-opacity-25 scrollere w-full space-y-2 text-gray-600 "
        x-transition:enter="transition transform ease-in-out duration-300"
        x-transition:enter-start="transform -translate-x-full" x-transition:enter-end="transform -translate-x-0"
        x-transition:leave="transition ease-in duration-400" x-transition:leave-start="transform -translate-x-0"
        x-transition:leave-end="transform -translate-x-full">
        <div @click.away="isNotification = !isNotification"
            class="lg:w-4/12 w-5/6 h-screen transform overflow-y-auto scroller p-2 bg-gray-100 border z-50 border-gray-100">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.notification','data' => []]); ?>
<?php $component->withName('notification'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>
    </div>
    <?php endif; ?>
    <div
        class="flex flex-col z-50 bg-gray-900  lg:w-3/12 w-4/6 rounded-t-lg lg:px-4 py-2 px-0 mx-auto lg:items-center lg:justify-center lg:flex-row fixed bottom-0 left-0 right-0">
        <nav class="w-full flex-grow  lg:pb-0 flex  justify-center items-center lg:bg-transparen space-x-3 lg:px-2">
            <?php if(auth()->guard()->check()): ?>
            <!-- Notifications menu -->
            <a class="flex justify-center items-center font-bold px-3 lg:py-2 py-1  text-sm text-gray-100  hover:bg-white hover:text-indigo-500 transition duration-100 rounded-lg focus:text-gray-900 hover:text-gray-50 focus:bg-gray-200 text-sm lg:text-left text-center focus:outline-none focus:shadow-outline"
                href="<?php echo e(route('dash.createmedia')); ?>">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Media</a>
            <a class="flex justify-center items-center font-bold px-3 lg:py-2 py-1  text-sm  text-gray-100 hover:bg-white hover:text-indigo-500 transition duration-100 rounded-lg focus:text-gray-900 hover:text-gray-50 focus:bg-gray-200 text-sm lg:text-left text-center focus:outline-none focus:shadow-outline"
                href="<?php echo e(route('dash.createwall')); ?>">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Wall</a>
                <?php if(Auth::user()->role == 'admin'): ?>
                    <a class="flex justify-center items-center font-bold px-3 lg:py-2 py-1 text-sm text-gray-100  hover:bg-white hover:text-indigo-500 transition duration-100 rounded-lg focus:text-gray-900 hover:text-gray-50 focus:bg-gray-200 text-sm lg:text-left text-center focus:outline-none focus:shadow-outline"
                    href="<?php echo e(route('dash.create.hubs')); ?>">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Hub</a>
                <?php endif; ?>
            
            <?php endif; ?>
        </nav>
    </div>
    <footer class="mt-4 w-full">
        <?php
            $setting = App\Models\SettingWebsite::where('id', 1)->first();
        ?>
        <div class="lg:px-8 px-4 pb-16 pt-4 flex lg:flex-row flex-col items-center bg-gray-100 justify-between">
            <a href="<?php echo e(route("home")); ?>" class="z-10">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.application-logo','data' => ['class' => 'text-gray-500']]); ?>
<?php $component->withName('application-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-gray-500']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </a>
            <p class="text-gray-600 font-bold text-md"><?php echo e($setting->copyright_text); ?></p>
            <div class="flex justify-center items-center space-x-4 lg:mt-1 mt-3">
                <div></div>
                <a href="<?php echo e($setting->instagram_url); ?>" target="_blank" class="w-8">
                    <svg role="img" class="text-gray-600" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>Instagram</title>
                        <path
                            d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                    </svg>
                </a>
                <a href="<?php echo e($setting->facebook_url); ?>" target="_blank" class="w-8">
                    <svg role="img" class="text-gray-600" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>Facebook</title>
                        <path
                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                    </svg>
                </a>
                <a href="<?php echo e($setting->youtube_url); ?>" target="_blank" class="w-8">
                    <svg role="img" class="text-gray-600" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>YouTube</title>
                        <path
                            d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                    </svg>
                </a>
                <a href="<?php echo e($setting->twitter_url); ?>" target="_blank" class="w-8">
                    <svg role="img" class="text-gray-600" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>Twitter</title>
                        <path
                            d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                    </svg>
                </a>

            </div>

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.tos','data' => []]); ?>
<?php $component->withName('tos'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

        </div>
    </footer>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".wraping", {
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        var share = document.querySelector("#shareButton");
        var url = window.location.href;
        var title = document.title;

        share.addEventListener("click", async (e) => {
            e.preventDefault();
            if (navigator.share) {
            await  navigator
                    .share({
                        title: title,
                        url: url,
                    })
                    .then((result) => {
                        window.addEventListener("unmarked", () => {
                            Swal.fire({
                                icon: "success",
                                position: "bottom-end",
                                title: "Thanks for sharing!",
                                showConfirmButton: true,
                                timer: 1300,
                            });
                        });
            console.log('share !!' , result)
                    })
                    .catch(console.error);
            } else {
            console.log('Could not share')
            }
        });

    </script>
    <script>
        document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
      const dropZoneElement = inputElement.closest(".drop-zone");

       dropZoneElement.addEventListener("click", (e) => {
        inputElement.click();
            });

            inputElement.addEventListener("change", (e) => {
                if (inputElement.files.length) {
                updateThumbnail(dropZoneElement, inputElement.files[0]);
                }
            });

            dropZoneElement.addEventListener("dragover", (e) => {
                e.preventDefault();
                dropZoneElement.classList.add("drop-zone--over");
            });

            ["dragleave", "dragend"].forEach((type) => {
                dropZoneElement.addEventListener(type, (e) => {
                dropZoneElement.classList.remove("drop-zone--over");
                });
            });

            dropZoneElement.addEventListener("drop", (e) => {
                e.preventDefault();

                if (e.dataTransfer.files.length) {
                inputElement.files = e.dataTransfer.files;
                updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
                }

                dropZoneElement.classList.remove("drop-zone--over");
            });
            });

        /**
        * Updates the thumbnail on a drop zone element.
        *
        * @param  {HTMLElement} dropZoneElement
        * @param  {File} file
        */
        function updateThumbnail(dropZoneElement, file) {
        let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

        // First time - remove the prompt
        if (dropZoneElement.querySelector(".drop-zone__prompt")) {
            dropZoneElement.querySelector(".drop-zone__prompt").remove();
        }

        // First time - there is no thumbnail element, so lets create it
        if (!thumbnailElement) {
            thumbnailElement = document.createElement("div");
            thumbnailElement.classList.add("drop-zone__thumb");
            dropZoneElement.appendChild(thumbnailElement);
        }

        thumbnailElement.dataset.label = file.name;

        // Show thumbnail for image files
        if (file.type.startsWith("image/")) {
            const reader = new FileReader();

            reader.readAsDataURL(file);
            reader.onload = () => {
                document.getElementById('blah').setAttribute('src', reader.result);
            };
        } else {
            thumbnailElement.style.backgroundImage = null;
        }
        }

    </script>




    <script>
        var swiper = new Swiper(".mySwiper", {

            slidesPerView: 3,
            spaceBetween: 10,
            slidesPerGroup: 3,
            speed: 400,
            autoplay: {
            delay: 4000,
            disableOnInteraction: false,
            },
            loopFillGroupWithBlank: true,
            breakpoints: {
                100: {
                    slidesPerView: 1,
                    spaceBetween: 15,
                    slidesPerGroup: 1,
                },
                668: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                    slidesPerGroup: 2,
                },
                1100: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                    slidesPerGroup: 3,
                },
                1600: {
                    slidesPerView: 5,
                    spaceBetween: 10,
                    slidesPerGroup: 5,
                },
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            });
    </script>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script>
        setTimeout(() => {
        document.querySelector('.loading').classList.remove('flex');
        document.querySelector('.loading').classList.add('hidden');
    }, 1000);
    </script>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html>
<?php /**PATH C:\laragon\www\relincs\local\resources\views/layouts/guest.blade.php ENDPATH**/ ?>