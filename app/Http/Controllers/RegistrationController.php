<?php

namespace App\Http\Controllers;

use App\Models\MyUser;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller {
    public function submit(RegistrationRequest $request){
        //dd($request);
        $user = new MyUser();
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');
        $user->password = md5($request->input('password'));

        $user->save();
        return redirect()->route('home')->with('success', "Registration completed with success");

    }
}
