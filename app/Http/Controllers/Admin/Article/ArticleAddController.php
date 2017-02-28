<?php

namespace App\Http\Controllers\Admin\Article;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ArticleAddController extends Controller
{
    public function articleAdd(Request $request)

    {
        if (!session('user_info')){
            return redirect('/admin/login');
    }
        $title = $request->input('txt_title');
        $content = $request->input('content');
        $sql = "insert into article(`title`,`content`) WHERE (?,?)";
        $re = DB::insert($sql,[
            $title,
            $content
        ]);

        return view('admin.article.add');
    }
    public function article()
    {

        return view('admin.article.add');
    }


}
