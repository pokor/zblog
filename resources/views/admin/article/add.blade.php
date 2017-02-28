<!doctype html>
<html lang="en">
@include('admin.comment.head')
<body>
<div class="wrapper  has-footer">
@include('admin.comment.header')
@include('admin.comment.aside')
    <div class="main-container">    <!-- START: Main Container -->

        <div class="page-header">
            <h1>Editors <small>Lightweight WYSIWYG editor</small></h1>
            <ol class="breadcrumb">
                <li><a href="admin">主页</a></li>
                <li><a href="/admin/article/list">文章</a></li>
                <li class="active">写文章</li>
            </ol>
        </div>

        <div class="content-wrap">  <!--START: Content Wrap-->

            <div class="row">

                <form action="/admin/article/add" method="post">
                    <div class="col-md-12">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <div style="margin-left: 300px"><strong style="color: #000000"> 文章标题</strong>:<input type="text" style="width: 300px ;color: black" name="txt_title" ></div>
                            </div>
                            <div class="panel-body">
                                <!-- 加载编辑器的容器 -->
                                <script id="container2" name="content" type="text/plain"></script>
                                <input type="hidden" name="text" id="txt">
                            </div>

                            <div class="panel-footer">
                                <button type="button" id="btn" class="btn btn-info">提交</button>
                                <select name="option" id="opt" style="margin-left: 80px">
                                    <option value="0">情感</option>
                                    <option value="1">随想</option>
                                    <option value="2">故事</option>
                                    <option value="3">风景</option>
                                    <option value="4">新闻</option>
                                    <option value="5">大家</option>
                                </select>
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
    var ue = UE.getEditor('container2');

    $(function () {
        $("#btn").click(function () {
            var val = ue.getContent();
            $('#txt').val(val);

        });
    });

</script>
</body>
</html>