<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class ListAddController extends Controller
{

    public function listAddUser(Request $request)
    {
        //检测是否登录
        if (!session('user_info')) {
            return redirect('/admin/login');
        }

        $id = $request->input('uid');

        $user = DB::table("user")->where("uid", '=', $id)->first();

        $assigns = [];

        $assigns ['user'] = $user;

        return view('admin.user.add', $assigns);
    }


    public function postAddUser(Request $request)
    {
        if ($request->has('uid') && (int)$request->input('uid') > 0) {

            return $this->editUser($request);

        } else {

            return $this->createUser($request);

        }

    }

    private function editUser(Request $request)
    {
        $uid = $request->input('uid');
        $username = $request->input('reg_username');
        $password = $request->input('txtPassword');

        $updateData = [];
        $updateData['username'] = $username;
        $updateData['password'] = md5($password);

        DB::table("user")->where("uid", '=', $uid)->update($updateData);

        return redirect('admin/user/list');
    }

    private function createUser(Request $request)
    {
        $username = $request->input('reg_username');
        $password = $request->input('txtPassword');

        $time = time();
        $uip = $request->ip();

        $sql = "insert into `zblog_user` (`username`,`password`,`reg_time`, `reg_ip`) ";
        $sql .= "value (?,?,?,?)";
        //dd($sql);
        $rs = DB::insert($sql, [
            $username,
            md5($password),
            $time,
            $uip
        ]);

        if ($rs) {
            return redirect('/admin/user/list');
        } else {
            return redirect('/admin/user/add');
        }
    }

}
