<?php

namespace App\Http\Controllers\Admin\Article;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleAddController extends Controller
{
    public function articleAdd()
    {
        return view('admin.article.add');
    }


}
