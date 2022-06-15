<?php $attributes = $attributes->exceptProps(['data','is']); ?>
<?php foreach (array_filter((['data','is']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php
$user_data = App\Models\User::select('image_profile','username')->find($data->user_id);
?>

<?php switch($is):
case (1): ?>
<div class="swiper-slide w-full flex justify-center lg:px-0 px-10 py-6">
    <div
        class="text-left w-96 border border-gray-200 space-y-2 transition transform hover:shadow-lf duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
        
        <div
            class="w-full pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
            <a href="<?php echo e(route('watch.media' , ['media' => $data->uid,])); ?>" class="w-full">
                
                <img src="<?php echo e(env('AWS_BUCKET_URL').'media/'.$data->uid.'/'.$data->thumbnail_image); ?>" alt="post"
                    alt="post" class="object-cover  w-96 h-60 rounded shadow-md">
            </a>
            <a href="<?php echo e(route('watch.media' , ['media' => $data->uid,])); ?>"
                class="flex pb-3 pl-1 mt-2 justify-center items-center flex-row">
                <div class="flex justify-start space-x-3 items-center">
                    <img src="<?php echo e($user_data->profile()); ?>" onerror="this.onerror=null;this.src='https://relincsca.s3.amazonaws.com/public/profile_image/62a21b9f0e60cElizabeth.png';"
                        alt="<?php echo e($data->username); ?>" class="object-cover h-9 w-9 rounded-full shadow-md">
                    <div class="flex justify-start">
                        <div class="font-pop text-gray-700 text-sm text-left font-bold">
                            <?php echo e($data->title); ?>

                        </div>
                    </div>
                </div>
            </a>
            <div class="ml-14 flex flex-col justify-start items-start pb-4">
                <div class="text-left">
                    <a class="md:text-sm text-xs text-gray-500 text-left">
                        <?php echo e($data->username); ?>

                    </a>
                </div>
                <div class="w-full">
                    <span href="#" class="md:text-sm text-xs font-base text-gray-500">
                        <?php echo e($data->views); ?> views &nbsp; &bullet; &nbsp;
                        <?php echo e($data->created_at->diffForHumans()); ?>

                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php break; ?>
<?php case (2): ?>
<div class="w-full">

    <div class="w-full flex justify-center ">
        <div
            class="text-left w-full border border-gray-200 space-y-2 transition transform hover:shadow-lg duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start rounded">
            <div
                class="w-full pb-2 rounded-md transition duration-200 bg-transparent hover:bg-gray-50 flex flex-col justify-start items-start">
                <a href="<?php echo e(route('watch.media' , ['media' => $data->uid,])); ?>" class="w-full">
                    <img src="<?php echo e(env('AWS_BUCKET_URL').'media/'.$data->uid.'/'.$data->thumbnail_image); ?>" alt="post"
                         class="object-cover  w-96 h-60 rounded shadow-md">
                </a>
                <a href="<?php echo e(route('watch.media' , ['media' => $data->uid,])); ?>"
                    class="flex pb-3 pl-1 mt-2 justify-center items-center flex-row">
                    <div class="flex justify-start space-x-3 items-center">
                      <img src="<?php echo e($user_data->profile()); ?>"
                            alt="<?php echo e($data->username); ?>" class="object-cover h-9 w-9 rounded-full shadow-md">
                        <div class="flex justify-start">
                            <div class="font-pop text-gray-700 text-sm text-left font-bold">
                                <?php echo e($data->title); ?>

                            </div>
                        </div>
                    </div>
                </a>
                <div class="ml-14 flex flex-col justify-start items-start pb-4">
                    <div class="text-left">
                        <a class="md:text-sm text-xs text-gray-500 text-left">
                            <?php echo e($data->username); ?>

                        </a>
                    </div>
                    <div class="w-full">
                        <span href="#" class="md:text-sm text-xs font-base text-gray-500">
                            <?php echo e($data->views); ?> views &nbsp; &bullet; &nbsp;
                            <?php echo e($data->created_at->diffForHumans()); ?>

                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php break; ?>
<?php default: ?>

<?php endswitch; ?><?php /**PATH E:\xampp\htdocs\relincs\local\resources\views/components/card-media.blade.php ENDPATH**/ ?>