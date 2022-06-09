<?php $attributes = $attributes->exceptProps(['data']); ?>
<?php foreach (array_filter((['data']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
$user_data = App\Models\User::select('username','image_profile')->find($data->user_id);
$likes = $data->Likes()->count();
$comments = $data->Comments()->count();
?>
<a class="flex w-3/3 h-80 justify-center items-center shadow-md cursor-pointer rounded-md object-cover"
    href="<?php echo e(route('watch.hubs.wall',$data->uid)); ?>" x-data="{ hover : false , details : false }" @click="details = true"
    @mouseover="hover = true">
    <div class="w-full h-full relative rounded-md">
        <img src="<?php echo e(env('AWS_BUCKET_URL').$data->path); ?>" alt="news" class="rounded-md w-full h-full object-cover">
            <div class="absolute inset-0 hover:bg-gray-900 hover:bg-opacity-50 transition-all duration-200">
                <div class="flex text-white flex-col h-full w-full justify-center self-center items-center space-y-2"
                    x-show="hover" @mouseover.away="hover = false">
                    <div class="flex items-center space-x-4">
                        <svg class="md:w-7 md:h-7 w-5 h-5 fill-current text-red-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                        <div class="relative">
                            <span class="text-white md:text-lg text-md font-bold"><?php echo e($likes); ?></span>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <svg class="md:w-7 md:h-7 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                            </path>
                        </svg>
                        <div class="___class_+?252___">
                            <span class="text-white md:text-lg text-md font-bold"><?php echo e($comments); ?></span>
                        </div>
                    </div>
                    <h1 class="text-lg mt-2"><?php echo e($data->title); ?></h1>
                </div>
            </div>
    </div>
    <!-- <div class="flex justify-center items-center bg-black bg-opacity-50 absolute inset-0 h-full w-full mx-auto"
                    x-show="details">
                    <div
                        class="bg-gray-50 absolute inset-0 m-auto my-6 text-gray-900 flex justify-center max-h-6xl max-w-5xl rounded-md shadow-lg py-1 px-3">
                        <div class="flex justify-between flex-row h-10 w-full">
                            <div class="___class_+?257___"></div>
                            <button class="text-3xl focus:outline-none">
                                &times;
                            </button>
                        </div>
                    </div>
                </div> -->
</a><?php /**PATH C:\laragon\www\relincs\local\resources\views/components/card-wall-hubs.blade.php ENDPATH**/ ?>