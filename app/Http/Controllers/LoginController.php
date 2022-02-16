<?php

namespace App\Http\Controllers;

use App\Models\MyUser;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use MongoDB\Driver\Session;

class LoginController extends Controller
{
    public function loginValidate(Request $request){
        $request->validate([
           'email' => 'required|email',
           'password' => 'required|min:8'
        ]);

        $user = new MyUser;
        $data = $user
            ->where('email', '=', $request->input('email'))
            ->where('password', '=', md5($request->input('password')))
            ->first();
        if(!$data->isDirty()) {
            session(['currentUserId' => $data->id]);
            session(['currentUser' => $data]);
            //TODO: redirect to the dashboard
        } else {
            //I`m not sure with that realization of throwing an error
            $errors = new MessageBag();
            $errors->add('user_not_found', 'User with this email is not found, or the password is wrong');
            return view('login')->withErrors($errors);
        }
    }
}
