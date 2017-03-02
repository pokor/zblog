<?php

namespace App\Http\Controllers\Admin\Article;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function articleShow()
    {

        if (!session('user_info')) {
            return redirect('/admin/login');
        }

        $assigns = [];

        $assigns['articles'] = DB::table("article")->orderBy("id", "desc")->paginate(10);

        return view('admin.article.list', $assigns);
    }

    public function deleteArticle(Request $request)
    {
        $id = $request->input('Aid');

        $table = "zblog_article";

        $sql = "DELETE FROM `{$table}` WHERE id = ?";
        DB::delete($sql, [
            $id
        ]);
        return redirect('/admin/article/list')->with('success', '删除成功');
    }

    public function show(Request $request)
    {

        if (!session('user_info')) {
            return redirect('/admin/login');
        }
        $show = $request->input('Sid');

        $sql = "select * from `article` WHERE `id` = ?";
        $res = DB::select($sql, [
            $show
        ]);
        return view('admin.article.show', ['article' => $res[0]]);
    }
}
