<!doctype html>
<html lang="en">
@include('admin.comment.head')
<body>
<div class="wrapper  has-footer">
@include('admin.comment.header')
@include('admin.comment.aside')
    <div class="main-container">    <!-- START: Main Container -->

        <div class="page-header">

            <ol class="breadcrumb">
                <li><a href="admin">主页</a></li>
                <li><a href="/admin/article/list">文章</a></li>
                <li class="active">写文章</li>
            </ol>
        </div>

        <div class="content-wrap">  <!--START: Content Wrap-->

            <div class="row">

                <form action="/admin/article/add" method="post" role="form" enctype="multipart/form-data">
                    <div class="col-md-8 col-md-offset-2">
                        {{csrf_field()}}
                        <input type="hidden" name="text" id="txt">
                        <div class="panel ">

                            <div class="panel-body">

                                <div style="margin-bottom: 20px;">
                                    <input type="text" class="form-control" name="txt_title"  placeholder="文章标题">
                                </div>
                                {{--上传图片--}}
                                <div style="margin-bottom: 20px;">
                                    <input type="file" name="txt_image" >
                                </div>


                                <!-- 加载编辑器的容器 -->
                                <script id="container2" name="content" type="text/plain"></script>

                                <div style="margin-top: 20px;">
                                    <button type="submit" id="btn" class="btn btn-info ">提交</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>


        </div>  <!--END: Content Wrap-->

    </div>
@include('admin.comment.footer')
</div>
@include('admin.comment.js')


<!-- 配置文件 -->
<script type="text/javascript" src="/plugins/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/plugins/ueditor/ueditor.all.js"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('container2',{
        initialFrameHeight:'450'
    });
    $(function () {
        $("#btn").click(function () {
            var val = ue.getContent();
            $('#txt').val(val);

        });
    });

</script>
</body>
</html>