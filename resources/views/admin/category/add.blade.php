<!doctype html>
<html lang="en">
@include('admin.comment.head')
<body>
@include('admin.comment.header')
@include('admin.comment.aside')
<div class="wrapper has-footer">
    <div>
        <form action="">
            <h3>文章分类</h3>
            <div>
                <select name="" id="">
                    <option value="">体育</option>
                    <option value="">情感</option>
                    <option value="">小说</option>
                    <option value="">影视</option>
                    <option value="">时尚</option>
                    <option value="">网络</option>
                </select>
                <div>
                    标题: <input type="text">
                </div>
                <div>
               <textarea name="" id="" cols="30" rows="10">

               </textarea>
                </div>
                <div>
                    <button type="button">确定</button>
                </div>
            </div>
        </form>
    </div>
    @include('admin.comment.footer')
</div>
@include('admin.comment.js')
</body>
</html>