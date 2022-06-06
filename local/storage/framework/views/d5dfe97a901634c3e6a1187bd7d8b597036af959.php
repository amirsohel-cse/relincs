<div class="w-full">
    <?php $__env->startSection('title'); ?>
    Setting Hubs
    <?php $__env->stopSection(); ?>

     <?php $__env->slot('header', null, []); ?> 
        <?php echo e(__('Setting Hubs')); ?>

     <?php $__env->endSlot(); ?>
    <div class="w-full">
        <div class="my-4 w-full">
            <div>
                <h4 class="text-xl mb-2 font-medium text-indigo-700 dark:text-gray-200">
                    identity
                </h4>
                <form action="" method="POST">
                    <div class="flex items-center flex-col">
                        <div class="w-full mt-3">
                            <div class=" text-sm">
                                <span class="text-gray-700 dark:text-gray-400 capitalize">name hubs</span>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['type' => 'text','class' => 'block mt-1 w-full','id' => 'name_channel','name' => 'name_channel','value' => 'channel_music','autofocus' => true,'autocomplete' => 'current-title','required' => true]]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'text','class' => 'block mt-1 w-full','id' => 'name_channel','name' => 'name_channel','value' => 'channel_music','autofocus' => true,'autocomplete' => 'current-title','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            </div>
                        </div>
                        <div class="w-full mt-4">
                            <div class=" text-sm">
                                <span class="text-gray-700 dark:text-gray-400 capitalize">username admin</span>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['type' => 'text','class' => 'block mt-1 w-full','id' => 'usernameAdmin','name' => 'usernameAdmin','value' => 'saman sayyar','autofocus' => true,'autocomplete' => 'current-title','required' => true]]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'text','class' => 'block mt-1 w-full','id' => 'usernameAdmin','name' => 'usernameAdmin','value' => 'saman sayyar','autofocus' => true,'autocomplete' => 'current-title','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </form>

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
                        <div class="text-gray-800 text-sm dark:text-gray-100 w-full flex">
                            who should have access to this hub and its content
                        </div>
                        <div class="flex justify-center w-full">
                            <label for="checkbox" class=" inline-flex items-center cursor-pointer w-full">
                                <div class="relative">
                                    <label class="text-sm">
                                        <select
                                            class="text-sm lg:w-48 w-36 bg-gray-100 dark:text-gray-300 border-none dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option>anyone (open)</option>
                                            <option>only members (closed)</option>
                                            <option>only those</option>
                                            <option>who i invite (private)</option>
                                        </select>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </ul>
                    <ul class="flex w-full list-decimal justify-between items-center mr-2 px-2 py-2">
                        <div class="text-gray-800 text-sm dark:text-gray-100 w-full flex">
                            who should be able to see this hub
                        </div>
                        <div class="flex justify-center w-full">
                            <label for="checkbox" class=" inline-flex items-center cursor-pointer w-full">
                                <div class="relative">
                                    <label class="text-sm">
                                        <select
                                            class="text-sm lg:w-48 w-36 bg-gray-100 dark:text-gray-300 border-none dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option>anyone</option>
                                            <option>those whom i invite</option>
                                        </select>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </ul>
                    <ul class="flex w-full list-decimal justify-between items-center mr-2 px-2 py-2">
                        <div class="text-gray-800 text-sm dark:text-gray-100 w-full flex">
                            Do you want your private profile to be linked to this hub
                        </div>
                        <div class="flex justify-center w-full">
                            <label for="checkbox" class=" inline-flex items-center cursor-pointer w-full">
                                <div class="relative">
                                    <label class="text-sm">
                                        <select
                                            class="text-sm lg:w-48 w-36 bg-gray-100 dark:text-gray-300 border-none dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option>yes</option>
                                            <option>no</option>
                                        </select>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </ul>
                    <ul class="flex w-full list-decimal justify-between items-center mr-2 px-2 py-2">
                        <div class="text-gray-800 text-sm dark:text-gray-100 w-full flex">
                           who should contact you at your hub email box
                        </div>
                        <div class="flex justify-center w-full">
                            <label for="checkbox" class=" inline-flex items-center cursor-pointer w-full">
                                <div class="relative">
                                    <label class="text-sm">
                                        <select
                                            class="text-sm lg:w-48 w-36 bg-gray-100 dark:text-gray-300 border-none dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option>only member</option>
                                            <option>anyone</option>
                                        </select>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </ul>
                </div>
            </div>

            <div class="mt-3">
                <h4 class="text-xl mb-2 font-medium text-indigo-700 dark:text-gray-200">
                    audience
                </h4>


                <div action="" class="w-full flex justify-start items-center flex-col">
                    <ul class="flex w-full list-decimal justify-between items-center mr-2 px-2 py-2">
                        <div class="text-gray-800 text-sm dark:text-gray-100 w-full flex">
                            when he clicks on this optin, he gets to the audience
                        </div>
                        <div class="flex justify-center w-full">
                            <label for="checkbox" class=" inline-flex items-center cursor-pointer w-full">
                                <div class="relative">
                                    <label class="text-sm">
                                        <select
                                            class="text-sm lg:w-48 w-36 bg-gray-100 dark:text-gray-300 border-none dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <option>anyone (open)</option>
                                            <option>only members (closed)</option>
                                            <option>only those</option>
                                            <option>who i invite (private)</option>
                                        </select>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/relincs.com/htdocs/local/resources/views/livewire/setting-hub.blade.php ENDPATH**/ ?>