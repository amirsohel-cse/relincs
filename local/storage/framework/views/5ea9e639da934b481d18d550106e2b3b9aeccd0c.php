<div>
    <?php $__env->startSection('title'); ?>
        Latest
    <?php $__env->stopSection(); ?>
    <div class="w-full h-full" x-data="{ search: '', toggleFilter: false }">
        <!-- Find-->
        <div class="relative">
            <div style="background : #80b4be;" class="w-full flex flex-col jusify-center items-center transform">
                <!-- video Hubs search box -->
                <div class="mx-auto w-full flex flex-row justify-between  py-4 z-50">
                    <form wire:submit.prevent="find"
                        class=" bg-white rounded flex  lg:w-6/12 w-full mx-auto  pl-2 py-2 shadow-md border border-gray-200">
                        <button class="bg-white rounded-md -ml-2 px-2 focus:outline-none"
                            @click.prevent="toggleFilter = !toggleFilter"><svg class="w-6 h-6" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z">
                                </path>
                            </svg></button>
                        <input type="text" id="search" placeholder="search Directory..." wire:model.lazy="search"
                            class=" pl-4 text-md outline-none bg-transparent  w-8/12
                            <?php $__errorArgs = ['search'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border border-red-400  <?php else: ?> border-none <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <select
                            class="px-4 lg:w-32 w-20 lg:text-md text-sm outline-none border-none h-full bg-transparent capitalize
                            <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> text-red-400 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            wire:model.defer="type" id="type">
                            <option selected>Type . . .</option>
                            <option value="wall">wall</option>
                            <option value="media">media</option>
                            <option value="hubs">hubs</option>
                        </select>
                        <button
                            class="outline-none focus:outline-none w-16 text-center h-full py-1 flex justify-center items-center">
                            <svg class=" w-6 text-center text-gray-600 h-6 cursor-pointer" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                    </form>
                </div>

                <div x-show="toggleFilter" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform scale-25"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90" style="z-index: 999999;"
                    class="flex mx-auto z-50 my-3 items-center justify-center bg-gray-50 max-w-4xl max-h-4xl shadow-md rounded-md  w-full">
                    <div class="max-h-4xl w-full z-50">
                        <div
                            class="flex flex-row justify-between items-center w-full h-10 px-4 py-2 border-b border-gray-300">
                            <div class="">
                                <p class="text-lg font-bold text-gray-900">
                                    Filter
                                </p>
                            </div>
                            <button class="focus:outline-none" @click="toggleFilter = false">
                                <p class="text-lg font-bold text-gray-900">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </p>
                            </button>
                        </div>
                        <div class="w-full h-full px-5 py-3 capitalize">
                            <form action="#" class="flex flex-col mt-3" autocomplete="off">
                                <div class="grid md:grid-cols-4 grid-cols-2 gap-y-4 gap-x-3">
                                    <div class="flex flex-col space-y-1 w-full md:col-span-1 col-span-4">
                                        <label for="rating" class="text-sm font-semibold text-gray-700">rating</label>
                                        <select name="rating" id="rating" autofocus
                                            class="px-4 py-2 bg-white transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-indigo-200">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col space-y-1 w-full md:col-span-1 col-span-4">
                                        <label for="upload_date" class="text-sm font-semibold text-gray-700">upload
                                            date</label>
                                        <select name="upload_date" id="upload_date" autofocus
                                            class="px-4 py-2 bg-white transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-indigo-200">
                                            <option value="latest">latest</option>
                                            <option value="today">today</option>
                                            <option value="etc">etc</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col space-y-1 w-full md:col-span-1 col-span-4">
                                        <label for="upload_date" class="text-sm font-semibold text-gray-700">length
                                            video</label>
                                        <select name="upload_date" id="upload_date" autofocus
                                            class="px-4 py-2 bg-white transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-indigo-200">
                                            <option value="2min">2 min</option>
                                            <option value="today">10 min</option>
                                            <option value="etc">20 +</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col space-y-1 w-full md:col-span-1 col-span-4">
                                        <label for="upload_date"
                                            class="text-sm font-semibold text-gray-700">quality</label>
                                        <select name="upload_date" id="upload_date" autofocus
                                            class="px-4 py-2 bg-white transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-indigo-200">
                                            <option value="hd">hd</option>
                                            <option value="etc">etc</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col space-y-1 w-full col-span-4">
                                        <label for="upload_date"
                                            class="text-sm font-semibold text-gray-700">language</label>
                                        <select name="upload_date" id="upload_date" autofocus
                                            class="px-4 py-2 bg-white transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-indigo-200">
                                            <option value="english">english</option>
                                            <option value="etc">etc</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End  Find -->
        <div class="mx-auto container md:px-6 px-2 py-6 mb-10 flex flex-col justify-center z-10 relative">
            <div class="my-6 md:px-2 px-3">
                <div class="w-full " wire:target="find" wire:loading.class="hidden">
                    <div class="my-4 mx-auto flex justify-center items-center flex-col">
                        <?php if($result === null || $result->count() === 0): ?>
                            
                        <?php else: ?>
                            <?php if($type == 'wall'): ?>
                                <div class="grid lg:grid-cols-4 grid-cols-1 gap-6 place-items-center">
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card-wall','data' => ['data' => $item]]); ?>
<?php $component->withName('card-wall'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php elseif($type == 'media'): ?>
                                <div class="grid lg:grid-cols-4 grid-cols-1 gap-6 place-items-center w-full">
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trending): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card-media','data' => ['data' => $trending,'is' => 2]]); ?>
<?php $component->withName('card-media'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($trending),'is' => 2]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php elseif($type == 'hubs'): ?>
                                <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="max-w-3xl w-full z-10">
                                        <?php
                                            $joiner = App\Models\Join::where('joining_id', $i->id)->count();
                                        ?>
                                        <a href="<?php echo e(route('show.hubs', $i->uid)); ?>" class="flex flex-col">
                                            <div class="bg-white border border-white shadow-lg  rounded-3xl p-4 m-4">
                                                <div class="flex-none sm:flex">
                                                    <div
                                                        class="relative h-32 w-32 flex justify-center items-center sm:mb-0 mb-3">
                                                        <img src="<?php echo e(asset('storage/storage/profile_hubs/' . $i->profile)); ?>"
                                                            alt="SamanSayyar"
                                                            class=" w-32 h-32 object-cover  rounded-2xl">
                                                        <!-- <a href="#"
                                                        class="absolute -right-2 bottom-2   -ml-3  text-white p-1 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                            class="h-4 w-4">
                                                            <path
                                                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                            </path>
                                                        </svg>
                                                    </a> -->
                                                    </div>
                                                    <div class="flex-auto sm:ml-5 justify-evenly">
                                                        <div class="flex items-center justify-between sm:mt-2">
                                                            <div class="flex items-center">
                                                                <div class="flex flex-col">
                                                                    <div
                                                                        class="w-full flex-none text-lg text-gray-800 font-bold leading-none">
                                                                        <?php echo e($i->name); ?></div>
                                                                    <div class="flex-auto text-sm text-gray-500 my-1">
                                                                        <span class="mr-3 ">
                                                                            <?php echo e($i->about); ?>

                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-row items-center">
                                                            <div class="flex">
                                                                <?php echo $__env->make('includes.avgstars', [
                                                                    'i' => $i,
                                                                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                            </div>

                                                        </div>
                                                        <div class="flex pt-2  text-sm text-gray-500">
                                                            <div class="flex-1 inline-flex items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                                                    fill="currentColor">
                                                                    <path
                                                                        d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                                                    </path>
                                                                </svg>
                                                                <p class="___class_+?380___"><?php echo e($joiner); ?>

                                                                    Audience</p>
                                                            </div>
                                                            
                                                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('join', ['user_id' => $i->user_id])->html();
} elseif ($_instance->childHasBeenRendered('l114765248-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l114765248-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l114765248-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l114765248-0');
} else {
    $response = \Livewire\Livewire::mount('join', ['user_id' => $i->user_id]);
    $html = $response->html();
    $_instance->logRenderedChild('l114765248-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
            <div class="w-full" wire:target="find" wire:loading>
                <?php if (isset($component)) { $__componentOriginal50b35e9efa5b3035ebe877cc122341d1e2fb9c9d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Loading::class, ['classSvg' => 'w-12 h-12','classText' => 'text-xl']); ?>
<?php $component->withName('loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal50b35e9efa5b3035ebe877cc122341d1e2fb9c9d)): ?>
<?php $component = $__componentOriginal50b35e9efa5b3035ebe877cc122341d1e2fb9c9d; ?>
<?php unset($__componentOriginal50b35e9efa5b3035ebe877cc122341d1e2fb9c9d); ?>
<?php endif; ?>
            </div>
        </div>
    </div>
    <div class="w-full" wire:ignore>
        <div class="lg:px-10 px-0 py-4 w-full ">
            <div class="my-4 pb-8">
                <h2 class="text-gray-600 ml-1 lg:text-xl text-lg text-center font-bold ">Cashe</h2>
            </div>
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper w-full mx-auto">
                    <?php $__currentLoopData = $wall_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trending): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card-wall','data' => ['data' => $trending,'is' => 1]]); ?>
<?php $component->withName('card-wall'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($trending),'is' => 1]); ?>
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

        <?php if($setting->show_latest_page_media == 1): ?>
            <div class="lg:px-10 px-0 py-4 w-full ">
                <div class="my-4 pb-8">
                    <h2 class="text-gray-600 ml-1 lg:text-xl text-lg text-center font-bold ">See latest Media</h2>
                </div>
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper w-full mx-auto">
                        <?php $__currentLoopData = $show_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trending): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card-media','data' => ['data' => $trending,'is' => 1]]); ?>
<?php $component->withName('card-media'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($trending),'is' => 1]); ?>
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
        <?php endif; ?>

        

    </div>
    <?php $__env->startPush('script'); ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            window.addEventListener('ErrorLength', () => {
                Swal.fire({
                    icon: 'error',
                    // position: 'top-end',
                    title: 'Empty Search Box',
                    showConfirmButton: false,
                    timer: 1300
                })
            });
            window.addEventListener('notFound', () => {
                Swal.fire({
                    icon: 'info',
                    // position: 'top-end',
                    title: 'Not Found :(',
                    showConfirmButton: false,
                    timer: 1300
                })
            });
        </script>
    <?php $__env->stopPush(); ?>
</div>
<?php /**PATH C:\laragon\www\relincs\local\resources\views/livewire/findvideo.blade.php ENDPATH**/ ?>