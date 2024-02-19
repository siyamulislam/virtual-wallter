<div class="leftside-menu">

    <!-- LOGO -->
    <a href="{{route('dashboard')}}" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{asset('/')}}admin/assets/images/logo.png" alt="" height="16">
                    </span>
        <span class="logo-sm">
                        <img src="{{asset('/')}}admin/assets/images/logo_sm.png" alt="" height="16">
                    </span>
    </a>
    <!-- LOGO -->
    <a href="{{route('dashboard')}}" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{asset('/')}}admin/assets/images/logo-dark.png" alt="" height="16">
                    </span>
        <span class="logo-sm">
                        <img src="{{asset('/')}}admin/assets/images/logo_sm_dark.png" alt="" height="16">
                    </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>

            <li class="side-nav-item">
                <a  href="{{route('dashboard')}}" aria-expanded="false"
                   aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    @php $role = auth()->user()->role_type;
                    @endphp
                    <span>   {{ $role === 1 ? 'Admin' : ($role === 2 ? 'Editor' : 'User')}} Dashboards
                    </span>
                </a>
            </li>

{{--            admin content--}}


            @if(auth()->user()->role_type === 1)
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarCrm" aria-expanded="false" aria-controls="sidebarCrm"
                       class="side-nav-link">
                        <i class="uil uil-tachometer-fast"></i>
                        <span> Package Module</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="">Create Package </a>
                            </li>
                            <li>
                                <a href="{{route('packages.index')}}">Package</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarUser" aria-expanded="false"
                       aria-controls="sidebarEcommerce" class="side-nav-link">
                        <i class="uil-user"></i>
                        <span> User Module </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarUser">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="{{route('users.create')}}">Add User</a>
                            </li>
                            <li>
                                <a href="{{route('users.index')}}">Manage User</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarEnroll" aria-expanded="false"
                       aria-controls="sidebarEnroll" class="side-nav-link">
                        <i class="uil-briefcase"></i>
                        <span> Enroll Module </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEnroll">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="{{route('mange-enroll')}}">Manage Enroll</a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif

            {{--            user content--}}

            @if(auth()->user()->role_type === 3)
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarEnroll" aria-expanded="false"
                       aria-controls="sidebarEnroll" class="side-nav-link">
                        <i class="uil-briefcase"></i>
                        <span> Enroll Module </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEnroll">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="{{route('my-enroll')}}">My Enroll</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false"
                       aria-controls="sidebarProjects" class="side-nav-link">
                        <i class="uil-briefcase"></i>
                        <span> Contact Module <sup class="text-white px-1 rounded bg-secondary">pro</sup> </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarProjects">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="#">Add Contact</a>
                            </li>
                            <li>
                                <a href="#">Manage Contact</a>
                            </li>

                            <li>
                                <a href="#">Add Documents <sup class="text-white px-1 rounded bg-success">pro</sup> </a>
                            </li>
                            <li>
                                <a href="{{route('documents.index')}}">Manage Documents <sup class="text-white px-1 rounded bg-success">pro</sup> </a>
                            </li>
                        </ul>
                    </div>
                </li>

            @endif



        </ul>

        <!-- Help Box -->
        <div class="help-box text-white text-center">
            <a href="javascript: void(0);" class="float-end close-btn text-white">
                <i class="mdi mdi-close"></i>
            </a>
            <img src="{{asset('/')}}admin/assets/images/help-icon.svg" height="90" alt="Helper Icon Image"/>
            <h5 class="mt-3">Unlimited Access</h5>
            <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
            <a href="javascript: void(0);" class="btn btn-secondary btn-sm">Upgrade</a>
        </div>
        <!-- end Help Box -->
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>

