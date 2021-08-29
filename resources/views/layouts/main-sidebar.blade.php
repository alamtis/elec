<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="{{ route('voters.index') }}">
                            <div class="pull-left">
                                <i class="ti-home"></i>
                                <span class="right-nav-text">الرئيسية</span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <!-- menu item Elements-->
                    @if(auth()->user()->hasPermissionTo('admin'))
                        <li>
                            <a href="{{ route('users.index') }}">
                                <div class="pull-left">
                                    <i class="ti-user"></i>
                                    <span class="right-nav-text">قائمة المستخدمين</span>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('statistics.index') }}">
                                <div class="pull-left">
                                    <i class="ti-bar-chart"></i>
                                    <span class="right-nav-text">الإحصائيات </span>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                    @elseif(auth()->user()->hasAnyPermission(['admin', 'candidate', 'chef_bureau']))
                        <li>
                            <a href="{{ route('statistics.index') }}">
                                <div class="pull-left">
                                    <i class="ti-bar-chart"></i>
                                    <span class="right-nav-text">الإحصائيات </span>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
