<?php

namespace App\Http\Controllers\Admin\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeLightController extends Controller
{
    public function homeLight()
    {
        return view('admin.home.light');
    }
}