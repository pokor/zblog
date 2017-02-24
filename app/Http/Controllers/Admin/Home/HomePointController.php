<?php

namespace App\Http\Controllers\Admin\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomePointController extends Controller
{
    public function homePoint()
    {
        return view('admin.home.point');
    }
}
