<div>
    <div class="flex justify-between border-b items-center w-full"
    wire:target="addComment()" wire:loading.class="opacity-50"
        :class="comment ? '' : '' ">
        <div class="w-full border-t">
            <input type="text" wire:model="body" wire:keydown.enter="addComment()" id="comment" placeholder="Add A Comment..."
                class="w-full text-sm py-4 px-3 rounded-none  border-none">
        </div>
        <div class="w-20">
            <button  wire:click.prevent="addComment()" class="border-none text-sm px-4 bg-white py-4 text-indigo-600 focus:outline-none 
            <?php if($body): ?>
            opacity-100
                <?php else: ?>
                opacity-50
            <?php endif; ?>">Post</button>
        </div>
    </div>

    <div class="w-full m-auto">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.loading','data' => ['classText' => 'text-lg','classSvg' => 'w-6 h-6','wire:target' => 'addComment','wire:loading' => true]]); ?>
<?php $component->withName('loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['classText' => 'text-lg','classSvg' => 'w-6 h-6','wire:target' => 'addComment','wire:loading' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
</div>
<?php /**PATH /var/www/relincs.com/htdocs/local/resources/views/livewire/add-comments.blade.php ENDPATH**/ ?>