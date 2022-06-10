<div class="w-full" >
    <!-- comment form -->
    <div class="border border-gray-300 rounded-md py-1 mt-4 bg-gray-50">
        <form class="w-full rounded-lg px-4 py-2" wire:submit.prevent="addComment()">
            <div class="flex flex-wrap mx-3 mb-3" wire:target="addComment" wire:loading.class="opacity-50">
                <div class="flex mx-3 justify-start items-center">
                <?php if(session()->has('success')): ?>
                    <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <p class="text-sm text-green-600 lg:text-lg px-4 pt-3 pb-2 font-medium"><?php echo e(session('success')); ?>

                    </p>
                    <?php else: ?>
                    <h2 class="px-4 -mx-3 pt-3 pb-2 text-gray-600 font-medium text-md">add new Comment</h2>
                    <?php endif; ?>
                </div>
                <div class="w-full md:w-full px-3 mb-2 mt-2">
                    <textarea rows="6"
                        class="bg-gray-100 rounded border border-gray-200 text-sm  <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400  placeholder-gray-400 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> leading-normal resize-none w-full py-2 px-3 font-medium placeholder-gray-600 focus:outline-none focus:bg-white"
                        wire:model.lazy="comment" placeholder='Type Your Comment' required></textarea>
                </div>
                <div class="w-full flex px-3">
                    <div class="flex items-start w-full text-gray-600 px-2 mr-auto">
                        <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <svg fill="none" class="w-5 h-5 text-red-500 mr-1" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-xs text-red-500 md:text-sm pt-px"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="-mr-1">
                        <button
                            class="bg-indigo-700 transition duration-200 text-gray-50 font-medium py-1 px-4 border border-indigo-500 rounded-lg tracking-wide mr-1 hover:bg-gray-800">
                            Send
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    

    <div class="antialiased w-full mt-3">
        <h3 class="mb-4 lg:text-xl text-lg font-medium text-gray-900">Comments</h3>

        <div class="space-y-4" >
            
            <?php $__currentLoopData = $com; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $user=App\Models\User::select('image_profile','username')->find($i->user_id);
            ?>
            <div class="flex">
                <div class="flex-shrink mr-3">
                    <img class="mt-2 rounded-full w-10 h-10 sm:w-12 sm:h-12"
                        src="<?php echo e(asset($user->profile())); ?>" alt="">
                </div>
                <div
                    class="flex-1 bg-gray-100 border border-gray-200 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                    <strong><?php echo e($user->username); ?></strong> <span class="text-xs text-gray-400"><?php echo e($i->created_at->diffForHumans()); ?></span>
                    <p class="text-sm my-1 mt-1">
                       <?php echo e($i->body); ?>

                    </p>
                    <div class="mt-4 flex justify-between w-full items-center">
                        <div class="text-sm text-gray-500 font-medium">
                            
                        </div>
                        <div class=""></div>
                        
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="my-2 mt-4">
            <?php echo e($com->Links()); ?>

        </div>
    </div>
</div><?php /**PATH C:\laragon\www\relincs\local\resources\views/livewire/add-comment-media.blade.php ENDPATH**/ ?>