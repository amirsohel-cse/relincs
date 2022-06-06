<?php $__env->startSection('title'); ?>
Explorer - hubs
<?php $__env->stopSection(); ?>

<div class="w-full">
    <div class="w-full">
        <div class="w-full">
            <div class="my-4 md:px-4 px-2">
                <div class="flex justify-center items-center flex-col space-y-10">
                    <?php $__currentLoopData = $hubs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="max-w-3xl w-full z-10">
                        <?php
                        $joiner = App\Models\Join::where('joining_id', $i->id)->count();
                        ?>
                        <a href="<?php echo e(route('show.hubs' , $i->uid)); ?>" class="flex flex-col">
                            <div class="bg-white border border-white shadow-lg  rounded-3xl p-4 m-4">
                                <div class="flex-none sm:flex">
                                
                                    <div class="relative h-32 w-32 flex justify-center items-center sm:mb-0 mb-3">
                                        <img src="<?php echo e(env('AWS_BUCKET_URL').'public/profile_hubs/'.$i->profile); ?>" alt="<?php echo e($i->name); ?>"
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
                                                    <div class="w-full flex-none text-lg text-gray-800 font-bold leading-none">
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
                                                <?php echo $__env->make('includes.avgstars' , [
                                                'i' => $i,
                                                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </div>
        
                                        </div>
                                        <div class="flex pt-2  text-sm text-gray-500">
                                            <div class="flex-1 inline-flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                                    </path>
                                                </svg>
                                                <p class="___class_+?380___"><?php echo e($joiner); ?> Audience</p>
                                            </div>
                                            
                                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('join', ['user_id' => $i->user_id])->html();
} elseif ($_instance->childHasBeenRendered('l2843099790-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2843099790-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2843099790-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2843099790-0');
} else {
    $response = \Livewire\Livewire::mount('join', ['user_id' => $i->user_id]);
    $html = $response->html();
    $_instance->logRenderedChild('l2843099790-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                </div>
                <?php echo e($hubs->links('vendor.pagination.simple-tailwind')); ?>

            </div>
            
        </div>
    </div>
</div>
<?php /**PATH /var/www/relincs.com/htdocs/local/resources/views/livewire/explorer/hubs.blade.php ENDPATH**/ ?>