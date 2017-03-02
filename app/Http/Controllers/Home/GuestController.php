<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    public function homeGuest(Request $request)
    {

        return view('home.guest');
    }
  public function message(Request $request)
    {
        $guest = $request->input('text');
        $id = $request->ip();
        $time = time();
        $sql = "insert into `message`(`Vname`,`message`,`Vtime`) VALUE (?,?,?)";
        $re = DB::insert($sql,[
            $id,
            htmlspecialchars($guest),
            $time
        ]);

        return redirect('/home/index',['$user'=>$re]);
    }

}
