<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>个人管理</title>
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
    <link rel="stylesheet" type="text/css" href="/plugins/animate-it/animate.min.css">

    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/style-default.css">
</head>
<body class="login2">
<!-- Login Div Start Here -->
<div class="login animated flipInY" id="logindiv">
    <div class="text-center logo">
       <h3 style="color: #5bc0de">
           后台登录管理
       </h3>
    </div>
    <form role="form" class="loginForm" method="post" action="/admin/login">

            {{csrf_field()}}
            {{-- csrf跨域提交   --}}
        <div class="form-group">
            <div class="input-icon">
                <input type="text" class="form-control" name="txt_username" placeholder="用户名">
            </div>
            <span style="color: red;margin-top: 10px;display: inline-block;">
                @if(session('err'))
                    {{  session('err') }}
                @endif
            </span>
        </div>
        <div class="form-group">
            <div class="input-icon">
                <input type="password" class="form-control" name="txt_password" placeholder="密码">
            </div>
        </div>
        <div class="clearfix">
            <button type="submit" class="btn btn-primary pull-right">登录</button>
        </div>
        <div class="clearfix mt-md" style="display: none">
            如果你没有帐号点击 <a href="javascript:;" class="lnkRegister">注册!</a>
        </div>
    </form>

</div>

</body>
</html>