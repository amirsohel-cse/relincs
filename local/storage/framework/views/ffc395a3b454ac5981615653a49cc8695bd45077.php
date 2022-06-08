<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startSection('title'); ?>
    Hub <?php echo e($data->name); ?>

    <?php $__env->stopSection(); ?>
    <div class="my-3 mx-2" x-data="{ tab : 'media' , tab_slug : 'latest'}">
        <div class="grid grid-cols-12 gap-4 lg:mt-2 mt-6">
            <div
                class="px-5 py-3 flex bg-white flex-col lg:justify-start lg:items-start items-center justify-center lg:col-span-3 col-span-12 text-gray-800">
                <div class="w-full flex justify-center items-start">
                    <img src="<?php echo e(env('AWS_BUCKET_URL').'public/profile_hubs/' . $data->profile); ?>"
                        class="lg:w-48 bg-center object-cover lg:h-48 w-40 h-40 rounded-full" alt="<?php echo e($data->name); ?>">
                </div>
                <div class="mt-2 text-center w-full space-y-3 flex flex-col justify-start items-center">
                    <div class="flex"></div>
                    <div class="lg:text-2xl text-xl">
                        <?php echo e($data->name); ?>

                    </div>
                    <div class="flex flex-row w-full lg:justify-center lg:text-sm text-sm justify-around items-center">
                        <div class="flex items-center">
                            <p><?php echo e($count_joiner); ?></p>
                            <p class="ml-2 capitalize flex justify-center items-center">Audience <svg
                                    class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg></p>
                        </div>
                    </div>
                    <div class="text-indigo-700 lg:text-lg text-md">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('join', ['user_id' => $data->user_id])->html();
} elseif ($_instance->childHasBeenRendered('fpKeoL3')) {
    $componentId = $_instance->getRenderedChildComponentId('fpKeoL3');
    $componentTag = $_instance->getRenderedChildComponentTagName('fpKeoL3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('fpKeoL3');
} else {
    $response = \Livewire\Livewire::mount('join', ['user_id' => $data->user_id]);
    $html = $response->html();
    $_instance->logRenderedChild('fpKeoL3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                    
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('hubs.rating', ['data' => $data])->html();
} elseif ($_instance->childHasBeenRendered($data->id)) {
    $componentId = $_instance->getRenderedChildComponentId($data->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($data->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($data->id);
} else {
    $response = \Livewire\Livewire::mount('hubs.rating', ['data' => $data]);
    $html = $response->html();
    $_instance->logRenderedChild($data->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
                
                <br>
                <?php if($data->user_id === Auth::user()->id): ?>
                <div class="w-full">
                    <div class="w-full flex flex-col justify-start">
                        <div class="mt-2">
                            <p
                                class="flex items-center text-gray-900 lg:text-lg text-lg text-left capitalize font-base">
                                <svg class="w-5 h-5 mr-2 text-gray-600" aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                    </path>
                                    <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                               <span class="font-medium">setting</span>
                            </p>
                        </div>
                        <ul class="flex justify-start w-full flex-col space-y-2 mt-2">
                            <a href="<?php echo e(route('dash.hubs.setting')); ?>"
                                class="transition duration-300 rounded-md cursor-pointer hover:bg-indigo-600 text-gray-800 hover:text-white bg-gray-100 lg:text-sm text-sm capitalize px-2 py-2 w-full">
                                Setting</a>
                            
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="p-2 w-full lg:col-span-9 col-span-12">
                <div class="flex flex-col items-center w-full lg:col-span-10">
                    <?php if($data->visibility === "private"): ?>
                        <?php if($checkJoinUser): ?>
                        <div class="w-full scrollere overflow-x-auto border-b">
                            <nav class="lg:pb-4 pb-2 lg:py-3 flex flex-row relative capitalize">
                                <a class="lg:px-6 px-5 mx-2 lg:py-2 py-2 lg:text-sm text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 lg:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                    href="#" :class="{ 'bg-gray-200': tab === 'media' }" @click.prevent="tab = 'media'">
                                    <div class="text-xs">media</div> &nbsp; <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                    </svg>
                                </a>
                                <a class="lg:px-6 px-5 mx-2 lg:py-2 py-2 lg:text-sm text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 lg:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                    href="#" :class="{ 'bg-gray-200': tab === 'wall' }" @click.prevent="tab = 'wall'">
                                    <div class="text-xs">wall</div> &nbsp; <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                    </svg>
                                </a>
                                <a class="lg:px-6 px-5 mx-2 lg:py-2 py-2 lg:text-sm text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 lg:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                    href="#" :class="{ 'bg-gray-200': tab === 'bulletin' }"
                                    @click.prevent="tab = 'bulletin'">
                                    <div class="text-xs">bulletin</div> &nbsp; <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                    </svg>
                                </a>
                            </nav>
                        </div>
                        <div class="w-full">
                            <div class="w-full" x-show.transition="tab === 'media'">
                                <div class="w-full scrollere ">
                                    <div class="my-2  rounded-full mx-2">
                                        <div class="relative text-gray-50 py-1 flex justify-start items-center px-2">
                                            <input type="search" name="search" placeholder="Search"
                                                class="text-gray-800 text-left py-3  w-full border border-gray-300 px-5 bg-gray-200 rounded-full text-sm focus:outline-none">
                                            <button type="submit"
                                                class="flex justify-end items-center  py-3 px-4 bg-indigo-600 rounded-full ml-2">
                                                <svg class="w-5 h-5 text-gray-50" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6"
                                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <nav
                                        class="lg:pb-4 pb-2 lg:py-3 my-2 mt-2 flex w-full flex-row justify-center relative capitalize">
                                        <a class="lg:px-6 px-5 text-center mx-2 w-4/12 lg:py-2 py-2 font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 lg:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-indigo-200 focus:outline-none focus:shadow-outline "
                                            href="#" :class="{ 'bg-indigo-200': tab_slug === 'latest' }"
                                            @click.prevent="tab_slug = 'latest'">
                                            <div class="text-xs ">latest</div>
                                        </a>
                                        <a class="lg:px-6 px-5 text-center mx-2 w-4/12  lg:py-2 py-2 font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 lg:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-indigo-200 focus:outline-none focus:shadow-outline "
                                            href="#" :class="{ 'bg-indigo-200': tab_slug === 'trending' }"
                                            @click.prevent="tab_slug = 'trending'">
                                            <div class="text-xs ">trending</div>
                                        </a>
                                    </nav>
                                </div>
                                <div class="mt-8" x-show.transition="tab_slug === 'latest' ">
                                    <div class="grid lg:grid-cols-3 grid-cols-1 gap-4 w-full">
                                        
                                        <?php $__empty_1 = true; $__currentLoopData = $data_mediaa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card-media-hubs','data' => ['data' => $data]]); ?>
<?php $component->withName('card-media-hubs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="my-6 px-2 lg:text-xl text-lg text-gray-600">Not found media :(</div>
                                        <?php endif; ?>
                                    </div>
                                    <?php echo e($data_mediaa->links()); ?>

                                </div>
                                <div class="mt-8" x-show.transition="tab_slug === 'trending' ">
                                    <div class="grid lg:grid-cols-3 grid-cols-1 gap-4 w-full">
                                        
                                        <?php $__empty_1 = true; $__currentLoopData = $trending; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card-media-hubs','data' => ['data' => $data]]); ?>
<?php $component->withName('card-media-hubs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="my-6 px-2 lg:text-xl text-lg text-gray-600">media Not found :(</div>
                                        <?php endif; ?>
                                    </div>
                                    <?php echo e($trending->links()); ?>

                                </div>
                            </div>

                            <div class="w-f" x-show.transition="tab === 'wall'">
                                <div class="my-4 lg:px-4 px-2">
                                    <div class="grid lg:grid-cols-3 grid-cols-2 gap-4">
                                        <?php $__empty_1 = true; $__currentLoopData = $latest_wall; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card-wall-hubs','data' => ['data' => $item]]); ?>
<?php $component->withName('card-wall-hubs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="my-6 px-2 lg:text-xl text-lg text-gray-600">wall Not found :(</div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="" x-show.transition="tab === 'bulletin'">
                                <div class="my-2 mt-2 flex space-y-4 items-start justify-center w-full flex-col">
                                    <?php $__empty_1 = true; $__currentLoopData = $latest_bulletin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <?php $user = App\Models\User::find($item->user_id); ?>
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card-bulltein','data' => ['data' => $item,'user' => $user]]); ?>
<?php $component->withName('card-bulltein'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item),'user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="my-6 px-2 lg:text-xl text-lg text-gray-600">bulletin Not found :(</div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                        <div class="w-full scrollere overflow-x-auto border-b">
                            <nav class="lg:pb-4 pb-2 lg:py-3 flex flex-row relative capitalize">
                                <a class="w-6/12 lg:px-6 px-5 mx-2 lg:py-2 py-2 lg:text-sm text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 lg:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                    href="#" :class="{ 'bg-gray-200': tab === 'media' }" @click.prevent="tab = 'media'">
                                    <div class="">about / rules</div> &nbsp; <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                    </svg>
                                </a>
                                <a class="w-6/12 lg:px-6 px-5 mx-2 lg:py-2 py-2 lg:text-sm text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 lg:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                    href="#" :class="{ 'bg-gray-200': tab === 'AnyThing' }"
                                    @click.prevent="tab = 'AnyThing'">
                                    <div class="">AnyThing</div> &nbsp; <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                    </svg>
                                </a>
                            </nav>
                        </div>
                        <div class="w-full">
                            <div class="w-full" x-show.transition="tab === 'media'">
                                <div class="my-4 lg:px-4 px-2 mt-4">
                                    <h3 class="my-2 mb-3 text-center text-xl text-gray-800">
                                        About
                                    </h3>
                                    <p class="lg:text-md text-gray-700 text-sm text-left leading-relaxed"><?php echo e($data->about); ?>

                                    </p>
                                </div>
                            </div>
                            <div class="w-full" x-show.transition="tab === 'AnyThing'">
                                AnyThing
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php else: ?>
                        <div class="w-full scrollere overflow-x-auto border-b">
                            <nav class="lg:pb-4 pb-2 lg:py-3 flex flex-row relative capitalize">
                                <a class="lg:px-6 px-5 mx-2 lg:py-2 py-2 lg:text-sm text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 lg:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                    href="#" :class="{ 'bg-gray-200': tab === 'media' }" @click.prevent="tab = 'media'">
                                    <div class="text-xs">media</div> &nbsp; <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                    </svg>
                                </a>
                                <a class="lg:px-6 px-5 mx-2 lg:py-2 py-2 lg:text-sm text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 lg:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                    href="#" :class="{ 'bg-gray-200': tab === 'wall' }" @click.prevent="tab = 'wall'">
                                    <div class="text-xs">wall</div> &nbsp; <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                    </svg>
                                </a>
                                <a class="lg:px-6 px-5 mx-2 lg:py-2 py-2 lg:text-sm text-sm font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 lg:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
                                    href="#" :class="{ 'bg-gray-200': tab === 'bulletin' }"
                                    @click.prevent="tab = 'bulletin'">
                                    <div class="text-xs">bulletin</div> &nbsp; <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                    </svg>
                                </a>
                            </nav>
                        </div>
                        <div class="w-full">
                            <div class="w-full" x-show.transition="tab === 'media'">
                                <div class="w-full scrollere ">
                                    <div class="my-2  rounded-full mx-2">
                                        <div class="relative text-gray-50 py-1 flex justify-start items-center px-2">
                                            <input type="search" name="search" placeholder="Search"
                                                class="text-gray-800 text-left py-3  w-full border border-gray-300 px-5 bg-gray-200 rounded-full text-sm focus:outline-none">
                                            <button type="submit"
                                                class="flex justify-end items-center  py-3 px-4 bg-indigo-600 rounded-full ml-2">
                                                <svg class="w-5 h-5 text-gray-50" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6"
                                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <nav
                                        class="lg:pb-4 pb-2 lg:py-3 my-2 mt-2 flex w-full flex-row justify-center relative capitalize">
                                        <a class="lg:px-6 px-5 text-center mx-2 w-4/12 lg:py-2 py-2 font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 lg:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-indigo-200 focus:outline-none focus:shadow-outline "
                                            href="#" :class="{ 'bg-indigo-200': tab_slug === 'latest' }"
                                            @click.prevent="tab_slug = 'latest'">
                                            <div class="text-xs ">latest</div>
                                        </a>
                                        <a class="lg:px-6 px-5 text-center mx-2 w-4/12  lg:py-2 py-2 font-medium bg-transparent flex items-center justify-center rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 mt-0 lg:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-indigo-200 focus:outline-none focus:shadow-outline "
                                            href="#" :class="{ 'bg-indigo-200': tab_slug === 'trending' }"
                                            @click.prevent="tab_slug = 'trending'">
                                            <div class="text-xs ">trending</div>
                                        </a>
                                    </nav>
                                </div>
                                <div class="mt-8" x-show.transition="tab_slug === 'latest' ">
                                    <div class="grid lg:grid-cols-3 grid-cols-1 gap-4 w-full">
                                        
                                        <?php $__empty_1 = true; $__currentLoopData = $data_mediaa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card-media-hubs','data' => ['data' => $data]]); ?>
<?php $component->withName('card-media-hubs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="my-6 px-2 lg:text-xl text-lg text-gray-600">Not found media :(</div>
                                        <?php endif; ?>
                                    </div>
                                    <?php echo e($data_mediaa->links()); ?>

                                </div>
                                <div class="mt-8" x-show.transition="tab_slug === 'trending' ">
                                    <div class="grid lg:grid-cols-3 grid-cols-1 gap-4 w-full">
                                        
                                        <?php $__empty_1 = true; $__currentLoopData = $trending; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                       <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card-media-hubs','data' => ['data' => $data]]); ?>
<?php $component->withName('card-media-hubs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="my-6 px-2 lg:text-xl text-lg text-gray-600">media Not found :(</div>
                                        <?php endif; ?>
                                    </div>
                                    <?php echo e($trending->links()); ?>

                                </div>
                            </div>

                            <div class="w-f" x-show.transition="tab === 'wall'">
                                <div class="my-4 lg:px-4 px-2">
                                    <div class="grid lg:grid-cols-3 grid-cols-2 gap-4">
                                        <?php $__empty_1 = true; $__currentLoopData = $latest_wall; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card-wall-hubs','data' => ['data' => $item]]); ?>
<?php $component->withName('card-wall-hubs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="my-6 px-2 lg:text-xl text-lg text-gray-600">wall Not found :(</div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="" x-show.transition="tab === 'bulletin'">
                                <div class="my-2 mt-2 flex space-y-4 items-start justify-center w-full flex-col">
                                    <?php $__empty_1 = true; $__currentLoopData = $latest_bulletin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <?php $user = App\Models\User::find($item->user_id); ?>
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card-bulltein','data' => ['data' => $item,'user' => $user]]); ?>
<?php $component->withName('card-bulltein'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item),'user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="my-6 px-2 lg:text-xl text-lg text-gray-600">bulletin Not found :(</div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\relincs\local\resources\views/hubs/show.blade.php ENDPATH**/ ?>