
<div>
    <div <?php echo e($attributes->merge(['class' => 'flex justify-center items-center m-auto h-80 w-full z-50'])); ?>>
        <div class="flex justify-center items-center space-x-1 text-xl text-gray-700">

            <svg fill='none' class="<?php echo e($classSvg); ?> animate-spin" viewBox="0 0 32 32" xmlns='http://www.w3.org/2000/svg'>
                <path clip-rule='evenodd'
                    d='M15.165 8.53a.5.5 0 01-.404.58A7 7 0 1023 16a.5.5 0 011 0 8 8 0 11-9.416-7.874.5.5 0 01.58.404z'
                    fill='currentColor' fill-rule='evenodd' />
            </svg>


            <div class="<?php echo e($classText); ?>">Loading ...</div>
        </div>
    </div>
</div>

<?php /**PATH /var/www/relincs.com/htdocs/local/resources/views/components/loading.blade.php ENDPATH**/ ?>