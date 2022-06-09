<div class="flex items-center">
    <?php $__env->startPush('script'); ?>

    <script>
        window.addEventListener('fresh' , () => {
             window.location.reload();
         });
    </script>
    <?php $__env->stopPush(); ?>
    
    <div>
        <?php if(session()->has('message')): ?>
        <p class="text-xl text-gray-600 md:pr-16">
            <?php echo e(session('message')); ?>

        </p>
        <?php endif; ?>

        <form wire:submit.prevent="rate()">
            <div class="block px-1 py-2 mx-auto" wire:loading.class="opacity-75 transform scale-75">
                <?php if($showSend): ?>
                <div class="flex flex-col w-full items-center p-2 bg-indigo-200 rounded-lg shadow-md">
                    <?php
                    $ratings=$avgStars->avg('rating');
                    ?>
                    <div class="flex space-x-1">
                        <label for="">
                            <input hidden type="radio" name="rating" class="hidden" value="1" />
                            <svg class="cursor-pointer block w-8 h-8 <?php if($ratings >= 1 ): ?> text-yellow-500 <?php else: ?> text-gray-500 <?php endif; ?> "
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                        </label>
                        <label>
                            <input hidden type="radio" name="rating" class="hidden" value="2" />
                            <svg class="cursor-pointer block w-8 h-8 <?php if($ratings >= 2 ): ?> text-yellow-500 <?php else: ?> text-gray-500 <?php endif; ?> "
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                        </label>
                        <label>
                            <input hidden type="radio" name="rating" class="hidden" value="3" />
                            <svg class="cursor-pointer block w-8 h-8 <?php if($ratings >= 3 ): ?> text-yellow-500 <?php else: ?> text-gray-500 <?php endif; ?> "
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                        </label>
                        <label>
                            <input hidden type="radio" name="rating" class="hidden" value="4" />
                            <svg class="cursor-pointer block w-8 h-8 <?php if($ratings >= 4 ): ?> text-yellow-500 <?php else: ?> text-gray-500 <?php endif; ?> "
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                        </label>
                        <label>
                            <input hidden type="radio" name="rating" class="hidden" value="5" />
                            <svg class="cursor-pointer block w-8 h-8 <?php if($ratings >= 5 ): ?> text-yellow-500 <?php else: ?> text-gray-500 <?php endif; ?> "
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                        </label>
                    </div>
                    <div class="mt-1 mx-auto font-medium text-sm flex items-center justify-center space-x-1">
                        <p class="text-center text-gray-700"><?php echo e(floor($avgStars->avg('rating'))); ?></p>
                        /
                        <p class="text-center flex justify-center items-center text-gray-700"><?php echo e($avgStars->count()); ?>

                            <svg class="w-4 h43 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg></p>
                    </div>
                </div>
                <?php else: ?>
                <div class="flex justify-center items-center flex-col rating">
                    <div class="flex space-x-1">
                        <label for="star1">
                            <input hidden wire:model="rating" type="radio" id="star1" name="rating" class="hidden"
                                value="1" />
                            <svg class="cursor-pointer block w-8 h-8 <?php if($rating >= 1 ): ?> text-yellow-500 <?php else: ?> text-gray-500 <?php endif; ?> "
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                        </label>
                        <label for="star2">
                            <input hidden wire:model="rating" type="radio" id="star2" name="rating" class="hidden"
                                value="2" />
                            <svg class="cursor-pointer block w-8 h-8 <?php if($rating >= 2 ): ?> text-yellow-500 <?php else: ?> text-gray-500 <?php endif; ?> "
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                        </label>
                        <label for="star3">
                            <input hidden wire:model="rating" type="radio" id="star3" name="rating" class="hidden"
                                value="3" />
                            <svg class="cursor-pointer block w-8 h-8 <?php if($rating >= 3 ): ?> text-yellow-500 <?php else: ?> text-gray-500 <?php endif; ?> "
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                        </label>
                        <label for="star4">
                            <input hidden wire:model="rating" type="radio" id="star4" name="rating" class="hidden"
                                value="4" />
                            <svg class="cursor-pointer block w-8 h-8 <?php if($rating >= 4 ): ?> text-yellow-500 <?php else: ?> text-gray-500 <?php endif; ?> "
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                        </label>
                        <label for="star5">
                            <input hidden wire:model="rating" type="radio" id="star5" name="rating" class="hidden"
                                value="5" />
                            <svg class="cursor-pointer block w-8 h-8 <?php if($rating >= 5 ): ?> text-yellow-500 <?php else: ?> text-gray-500 <?php endif; ?> "
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                        </label>
                    </div>
                    <div class="mt-1 mx-auto font-medium text-sm flex items-center justify-center space-x-1">
                        <p class="text-center text-gray-700"><?php echo e(floor($avgStars->avg('rating'))); ?></p>
                        /
                        <p class="text-center flex justify-center items-center text-gray-700"><?php echo e($avgStars->count()); ?>

                            <svg class="w-4 h43 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg></p>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="block">
                <?php if($showSend === false): ?>
                <?php if($rating >= 1 ): ?>
                <button type="submit"
                    class="px-3 py-1 font-medium text-white bg-indigo-600 text-sm rounded-lg">Rate</button>
                <?php endif; ?>
                <?php endif; ?>
                <?php if($currentId): ?>
                <button type="submit" class="w-full px-3 py-1 mt-4 font-medium text-sm text-white bg-red-400 rounded-lg"
                    wire:click.prevent="delete(<?php echo e($currentId); ?>)" class="text-sm cursor-pointer">Delete rate</button>
                <?php endif; ?>

            </div>
        </form>


    </div>

    
    
</div><?php /**PATH C:\laragon\www\relincs\local\resources\views/livewire/hubs/rating.blade.php ENDPATH**/ ?>