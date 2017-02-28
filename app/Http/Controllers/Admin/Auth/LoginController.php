<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * 显示登录表单
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLoginForm()
    {
        //检测是否登录
        if (session('user_info')){
            return redirect('/admin/user/list');
        }

        return view('admin.auth.login');
    }


    /**
     * 接收登录表单数据
     * @param Request $request
     */
    public function postLogin(Request $request)
    {
        //得到用户名
        $username = $request->input('txt_username');
        //得到密码
        $password = $request->input('txt_password');

        // 拼接select sql
        $sql = "SELECT * 
                FROM zblog_user 
                WHERE username = ? AND  password = ?";
        //执行查询
        $rs = DB::select($sql,[
            $username,
            md5($password)
        ]);
        //判断查询结果
        if (empty($rs)){
            return redirect('/admin/login')->with('err','用户或密码错误');
        }

        //组织用户数据
        $userInfo = [
            'uid'       => $rs[0]->uid,
            'username'  => $rs[0]->username,
            'ip'        => $rs[0]->reg_ip,
        ];
        //存入session
        session([
            'user_info' => $userInfo
        ]);
        //跳转到用户列表页面
        return redirect('/admin/user/list');

    }

    /**
     * 退出
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('admin/login');
    }
}
