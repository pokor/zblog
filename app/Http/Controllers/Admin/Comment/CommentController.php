<?php

namespace App\Http\Controllers\Admin\Comment;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
   public function commentList()
   {
       //判定用户的权限
       if (!session('user_info')){
           return redirect('/admin/auth/login');
       }
       //声明数据库
       $message = "message";
       $comments = [];
       //连接数据库,并返回值
       $comments ['comment'] = DB::table($message)->orderby('vid','desc')->paginate(10);
       //
           // dd($comments ['comment']->total());die();
       //页面跳转
        return view('admin.comments.comment',$comments);
   }

    /**创建删除用户的方法
     * @param Request $request
     * @return mixed
     */
   public function delComment(Request $request)
   {
       //获取用户输入的值
       $id = $request->input('Mid');
       //声明数据库名称
       $db_comment = "zblog_message";
       //连接数据库
       $sql = "delete from $db_comment WHERE vid = ?";
       //连接数据库
       $re = DB::delete($sql,[
           $id
       ]);
       //dd($re);
       //判定数据返回的状态
       if ($re){
           return redirect('/admin/comment');
       }

   }
}
