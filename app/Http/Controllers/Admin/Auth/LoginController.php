<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }
    public function postLogin(Request $request)
    {
        dd($request->all());

    }
    public function postRegister(Request $request)
    {
        dd($request->all());
    }
}
