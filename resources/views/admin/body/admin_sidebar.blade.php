<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="../assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-bs-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                 

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted">Admin Head</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <!-- <li class="menu-title">Navigation</li> -->
    
                <li>
                    <a href="#sidebarDashboards" data-bs-toggle="collapse">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Dashboards </span>
                    </a>
                  <div class="collapse" id="sidebarDashboards">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('admin.dashboard')}}">Dashboard </a>
                            </li>
                           
                        </ul>
                    </div> 
                </li>

                <!-- <li class="menu-title mt-2">Apps</li> -->
           
                <li>
                    <a href="{{ route('header.view')}}">
                        <i class="mdi mdi-domain"></i>
                        <span> Header </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('slider.view')}}">
                        <i class="mdi mdi-domain"></i>
                        <span> Slider </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('core.view')}}">
                        <i class="mdi mdi-domain"></i>
                        <span> Core Feature </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('feature.view')}}">
                        <i class="mdi mdi-domain"></i>
                        <span>Feature Details </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('galary.view')}}">
                        <i class="mdi mdi-domain"></i>
                        <span> Image Galary </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('service.view')}}">
                        <i class="mdi mdi-domain"></i>
                        <span> Service Package </span>
                    </a>
                </li>

             </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

 </div>  


 <!---- ======================== Right Side bar ==========================-------->


 

<!--- ============ Right Sidebar End ============= ------->