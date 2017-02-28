<?php

namespace App\Http\Controllers\Admin\Article;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function articleShow(){
        if (!session('user_info')){
            return redirect('/admin/login');
        }
        $sql = "SELECT *
                FROM article 
                ORDER BY id DESC ";
        $rs = DB::select($sql);
        return view('admin.article.list',['list2'=>$rs]);//今天的任务
    }
    public function deleteArticle(Request $request)
    {
        $id= $request ->input('Aid');
        $sql = "DELETE FROM `article` WHERE id = ?";
        DB::delete($sql,[
            $id
        ]);
        dd();
        return redirect('/admin/article/list')->with('success','删除成功');
    }
}
