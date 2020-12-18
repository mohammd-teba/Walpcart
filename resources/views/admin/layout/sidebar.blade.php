<div class="page-sidebar-wrapper">
    <!-- END SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false"
            data-auto-scroll="true" data-slide-speed="200">

            <li class="nav-item @if(preg_match('/home/i',url()->current())) start active open @endif">
                <a href="{{url('admin/home')}}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>
            {{--            @can('Show All Admins')--}}
            <li class="nav-item @if(preg_match('/admins/i',url()->current())) start active open @endif">
                <a href="{{url(admin_admins_url())}}" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title">Admins Management</span>
                    <span class="selected"></span>
                </a>
            </li>
            {{--            @endcan--}}

{{--            <li class="nav-item @if(preg_match('/roles/i',url()->current())) start active open @endif">--}}
{{--                <a href="{{url(admin_roles_url())}}" class="nav-link nav-toggle">--}}
{{--                    <i class="fa fa-users"></i>--}}
{{--                    <span class="title">Roles Management</span>--}}
{{--                    <span class="selected"></span>--}}
{{--                </a>--}}
{{--            </li>--}}

            <li class="nav-item @if(preg_match('/users/i',url()->current())) start active open @endif">
                <a href="{{url(admin_users_url())}}" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title">Users</span>
                    <span class="selected"></span>
                </a>

            </li>
            <li class="nav-item @if(preg_match('/services/i',url()->current())) start active open @endif">
                <a href="{{url(admin_services_url())}}" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title">Services</span>
                    <span class="selected"></span>
                </a>

            </li>
            <li class="nav-item @if(preg_match('/products/i',url()->current())) start active open @endif">
                <a href="{{url(admin_products_url())}}" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title">Products</span>
                    <span class="selected"></span>
                </a>

            </li>


        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
