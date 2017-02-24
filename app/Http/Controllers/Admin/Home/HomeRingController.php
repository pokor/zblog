<?php

namespace App\Http\Controllers\Admin\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeRingController extends Controller
{
    public function homeRing()
    {
        return view('admin.home.ring');
    }
}
