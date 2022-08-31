<div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    <div>
        <?php
            $site_logo = App\Models\SettingWebsite::where('id', 1)->first()->logo;
        ?>
        
        <img src="https://relincsca.s3.amazonaws.com/public/media/<?php echo e($site_logo); ?>" class="w-36" alt="relincs.com">
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <?php echo e($slot); ?>

    </div>
</div>
<?php /**PATH D:\laragon\www\relincs\local\resources\views/components/auth-card.blade.php ENDPATH**/ ?>