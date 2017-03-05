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

        $r = $this->checkIp($request);

        if ($r){
            exit("今天留言次数已用完");
        }

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
    public function checkIp(Request $request)
    {
        $ip = $request->ip();
        //dd($ip);
        $mess = 'zblog_message';
        $nowtime = date("Ymd",time()) ;

        //dd($nowtime);
        $sql = "SELECT COUNT(name) as ip_count FROM $mess WHERE name=? and DATE_FORMAT(from_unixtime(time),'%Y%m%d') = ? ";


        /*var_dump($ip,$nowtime);
        dd($sql);*/

        $re = DB::select($sql,[
            $ip,
            $nowtime
        ]);
        //var_dump($re[0]);
        //dd($re[0]->ip_count);
        if ($re[0]->ip_count >= 5){
           return true;
        }
        return false;
    }

}
