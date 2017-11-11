<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\facades\schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Input;
use App\User;


class UserController extends Controller
{
    public function user_info() {
         $user_id = Auth::User() -> id;
         $user = User::where('id', $user_id)->first();
          return view ('home', ['user' => $user]);

     }

     public function updateUser() {
    $request = request();
    $id = Auth::User() -> id;
    $user = User::where('id', $id)->first();
    $user -> name  = $request->input('edit_name');
    $user -> email = $request->input('edit_email');

    if (Input::hasFile('file')) {

         $picture = Input::file('file');
         $picture->move(public_path('img') ,$picture->getClientOriginalName());
         $user -> img = $picture->getClientOriginalName();
     }
     $user-> save();
     return redirect()->action('UserController@user_info');
     }
}
