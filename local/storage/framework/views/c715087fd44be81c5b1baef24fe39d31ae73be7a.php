<div CLASS="w-full">
    <?php $__env->startSection('title'); ?>
    Edit Profile
    <?php $__env->stopSection(); ?>

     <?php $__env->slot('header', null, []); ?> 
        <?php echo e(__('Edit Profile')); ?>

     <?php $__env->endSlot(); ?>


    <div class="w-full">
        <div class="lg:px-4 py-3 flex flex-col items-center justify-center">
            <div enctype="multipart/form-data" class="w-full">

                <div class="mb-2" wire:target="editProfile" wire:loading.class="opacity-50 transition-all duration-200">
                    <div class="lg:px-2 w-full">
                        <div
                            class="flex lg:justify-start justify-center lg:flex-row flex-col w-full items-center bg-gray-100 p-2 ">
                            <div class="flex lg:flex-row flex-col items-center space-x-3 w-full">
                                <label for="image_profile" wire:target="image" wire:loading.class="opacity-50"
                                    class="w-full flex flex-col lg:justify-start justify-center items-center relative px-2">
                                    <img src="
                                        <?php if($image): ?>
                                        <?php echo e($image->temporaryUrl()); ?>

                                            <?php else: ?>
                                            <?php echo e(Auth()->user()->profile()); ?>

                                        <?php endif; ?>
                                        " alt="<?php echo e($user->username); ?>"
                                        class="w-32 h-32 object-cover rounded-full lg:block flex justify-center items-center shadow-md cursor-pointer">
                                    <div class="hidden">
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['type' => 'file','id' => 'image_profile','wire:model' => 'image','class' => 'w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-indigo-400 focus:outline-none focus:shadow-outline-indigo dark:text-gray-300 dark:focus:shadow-outline-gray form-x-input']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'file','id' => 'image_profile','wire:model' => 'image','class' => 'w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-indigo-400 focus:outline-none focus:shadow-outline-indigo dark:text-gray-300 dark:focus:shadow-outline-gray form-x-input']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </div>

                                    <div title="chenge"
                                        class="flex justify-center items-center cursor-pointer  inset-0 bg-indigo-600 px-2 mt-2 py-2 rounded-full ">

                                        <svg class="w-4 h-4 text-white mr-1" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13">
                                            </path>
                                        </svg>
                                        <small class="text-white "> Change Photo</small>
                                    </div>
                                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <ul class="list-disc list-inside text-xs text-red-600">
                                        <li class=""><?php echo e($message); ?></li>
                                    </ul>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <div wire:target="image" wire:loading>
                                        <div class="text-gray-800 text-sm">Loading...</div>
                                    </div>
                                </label>
                                <div class="flex lg:mx-3 flex-col lg:justify-start justify-center mt-3 px-1 w-full">
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => ['for' => 'username','value' => __('username')]]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'username','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('username'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['id' => 'username','class' => 'w-full','type' => 'text','wire:model' => 'username','required' => true,'autocomplete' => 'off']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'username','class' => 'w-full','type' => 'text','wire:model' => 'username','required' => true,'autocomplete' => 'off']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <ul class="list-disc list-inside w-full text-xs text-red-600">
                                        <li class=""><?php echo e($message); ?></li>
                                    </ul>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 md:mt-3">
                            <div class="flex justify-center items-center">
                                <div class="w-full flex justify-center items-center">
                                    <div
                                        class="flex w-full flex-row border-b-2 md:border-none border-indigo-200 lg:my-5">
                                        <div
                                            class="grid lg:grid-cols-3 grid-cols-1 lg:gap-y-4 lg:gap-x-4 gap-y-4 gap-x-0  lg:place-content-center place-items-center w-full">
                                            <div
                                                class="flex w-full flex-col space-y-2 text-black items-center justify-center capitalize  md:text-md text-sm lg:col-span-1 col-span-3">
                                                <label class="w-full text-sm">
                                                    <p class="mr-2 w-full">firstName</p>
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['id' => 'name','class' => 'block w-full','type' => 'text','wire:model' => 'firstname','required' => true,'autocomplete' => 'current-title']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'name','class' => 'block w-full','type' => 'text','wire:model' => 'firstname','required' => true,'autocomplete' => 'current-title']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                </label>
                                                <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <ul class="list-disc list-inside w-full text-xs text-red-600">
                                                    <li class=""><?php echo e($message); ?></li>
                                                </ul>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div
                                                class="flex w-full flex-col mb-2 space-y-2 text-black items-center justify-center capitalize  md:text-md text-sm lg:col-span-1 col-span-3">

                                                <label class="w-full text-sm ">
                                                    <p class="mr-2 w-full">lastName</p>
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['id' => 'name','class' => 'block w-full ','type' => 'text','wire:model' => 'lastname','value' => 'amir tataloo','required' => true,'autocomplete' => 'current-title']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'name','class' => 'block w-full ','type' => 'text','wire:model' => 'lastname','value' => 'amir tataloo','required' => true,'autocomplete' => 'current-title']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                </label>
                                                <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <ul class="list-disc list-inside w-full text-xs text-red-600">
                                                    <li class=""><?php echo e($message); ?></li>
                                                </ul>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div
                                                class="flex w-full flex-col  text-black items-center justify-center capitalize  md:text-md text-sm lg:col-span-1 col-span-3">
                                                <label class="w-full text-sm">
                                                    <p class="mr-2 w-full">country</p>
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['id' => 'country','class' => 'block w-full','type' => 'text','wire:model' => 'country','value' => 'amir tataloo','required' => true,'autocomplete' => 'current-title']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'country','class' => 'block w-full','type' => 'text','wire:model' => 'country','value' => 'amir tataloo','required' => true,'autocomplete' => 'current-title']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                </label>
                                                <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <ul class="list-disc list-inside w-full text-xs text-red-600">
                                                    <li class=""><?php echo e($message); ?></li>
                                                </ul>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div
                                                class="flex w-full flex-col space-y-2 text-black items-center justify-center capitalize  md:text-md text-sm lg:col-span-1 col-span-3">

                                                <label class="w-full text-sm">
                                                    <p class="mr-2 w-full">City</p>
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['id' => 'occupation','class' => 'block w-full','type' => 'text','wire:model' => 'city','required' => true,'autocomplete' => 'current-title']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'occupation','class' => 'block w-full','type' => 'text','wire:model' => 'city','required' => true,'autocomplete' => 'current-title']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                </label>
                                                <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <ul class="list-disc list-inside w-full text-xs text-red-600">
                                                    <li class=""><?php echo e($message); ?></li>
                                                </ul>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div
                                                class="flex w-full flex-col space-y-2 text-black items-center justify-center capitalize  md:text-md text-sm lg:col-span-1 col-span-3">
                                                <label class="w-full text-sm">
                                                    <p class="mr-2 w-full">
                                                        Email Address
                                                    </p>
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['id' => 'onlineinterest','class' => 'block w-full','type' => 'text','wire:model' => 'email','required' => true,'autocomplete' => 'current-title']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'onlineinterest','class' => 'block w-full','type' => 'text','wire:model' => 'email','required' => true,'autocomplete' => 'current-title']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                </label>
                                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <ul class="list-disc list-inside w-full text-xs text-red-600">
                                                    <li class=""><?php echo e($message); ?></li>
                                                </ul>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div
                                                class="flex w-full flex-col space-y-2 text-black items-center justify-center capitalize  md:text-md text-sm lg:col-span-1 col-span-3">
                                                <label class="w-full text-sm">
                                                    <p class="mr-2 w-full">
                                                        Date of Birth
                                                    </p>
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['id' => 'onlineinterest','class' => 'block w-full','type' => 'text','wire:model' => 'date_birth','required' => true,'autocomplete' => 'off']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'onlineinterest','class' => 'block w-full','type' => 'text','wire:model' => 'date_birth','required' => true,'autocomplete' => 'off']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                </label>
                                                <?php $__errorArgs = ['date_birth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <ul class="list-disc list-inside w-full text-xs text-red-600">
                                                    <li class=""><?php echo e($message); ?></li>
                                                </ul>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>

                                            <div class="relative w-full col-span-3">
                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => ['for' => 'gender','value' => __('gender')]]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'gender','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('gender'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                <select wire:model="gender" id="gender" autofocus
                                                    class="px-4 py-2 mt-1 w-full bg-transparent transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-indigo-200">
                                                    
                                                    <option value="male">male</option>
                                                    <option value="female">female</option>
                                                    <option value="other">other</option>
                                                </select>
                                                <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <ul class="list-disc list-inside w-full text-xs text-red-600">
                                                    <li class=""><?php echo e($message); ?></li>
                                                </ul>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>

                                            <div
                                                class="col-span-3 flex w-full flex-col space-y-2 text-black items-center  capitalize  md:text-md text-sm flex-wrap">
                                                <label class="w-full text-sm">
                                                    <p class="mr-2 w-full">About me:</p>
                                                    <textarea rows="8" id="editor" wire:model="about"
                                                        class="block editorjs w-full mt-1 text-sm shadow-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 border border-gray-300 focus:border-indigo-400 focus:outline-none focus:shadow-outline-indigo dark:focus:shadow-outline-gray"></textarea>
                                                </label>
                                            </div>
                                            <div
                                                class="flex w-full flex-col space-y-2 text-black items-center justify-center capitalize  md:text-md text-sm col-span-3">
                                                <label class="w-full text-sm">
                                                    <p class="mr-2 w-full">
                                                        link
                                                    </p>
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['class' => 'block w-full','type' => 'text','wire:model' => 'link','placeholder' => 'Link','value' => ''.e($link).'','required' => true,'autocomplete' => 'current-title']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'block w-full','type' => 'text','wire:model' => 'link','placeholder' => 'Link','value' => ''.e($link).'','required' => true,'autocomplete' => 'current-title']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                </label>
                                                <?php $__errorArgs = ['links'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <ul class="list-disc list-inside w-full text-xs text-red-600">
                                                    <li class=""><?php echo e($message); ?></li>
                                                </ul>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 w-full">
                                <button wire:click.prevent="editProfile"
                                    class="w-full text-white bg-gradient-to-r from-indigo-500 via-indigo-600 to-indigo-700 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 focus:ring-indigo-800 shadow-lg shadow-indigo-500/50 shadow-lg shadow-indigo-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">

                                    Save Profile

                                </button>

                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>

        </div>
    </div>
    <?php $__env->startPush('scripts'); ?>

    <script>
        window.addEventListener('edit_profile' , () => {
            window.location.reload();
            Swal.fire({
                icon: 'success',
                title: 'Successfully Edit Profile',
                showConfrmButton: true,
                timer: 2500
            });
        });
    </script>
    <?php $__env->stopPush(); ?>
</div>
<?php /**PATH /var/www/relincs.com/htdocs/local/resources/views/livewire/setting/profile/edit.blade.php ENDPATH**/ ?>