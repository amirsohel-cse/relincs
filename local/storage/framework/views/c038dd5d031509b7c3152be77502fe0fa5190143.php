<div>
    <div class="left-sidebar">
        <!-- LOGO -->
        <div class="brand">
            <a href="/admin" class="logo">
                <span>
                    <img src="<?php echo e(asset('assets/admin/images/logo-sm.png')); ?>" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="<?php echo e(asset('assets/admin/images/logo.png')); ?>" alt="logo-large" class="logo-lg logo-light">
                    <img src="<?php echo e(asset('assets/admin/images/logo-dark.png')); ?>" alt="logo-large" class="logo-lg logo-dark">
                </span>
            </a>
        </div>

        <div class="border-end text-center pt-3">
            <img src="<?php echo e(asset('assets/admin/images/users/user-4.jpg')); ?>" alt="user" class="rounded-circle thumb-md">
        </div>
        <div class="sidebar-user-pro media border-end">
            <div class="media-body ms-2 user-detail align-self-center text-center">
                <h5 class="font-14 m-0 fw-bold"><?php echo e(Auth::user()->firstname); ?> <?php echo e(Auth::user()->lastname); ?></h5>  
                <p class="opacity-50 mb-0"><?php echo e(Auth::user()->email); ?></p>   
            </div>
        </div>
        
        <div class="menu-content h-100" data-simplebar>
            <div class="menu-body navbar-vertical">
                <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                    <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>"><i class="ti ti-home menu-icon"></i><span>Dashboard</span></a>
                        </li>

                        

                        
                    </ul>
                </div>
            </div>
        </div>    
    </div>
</div><?php /**PATH C:\laragon\www\relincs\local\resources\views/livewire/admin/layouts/inc/sidebar.blade.php ENDPATH**/ ?>