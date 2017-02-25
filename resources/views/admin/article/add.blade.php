<!doctype html>
<html lang="en">
@include('admin.comment.head')
<body>
<div class="wrapper  has-footer">
@include('admin.comment.header')
@include('admin.comment.aside')
    <div>
        文章标题: <input type="text">
    </div>
    <div>
        <textarea name="" id="" cols="30" rows="10">
            请输入文本
        </textarea>
    </div>
    <div>
        <button type="button">提交</button>
    </div>
@include('admin.comment.footer')
</div>
@include('admin.comment.js')
</body>
</html>