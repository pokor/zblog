<?php

namespace App\Http\Controllers\Admin\Article;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function articleShow(){
        return view('admin.article.article');
    }
    public function deleteArticle()
    {
        return view('admin.article.list');
    }
}
