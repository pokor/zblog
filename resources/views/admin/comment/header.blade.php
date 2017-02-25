
<header class="header-top navbar fixed-top">

    <div class="top-bar">   <!-- START: Responsive Search -->
        <div class="container">
            <div class="main-search">
                <div class="input-wrap">
                    <input class="form-control" type="text" placeholder="搜索">
                    <a href="page-search.html"><i class="sli-magnifier"></i></a>
                </div>
                <span class="close-search search-toggle"><i class="ti-close"></i></span>
            </div>
        </div>
    </div>  <!-- END: Responsive Search -->

    <div class="navbar-header">
        <button type="button" class="navbar-toggle side-nav-toggle">
            <i class="ti-align-left"></i>
        </button>

        <a class="navbar-brand" href="/admin/user/list">
            <img src="/images/logo-w.svg">
            <span>个人管理</span>
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
                <ul class="dropdown-menu dropdown-lg list-group-dropdown">
                    <li class="no-link">4个新通知</li>
                    <li>
                        <a href="#">
                            <div class="user-list-wrap">
                                <div class="profile-pic profile-icon"><i class="ti-file"></i></div>
                                <div class="detail">
                                    <span class="text-normal">董先雨</span>
                                    <span class="time">3小时前</span>
                                    <p class="font-11 no-m-b text-overflow">给你发信</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="user-list-wrap">
                                <div class="profile-pic profile-icon"><i class="ti-email"></i></div>
                                <div class="detail">
                                    <span class="text-normal">马林</span>
                                    <span class="time">06 03, 2015</span>
                                    <p class="font-11 no-m-b text-overflow">发给你信息</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="user-list-wrap">
                                <div class="profile-pic profile-icon"><i class="ti-shopping-cart-full"></i></div>
                                <div class="detail">
                                    <span class="text-normal">张黎</span>
                                    <span class="time">2017-01-28</span>
                                    <p class="font-11 no-m-b text-overflow">购买你的物品</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li><a href="#" class="text-center">查看全部</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="sli-envelope"></i>
                    <span class="badge bg-danger">4</span>
                </a>
                <ul class="dropdown-menu dropdown-lg list-group-dropdown">

                    <li class="no-link font-12">你有4个新通知</li>

                    <li>
                        <a href="#">
                            <div class="user-list-wrap">
                                <div class="profile-pic"><img src="demo/users/img-user-02.jpg" alt=""></div>
                                <div class="detail">
                                    <span class="text-normal">陈画</span>
                                    <span class="time">2分钟前</span>
                                    <p class="font-11 no-m-b text-overflow">跟你说话</p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <div class="user-list-wrap">
                                <div class="profile-pic"><img src="demo/users/img-user-03.jpg" alt=""></div>
                                <div class="detail">
                                    <span class="text-normal">刘海</span>
                                    <span class="time">1小时前</span>
                                    <p class="font-11 no-m-b text-overflow">接受了你的好友请求</p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <div class="user-list-wrap">
                                <div class="profile-pic"><img src="demo/users/img-user-04.jpg" alt=""></div>
                                <div class="detail">
                                    <span class="text-normal">刘桓仁</span>
                                    <span class="time">昨天</span>
                                    <p class="font-11 no-m-b text-overflow">发送的朋友请求t</p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <div class="user-list-wrap">
                                <div class="profile-pic"><img src="demo/users/img-user-05.jpg" alt=""></div>
                                <div class="detail">
                                    <span class="text-normal">刘思福</span>
                                    <span class="time">2天前</span>
                                    <p class="font-11 no-m-b text-overflow">发信息给你</p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li><a href="#" class="text-center">查看全部</a></li>
                </ul>
            </li>

        </ul>

        <ul class="nav navbar-nav navbar-right">

            <li class="main-search hidden-xs">
                <div class="input-wrap">
                    <input class="form-control" type="text" placeholder="Search Here...">
                    <a href="page-search.html"><i class="sli-magnifier"></i></a>
                </div>
            </li>

            <li class="user-profile dropdown">
                <a href="javascript:;" class="clearfix dropdown-toggle" data-toggle="dropdown">
                    <img src="demo/users/img-user-01.jpg" alt="" class="hidden-sm">
                    <div class="user-name">刘能 <small class="fa fa-angle-down"></small></div>
                </a>
                <ul class="dropdown-menu dropdown-animated pop-effect" role="menu">
                    li><a href="user-profile.html"><i class="sli-user"></i> 我的资料</a></li>
                    <li><a href="app-calendar.html"><i class="sli-calendar"></i> 日历</a></li>
                    <li><a href="msg-inbox.html"><i class="fa fa-envelope-o"></i>  收件箱</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="page-faq.html"><i class="sli-question"></i> 价格</a></li>
                    <li><a href="user-login.html"><i class="sli-logout"></i> 退出</a></li>
                </ul>
            </li>

        </ul>

    </div><!-- END: Navbar-collapse -->

</header>   <!-- END: Header -->