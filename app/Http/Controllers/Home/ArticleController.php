<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function homeArticle()
    {
        /*if (!session('user_info')){
            return redirect('/admin/home/index');
        }*/
       /* $sql = "SELECT *
                FROM article
                ORDER BY id DESC ";
        $rs = DB::select($sql);*/
        $rs = DB::table('article')->paginate(3);
        return view('home.life',['listLife'=>$rs]);
        //return view('admin.home.life');
    }
}
