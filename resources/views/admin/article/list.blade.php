<!doctype html>
<html lang="en">
@include('admin.comment.head')
<body>
<div class="wrapper has-footer">
    @include('admin.comment.header')
    @include('admin.comment.aside')

 <div class="main-container">

    <div class="content-wrap">  <!--START: Content Wrap-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">面板标题</h3>
                        <div class="tools">
                            <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                            <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-dataTable">
                            <thead>
                            <tr>
                                <th>文章序号</th>
                                <th>文章标题</th>
                                <th>作者</th>
                                <th>写作时间</th>
                                <th>文章内容</th>
                                <th>评论</th>
                                <th>浏览人数</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @foreach($list2 as $k => $v)
                                <th>{{$v ->    id}}</th>
                                <th>{{$v -> title}}</th>
                                <th>{{$v -> writer}}</th>
                                <th>{{$v -> w_date}}</th>
                                <th>{{$v -> content}}</th>
                                <th>{{$v -> comment}}</th>
                                <th>{{$v -> mun_read}}</th>
                                <th>
                                    <a href="javascript:if (confirm('是否删除?')){location.href= '/admin/article/del?Aid = {{$v->id}}'}">删除</a>
                                </th>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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