<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Admin Profile</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Admin Profile</h4>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5><strong>Profile</strong></h5>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='updateHeader'>
                            <div class="mb-3 row">
                                <label for="example-number-input" class="col-sm-3 col-form-label">First Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control mb-2" type="text" wire:model="firstname" placeholder="Enter first name">
                                    <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger" style="font-size: 12.5px;"><?php echo e($message); ?></span>
                                        <br>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-number-input" class="col-sm-3 col-form-label">Last Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control mb-2" type="text" wire:model="lastname" placeholder="Enter last name">
                                    <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger" style="font-size: 12.5px;"><?php echo e($message); ?></span>
                                        <br>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-number-input" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input class="form-control mb-2" type="text" wire:model="email" placeholder="Enter email">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger" style="font-size: 12.5px;"><?php echo e($message); ?></span>
                                        <br>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-number-input" class="col-sm-3 col-form-label">New Password</label>
                                <div class="col-sm-9">
                                    <input class="form-control mb-2" type="text" wire:model="new_password" placeholder="Enter new password" wire:model='new_password'>
                                    <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger" style="font-size: 12.5px;"><?php echo e($message); ?></span>
                                        <br>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-number-input" class="col-sm-3 col-form-label">Confirm Password</label>
                                <div class="col-sm-9">
                                    <input class="form-control mb-2" type="text" wire:model="confirm_password" placeholder="Enter confirm password" wire:model='confirm_password'>
                                    <?php $__errorArgs = ['confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger" style="font-size: 12.5px;"><?php echo e($message); ?></span>
                                        <br>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-number-input" class="col-sm-3 col-form-label">Avatar <small>(128x128)</small></label>
                                <div class="col-sm-9">
                                    <input class="form-control mb-2" type="file" wire:model="avatar">
                                    <?php $__errorArgs = ['avatar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger" style="font-size: 12.5px;"><?php echo e($message); ?></span>
                                        <br>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <div wire:loading="avatar" wire:target="avatar" wire:key="avatar" style="font-size: 12.5px;" class="mr-2"><i class="fa fa-spinner fa-spin mt-3 ml-2"></i> Uploading</div>

                                    <?php if($avatar): ?>
                                        <img src="<?php echo e($avatar->temporaryUrl()); ?>" class="mt-2 mb-2 rounded-circle" width="85" height="85" />
                                    <?php elseif($uploadedAvatar != ''): ?>
                                        <img src="<?php echo e($uploadedAvatar); ?>" class="mt-2 mb-2 rounded-circle" width="85" height="85" />
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="mb-3 row mt-4">
                                <div class="col-md-12" style="text-align: right;">
                                    <button class="btn btn-primary" style="width: 100px;"><?php echo loadingStateWithText('updateHeader', 'Save'); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\laragon\www\relincs\local\resources\views/livewire/admin/profile/profile-component.blade.php ENDPATH**/ ?>