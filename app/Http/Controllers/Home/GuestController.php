<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    public function homeGuest()
    {
        $zblog = "message";
        $assigns = [];
        $assigns['guest'] = DB::table($zblog)->orderby('vid','desc')->paginate(10);
        return view('home.guest',$assigns);
    }
  public function message(Request $request)
    {
        $guest = $request->input('text');
        $id = $request->ip();
        $time = time();
        $mess = 'zblog_message';
        $sql = "insert into $mess (`name`,`message`,`time`) VALUE (?,?,?)";
        $re = DB::insert($sql,[
            $id,
            htmlspecialchars($guest),
            $time
        ]);
        if ($re){
            return redirect('/guest');
        }
    }

}
