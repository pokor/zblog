<?php

namespace App\Http\Controllers\Admin\Category;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function categoryList()
    {
        return view('admin.category.list');
    }
}
