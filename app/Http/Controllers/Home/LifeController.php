<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LifeController extends Controller
{
    public function showLife(){
        //
        $assigns = [];
        $assigns ['articles'] = DB::table('article')->orderBy("id","desc")->paginate(5);
        //return view('home.index',$assigns);
        return view('home.life',$assigns);
    }
}
