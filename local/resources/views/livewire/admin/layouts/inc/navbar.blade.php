<div>
    <div class="topbar">            
        <!-- Navbar -->
        <nav class="navbar-custom" id="navbar-custom">    
            <ul class="list-unstyled topbar-nav float-end mb-0">
                
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <img src="{{ Auth::user()->profile() }}" alt="" class="rounded-circle me-2 thumb-sm" />
                            <div>
                                <small class="d-none d-md-block font-11">Admin</small>
                                <span class="d-none d-md-block fw-semibold font-12">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }} <i
                                        class="mdi mdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="{{ route('admin.profile') }}"><i class="ti ti-user font-16 me-1 align-text-bottom"></i> Profile</a>
                        <a style="cursor: pointer;" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ti ti-power font-16 me-1 align-text-bottom"></i> Logout</a>
                        <form id="logout-form" style="display: none;" method="POST" action="{{ route('logout') }}">
                            @csrf
                        </form>
                    </div>
                </li>  
            </ul>

            <ul class="list-unstyled topbar-nav mb-0">                        
                <li>
                    <button class="nav-link button-menu-mobile nav-icon" id="togglemenu">
                        <i class="ti ti-menu-2"></i>
                    </button>
                </li>                     
            </ul>
        </nav>
    </div>
</div>
