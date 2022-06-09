<div class="w-full">
    <?php $__env->startSection('title'); ?>
        Setting Hubs
    <?php $__env->stopSection(); ?>

     <?php $__env->slot('header', null, []); ?> 
        <?php echo e(__('Setting Hubs')); ?>

     <?php $__env->endSlot(); ?>
    <div class="w-full">
        
        <?php
            $data = App\Models\SettingHub::where('user_id', Auth::user()->id)->where('hub_id', $hub_id)->first();

            if($data != ''){
                $name_hubs = $data->name_hubs;
                $username_admin = $data->username_admin;
                $hub_access = $data->hub_access;
                $visiblity = $data->visiblity;
                $link_profile = $data->link_profile;
                $email_contact = $data->email_contact;
            }
            else{
                $name_hubs = '';
                $username_admin = '';
                $hub_access = '';
                $visiblity = '';
                $link_profile = '';
                $email_contact = '';
            }
            
        ?>
        <div class="my-4 w-full">
            
            <form method="POST" action=<?php echo e(route('dash.hubs.settingPost')); ?>>
                <?php echo csrf_field(); ?>
                <div>
                    <h4 class="text-xl mb-2 font-medium text-indigo-700 dark:text-gray-200">
                        identity
                    </h4>

                    <input type="text" name="hubb_id" style="display: none;" value="<?php echo e($hub_id); ?>">
                    
                    <div class="flex items-center flex-col">
                        <div class="w-full mt-3">
                            <div class=" text-sm">
                                <span class="text-gray-700 dark:text-gray-400 capitalize">name hubs</span>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['type' => 'text','class' => 'block mt-1 w-full','id' => 'name_channel','name' => 'name_hubs','value' => ''.e($name_hubs).'','autofocus' => true,'autocomplete' => 'current-title']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'text','class' => 'block mt-1 w-full','id' => 'name_channel','name' => 'name_hubs','value' => ''.e($name_hubs).'','autofocus' => true,'autocomplete' => 'current-title']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                <?php $__errorArgs = ['name_hubs'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-red-600"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="w-full mt-4">
                            <div class=" text-sm">
                                <span class="text-gray-700 dark:text-gray-400 capitalize">username admin</span>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['type' => 'text','class' => 'block mt-1 w-full','id' => 'usernameAdmin','name' => 'username_admin','value' => ''.e($username_admin).'','autofocus' => true,'autocomplete' => 'current-title']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'text','class' => 'block mt-1 w-full','id' => 'usernameAdmin','name' => 'username_admin','value' => ''.e($username_admin).'','autofocus' => true,'autocomplete' => 'current-title']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                <?php $__errorArgs = ['username_admin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-red-600"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>

                </div>
                <br>
                <br>
                <hr>
                <div class="mt-3 w-full">
                    <h4 class="text-xl mb-2 font-medium text-indigo-700 dark:text-gray-200">
                        Privacy
                    </h4>


                    <div action="" class="w-full flex justify-start items-center flex-col">
                        <ul class="flex w-full list-decimal justify-between items-center mr-2 px-2 py-2">
                            <div class="text-gray-800 text-sm dark:text-gray-400 w-full flex">
                                who should have access to this hub and its content
                            </div>
                            <div class="flex justify-center w-full">
                                <label for="checkbox" class=" inline-flex items-center cursor-pointer w-full">
                                    <div class="relative">
                                        <label class="text-sm">
                                            <select name='hub_access'
                                                class="text-sm lg:w-48 w-36 bg-gray-100 dark:text-gray-300 border-none dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="anyone" <?php if($hub_access == 'anyone'): ?> selected <?php endif; ?>>anyone (open)</option>
                                                <option value="only_members" <?php if($hub_access == 'only_members'): ?> selected <?php endif; ?>>only members (closed)</option>
                                                <option value="only_those" <?php if($hub_access == 'only_those'): ?> selected <?php endif; ?>>only those</option>
                                                <option value="only_invited" <?php if($hub_access == 'only_invited'): ?> selected <?php endif; ?>>who i invite (private)</option>
                                            </select>
                                            <?php $__errorArgs = ['hub_access'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-red-600"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </label>
                                    </div>
                                </label>
                            </div>
                        </ul>
                        <ul class="flex w-full list-decimal justify-between items-center mr-2 px-2 py-2">
                            <div class="text-gray-800 text-sm dark:text-gray-400 w-full flex">
                                who should be able to see this hub
                            </div>
                            <div class="flex justify-center w-full">
                                <label for="checkbox" class=" inline-flex items-center cursor-pointer w-full">
                                    <div class="relative">
                                        <label class="text-sm">
                                            <select name='visiblity'
                                                class="text-sm lg:w-48 w-36 bg-gray-100 dark:text-gray-300 border-none dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="public" <?php if($visiblity == 'anyone'): ?> selected <?php endif; ?>>anyone</option>
                                                <option value="private" <?php if($visiblity == 'invited-only'): ?> selected <?php endif; ?>>those whom i invite</option>
                                            </select>
                                            
                                            <?php $__errorArgs = ['visiblity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-red-600"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </label>
                                    </div>
                                </label>
                            </div>
                        </ul>
                        <ul class="flex w-full list-decimal justify-between items-center mr-2 px-2 py-2">
                            <div class="text-gray-800 text-sm dark:text-gray-400 w-full flex">
                                Do you want your private profile to be linked to this hub
                            </div>
                            <div class="flex justify-center w-full">
                                <label for="checkbox" class=" inline-flex items-center cursor-pointer w-full">
                                    <div class="relative">
                                        <label class="text-sm">
                                            <select name='link_profile'
                                                class="text-sm lg:w-48 w-36 bg-gray-100 dark:text-gray-300 border-none dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="yes" <?php if($link_profile == 'yes'): ?> selected <?php endif; ?>>yes</option>
                                                <option value="no" <?php if($link_profile == 'no'): ?> selected <?php endif; ?>>no</option>
                                            </select>
                                            
                                            <?php $__errorArgs = ['link_profile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-red-600"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </label>
                                    </div>
                                </label>
                            </div>
                        </ul>
                        <ul class="flex w-full list-decimal justify-between items-center mr-2 px-2 py-2">
                            <div class="text-gray-800 text-sm dark:text-gray-400 w-full flex">
                            who should contact you at your hub email box
                            </div>
                            <div class="flex justify-center w-full">
                                <label for="checkbox" class=" inline-flex items-center cursor-pointer w-full">
                                    <div class="relative">
                                        <label class="text-sm">
                                            <select name='email_contact'
                                                class="text-sm lg:w-48 w-36 bg-gray-100 dark:text-gray-300 border-none dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="member" <?php if($email_contact == 'member'): ?> selected <?php endif; ?>>only member</option>
                                                <option value="anyone" <?php if($email_contact == 'anyone'): ?> selected <?php endif; ?>>anyone</option>
                                            </select>

                                            <?php $__errorArgs = ['email_contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-red-600"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </label>
                                    </div>
                                </label>
                            </div>
                        </ul>
                    </div>
                </div>

                <div class="mt-5 w-full">
                    <button type="submit" class="inline-flex items-center justify-center mb-3 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-medium text-sm text-center text-white capitalize hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Submit</button>
                </div>
            </form>

            
        </div>
    </div>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    <?php if(Session::has('successMessage')): ?>
        Swal.fire(
            'Success!',
            'Setting updated successfully',
            'success'
        )
    <?php endif; ?>
</script>
<?php /**PATH C:\laragon\www\relincs\local\resources\views/livewire/setting-hub.blade.php ENDPATH**/ ?>