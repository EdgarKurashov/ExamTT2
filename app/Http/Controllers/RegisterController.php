<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{


    public function save(Request $request)
    {
        if(Auth::check()){
            return redirect(route('user.private',app()->getLocale()));
        }

        $validateFields = $request->validate([
            'username' => 'required|min:3|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:6|max:255'
        ]);
        if(User::where('username',$validateFields['username'])->exists()){
            return redirect(route('user.registration',app()->getLocale()))->withErrors([
            'username'=>'User with this username already is registered'
            ]);
        }
        if(User::where('email',$validateFields['email'])->exists()){
            return redirect(route('user.registration',app()->getLocale()))->withErrors([
            'email'=>'User with this email already is registered'
            ]);
        }



        $user = User::create($validateFields);
        if($user){
            Auth::login($user);
            return redirect(route('user.private',app()->getLocale()));
        }

        return redirect(route('user.login',app()->getLocale()))->withErrors([
            'formError'=>'Error occured trying to save user'
        ]);
    }
}
