<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startSection('title'); ?>
        Create Wall
    <?php $__env->stopSection(); ?>

     <?php $__env->slot('header', null, []); ?> 

        <div class="flex justify-between items-center w-full">
            <div> <?php echo e(__('Create Wall')); ?></div>
            <div class="flex justify-center items-center space-x-3">
                <a href="<?php echo e(route('dash.list.video')); ?>"
                    class="hubs:bg-indigo-800 transition duration-200 ml-3 rounded-full px-8 py-2 lg:text-md text-sm text-gray-800 bg-gray-100 hover:bg-indigo-500 hover:text-white">list Wall</a>
            </div>
        </div>
     <?php $__env->endSlot(); ?>


<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('video.create')->html();
} elseif ($_instance->childHasBeenRendered('MROSHOj')) {
    $componentId = $_instance->getRenderedChildComponentId('MROSHOj');
    $componentTag = $_instance->getRenderedChildComponentTagName('MROSHOj');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MROSHOj');
} else {
    $response = \Livewire\Livewire::mount('video.create');
    $html = $response->html();
    $_instance->logRenderedChild('MROSHOj', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php $__env->startPush('scripts'); ?>
        <script>
            window.addEventListener('video_uploaded', () => {
                Swal.fire({
                icon : 'success',
                title: 'Successfully',
                showConfirmButton: false,
                background: '#D1F1E5',
                timer: 1500
            })
            });

        </script>

    <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\relincs\local\resources\views/dashboard/create.blade.php ENDPATH**/ ?>