
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
        <img src="/images/logo-c.svg" alt="logo">
    </div>

    <form role="form" class="loginForm" method="post" action="/admin/login">
            {{csrf_field()}}
        <div class="form-group">
            <div class="input-icon">
                <input type="email" class="form-control" name="lgn_email" placeholder="邮箱或用户名">
            </div>
        </div>

        <div class="form-group">
            <div class="input-icon">
                <input type="password" class="form-control" name="lgn_pwd" placeholder="密码">
            </div>
        </div>

        <div class="clearfix">

            <div class="checkbox pull-left">
                <div class="mk-trc" data-style="check">
                    <input id="chkRemember" type="checkbox">
                    <label for="chkRemember"> 记住密码</label>
                </div>
            </div>

            <a href="javascript:void(0);" class="pull-right lnkForgot">忘记密码?</a>
        </div>

        <div class="clearfix">
            <button type="submit" class="btn btn-primary pull-right">登录</button>
        </div>

        <div class="clearfix mt-md">
            如果你没有帐号点击 <a href="javascript:;" class="lnkRegister">注册!</a>
        </div>
    </form>

</div>
<!-- Login Div Ends Here -->

<!-- Forgot Div Start Here -->
<div class="login animated flipInY" id="forgotDiv">
    <div class="text-center logo">
        <img src="/images/logo-c.svg" alt="logo">
    </div>

    <form role="form" class="ForgotForm" method="post" action="">
            {{csrf_field()}}
        <div class="clearfix">
            <p>输入你的邮箱重新更改密码.</p>
        </div>

        <div class="form-group">
            <div class="input-icon">
                <input type="email" class="form-control" name="forgot_email" placeholder="email">
            </div>
        </div>

        <div class="clearfix">
            <button type="button" class="btn btn-danger pull-left lnkLogin">返回</button>
            <button type="submit" class="btn btn-primary pull-right">提交</button>
        </div>

    </form>


</div>
<!-- Forgot Div End Here -->

<!-- Register Div Start Here -->
<div class="login animated flipInY" id="registerDiv">
    <div class="text-center logo">
        <img src="/images/logo-c.svg" alt="logo">
    </div>

    <form role="form" class="registerForm" method="post" action="/admin/register">
        {{csrf_field()}}
        <div class="form-group">
            <div class="input-icon">
                <input type="text" class="form-control" name="register_fulName" placeholder="用户名">
            </div>
        </div>

        <div class="form-group">
            <div class="input-icon">
                <input type="email" class="form-control" name="register_email" placeholder="邮箱">
            </div>
        </div>

        <div class="form-group">
            <div class="input-icon">
                <input type="password" class="form-control" name="forgot_password" placeholder="密码">
            </div>
        </div>

        <div class="form-group">
            <div class="input-icon">
                <input type="password" class="form-control" name="forgot_cpassword" placeholder="确认密码">
            </div>
        </div>

        <div class="clearfix">
            <button type="button" class="btn btn-danger pull-left lnkLogin">返回</button>
            <button type="submit" class="btn btn-primary pull-right">注册</button>
        </div>

    </form>

</div>
<!-- Register Div End Here -->

<script type="text/javascript" src="/plugins/lib/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="/plugins/lib/jquery-ui.min.js"></script>
<script type="text/javascript" src="/plugins/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="/plugins/lib/plugins.js"></script>

<script type="text/javascript" src="/plugins/validation/jquery.validate.min.js"></script>
<script type="text/javascript" src="/plugins/validation/additional-methods.min.js"></script>

<script type="text/javascript" src="/js/page-login2.js"></script>
</body>
</html>