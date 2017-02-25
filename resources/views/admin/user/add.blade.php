<!doctype html>
<html lang="en">
@include('admin.comment.head')
<body>
<div class="wrapper has-footer">
@include('admin.comment.header')
@include('admin.comment.aside')
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
    @include('admin.comment.footer')
</div>
@include('admin.comment.js')
</body>
</html>