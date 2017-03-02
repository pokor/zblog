<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function indexHome()
    {
        $assigns = [];
        $assigns ['articles'] = DB::table('article')->orderBy("id","desc")->paginate(5);
        return view('home.index',$assigns);
    }
}
