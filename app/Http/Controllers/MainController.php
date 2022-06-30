<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
   public function home(){

    return view('home');

   }
   public function contact(){

    return view('contact');
 }
 public function rules(){

    return view('rules');
 }
   public function registration(){

      return view('registration');
   }
   public function login(){

      return view("login");
   }
   public function logout(){

    return view('logout');
 }


}
