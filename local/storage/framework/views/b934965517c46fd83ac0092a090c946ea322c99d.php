<?php $attributes = $attributes->exceptProps(['data','user']); ?>
<?php foreach (array_filter((['data','user']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="w-full">
    <div class="bg-gray-50 p-4 pl-8 flex border-t border-gray-300">
        <a href="<?php echo e(route("gu.profile.show" , $user->id)); ?>" class="lg:w-32 lg:h-32 rounded-full shadow ring-2 ring-indigo-600 mr-2 flex-shrink">
            <img class="p-2 rounded-full object-cover w-full h-full" src="<?php echo e($user->profile()); ?>">
        </a>
        <div class="p-2 flex-grow">
            <header>
                <a href="<?php echo e(route("gu.profile.show" , $user->id)); ?>" class="text-black no-underline">
                    <span class="font-medium"><?php echo e($user->username); ?></span>
                </a>
                <div class="text-xs text-grey flex items-center my-1">
                    
                    &nbsp;
                    &nbsp;
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="h-4 w-4 mr-1 feather feather-calendar">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    <span><?php echo e($data->created_at->diffForHumans()); ?></span>
                </div>
            </header>
            
            <article class="py-4 text-gray-800 leading-normal  font-article">
                <?php echo e($data->title); ?>

            </article>
            <footer class="border-t border-grey-lighter text-sm flex">
                <button id="shareButton"
                    class="no-underline text-black flex px-4 py-2 items-center hover:bg-grey-lighter">
                    <svg class="w-7 h-7 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
                    <span class="ml-1" >share</span>
                </button>
            </footer>
        </div>
    </div>
    <div class="hidden" id="modal_share" wire:ignore>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.share-button','data' => ['title' => $data->title]]); ?>
<?php $component->withName('share-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->title)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
    <script src="<?php echo e(asset('js/share.js')); ?>"></script>
</div>
<?php /**PATH /var/www/relincs.com/htdocs/local/resources/views/components/card-bulltein.blade.php ENDPATH**/ ?>