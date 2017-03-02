<!doctype html>
<html lang="en">
@include('admin.comment.head')
<body>
<div class="wrapper has-footer">
    @include('admin.comment.header')
    @include('admin.comment.aside')
    <div class="main-container">    <!-- START: Main Container -->

        <div class="page-header">
            <h1>用户管理</h1>
            <ol class="breadcrumb">
                <li><a href="/admin/user/list">用户</a></li>
                <li class="active">添加用户</li>
            </ol>
        </div>
        <div class="content-wrap">  <!--START: Content Wrap-->

            <div class="row">

                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">添加用户</h3>
                        </div>
                        <div class="panel-body">

                            <form action="/admin/user/add" role="form" id="formvalidationtooltip" method="post">

                                {{ csrf_field() }}
                                <input type="hidden" name="uid" value="{{ isset($user->uid)?$user->uid:'' }}">

                                <div class="form-body">
                                    <div class="form-group">
                                        <label>用户名</label>
                                        <input type="text" class="form-control " name="reg_username" id="userM"
                                               placeholder="请输入用户名" data-prompt-position="topLeft"
                                               value="{{ isset($user->username)?$user->username:'' }}"
                                        >
                                    </div>


                                    <div class="form-group">
                                        <label>密码</label>
                                        <input type="password" name="txtPassword" id="txtPassword" class="form-control "
                                               data-prompt-position="topLeft">
                                    </div>

                                </div>

                                <div class="form-actions fluid">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-info" id="btn">提交</button>
                                    </div>
                                </div>
                            </form>

                        </div>  <!-- END: Panel Body -->
                    </div>  <!-- END: Panel -->
                </div>
            </div>

        </div>  <!--END: Content Wrap-->
        <script>
            /*   $(document).ready(function () {
             $("#txtPassword").click(function () {
             var name = $("#txtPassword").val();
             $.post("/admin/user/add?do="+name,function (data){
             console.log(data);
             } )
             })

             })*/
            $(document).ready(function () {
                $("#btn").click(function (e) {
                    var valu = $("#txtPassword").val();
                    var user = $("#userM").val();
                    e.preventDefault();

                    if (user.length < 6 || user.length > 20) {
                        return alert('你的用户名不正确');
                    }
                    if (valu == '') {
                        return alert('密码不能为空');
                    }
                    if (valu.length < 6 || valu.length > 20) {
                        return alert('你输入的小于6位或者大于20位字符');
                    }
                    $("#formvalidationtooltip").submit();

                })
            })
        </script>
    </div>  <!-- END: Main Container -->
    @include('admin.comment.footer')
</div>
@include('admin.comment.js')
</body>
</html>