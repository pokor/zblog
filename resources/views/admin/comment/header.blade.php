
<header class="header-top navbar fixed-top">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle side-nav-toggle">
            <i class="ti-align-left"></i>
        </button>

        <a class="navbar-brand" href="/admin/user/list">
            <span>后台管理</span>
        </a>

        <ul class="nav navbar-nav-xs">  <!-- START: Responsive Top Right tool bar -->
            <li>
                <a href="javascript:;" class="collapse" data-toggle="collapse" data-target="#headerNavbarCollapse">
                    <i class="sli-user"></i>
                </a>
            </li>
            <li>
                <a href="javascript:;" class="search-toggle">
                    <i class="sli-magnifier"></i>
                </a>
            </li>

        </ul>   <!-- END: Responsive Top Right tool bar -->

    </div>

    <div class="collapse navbar-collapse" id="headerNavbarCollapse">

        <ul class="nav navbar-nav">

            <li class="hidden-xs">
                <a href="javascript:;" class="sidenav-size-toggle">
                    <i class="ti-align-left"></i>
                </a>
            </li>

            <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="sli-bell"></i>
                    <div class="new-alert active"></div>
                </a>

            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">


            <li class="user-profile dropdown">
                <a href="javascript:;" class="clearfix dropdown-toggle" data-toggle="dropdown">
                    <div class="user-name">
                        {{session('user_info')['username']}}
                        <small class="fa fa-angle-down"></small>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-animated pop-effect" role="menu">

                    <li><a href="/admin/logout">
                            <i class="sli-logout">

                            </i>退出</a>
                    </li>
                </ul>
            </li>

        </ul>

    </div><!-- END: Navbar-collapse -->

</header>   <!-- END: Header -->