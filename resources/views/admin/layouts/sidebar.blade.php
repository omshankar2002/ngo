      <!-- ========== Left Sidebar Start ========== -->
      <div class="left-side-menu">

<div class="h-100" data-simplebar>

     <!-- User box -->
    <div class="user-box text-center">

        <img src="{{asset ('assets-admin/images/users/user-1.jpg') }}" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
            <div class="dropdown">
                <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown"  aria-expanded="false">     {{ Auth::guard('admin')->user()->name }} </a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>

        <p class="text-muted left-user-info">Admin Head</p>

     
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">

        <ul id="side-menu">

            <li class="menu-title">Navigation</li>
    
            <li>
                <a href="{{ route('admin_dashboard') }}" class="{{ request()->routeIs('admin_dashboard') ? 'active' : '' }}">
                    <i class="mdi mdi-view-dashboard-outline"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin_slider') }}" class="{{ request()->routeIs('admin_slider/*') ? 'active' : '' }}">
                    <i class="mdi mdi-view-dashboard-outline"></i>
                    <span> Hero </span>
                </a>
            </li>


    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
