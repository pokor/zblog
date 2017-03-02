<?php

namespace App\Http\Controllers\Admin\Article;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class ArticleAddController extends Controller
{
    public function articleAdd(Request $request)
    {
        if (!session('user_info')) {
            return redirect('/admin/login');
        }

        $path = '';
        if ($request->hasFile('txt_image')){
            $path = $request->file('txt_image')->store('article','publicDir');

            $path = "uploads/".$path;
            Log::info("上传文件的地址是:". $path);
        }

        $title = $request->input('txt_title');
        $content = $request->input('text');
        $time = time();
        $table = "zblog_article";
        $sql = "insert into `{$table}` (`title`,`w_date`,`content`,`image`) ";
        $sql .= " value (?,?,?,?)";

        $re = DB::insert($sql, [
            $title,
            $time,
            htmlspecialchars($content),
            $path
        ]);

        if ($re) {

            return redirect('/admin/article/list')->with('success', '文章写入成功');
        }

    }

    public function article()
    {

        return view('admin.article.add');
    }


}
