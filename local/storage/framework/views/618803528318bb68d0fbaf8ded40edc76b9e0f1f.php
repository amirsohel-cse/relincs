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
        <?php if (isset($component)) { $__componentOriginal50b35e9efa5b3035ebe877cc122341d1e2fb9c9d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Loading::class, ['classText' => 'text-lg','classSvg' => 'w-6 h-6']); ?>
<?php $component->withName('loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:target' => 'addComment','wire:loading' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal50b35e9efa5b3035ebe877cc122341d1e2fb9c9d)): ?>
<?php $component = $__componentOriginal50b35e9efa5b3035ebe877cc122341d1e2fb9c9d; ?>
<?php unset($__componentOriginal50b35e9efa5b3035ebe877cc122341d1e2fb9c9d); ?>
<?php endif; ?>
    </div>
</div>
<?php /**PATH C:\laragon\www\relincs\local\resources\views/livewire/add-comments.blade.php ENDPATH**/ ?>