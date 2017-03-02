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
        $content = $request->input('text');
        $time = time();
        $sql = "insert into `article` (`title`,`w_date`,`content`) ";
        $sql.= " value (?,?,?)";

        $re = DB::insert($sql,[
            $title,
            $time,
            htmlspecialchars($content)
        ]);

        if ($re)
        {

            return redirect('/admin/article/list')->with('success','文章写入成功');
        }

    }
    public function article()
    {

        return view('admin.article.add');
    }


}
