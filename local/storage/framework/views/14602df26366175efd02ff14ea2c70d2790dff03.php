<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="w-full">
        <?php $__env->startSection('title'); ?>
        Create new Hub
        <?php $__env->stopSection(); ?>

         <?php $__env->slot('header', null, []); ?> 
            <div class="flex justify-between items-center w-full">
                <div> <?php echo e(__('Create new Hub')); ?></div>
                <div class="flex justify-center items-center space-x-3">
                    <a href="<?php echo e(route('dash.list.wall.hubs')); ?>"
                        class="hubs:bg-indigo-800 transition duration-200 ml-3 rounded-full px-8 py-2 lg:text-md text-sm text-gray-800 bg-gray-100 hover:bg-indigo-500 hover:text-white">list Wall</a>
                    <a href="<?php echo e(route('dash.list.media.hubs')); ?>"
                        class="hubs:bg-indigo-800 transition duration-200 ml-3 rounded-full px-8 py-2 lg:text-md text-sm text-gray-800 bg-gray-100 hover:bg-indigo-500 hover:text-white">
                        list Media</a>
                    <a href="<?php echo e(route('dash.list.bulletin.hubs')); ?>"
                        class="hubs:bg-indigo-800 transition duration-200 ml-3 rounded-full px-8 py-2 lg:text-md text-sm text-gray-800 bg-gray-100 hover:bg-indigo-500 hover:text-white">
                        list Bulletin</a>
                </div>
            </div>
         <?php $__env->endSlot(); ?>

        <?php $__env->startPush('scripts'); ?>
        <script>
            window.addEventListener('success', () => {
                    Swal.fire({
                        icon: 'success',
                        title: 'done Successfully',
                        showConfirmButton: false,
                        timer: 1500
                    });
                });
        </script>
        <?php $__env->stopPush(); ?>
        <div class="grid lg lg:grid-cols-2 grid-cols-1 gap-2 w-full">
            <form class="w-full bg-gray-100" action="create-hubs" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-validation-errors','data' => ['class' => 'mb-4','errors' => $errors]]); ?>
<?php $component->withName('auth-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4','errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <div class="w-full">
                    <div class="w-full lg:mb-2 px-2">
                        <div
                            class="px-4 py-5 flex lg:flex-col flex-row space-y-3 justify-center items-center rounded-lg  text-center w-full">
                            <div class="mb-4">
                                <img id="display_image"
                                    class="lg:w-40 w-36 lg:h-40 h-36 mx-auto rounded-full object-cover object-center"
                                    alt="channel file Upload"
                                    src="https://img.icons8.com/clouds/100/000000/video-playlist.png" />
                            </div>
                            <label class="cursor-pointer lg:mt-6 lg:ml-0 ml-3">
                                <span
                                    class="mt-2 leading-normal px-4 py-2 text-gray-800 bg-gray-100 hover:bg-gray-200 transition duration-200 text-sm rounded-full">upload
                                    profile hub</span>
                                <input type="file" class="hidden" onchange="preview(event)" id="image"
                                    name="profileHubs" />
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="w-full lg:mt-2 px-2">
                        <div class="mt-2 text-sm">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => ['class' => 'text-sm','for' => 'name','value' => __('Name hub')]]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-sm','for' => 'name','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Name hub'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['id' => 'name','class' => 'block mt-1 w-full text-sm','type' => 'text','name' => 'name','value' => old('name')]]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'name','class' => 'block mt-1 w-full text-sm','type' => 'text','name' => 'name','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('name'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </div>
                    </div>
                    <div class="w-full lg:mt-2 px-2">
                        <div class="mt-2">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => ['class' => 'text-sm','for' => 'about','value' => __('About')]]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-sm','for' => 'about','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('About'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            <textarea id="about"
                                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                rows="5" name="about" value="<?php echo e(old('about')); ?>"></textarea>
                        </div>
                    </div>
                </div>
                <div class="flex justify-start items-start mt-3">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button','data' => []]); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>Submit <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </div>
            </form>
            <div class="w-full">
                <div class="w-full mx-auto sm:px-2 lg:px-0">
                    <div class="h-full sm:rounded-lg">
                        <div class="p-1 bg-white border-gray-200">
                            <?php if(count($my_hubs) !== 0): ?>
                            <div class="inline-block w-full h-full  bg-white px-2 pt-1 rounded-bl-lg rounded-br-lg ">
                                <table class="w-5/6 table-auto h-full" id="table_id">
                                    <thead class="w-full">
                                        <tr class="capitalize w-full">
                                            <th
                                                class="px-2 py-3 border-b-2 border-gray-left text-left leading-2 text-indigo-500">
                                                #</th>
                                            <th
                                                class="px-2 py-3 border-b-2 border-gray-300 text-left text-sm leading-2 text-indigo-500">
                                                profile</th>
                                            <th
                                                class="px-2 py-3 border-b-2 border-gray-300 text-left text-sm leading-2 text-indigo-500">
                                                Name</th>
                                            <th
                                                class="px-2 py-3 border-b-2 border-gray-300 text-left text-sm leading-2 text-indigo-500">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        <?php $__currentLoopData = $my_hubs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="px-2 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="flex items-center">
                                                    <div>
                                                        <div class="text-sm leading-5 text-gray-800"><?php echo e($key + 1); ?></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-2 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="text-sm leading-5 text-indigo-900 sans-normal">
                                                    <img src="<?php echo e(env('AWS_BUCKET_URL').'public/profile_hubs/' . $i->profile); ?>"
                                                        alt="<?php echo e($i->name); ?>"
                                                        class="w-16 h-16 object-cover rounded-full shadow-sm" />
                                                </div>
                                            </td>
                                            <td class="px-2 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="text-sm leading-5 text-indigo-900 sans-normal"><?php echo e($i->name); ?>

                                                </div>
                                            </td>
                                            
                                            <td
                                                class="px-2 p-8 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 flex flex-row items-center space-x-4">
                                                <a target="_blank" title="view hub"
                                                    href="<?php echo e(route('show.hubs',$i->uid)); ?>"
                                                    class="px-3 ml-4 text-sm focus:outline-none border-none hover:bg-indigo-200 bg-indigo-100  py-1 rounded-md flex justify-center items-center transition duration-200">
                                                    <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                        </path>
                                                    </svg></a>
                                                <a target="_blank" title="view hub"
                                                    href="<?php echo e(route('dash.edit.hubs',$i->uid)); ?>"
                                                    class="px-3 ml-4 text-sm focus:outline-none border-none hover:bg-yellow-200 bg-yellow-100  py-1 rounded-md flex justify-center items-center transition duration-200">
                                                    <svg class="lg:w-6 w-5 h-5 lg:h-6 text-yellow-600" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                        </path>
                                                    </svg>

                                                </a>
                                                <form action="<?php echo e(route('dash.destroy.hubs', $i->id)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button title="delete"
                                                        class="px-3 text-sm focus:outline-none border-none hover:bg-red-200 bg-red-100  py-1 rounded-md flex justify-center items-center transition duration-200">
                                                        <svg class="w-6 h-6 text-red-400" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </form>
                                                <div class="relative" x-data="{
                                                    Dropdown : false,
                                                }">
                                                    <button title="Tools this hubs" @click.prevnt="Dropdown = !Dropdown"
                                                        class="px-3 ml-4 text-sm focus:outline-none border-none hover:bg-indigo-200 bg-indigo-100  py-1 rounded-md flex justify-center items-center transition duration-200">
                                                        <svg class="lg:w-6 w-5 h-5 lg:h-6 text-indigo-600" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                    <div x-show="Dropdown"
                                                        x-transition:enter="transition ease-out duration-100"
                                                        x-transition:enter-start="opacity-0 transform scale-50"
                                                        x-transition:enter-end="opacity-100 transform scale-100"
                                                        x-transition:leave="transition ease-in duration-100"
                                                        x-transition:leave-start="opacity-100 transform scale-100"
                                                        x-transition:leave-end="opacity-0 transform scale-60"
                                                        class="absolute right-0 mt-2 bg-gray-150 rounded-md p-1 shadow-lg w-48 z-50 flex flex-col space-y-2">
                                                        <a href="<?php echo e(route('dash.create.media.hubs', ['hubs_id' => $i->id])); ?>"
                                                            class="flex justify-between items-center px-4 py-2 text-left text-sm text-white bg-indigo-400 hover:bg-indigo-600 hover:text-gray-100 transition duration-100 rounded-md">
                                                            Create Media
                                                            <svg class="w-5 h-5 text-indigo" fill="none"
                                                                stroke="currentColor" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <a href="<?php echo e(route('dash.create.wall.hubs', ['hubs_id' => $i->id])); ?>"
                                                            class="flex justify-between items-center px-4 py-2 text-left text-sm text-white bg-yellow-400 hover:bg-yellow-600 hover:text-gray-100 transition duration-100 rounded-md">
                                                            Create Wall
                                                            <svg class="w-5 h-5 text-yellow" fill="none"
                                                                stroke="currentColor" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <a href="<?php echo e(route('dash.create.bulletin.hubs' , ['hubs_id' => $i->id])); ?>"
                                                            class="flex justify-between items-center px-4 py-2 text-left text-sm text-white  bg-midsky hover:bg-sky hover:text-gray-100 transition duration-100">
                                                            Create bulletin
                                                            <svg class="w-5 h-5 text-green" fill="none"
                                                                stroke="currentColor" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <div class="my-2 mt-4">
                                    <?php echo e($my_hubs->Links()); ?>

                                </div>
                                <?php else: ?>
                                <div class="mx-auto w-full">
                                    <a href="<?php echo e(route('dash.create.hubs')); ?>"
                                        class="hubs:bg-indigo-800 transition duration-200 ml-3 rounded-full px-8 py-2 lg:text-md text-sm text-gray-800 bg-gray-100">Create
                                        a New Hub</a>
                                    <h3 class="lg:text-lg text-md text-center">Hubs Not Found :(</h3>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH /var/www/relincs.com/htdocs/local/resources/views/hubs/create.blade.php ENDPATH**/ ?>