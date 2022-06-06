<div class="p-2" >
    <!-- System Comment -->
    
    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="flex justify-start flex-col space-y-3 items-start px-2 border-b border-gray-100"
            x-data="{
                 replies : false,
                 openReplay : false,
                 }">
            <div class="relative mt-1 mb-3 pt-2 flex">
                <div class="mr-2">
                    <img src="<?php echo e($comment->user->profile()); ?>" alt="saman sayyar"
                        class="w-9 h-9 rounded-full object-cover">
                </div>
                <div class="ml-2 w-full">
                    <p class="text-gray-600 md:text-sm text-xs w-full">
                        <!-- Username User -->
                        <span class="font-normal text-gray-900"><?php echo e($comment->user->username); ?> ~ </span>
                        <!-- Username User -->
                        <?php echo e($comment->body); ?>

                    </p>
                    <div class="flex space-x-4">
                        <div class="time mt-1 text-gray-400 text-xs">
                            <p><?php echo e($comment->created_at->diffForHumans()); ?></p>
                        </div>
                    </div>
                    

                    



                        
                    
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<?php /**PATH /var/www/relincs.com/htdocs/local/resources/views/includes/recursive.blade.php ENDPATH**/ ?>