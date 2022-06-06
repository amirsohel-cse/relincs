<div class="w-full">
    <?php $__env->startSection('title'); ?>
    Edit media
    <?php $__env->stopSection(); ?>

     <?php $__env->slot('header', null, []); ?> 

        <?php echo e(__('Edit media')); ?>


     <?php $__env->endSlot(); ?>

    <div class="w-full" wire:target="update" wire:loading.class="opacity-50">
        <form wire:submit.prevent="update">
            <div class="relative flex flex-col w-full md:px-10 px-3" <?php if($this->media->processed_persentage < 100): ?>
                    wire:poll <?php endif; ?>>
                    <div class=" flex w-full flex-col space-y-3">
                        <div class="flex justify-between items-center w-full mb-3">
                            <div class="w-5/12">
                                Cover Video :
                                
                                <img src="<?php echo e($cover ? $cover->temporaryUrl() : env('AWS_BUCKET_URL').'media/'.$this->media->uid.'/'.$this->media->thumbnail_image); ?>"
                                
                                    alt="<?php echo e($this->media->title); ?>" class="w-96 h-60 object-cover">
                            </div>
                            <div class="w-4/12">
                                    <label for="cover">Change Cover Video : 
                                        
                                        
                                    </label>
                                    <input type="file" wire:model="cover" id="cover">
                            </div>
                            <div class=" flex flex-col w-3/12">
                                <p class="text-gray-600 font-base">
                                    Processeing
                                    <span class="font-medium text-gray-600">(<?php echo e($this->media->processed_persentage); ?>)%</span>
                                </p>
        
                            </div>
                        </div>

                    </div>
                    <div class="grid md:grid-cols-2 grid-cols-1 align-content-center  gap-6 w-full">

                        <div class=" flex w-full flex-col space-y-3">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => ['for' => 'title','value' => __('title post')]]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'title','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('title post'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['id' => 'title','class' => 'block mt-2 w-full','type' => 'text','wire:model' => 'media.title','required' => true,'autocomplete' => 'current-title']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'title','class' => 'block mt-2 w-full','type' => 'text','wire:model' => 'media.title','required' => true,'autocomplete' => 'current-title']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            <?php $__errorArgs = ['media.title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-xs text-red-500 font-bold mt-1">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class=" flex w-full flex-col space-y-3">
                            <div>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => ['for' => 'visibility','value' => __('visibility')]]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'visibility','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('visibility'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                <select wire:model="media.visibility" id="visibility" autofocus
                                    class="px-4 py-2 mt-2 w-full bg-transparent transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-indigo-200">
                                    <option value="private">private</option>
                                    <option value="public">public</option>
                                    <option value="unslited">unlisted</option>
                                </select>
                            </div>
                            <?php $__errorArgs = ['media.visibility'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-xs text-red-500 font-bold mt-1">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="relative flex w-full flex-col space-y-3">
                        <div class="block mt-4 text-xs">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => ['for' => 'description','value' => __('description')]]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'description','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('description'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            <textarea
                                class="block w-full mt-2 text-sm shadow-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 border border-gray-300 focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                rows="5" id="description" placeholder="Enter some long form content for post."
                                wire:model="media.description"></textarea>
                        </div>
                        <?php $__errorArgs = ['media.description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-xs text-red-500 font-bold mt-1">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
            </div>

            <div class="relative my-3 mt-8 md:mx-10">
                <div>
                    <button
                        class="flex items-center justify-between px-4 py-2 text-xs font-medium leading-5 text-white transition-colors duration-150 bg-indigo-600 border border-transparent rounded-lg active:bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:shadow-outline-purple">
                        <span class="mx-2">Upload</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </form>
        

    </div>


    <?php $__env->startPush('scripts'); ?>
    <script>
        window.addEventListener('media_updated', () => {
                Swal.fire({
                    icon: 'success',
                    title: 'Successfull File Updated',
                    showConfirmButton: false,
                    timer: 1500
                });
            });
    </script>
    <?php $__env->stopPush(); ?>
</div>
<?php /**PATH /var/www/relincs.com/htdocs/local/resources/views/livewire/edit-media.blade.php ENDPATH**/ ?>