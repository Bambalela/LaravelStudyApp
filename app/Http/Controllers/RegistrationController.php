<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller {
    public function submit(RegistrationRequest $request){
        /*$validated = $request->validate([
            'name' => 'required|min:2|max:20',
            'surname' => 'required|min:2|max:20',
            'password' => 'required|min:8',
            'password_repeat' => 'required|min:8'
        ]);*/

//TODO: ask Kovalchuk how to send an error while the passwords fields are not same...

        /*if($request->input('password') == $request->input('password_repeat')){

        }*/
    }
}
