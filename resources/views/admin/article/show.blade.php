<!doctype html>

@include('admin.comment.head')
<body>
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

                            <tr>
                                <td width="120px;">文章编号</td>
                                <td>{{ $article->id }}</td>
                            </tr>

                            <tr>
                                <td>文章内容</td>
                                <td>{!! htmlspecialchars_decode($article->content) !!}</td>
                            </tr>


                            <tr>
                                <td>文章创建时间</td>
                                <td>{{ date('Y-m-d H:i:s',$article->w_date) }}</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.comment.footer')
</div>
@include('admin.comment.js')
</body>
</html>