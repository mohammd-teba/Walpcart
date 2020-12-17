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
            @can('Show All Admins')
                <li class="nav-item @if(preg_match('/admins/i',url()->current())) start active open @endif">
                    <a href="{{url(admin_admins_url())}}" class="nav-link nav-toggle">
                        <i class="fa fa-users"></i>
                        <span class="title">Admins Management</span>
                        <span class="selected"></span>
                    </a>
                </li>
            @endcan
            @can('Show All Roles')
                <li class="nav-item @if(preg_match('/roles/i',url()->current())) start active open @endif">
                    <a href="{{url(admin_roles_url())}}" class="nav-link nav-toggle">
                        <i class="fa fa-users"></i>
                        <span class="title">Roles Management</span>
                        <span class="selected"></span>
                    </a>
                </li>
            @endcan

            {{--            <li class="nav-item @if(preg_match('/users/i',url()->current())) start active open @endif">--}}
            {{--                <a href="{{url(admin_users_url())}}" class="nav-link nav-toggle">--}}
            {{--                    <i class="fa fa-users"></i>--}}
            {{--                    <span class="title">Users</span>--}}
            {{--                    <span class="selected"></span>--}}
            {{--                </a>--}}

            {{--            </li>--}}

            @can('Show All settings')
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="fa fa-globe"></i>
                        <span class="title"> Web Contents </span>
                        <span class="selected"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="">
                            <a href="{{url(admin_web_url().'/settings-edit')}}"> <i class="fa fa-cog"></i> Settings </a>
                        </li>
                        <li class="">
                            <a href="{{url(admin_web_url().'/contact-edit')}}"> <i class="fa fa-cog"></i> Contact us </a>
                        </li>

                    </ul>

                </li>
            @endcan
            @can('Show All sectors')
                <li class="nav-item @if(preg_match('/sectors/i',url()->current())) start active open @endif">
                    <a href="{{url(admin_sectors_url())}}" class="nav-link nav-toggle">
                        <i class="fa fa-caret-up"></i>
                        <span class="title">Sectors</span>
                        <span class="selected"></span>
                    </a>

                </li>
            @endcan
            @can('Show All messages')
                <li class="nav-item @if(preg_match('/managerMessages/i',url()->current())) start active open @endif">
                    <a href="{{url(admin_managerMessages_url())}}" class="nav-link nav-toggle">
                        <i class="fas fa-sticky-note"></i>
                        <span class="title">Manager Messages</span>
                        <span class="selected"></span>
                    </a>

                </li>
            @endcan
            @can('Show All teams')
                <li class="nav-item @if(preg_match('/teams/i',url()->current())) start active open @endif">
                    <a href="{{url(admin_teams_url())}}" class="nav-link nav-toggle">
                        <i class="fa fa-user-plus"></i>
                        <span class="title">Teams</span>
                        <span class="selected"></span>
                    </a>

                </li>
            @endcan

            @can('Show All projects')
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="fab fa-accusoft"></i>
                        {{--                    <i class="fa fa-caret-up"></i>--}}
                        <span class="title"> Projects </span>
                        <span class="selected"></span>
                    </a>
                    <ul class="sub-menu">
                        @can('Show All categories')
                            <li class="">
                                <a href="{{url(admin_categories_url())}}"> <i class="fa fa-caret-up"></i>
                                    Projects Categories </a>
                            </li>
                        @endcan
                        @can('Show All projects')
                            <li class="">
                                <a href="{{url(admin_projects_url())}}"> <i class="fas fa-layer-group"></i>
                                    Projects </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @elsecan('Show All categories')
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="fab fa-accusoft"></i>
                        {{--                    <i class="fa fa-caret-up"></i>--}}
                        <span class="title"> Projects </span>
                        <span class="selected"></span>
                    </a>
                    <ul class="sub-menu">
                        @can('Show All categories')
                            <li class="">
                                <a href="{{url(admin_categories_url())}}"> <i class="fa fa-caret-up"></i>
                                    Projects Categories </a>
                            </li>
                        @endcan
                        @can('Show All projects')
                            <li class="">
                                <a href="{{url(admin_projects_url())}}"> <i class="fas fa-layer-group"></i>
                                    Projects </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
