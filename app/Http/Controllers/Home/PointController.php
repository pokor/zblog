<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PointController extends Controller
{
    public function homePoint()
    {
        return view('home.point');
    }
}
