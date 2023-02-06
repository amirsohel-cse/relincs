<div>
    <style>
        .spinner-border-sm {
            width: 13px;
            height: 13px;
            border-width: 1px;
        }
    </style>
    <div class="container-md">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="/" class="logo logo-admin">
                                            <img src="https://relincsca.s3.amazonaws.com/public/media/<?php echo e(App\Models\SettingWebsite::find(1)->logo); ?>" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Admin Login</h4>
                                    </div>
                                </div>
                                <div class="card-body pt-0 pb-4">
                                    <?php if(session()->has('errorMessage')): ?>
                                        <div class="alert alert-danger text-center mb-2 mt-2"><?php echo e(session('errorMessage')); ?></div>
                                    <?php endif; ?>
                                    <form class="my-4" wire:submit.prevent='login'>
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="username">Email/Username</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" wire:model='email'>
                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger" style="font-size: 12px;"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password" wire:model='password'>
                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger" style="font-size: 12px;"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <div class="col-sm-12">
                                                <div class="form-check form-switch form-switch-success">
                                                    <input class="form-check-input" type="checkbox" id="customSwitchSuccess">
                                                    <label class="form-check-label" for="customSwitchSuccess">Remember me</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-primary" type="submit"><?php echo loadingStateWithText('login', 'Log In'); ?></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\relincs\local\resources\views/livewire/admin/auth/login-component.blade.php ENDPATH**/ ?>