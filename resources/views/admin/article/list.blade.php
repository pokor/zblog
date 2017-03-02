<!doctype html>
<html lang="en">
@include('admin.comment.head')
<body>
<div class="wrapper has-footer">
    @include('admin.comment.header')
    @include('admin.comment.aside')

 <div class="main-container">
     <div class="page-header">
         <h1>文章管理</h1>
         <ol class="breadcrumb">
             <li><a href="/admin/article/list">文章</a></li>
             <li class="active">所有文章</li>
         </ol>
     </div>
    <div class="content-wrap">  <!--START: Content Wrap-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">面板标题</h3>

                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-dataTable">
                            <thead>
                            <tr>
                                <th>文章序号</th>
                                <th>文章标题</th>
                                <th>写作时间</th>
                                <th>评论</th>
                                <th>浏览人数</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @foreach($articles as $k => $v)
                                <td>{{$v->id}}</td>
                                <td>
                                    <a href="/admin/article/show?Sid={{$v->id}}">{{$v->title}}</a>
                                </td>
                                <td>{{date('Y-m-d H:i:s',$v->w_date)}}</td>

                                <td>{{$v->comment}}</td>
                                <td>{{$v->mun_read}}</td>
                                <td>
                                    <a href="#">编辑</a>
                                    <a href="javascript:if (confirm('是否删除?')){location.href= '/admin/article/del?Aid={{$v->id}}'}">删除</a>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if($articles->count()>10)
                        <div class="panel-footer">
                            {{ $articles->links() }}
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