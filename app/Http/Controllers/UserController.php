<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\facades\schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;

class UserController extends Controller
{
    public function user_info() {
         $user_id = Auth::User() -> id;
         $user = User::where('id', $user_id)->first();
          return view ('home', ['user' => $user]);

     }
}
