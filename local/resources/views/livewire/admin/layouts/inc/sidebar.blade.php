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
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="ti ti-home menu-icon"></i><span>Dashboard</span></a>
                        </li>

                        {{-- <li class="nav-item">
                            <a class="nav-link" href="">
                                <i class="ti ti-box menu-icon"></i>
                                <span>Categories</span>
                            </a>
                        </li> --}}

                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#adminCourses" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="adminCourses">
                                <i class="ti ti-list menu-icon"></i>
                                <span>Courses</span>
                            </a>
                            <div class="collapse {{ request()->is('admin/courses') || request()->is('admin/courses/*')? 'show': '' }}" id="adminCourses">
                                <ul class="nav flex-column">
                                    <li class="nav-item {{ request()->is('admin/courses/all') || request()->is('admin/courses/create-new-course') || request()->is('admin/courses/curriculums/*') || request()->is('admin/courses/edit/*')? 'menuitem-active': '' }}">
                                        <a href="" class="nav-link {{ request()->is('admin/courses/all') || request()->is('admin/courses/create-new-course') || request()->is('admin/courses/curriculums/*') || request()->is('admin/courses/edit/*')? 'active': '' }}">All Courses</a>
                                    </li>
                                    <li class="nav-item {{ request()->is('admin/courses/all') || request()->is('admin/courses/create-new-course') || request()->is('admin/courses/curriculums/*') || request()->is('admin/courses/edit/*')? 'menuitem-active': '' }}">
                                        <a href="" class="nav-link {{ request()->is('admin/courses/all') || request()->is('admin/courses/create-new-course') || request()->is('admin/courses/curriculums/*') || request()->is('admin/courses/edit/*')? 'active': '' }}">All Courses</a>
                                    </li>
                                    <li class="nav-item {{ request()->is('admin/courses/all') || request()->is('admin/courses/create-new-course') || request()->is('admin/courses/curriculums/*') || request()->is('admin/courses/edit/*')? 'menuitem-active': '' }}">
                                        <a href="" class="nav-link {{ request()->is('admin/courses/all') || request()->is('admin/courses/create-new-course') || request()->is('admin/courses/curriculums/*') || request()->is('admin/courses/edit/*')? 'active': '' }}">All Courses</a>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>    
    </div>
</div>