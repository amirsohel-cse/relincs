
            <div class="w-full bg-white h-full p-1 rounded-md shadow-xl" >
                <div class="flex items-center justify-between space-x-1">
                    <div :class="{ 'bg-indigo-200': tab_follow === 'Followers' }" @click.prevent="tab_follow = 'Followers'"
                        class="w-full text-gray-900 bg-gray-100 cursor-pointer hover:bg-indigo-200 transition duration-100 px-3 rounded-md shadow-sm py-3 text-center lg:text-md text-sm">
                       Followers</div>
                    <div :class="{ 'bg-indigo-200': tab_follow === 'Following' }"  @click.prevent="tab_follow = 'Following'"
                        class="w-full text-gray-900 bg-gray-100 cursor-pointer hover:bg-indigo-200 transition duration-100 px-3 rounded-md shadow-sm py-3 text-center lg:text-md text-sm">
                      Following</div>
                </div>
                <div  x-show="tab_follow === 'Followers'">
                    <div id="journal-scroll"
                        class="mt-2 lg:text-md w-full text-sm px-1 py-1 flex flex-col space-y-2 h-96 overflow-y-scroll">
                        <?php $__empty_1 = true; $__currentLoopData = $followers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php
                            $user = App\Models\User::find($item->follow_id);
                        ?>
                            <div class="flex justify-between items-center py-1 pl-2 w-full">
                                <a href="<?php echo e(route('gu.profile.show' , ['name' => $user->id ])); ?>" class="flex justify-start items-center">
                                    <div class="w-14 rounded-full">
                                        <img class="w-full h-full object-cover rounded-full"
                                            src="<?php echo e($user->profile()); ?>"
                                            alt="pic-1">
                                    </div>
                                    <div class="flex items-center w-full ml-2 text-gray-600  lg:text-md text-sm">
                                        <?php echo e($user->username); ?></div>
                                </a>
                                <div class="flex justify-end w-full py-1 pr-2">
                                    
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('following', ['user_id' => $user->id])->html();
} elseif ($_instance->childHasBeenRendered('l4294008774-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l4294008774-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4294008774-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4294008774-0');
} else {
    $response = \Livewire\Livewire::mount('following', ['user_id' => $user->id]);
    $html = $response->html();
    $_instance->logRenderedChild('l4294008774-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="px-3 py-3 text-center text-md">
                                User Not Found :(
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div  x-show="tab_follow === 'Following'">
                    <div id="journal-scroll"
                        class="mt-2 lg:text-md text-sm px-1 py-1 flex flex-col space-y-2 h-96 overflow-y-scroll">
                        <?php $__empty_1 = true; $__currentLoopData = $following; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php
                            $user = App\Models\User::find($item->following_id);
                        ?>
                            <div class="flex justify-between items-center py-1 pl-2 w-full">
                                <a href="<?php echo e(route('gu.profile.show' , ['name' => $user->id ])); ?>" class="flex justify-start items-center">
                                    <div class="w-14 rounded-full">
                                        <img class="w-full h-full object-cover rounded-full"
                                            src="<?php echo e($user->profile()); ?>"
                                            alt="pic-1">
                                    </div>
                                    <div class="flex items-center w-full ml-2 text-gray-600  lg:text-md text-sm">
                                        <?php echo e($user->username); ?></div>
                                </a>
                                <div class="flex justify-end w-full py-1 pr-2">
                                    
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('following', ['user_id' => $user->id])->html();
} elseif ($_instance->childHasBeenRendered('l4294008774-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l4294008774-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4294008774-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4294008774-1');
} else {
    $response = \Livewire\Livewire::mount('following', ['user_id' => $user->id]);
    $html = $response->html();
    $_instance->logRenderedChild('l4294008774-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="px-3 py-3 text-center text-md">
                                User Not Found :(
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
<?php /**PATH /var/www/relincs.com/htdocs/local/resources/views/livewire/list-follow.blade.php ENDPATH**/ ?>