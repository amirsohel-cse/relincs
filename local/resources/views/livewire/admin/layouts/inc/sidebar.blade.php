<div>
    <div class="left-sidebar">
        <!-- LOGO -->
        <div class="brand">
            <a href="/admin" class="logo">
                <span>
                    <img src="{{ asset('assets/admin/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="{{ asset('assets/admin/images/logo.png') }}" alt="logo-large" class="logo-lg logo-light">
                    <img src="{{ asset('assets/admin/images/logo-dark.png') }}" alt="logo-large" class="logo-lg logo-dark">
                </span>
            </a>
        </div>

        <div class="border-end text-center pt-3">
            <img src="{{ asset('assets/admin/images/users/user-4.jpg') }}" alt="user" class="rounded-circle thumb-md">
        </div>
        <div class="sidebar-user-pro media border-end">
            <div class="media-body ms-2 user-detail align-self-center text-center">
                <h5 class="font-14 m-0 fw-bold">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h5>  
                <p class="opacity-50 mb-0">{{ Auth::user()->email }}</p>   
            </div>
        </div>
        
        <div class="menu-content h-100" data-simplebar>
            <div class="menu-body navbar-vertical">
                <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                    <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
                        
                        <li class="nav-item {{ request()->is('admin/dashboard') ? 'menuitem-active': '' }}">
                            <a class="nav-link {{ request()->is('admin/dashboard') ? 'active': '' }}" href="{{ route('admin.dashboard') }}"><i class="ti ti-home menu-icon"></i><span>Dashboard</span></a>
                        </li>

                        

                        <li class="nav-item">
                            <a class="nav-link" href="#allUsers" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="allUsers">
                                <i class="ti ti-users menu-icon"></i>
                                <span>Users</span>
                            </a>
                            <div class="collapse {{ request()->is('admin/user') || request()->is('admin/user/*')? 'show': '' }}" id="allUsers">
                                <ul class="nav flex-column">
                                    <li class="nav-item {{ request()->is('admin/user/all-users') || request()->is('admin/user//all-users/*') ? 'menuitem-active': '' }}">
                                        <a href="{{ route('admin.allUsers') }}" class="nav-link {{ request()->is('admin/user/all-users') || request()->is('admin/user/all-users/*') ? 'active': '' }}">All User</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item {{ request()->is('admin/walls') ? 'menuitem-active': '' }}">
                            <a class="nav-link {{ request()->is('admin/walls') ? 'active': '' }}" href="{{ route('admin.allWalls') }}"><i class="ti ti-device-tv menu-icon"></i><span>Walls</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#setting" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="setting">
                                <i class="ti ti-settings menu-icon"></i>
                                <span>Setting</span>
                            </a>
                            <div class="collapse {{ request()->is('admin/setting') || request()->is('admin/setting/*')? 'show': '' }}" id="setting">
                                <ul class="nav flex-column">
                                    <li class="nav-item {{ request()->is('admin/setting/website-setup') || request()->is('admin/setting/website-setup/*') ? 'menuitem-active': '' }}">
                                        <a href="{{ route('admin.websiteSetup') }}" class="nav-link {{ request()->is('admin/setting/website-setup') || request()->is('admin/setting/website-setup/*') ? 'active': '' }}">Website Setup</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>    
    </div>
</div>