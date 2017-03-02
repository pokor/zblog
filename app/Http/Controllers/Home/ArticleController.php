<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function info(Request $request,$id)
    {
        $assigns = [];
        $assigns ['article'] = DB::table('article')->where("id","=",$id)->first();

        return view('home.info',$assigns);
    }
}
