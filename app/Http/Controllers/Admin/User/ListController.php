<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ListController extends Controller
{
    public function showList()
    {
        //检测是否登录
        if (!session('user_info')) {
            return redirect('/admin/login');
        }
        //拼接sql语句
        $rs = DB::table("user")
            ->orderBy("uid", 'desc')
            ->paginate(10);

        return view('admin.user.list', ['lists' => $rs]);
    }

    /**
     * 删除用户
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function deleteUser(Request $request)
    {
        //获得删除用户编号
        $id = $request->input('uid');
        //组织删除语句
        $table = "zblog_user";
        $sql = "DELETE FROM `{$table}` WHERE `uid` = ? ";
        //执行删除
        $result = DB::delete($sql, [
            $id
        ]);

        Log::info("删除结果:{$result}");

        $msg = $result ? '删除成功' : '删除失败';

        return redirect('/admin/user/list')->with('success', $msg);
    }
}
