
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>管理员登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="Prakasam Mathaiyan">
    <meta name="description" content="">

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
        <p>用户登录</p>
    </div>

    <form role="form" class="loginForm">

        <div class="form-group">
            <div class="input-icon">
                <input type="email" class="form-control" name="lgn_email" placeholder="email@example.com">
            </div>
        </div>

        <div class="form-group">
            <div class="input-icon">
                <input type="password" class="form-control" name="lgn_pwd" placeholder="Password">
            </div>
        </div>

        <div class="clearfix">

            <div class="checkbox pull-left">
                <div class="mk-trc" data-style="check">
                    <input id="chkRemember" type="checkbox">
                    <label for="chkRemember">记住用户登录信息</label>
                </div>
            </div>

            <a href="javascript:void(0);" class="pull-right lnkForgot">忘记密码?</a>
        </div>

        <div class="clearfix">
            <button type="submit" class="btn btn-primary pull-right">登录</button>
        </div>

        <div class="clearfix mt-md">
            如果你没有账户 <a href="http://www.blogread.com/admin/user/add" class="lnkRegister">用户注册</a> 点击这里
        </div>
    </form>

</div>
<!-- Login Div Ends Here -->

<!-- Forgot Div Start Here -->
<div class="login animated flipInY" id="forgotDiv">
    <div class="text-center logo">
        <img src="/images/logo-c.svg" alt="logo">
    </div>

    <form role="form" class="ForgotForm">

        <div class="clearfix">
            <p>请在下面输入您的电子邮件地址以重置密码.</p>
        </div>

        <div class="form-group">
            <div class="input-icon">
                <input type="email" class="form-control" name="forgot_email" placeholder="email@example.com">
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

    <form role="form" class="registerForm">

        <div class="form-group">
            <div class="input-icon">
                <input type="text" class="form-control" name="register_fulName" placeholder="">
            </div>
        </div>

        <div class="form-group">
            <div class="input-icon">
                <input type="email" class="form-control" name="register_email" placeholder="邮箱或用户名">
            </div>
        </div>

        <div class="form-group">
            <div class="input-icon">
                <input type="password" class="form-control" name="forgot_password" placeholder="密码">
            </div>
        </div>

        <div class="form-group">
            <div class="input-icon">
                <input type="password" class="form-control" name="forgot_cpassword" placeholder="Confirm Password">
            </div>
        </div>

        <div class="clearfix">
            <button type="button" class="btn btn-danger pull-left lnkLogin">返回</button>
            <button type="submit" class="btn btn-primary pull-right">注册</button>
        </div>

    </form>

</div>
<!-- Register Div End Here -->

</body>
</html>