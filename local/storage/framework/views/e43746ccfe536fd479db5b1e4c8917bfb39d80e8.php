<div class="relative">
    <?php
        $logo = App\Models\SettingWebsite::where('id', 1)->first()->logo;
    ?>
    <a href="<?php echo e(route('home')); ?>">
        <img src="https://relincsca.s3.amazonaws.com/public/media/<?php echo e($logo); ?>" class="w-36" alt="relincs.com">
    </a>
</div>
<?php /**PATH C:\laragon\www\relincs\local\resources\views/components/application-logo.blade.php ENDPATH**/ ?>