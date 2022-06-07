<div class="w-full ">
    <?php $__env->startSection('title'); ?>
    Profile <?php echo e($user->username); ?>

    <?php $__env->stopSection(); ?>
    <script>
        window.addEventListener('exist_save', () => {
            Swal.fire({
                icon: "info",
                position: "bottom-end",
                title: "remove save",
                timer: 2000,
            });
        });
        window.addEventListener('not_save', () => {
            Swal.fire({
                icon: "success",
                position: "bottom-end",
                title: "Saved",
                timer: 2000,
            });
        });


    </script>
    <div class="bg-gray-100 relative lg:text-md text-sm" wire:loading.class="opacity-50">
        <div class="flex flex-col items-center md:max-w-5xl w-full mx-auto lg:p-4 p-1">
            <div class="grid md:grid-cols-12 grid-cols-1 place-content-around w-full">
                <div class="w-full md:py-10 md:col-span-3 col-span-12">
                    <div class="flex flex-col justify-center items-center space-y-3">
                        <div class="cursor-pointer">
                            <img src="<?php echo e($user->profile()); ?>"
                                class="md:w-full lg:w-36 object-cover w-32 lg:h-36 h-32 rounded-full shadow-md"
                                alt="<?php echo e($user->username); ?>">
                        </div>
                    </div>
                </div>
            
                <div
                    class="w-full py-10 px-4 p-4 md:col-span-9 col-span-12 flex flex-col md:items-baseline items-center md:justify-evenly justify-center">
                    <div class="flex lg:flex-row flex-col justify-start items-center lg:gap-x-3 gap-y-4 text-gray-800">
                        <div class="w-full">
                            <p class="lg:text-xl text-lg lg:text-left text-center font-normal">
                                <?php echo e($user->username); ?></p>
                        </div>

                        <div class="flex w-full">
                            <div></div>
                            
                            <div>
                                <a class="font-bold px-4 py-2 text-xs mr-2 bg-midsky hover:bg-sky transition duration-100 rounded-lg lg:mt-0 lg:ml-4 text-white focus:text-gray-900 hover:text-gray-50 focus:bg-gray-200 lg:text-left text-center focus:outline-none focus:shadow-outline"
                                href="<?php echo e(url('chatify/'.$user->id)); ?>">Message</a>
                            </div>
                            <div>
                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('following', ['user_id' => $user->id])->html();
} elseif ($_instance->childHasBeenRendered('l3241121024-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3241121024-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3241121024-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3241121024-0');
} else {
    $response = \Livewire\Livewire::mount('following', ['user_id' => $user->id]);
    $html = $response->html();
    $_instance->logRenderedChild('l3241121024-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                            </div>
                            <button class="ml-4 relative"  wire:click.prevent="bookmarking">
                                <svg class="w-7 h-7 text-gray-700 <?php if($marked): ?> fill-current <?php endif; ?>"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6"
                                        d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mt-4 pt-3  pb-2 w-full">
                        <div class="flex flex-row lg:justify-between lg:text-md text-sm justify-around items-center">
                            <div class="flex items-center">
                                <p><?php echo e($this->count_wall()); ?></p>
                                <p class="ml-2 capitalize">wall</p>
                            </div>
                            <div class="flex items-center">
                                <p><?php echo e($this->count_media()); ?></p>
                                <p class="ml-2 capitalize">media</p>
                            </div>
                            <div class="flex items-center cursor-pointer" wire:click.prevent="toggle">
                                <p><?php echo e($this->count_followers()); ?></p>
                                <p class="ml-2 capitalize">followers</p>
                            </div>
                            <div class="flex items-center cursor-pointer" wire:click.prevent="toggle">
                                <p><?php echo e($this->count_following()); ?></p>
                                <p class="ml-2 capitalize">following</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full" wire:ignore>
                <div class="border-t w-full lg:p-2 p-0" x-data="{tab_profile : 'wall' }">
                    <nav
                        class="lg:pb-1 scrollere overflow-auto md:py-1 w-full py-2 flex flex-row mx-auto md:justify-evenly justify-between relative capitalize border-b">
                        <a class="md:px-6 mx-1 px-5 w-full md:py-2 py-2 md:text-md text-sm font-medium bg-transparent flex justify-center items-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                            href="#" :class="{ 'bg-gray-200': tab_profile === 'wall' }"
                            @click.prevent="tab_profile = 'wall'">
                            <div class="capitalize">wall</div> &nbsp;
                        </a>
                        <a class="md:px-6 mx-1 px-5 w-full md:py-2 py-2 md:text-md text-sm font-medium bg-transparent flex justify-center items-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                            href="#" :class="{ 'bg-gray-200': tab_profile === 'media' }"
                            @click.prevent="tab_profile = 'media'">
                            <div class=""> media</div> &nbsp;
                        </a>
                        <a class="
                                    md:px-6 mx-1 px-5 w-full md:py-2 py-2 md:text-md text-sm font-medium
                                    bg-transparent flex justify-center items-center rounded-lg dark-mode:bg-transparent
                                    dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white
                                    dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 md:ml-4 hover:text-gray-900
                                    focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none
                                    focus:shadow-outline " href=" #"
                            :class="{ 'bg-gray-200': tab_profile === 'about' }" @click.prevent="tab_profile = 'about'">
                            <div class=""> about</div> &nbsp;
                        </a>
                    </nav>
                    <!-- Show Steps of media -->
                    <div class="mt-0">
                        <div x-show="tab_profile === 'wall'">
                            <div class="lg:mt-4 mt-0 lg:px-4 px-0">
                                <?php if($this->count_wall() !== 0): ?>
                                <div class="grid lg:grid-cols-4 grid-cols-3 md:gap-2 gap-1">
                                    <?php $__currentLoopData = $video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="flex-none flex md:flex-row flex-col cursor-pointer">
                                        <a href="<?php echo e(route('show.wall.feed' , ['video' => $i->uid,])); ?>"
                                            class="relative flex justify-center items-center sm:mb-0 mb-3 w-full h-full">
                                            <img src="<?php echo e(env('AWS_BUCKET_URL'). $i->path); ?>"
                                                alt=""
                                                class=" w-full h-full object-cover  flex items-center justify-center rounded-sm">
                                            <a target="_blank"
                                                href="<?php echo e(route('show.wall.feed' , ['video' => $i->uid,])); ?>"
                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                <?php if($i->thumbnail_image == null): ?>
                                                
                                                <?php else: ?>
                                                <svg class="md:w-12 md:h-12 w-8 h-8" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                <?php endif; ?>
                                            </a>
                                            <?php if($i->thumbnail_image !== null): ?>
                                            <div
                                                class="absolute bottom-0 right-0 flex justify-center items-center text-white text-xs font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                <div class="px-4 py-1 bg-indigo-900">
                                                    <?php echo e($i->duration); ?>

                                                </div>
                                            </div>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <?php else: ?>
                                <h3 class="text-center text-gray-800 p-3">
                                    Wall not found.
                                </h3>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="fl" x-show="tab_profile === 'media'">
                            <div class="lg:mt-4 mt-0 lg:px-4 px-0">
                                <?php if($this->count_media() !== 0): ?>
                                <div class="grid lg:grid-cols-3 grid-cols-2 md:gap-2 gap-1">
                                    <?php $__currentLoopData = $media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="flex-none flex md:flex-row flex-col cursor-pointer">
                                        <div
                                            class="relative flex justify-center items-center sm:mb-0 mb-3 w-full h-full">
                                            <img src="<?php echo e(env('AWS_BUCKET_URL'). $i->path); ?>"
                                                alt=""
                                                class=" w-full h-full object  flex items-center justify-center rounded-sm">
                                            <a target="_blank" href="<?php echo e(route('watch.media' , ['media' => $i->uid,])); ?>"
                                                class="absolute flex justify-center items-center   -ml-3  text-white p-1 text-xs hover:bg-indigo-500 font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                <svg class="md:w-12 md:h-12 w-8 h-8" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>

                                            </a>
                                            <div
                                                class="absolute bottom-0 right-0 flex justify-center items-center text-white text-xs font-medium tracking-wider rounded-full transition ease-in duration-200">
                                                <div class="px-4 py-1 bg-indigo-900">
                                                    <?php echo e($i->duration); ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <?php else: ?>
                                <h3 class="text-center text-gray-800 p-3">
                                    Media not found.
                                </h3>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <?php if($user->about != NULL): ?>
                        <div class="" x-show=" tab_profile === 'about' ">
                            <div class="my-8 px-3 w-full grid lg:grid-cols-12 gap-x-10 gap-y-6">
                                <div class="w-full  col-span-7">
                                    <div
                                        class="sm:leading-10 flex justify-start  flex-col text-gray-700 text-left lg:text-lg text-sm">
                                        <h3 class="mb-1 text-left text-gray-900 font-medium lg:text-2xl text-lg">
                                            about
                                        </h3>
                                        <p class="text-left mt-1 font-base leading-7 lg:text-md text-sm"> <?php echo $user->about; ?></p>
                                    </div>
                                </div>
                                <div class="w-full  col-span-5 md:text-lg text-md text-gray-700 lg:mt-1 mt-3">
                                    <h3 class="mb-1 text-left text-gray-900 font-medium lg:text-2xl text-lg">
                                        Link
                                    </h3>
                                    <div class="flex justify-start items-center ">
                                        <svg class="w-6 h-6 text-indigo-700 underline" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"
                                                d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1">
                                            </path>
                                        </svg>
                                        <a target="_blank" href="https://<?php echo e($user->link); ?>"
                                            class="flex justify-center items-center text-indigo-500 underline py-4 px-2">
                                            <?php echo e(Illuminate\Support\Str::limit($user->link , 20)); ?>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if($listfollow): ?>
    <div x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90">
        <div class="fixed lg:mt-20 mt-14 inset-0 w-full h-screen z-50">
    <div class="absolute inset-0 bg-gray-900 w-full h-full bg-opacity-60">
        <div class="my-10 lg:w-6/12 w-full lg:px-1 px-3 mx-auto" >
            <button wire:click.prevent="toggle" class="px-1 py-1 bg-red-200 rounded-full text-red-400 my-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('list-follow' ,['user' => $user->id])->html();
} elseif ($_instance->childHasBeenRendered($user->id)) {
    $componentId = $_instance->getRenderedChildComponentId($user->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($user->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($user->id);
} else {
    $response = \Livewire\Livewire::mount('list-follow' ,['user' => $user->id]);
    $html = $response->html();
    $_instance->logRenderedChild($user->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
    </div>
</div>

    </div>
    <?php endif; ?>

    

</div>
<?php /**PATH C:\laragon\www\relincs\local\resources\views/livewire/profile/profile-u-ser.blade.php ENDPATH**/ ?>