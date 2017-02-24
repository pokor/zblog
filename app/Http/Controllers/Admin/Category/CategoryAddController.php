<?php

namespace App\Http\Controllers\Admin\Category;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryAddController extends Controller
{
    public function categoryAdd()
    {
        return view('admin.category.add');
    }
}
