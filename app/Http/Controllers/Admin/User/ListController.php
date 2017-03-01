<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    public function showList()
    {

        //检测是否登录
        if (!session('user_info')){
            return redirect('/admin/login');
        }
        //拼接sql语句
     /* $sql = "SELECT *
                FROM zblog_user 
                ORDER BY uid DESC 
        ";*/
        $rs = DB::table("zblog_user")->paginate(5);

        return view('admin.user.list',['lists'=>$rs]);
    }

    /**
     * 删除用户
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function deleteUser(Request $request)
    {
        //获得删除用户编号
       $id= $request ->input('uid');
        //组织删除语句
        $sql = "DELETE FROM `zblog_user` WHERE `uid` = ? ";
        //执行删除
       DB::delete($sql,[
            $id
       ]);

       /* if (!$re ==0){
            dd("删除成功");
        }else{
            dd("删除失败");
        }*/
        return redirect('/admin/user/list')->with('success','删除成功');
    }
}
