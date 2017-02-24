<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ListAddController extends Controller
{
  public function listAddUser()
  {
      return view('admin.user.add');
  }

}
