<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $username = $request->input('username');
        $pass = $request->input('password');

        //dd($username);
        $sql = "select * from `zblog_user` WHERE username = ? AND password = ?";
        $rs = DB::select($sql,[
            $username,
            md5($pass)
        ]);
        dd($username);
        /*$user_info = [
            'Uname'    =>   $rs[0]->Vname,
            'Umessage' =>   $rs[0]->message,
            'Utime'    =>   $rs[0]->Vtime,

        ];
        //存入session
        session([
            'user_info'=>$user_info
        ]);*/

        if (!$rs){

            return redirect('/home/index');
        }
        return redirect('/user/visitor');
    }
    public function post(Request $request)
    {
        $username = $request->input('text');
        dd(555);

    }
}
