<!doctype html>
<html lang="en">
@include('admin.comment.head')
<body>
<div class="wrapper has-footer">
    @include('admin.comment.header')
    @include('admin.comment.aside')

    <div class="main-container">
        <div class="page-header">
            <h1>评论</h1>
           {{-- <ol class="breadcrumb">
                <li><a href="/admin/article/list">文章</a></li>
                <li class="active">所有文章</li>
            </ol>--}}
        </div>
        <div class="content-wrap">  <!--START: Content Wrap-->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">所有评论</h3>

                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered table-dataTable">
                                <thead>
                                <tr>
                                    <th>编号</th>
                                    <th>评论人</th>
                                    <th>评论时间</th>
                                    <th>评论内容</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @foreach($comment as $k => $v)
                                        <td>{{$v->vid}}</td>
                                        <td>{{$v->name}}</td>
                                        <td>{{date('Y-m-d H:i:s',$v->time)}}</td>
                                        <td>{!! htmlspecialchars_decode($v->message) !!}</td>
                                        <td>
                                            <a href="#">编辑</a>
                                            <a href="javascript:if (confirm('是否删除?')){location.href= '/admin/comment/del?Mid={{$v->vid}}'}">删除</a>
                                        </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        @if($comment->total()>10)
                            <div class="panel-footer">
                                {{ $comment->links() }}
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>  <!--END: Content Wrap-->
    @include('admin.comment.footer')
</div>  <!-- END: Main Container -->
@include('admin.comment.js')
</body>
</html>