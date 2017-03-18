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
        //调用checkIP方法来判断用户留言的权限
        $r = $this->checkIp($request);

        if ($r){
            exit("今天留言次数已用完");
        }
        //获得用户输入的值
        $guest = $request->input('text');
        //获得当前用户的IP
        $id = $request->ip();
        //获得当前时间
        $time = time();
        //声明数据表的名称
        $mess = 'zblog_message';
        //拼接插入函数
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

    /**创建查询ip的方法
     * @param Request $request
     * @return bool
     */
    public function checkIp(Request $request)
    {
        //获得当前用户的ip
        $ip = $request->ip();
        //dd($ip);
        $mess = 'zblog_message';
        //格式化当前用户的时间
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
