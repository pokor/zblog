<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>游客登录</title>
    <link href="css/visitor_Login.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/plugins/lib/jquery-2.2.4.min.js"></script>

</head>
<body>

<div class="login">
    <div class="message">游客登录</div>
    <div id="darkbannerwrap"></div>

    <form method="post" action="/user/login" role="form" id="from">
        {{csrf_field()}}
       <input name="action" value="login" type="hidden">
        <input name="username" placeholder="用户名" required="" type="text" id="username">
        <hr class="hr15">
        <input name="password" placeholder="密码" required="" type="password" id="pass">
        <hr class="hr15">
        <input value="登录" style="width:100%;" type="submit" id="btn">
        <hr class="hr20">
        <a onClick="alert('请联系版主:pokorzhang@gmail,com')">忘记密码</a>
    </form>

</div>
<script>
    $(document).ready(function () {
        $("#btn").click(function () {
            var valu = $("username").val();
            var pass = $("pass").val();
            if (valu ==''|| pass ==''){
              return  location.href='{{route('comment')}}';
            }
            $("#from").$(submit);
        })
    })
</script>
</body>
</html>