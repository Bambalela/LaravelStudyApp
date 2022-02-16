<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){
        $request->validate([
           'email' => 'required|email',
           'password' => 'required|min:8'
        ]);
        //dd($request);


    }
}