<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){

        if(Auth::check()){
            return redirect()->intended(route('user.private',app()->getLocale()));
        }

        $formFields = $request->only(['email','password']);

        if(Auth::attempt($formFields)){
            return redirect()->intended(route('user.private',app()->getLocale()));
        }

        return redirect(route('user.login',app()->getLocale()))->withErrors([
            'email'=> "Authorization is not successful"
        ]);
    }
}
