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
       if (!session('user_info')){
           return redirect('/admin/auth/login');
       }
       $message = "message";
       $comments = [];
       $comments ['comment'] = DB::table($message)->orderby('vid','desc')->paginate(10);
           // dd($comments ['comment']->total());die();
        return view('admin.comments.comment',$comments);
   }
   public function delComment(Request $request)
   {
       $id = $request->input('Mid');
       $db_comment = "zblog_message";
       $sql = "delete from $db_comment WHERE vid = ?";
       $re = DB::delete($sql,[
           $id
       ]);
       //dd($re);
       if ($re){
           return redirect('/admin/comment');
       }

   }
}
