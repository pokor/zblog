<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    public function showList()
    {
        return view('admin.user.list');
    }
    public function deleteUser()
    {
        return view('admin.user.list');
    }
}
