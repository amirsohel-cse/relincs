<div>
    <div class="flex justify-between items-start">
        <div class="flex space-x-2 items-center">
            <button type="button" class="focus:outline-none Like"
                wire:loading.class="opacity-50 transform transition ease duration-200 scale-50"
                wire:click.prevent="like" @click="like = !like"><svg
                    class="w-8 h-8 text-gray-800  <?php if($likeActive): ?> text-red-600 fill-current transition duration-200  <?php endif; ?>"
                    x-transition.scale.80  fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                    </path>
                </svg></button>


            <button type="button" class="focus:outline-none Comment" @click="comment = !comment"><svg
                    class="w-8 h-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6"
                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                    </path>
                </svg></button>
                <button type="button" id="shareButton"
                class="flex items-center text-sm text-gray-700 focus:outline-none">
                <svg class="md:w-7 md:h-7 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6"
                        d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                    </path>
                </svg>
            </button>
        </div>

        

    </div>
    <div class="w-full px-2 mt-1">
        <p class="font-bold text-sm text-gray-700"><?php echo e($likes); ?> likes</p>
    </div>

    <div class="hidden" id="modal_share" wire:ignore>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.share-button','data' => ['title' => $video->title]]); ?>
<?php $component->withName('share-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($video->title)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
    <script src="<?php echo e(asset('js/share.js')); ?>"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        window.addEventListener('unmarked', () => {
            Swal.fire({
                icon: 'info',
                position: 'top-end',
                title: 'Unmarked wall',
                showConfirmButton: false,
                timer: 1300
            });
        });

        window.addEventListener('marked', () => {
            Swal.fire({
                icon: 'success',
                position: 'top-end',
                title: 'marked wall',
                showConfirmButton: false,
                timer: 1300
            });
        });

    </script>
</div>
<?php /**PATH /var/www/relincs.com/htdocs/local/resources/views/livewire/hubswallvoting.blade.php ENDPATH**/ ?>