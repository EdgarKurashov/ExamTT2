<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;

Route::redirect('/', '/en');

Route::resource('posts','PostController');
Route::get('/news', function(){
    return redirect('/posts');
})->name('post');


Route::group(['prefix'=>'{language}'], function () {

Route::get('/', [MainController::class, 'home']);

Route::get('/registration', [MainController::class, 'registration']);

Route::get('/private', function(){
    return view('private');
})->middleware('auth')->name('private');

Route::get('/logout', function(){
    return view('logout' );
})->middleware('auth')->name('logout');


Route::name('contact')->group(function(){
  Route::get('/contact', [MainController::class, 'contact']);
});
Route::name('rules')->group(function(){
    Route::get('/rules', [MainController::class, 'rules']);
  });
  Route::name('news')->group(function(){
    Route::get('/news', [MainController::class, 'news']);
  });

Route::name('user.')->group(function(){

    Route::view('/private','private')->middleware('auth')->name('private');

    Route::get('/login', function(){
        if(Auth::check()){
            return redirect(route('user.private',app()->getLocale()));
        }
        return view('login');
    })->name('login');

    Route::post('/login',[\App\Http\Controllers\LoginController::class, 'login']);

    Route::get('/logout',function(){
        Auth::logout();
        return redirect('/');
    })->name('logout');

    Route::get('/registration',function(){
    if(Auth::check()){
        return redirect(route('user.private',app()->getLocale()));
    }
        return view('registration');
    })->name('registration');



    Route::post('/registration',[\App\Http\Controllers\RegisterController::class, 'save']);
});

});
