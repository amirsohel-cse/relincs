<?php $__env->startSection('title'); ?>
    Website Setup
<?php $__env->stopSection(); ?>
<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item">Setting</li>
                            <li class="breadcrumb-item active">Website Setup</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Website Setup</h4>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Website Setup</h4>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='storeData'>
                            <h6><strong>Header</strong></h6>
                            <hr>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Logo</label>
                                <div class="col-sm-9">
                                    <input class="form-control mb-2" type="file" wire:model="logo">
                                    <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger" style="font-size: 12.5px;"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                    <div wire:loading="logo" wire:target="logo" wire:key="logo" style="font-size: 12.5px;" class="mr-2"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Uploading</div>

                                    <?php if($logo): ?>
                                        <img src="<?php echo e($logo->temporaryUrl()); ?>" width="120" class="mt-2 mb-2" />
                                    <?php elseif($uploadedLogo != ''): ?>
                                        <img src="https://relincsca.s3.amazonaws.com/public/media/<?php echo e($uploadedLogo); ?>" width="120" class="mt-2 mb-2" />
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Fav Icon</label>
                                <div class="col-sm-9">
                                    <input class="form-control mb-2" type="file" wire:model="fav_icon">
                                    <?php $__errorArgs = ['fav_icon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger" style="font-size: 12.5px;"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                    <div wire:loading="fav_icon" wire:target="fav_icon" wire:key="fav_icon" style="font-size: 12.5px;" class="mr-2"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Uploading</div>

                                    <?php if($fav_icon): ?>
                                        <img src="<?php echo e($fav_icon->temporaryUrl()); ?>" width="120" class="mt-2 mb-2" />
                                    <?php elseif($uploadedFavIcon != ''): ?>
                                        <img src="https://relincsca.s3.amazonaws.com/public/media/<?php echo e($uploadedFavIcon); ?>" width="120" class="mt-2 mb-2" />
                                    <?php endif; ?>
                                </div>
                            </div>

                            <h6><strong>Footer</strong></h6>
                            <hr>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Copyright Text</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" wire:model="copyright_text" placeholder="Enter text">
                                    <?php $__errorArgs = ['copyright_text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger" style="font-size: 12.5px;"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Instagram Url</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" wire:model="instagram_url" placeholder="Enter url">
                                    <?php $__errorArgs = ['instagram_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger" style="font-size: 12.5px;"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Facebook Url</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" wire:model="facebook_url" placeholder="Enter url">
                                    <?php $__errorArgs = ['facebook_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger" style="font-size: 12.5px;"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Youtube Url</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" wire:model="youtube_url" placeholder="Enter url">
                                    <?php $__errorArgs = ['youtube_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger" style="font-size: 12.5px;"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Twitter Url</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" wire:model="twitter_url" placeholder="Enter url">
                                    <?php $__errorArgs = ['twitter_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger" style="font-size: 12.5px;"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-sm btn-primary btnPreLoad">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\relincs\local\resources\views/livewire/admin/setting/website-setup-component.blade.php ENDPATH**/ ?>