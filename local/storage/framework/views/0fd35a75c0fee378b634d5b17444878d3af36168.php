<div class="w-full">
    <div class="overflow-y-auto w-full absolute inset-0 bg-white transform transition duration-200 z-50" :class="comment ? 'block transition ease-out duration-200' : 'hidden opacity-0 transform scale-90' "
        x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform scale-90"
        x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-90">
        <div class="flex justify-start items-center py-2 px-4 border-b cursor-pointer" @click="comment = !comment">
            <div class="">
            <svg class=" w-8 h-8 text-gray-700" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 16l-4-4m0 0l4-4m-4 4h18">
                </path>
                </svg>
            </div>

            <div class="w-full flex justify-end items-end">
                <p class="text-gray-600"><?php echo e($video->commentAllCount()); ?> Comment</p>
            </div>
        </div>

        <div class="z-50">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('add-comment' , [
            'video' => $video,
            'col' => 0,
            'key' => $video->id,
            ])->html();
} elseif ($_instance->childHasBeenRendered('l2054203437-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2054203437-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2054203437-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2054203437-0');
} else {
    $response = \Livewire\Livewire::mount('add-comment' , [
            'video' => $video,
            'col' => 0,
            'key' => $video->id,
            ]);
    $html = $response->html();
    $_instance->logRenderedChild('l2054203437-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>

        <?php echo $__env->make('includes.recursive' , ['comments' => $video->Comments], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <!-- Start Store / Create Body Comment -->

    </div>
    <script>
        window.addEventListener('name', event => {
            window.location.reload();
        })
    </script>
</div>
<?php /**PATH C:\laragon\www\relincs\local\resources\views/livewire/all-comments.blade.php ENDPATH**/ ?>