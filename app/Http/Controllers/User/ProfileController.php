<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        return view('user.visitor');
    }
    public function post(Request $request)
    {
        $name = $request->input('username');
        $pass = $request->input('password');
        //dd($pass);

        //dd($username);

        $visitor = [];
        $vName = "zblog_visitor";
        $sql = "select * from $vName WHERE `visi_name` = ? AND `visi_paswd` = ?";
        //dd($sql);
        $rs = DB::select($sql,[
            $name,
            $pass
        ]);
        if (!$rs){

            return redirect('/home/index')->with('fail','登录失败哦');
        }

        /*$user_info = [
            'vName'    =>   $rs[0]->visi_name,
        ];
        //存入session
        session([
            'user_info'=>$user_info
        ]);*/


        return redirect('/user/visitor');
       /* $username = $request->input('text');
        dd(555);*/

    }
}
