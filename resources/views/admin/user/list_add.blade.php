
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Form Validation | Big Ben Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="Prakasam Mathaiyan">
    <meta name="description" content="">

    <!--[if IE]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="/plugins/lib/modernizr.js"></script>
    <link rel="icon" href="/images/favicon.png" type="image/gif">

    <link rel="stylesheet" type="text/css" href="/plugins/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/plugins/validationEngine/validationEngine.jquery.css">

    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/style-default.css">
</head>

<body>

<div class="wrapper has-footer">

    <header class="header-top navbar fixed-top">

        <div class="top-bar">   <!-- START: Responsive Search -->
            <div class="container">
                <div class="main-search">
                    <div class="input-wrap">
                        <input class="form-control" type="text" placeholder="查询">
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

            <a class="navbar-brand" href="index.html">
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
                                        <span class="text-normal">地雷</span>
                                        <span class="time">3小时前</span>
                                        <p class="font-11 no-m-b text-overflow">发给你邮件</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user-list-wrap">
                                    <div class="profile-pic profile-icon"><i class="ti-email"></i></div>
                                    <div class="detail">
                                        <span class="text-normal">六月</span>
                                        <span class="time">Jun 03, 2015</span>
                                        <p class="font-11 no-m-b text-overflow">给你信息</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user-list-wrap">
                                    <div class="profile-pic profile-icon"><i class="ti-shopping-cart-full"></i></div>
                                    <div class="detail">
                                        <span class="text-normal">张七</span>
                                        <span class="time">5 17, 2015</span>
                                        <p class="font-11 no-m-b text-overflow">购买你的物品</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li><a href="#" class="text-center">See all</a></li>
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
                                        <span class="text-normal">Cynthianawen</span>
                                        <span class="time">2分钟前</span>
                                        <p class="font-11 no-m-b text-overflow">给你消息</p>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="user-list-wrap">
                                    <div class="profile-pic"><img src="demo/users/img-user-03.jpg" alt=""></div>
                                    <div class="detail">
                                        <span class="text-normal">梅花</span>
                                        <span class="time">一小时前</span>
                                        <p class="font-11 no-m-b text-overflow">接受了你的请求</p>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="user-list-wrap">
                                    <div class="profile-pic"><img src="demo/users/img-user-04.jpg" alt=""></div>
                                    <div class="detail">
                                        <span class="text-normal">埃里克森</span>
                                        <span class="time">昨天</span>
                                        <p class="font-11 no-m-b text-overflow">发送一个好友请求</p>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="user-list-wrap">
                                    <div class="profile-pic"><img src="demo/users/img-user-05.jpg" alt=""></div>
                                    <div class="detail">
                                        <span class="text-normal">即可</span>
                                        <span class="time">2天前</span>
                                        <p class="font-11 no-m-b text-overflow">给你发的信息</p>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li><a href="#" class="text-center">查看所有</a></li>
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
                        <li><a href="user-profile.html"><i class="sli-user"></i> 个人资料</a></li>
                        <li><a href="app-calendar.html"><i class="sli-calendar"></i> 日历</a></li>
                        <li><a href="msg-inbox.html"><i class="fa fa-envelope-o"></i> 收件箱</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="page-faq.html"><i class="sli-question"></i> 价格</a></li>
                        <li><a href="user-login.html"><i class="sli-logout"></i> 登出</a></li>
                    </ul>
                </li>

            </ul>

        </div><!-- END: Navbar-collapse -->

    </header>   <!-- END: Header -->

    <aside class="side-navigation-wrap sidebar-fixed">  <!-- START: Side Navigation -->
        <div class="sidenav-inner">

            <ul class="side-nav magic-nav">

                <li class="side-nav-header">导航栏</li>

                <li>
                    <a href="index.html"><i class="sli-dashboard"></i> <span class="nav-text">仪表盘</span></a>
                </li>

                <li>
                    <a href="msg-inbox.html">
                        <i class="sli-envelope"></i>
                        <span class="nav-text">信息</span>
                        <span class="badge bg-danger">3</span>
                    </a>
                </li>

                <li class="has-submenu">
                    <a href="#submenuOne" data-toggle="collapse" aria-expanded="false">
                        <i class="fs-grid-6"></i>
                        <span class="nav-text">文章</span>
                    </a>
                    <div class="sub-menu collapse secondary" id="submenuOne">
                        <ul>
                            <li><a href="table-basic.html">所有文章</a></li>
                            <li><a href="table-dataTable.html">写文章</a></li>
                            <li><a href="table-editable.html">分类目录</a></li>
                            <li><a href="table-editable.html">标签</a></li>
                        </ul>
                    </div>
                </li>

                <li class="has-submenu">
                    <a href="#submenuTwo" data-toggle="collapse" aria-expanded="false">
                        <i class="sli-present"></i>
                        <span class="nav-text">多媒体</span>
                    </a>
                    <div class="sub-menu collapse secondary" id="submenuTwo">
                        <ul>
                            <li><a href="ui-general.html">媒体库</a></li>
                            <li><a href="ui-buttons.html">添加</a></li>
                        </ul>
                    </div>
                </li>

                <li class="has-submenu">
                    <a href="#submenuThree" data-toggle="collapse" aria-expanded="false">
                        <i class="sli-layers"></i>
                        <span class="nav-text">页面</span>
                    </a>
                    <div class="sub-menu collapse secondary" id="submenuThree">
                        <ul>
                            <li><a href="form-basic.html">所有页面</a></li>
                            <li><a href="form-advanced.html">新建页面</a></li>
                        </ul>
                    </div>
                </li>

                <li class="has-submenu">
                    <a href="#submenuFour" data-toggle="collapse" aria-expanded="false">
                        <i class="sli-docs"></i>
                        <span class="nav-text">用户</span>
                    </a>
                    <div class="sub-menu collapse secondary" id="submenuFour">
                        <ul>
                            <li><a href="/admin/user/add">所有用户</a></li>
                            <li><a href="page-search.html">添加用户</a></li>
                            <li><a href="page-404.html">我的资料</a></li>
                        </ul>
                    </div>
                </li>

                <li class="has-submenu">
                    <a href="#submenuFive" data-toggle="collapse" aria-expanded="false">
                        <i class="sli-map"></i>
                        <span class="nav-text">评论</span>
                    </a>
                   {{-- <div class="sub-menu collapse secondary" id="submenuFive">
                        <ul>
                            <li><a href="map-google.html">Google</a></li>
                            <li><a href="map-vector.html">Vector</a></li>
                        </ul>
                    </div>--}}
                </li>

                <li class="has-submenu">
                    <a href="#submenuEleven" data-toggle="collapse" aria-expanded="false">
                        <i class="sli-briefcase"></i>
                        <span class="nav-text">插件</span>
                    </a>
                    <div class="sub-menu collapse secondary" id="submenuEleven">
                        <ul>
                            <li><a href="cmp-nestable.html">已安装插件</a></li>
                            <li><a href="cmp-activity-list.html">安装插件</a></li>
                            <li><a href="cmp-justgage.html">编辑</a></li>
                        </ul>
                    </div>
                </li>

                <li class="has-submenu">
                    <a href="#submenuSix" data-toggle="collapse" aria-expanded="false">
                        <i class="sli-pie-chart"></i>
                        <span class="nav-text">外观</span>
                    </a>
                    {{--<div class="sub-menu collapse secondary" id="submenuSix">
                        <ul>
                            <li><a href="chart-flot.html">Flot Chart</a></li>
                            <li><a href="chart-morris.html">Morris</a></li>
                            <li><a href="chart-chart-js.html">Chart JS</a></li>
                        </ul>
                    </div>--}}
                </li>

                <li class="has-submenu">
                    <a href="#submenuSeven" data-toggle="collapse" aria-expanded="false">
                        <i class="sli-user"></i>
                        <span class="nav-text">设置</span>
                    </a>
                    <div class="sub-menu collapse secondary" id="submenuSeven">
                        <ul>
                            <li><a href="user-profile.html">常规</a></li>
                            <li><a href="user-contact-list.html">撰写</a></li>
                            <li><a href="user-login.html">阅读</a></li>
                            <li><a href="user-signup.html">讨论</a></li>
                            <li><a href="user-forgotpassword.html">多媒体</a></li>
                            <li><a href="user-login-2.html">固定连接</a></li>
                        </ul>
                    </div>
                </li>










                <li class="milestone">
                    <a href="#">
                        设计
                        <small class="pull-right">12/20</small>
                        <div class="progress progress-striped active">
                            <div class="progress-bar" style="width: 60%;"></div>
                        </div>
                    </a>
                </li>

                <li class="milestone">
                    <a href="#">
                        完成人数
                        <small class="pull-right">9/9</small>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" style="width: 100%;"></div>
                        </div>
                    </a>
                </li>

                <li class="milestone">
                    <a href="#">
                        增加人数
                        <small class="pull-right">2/10</small>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-warning" style="width: 20%;"></div>
                        </div>
                    </a>
                </li>

            </ul>

        </div><!-- END: sidebar-inner -->

    </aside>    <!-- END: Side Navigation -->

    <div class="main-container">    <!-- START: Main Container -->

        <div class="page-header">
            <h1>表单确认 </h1>
            <ol class="breadcrumb">
                <li><a href="index.php">主页</a></li>
                <li><a href="index.php">表格</a></li>
                <li class="active">注册表</li>
            </ol>
        </div>

        <div class="content-wrap">  <!--START: Content Wrap-->

            <div class="row">

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">会员注册</h3>
                        </div>
                        <div class="panel-body">

                            <form action="#" role="form" id="formvalidationtooltip">
                                <div class="form-body">

                                    <div class="form-group">
                                        <label>用户名</label>
                                        <input type="text" class="form-control validate[required]" name="firstname" id="firstname" placeholder="请输入用户名" data-prompt-position="topLeft">
                                    </div>


                                    <div class="form-group">
                                        <label>邮箱</label>
                                        <input type="text" class="form-control validate[required,custom[email]]" name="email" id="email" placeholder="您常用的邮箱" data-prompt-position="topLeft">
                                    </div>



                                    <div class="form-group">
                                        <label>密码</label>
                                        <input type = "password" name = "txtPassword" id = "txtPassword" class = "form-control validate[required,minSize[6],maxSize[50]]" data-prompt-position="topLeft">
                                    </div>

                                    <div class="form-group">
                                        <label>确认密码</label>
                                        <input type = "password" name = "txtCPassword" id = "txtCPassword" class = "form-control validate[required,equals[txtPassword]]" data-prompt-position="topLeft">
                                    </div>

                                    <div class="form-group">
                                        <label>只能是字母或者是数字</label>
                                        <select name="sport" id="sport" class="form-control validate[required]" data-prompt-position="topLeft">
                                            <option value="">选择运动</option>
                                            <option value="option1">网球</option>
                                            <option value="option2">足球</option>
                                            <option value="option3">桌球</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>请输入验证码</label>
                                        <input type="text" class="form-control validate[required,custom[onlyLetterNumber]]" name="spacel" id="spacel" placeholder="只能是数字或者字母" data-prompt-position="topLeft">
                                    </div>

                                </div>

                                <div class="form-actions fluid">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-info">提交</button>
                                    </div>
                                </div>
                            </form>

                        </div>  <!-- END: Panel Body -->
                    </div>  <!-- END: Panel -->
                </div>



            </div>


        </div>  <!--END: Content Wrap-->

    </div>  <!-- END: Main Container -->

    <footer class="footer"> <!-- START: Footer -->
        &copy; 2016 <b>个人</b> 中心
    </footer>   <!-- END: Footer -->

</div>  <!-- END: wrapper -->

</body>
</html>