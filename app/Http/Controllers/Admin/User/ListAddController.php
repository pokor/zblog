<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class ListAddController extends Controller
{

  public function listAddUser()
  {
      //检测是否登录
      if (!session('user_info')){
          return redirect('/admin/login');
      }

      return view('admin.user.add');
  }
  public function postAddUser(Request $request){
      $username = $request->input('reg_username');
      $password = $request->input('txtPassword');
      //$confirm = $request->input('txtCPassword');

      $time = time();
      $uip = $request->ip();
      //dd($uip);

          $sql = "insert into `zblog_user` (`username`,`password`,`reg_time`, `reg_ip`) ";
          $sql.= "value (?,?,?,?)";
      //dd($sql);
          $rs = DB::insert($sql,[
              $username,
              md5($password),
              $time,
              $uip
          ]);

          if ($rs)
          {
              return redirect('/admin/user/list');
          }else{
              dd($rs);
              //return redirect('/admin/user/add');
          }

  }

}
