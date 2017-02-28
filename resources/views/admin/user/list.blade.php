<!doctype html>
<html lang="en">
@include('admin.comment.head')
<body>
<div class="wrapper has-footer">
@include('admin.comment.aside')
@include('admin.comment.header')
    <div class="main-container">    <!-- START: Main Container -->
        <div class="page-header">
            <h1>用户管理 <small>所有用户</small></h1>
            <ol class="breadcrumb">
                <li><a href="/admin">首页</a></li>
                <li><a href="/admin/user/list">用户管理</a></li>
                <li class="active">所有用户 </li>
            </ol>
        </div>
        <div class="content-wrap">  <!--START: Content Wrap-->

            <div class="row">

                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">用户列表</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>用户编号</th>
                                    <th>用户名</th>
                                    <th>注册时间</th>
                                    <th>注册IP</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($lists as $k => $v )
                                    <tr>
                                    <td>{{  $v->uid }}</td>
                                    <td>{{  $v->username }}</td>
                                    <td>{{  date('Y-m-d H:i:s'), $v->reg_time }}</td>
                                    <td>{{  $v->reg_ip }}</td>
                                    <td>
                                        <a href="javascript:if (confirm('是否删除?')){location.href= '/admin/user/del?uid={{$v->uid}}'}">删除</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        if ("{{session('success')}}")
        {
            alert('{{session('success')}}');
        }
    </script>
@include('admin.comment.footer')
</div>
@include('admin.comment.js')
</body>
</html>