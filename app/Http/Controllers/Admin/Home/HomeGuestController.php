<?php

namespace App\Http\Controllers\Admin\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeGuestController extends Controller
{
    public function homeGuest()
    {
        return view('admin.home.guest');
    }
}
