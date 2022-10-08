<div>
    <style>
        .pagination li{
            font-size: 12.5px;
            margin-right: 5px;
            border-radius: 4px;
        }
        .rotate_arrow{
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            transform: rotate(180deg);
        }
        .pagination_numbers{
            display: flex;
            justify-content: end;
        }
        .pagination_details{
            display: flex;
            justify-content: start;
        }
        @media  screen and (max-width: 720px) {
            .pagination_numbers{
                display: flex;
                justify-content: center;
            }
            .pagination_details{
                display: flex;
                justify-content: center;
            }
        }
    </style>

    <?php if($paginator->hasPages()): ?>
        <nav class="pagination-outer" aria-label="Page navigation">
            <div class="row">
                <div class="col-md-6 col-sm-12 mb-2">
                    <div class="pagination_details">
                        <div class="text-md text-gray mb-2" style="font-size: 12px;">
                            <span><?php echo __('Showing'); ?></span>
                            <span class="font-medium"><?php echo e($paginator->firstItem()); ?></span>
                            <span><?php echo __('to'); ?></span>
                            <span class="font-medium"><?php echo e($paginator->lastItem()); ?></span>
                            <span><?php echo __('of'); ?></span>
                            <span class="font-medium"><?php echo e($paginator->total()); ?></span>
                            <span><?php echo __('results'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mb-2">
                    <div class="pagination_numbers">
                        <ul class="pagination">
                            
                            <?php if($paginator->onFirstPage()): ?>
                                <li class="page-item disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
                                    <span class="page-link" aria-hidden="true"><div class="rotate_arrow">➤</div></span>
                                </li>
                            <?php else: ?>
                                <li class="page-item">
                                    <button type="button" dusk="previousPage" class="page-link" wire:click="previousPage" wire:loading.attr="disabled" rel="prev" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>"><div class="rotate_arrow">➤</div></button>
                                </li>
                            <?php endif; ?>
            
                            
                            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                <?php if(is_string($element)): ?>
                                    <li class="page-item disabled" aria-disabled="true"><span class="page-link"><?php echo e($element); ?></span></li>
                                <?php endif; ?>
            
                                
                                <?php if(is_array($element)): ?>
                                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($paginator->currentPage() > 3 && $page == 2): ?>
                                            <li class="page-item" aria-current="page"><span class="" style="border: none; margin-top: 5px;"><i class="fa fa-ellipsis-h ml-1 mr-1" style="margin-top: 10px;"></i></span></li>
                                        <?php endif; ?>
                                        <?php if($page == $paginator->currentPage()): ?>
                                            <li class="page-item active" wire:key="paginator-page-<?php echo e($page); ?>" aria-current="page"><span class="page-link"><?php echo e($page); ?></span></li>
                                        <?php elseif($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() - 1 || $page === $paginator->currentPage() - 1 || $page === $paginator->lastPage() || $page === 1): ?>
                                            <li class="page-item" wire:key="paginator-page-<?php echo e($page); ?>"><button type="button" class="page-link" wire:click="gotoPage(<?php echo e($page); ?>)"><?php echo e($page); ?></button></li>
                                        <?php endif; ?>
                                        <?php if($paginator->currentPage() < $paginator->lastPage() - 2 && $page === $paginator->lastPage() - 1): ?>
                                            <li class="page-item" aria-current="page"><span class="" style="border: none; margin-top: 5px;"><i class="fa fa-ellipsis-h ml-1 mr-1" style="margin-top: 10px;"></i></span></li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
                            
                            <?php if($paginator->hasMorePages()): ?>
                                <li class="page-item">
                                    <button type="button" dusk="nextPage" class="page-link" wire:click="nextPage" wire:loading.attr="disabled" rel="next" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">➤</button>
                                </li>
                            <?php else: ?>
                                <li class="page-item disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                                    <span class="page-link" aria-hidden="true">➤</span>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    <?php endif; ?>
</div><?php /**PATH C:\laragon\www\relincs\local\resources\views/pagination-links.blade.php ENDPATH**/ ?>