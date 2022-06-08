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
                                        <img src="<?php echo e(env('AWS_BUCKET_URL').'public/profile_hubs/'.$i->profile); ?>" alt="<?php echo e($i->name); ?>" class=" w-32 h-32 object-cover  rounded-2xl">
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
} elseif ($_instance->childHasBeenRendered('l3674853566-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3674853566-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3674853566-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3674853566-0');
} else {
    $response = \Livewire\Livewire::mount('join', ['user_id' => $i->user_id]);
    $html = $response->html();
    $_instance->logRenderedChild('l3674853566-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
            </div>
            <?php if($hubs->total() > 1 && $hubs->count() < $hubs->total()): ?>
            <div wire:click.prevent="load" wire:loading.class='opacity-50'
                class="w-full mx-auto flex justify-center items-center mt-6">
                <button class="py-3 px-8 flex justify-center items-center bg-gray-200 text-gray-700 rounded-2xl lg:text-md text-sm shadow-md">
                    <svg class="w-5 h-5 mr-1 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 9l-7 7-7-7"></path></svg>
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
<?php /**PATH C:\laragon\www\relincs\local\resources\views/livewire/explorer/hubs.blade.php ENDPATH**/ ?>