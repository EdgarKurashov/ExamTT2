<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;

Route::redirect('/','/en');



Route::get('/', [MainController::class, 'home']);
Route::get('/registration', [MainController::class, 'registration']);
Route::get('/inner', function(){
    return view('inner');
})->middleware('auth')->name('inner');

Route::get('/logout', function(){
    return view('logout');
})->middleware('auth')->name('logout');

//Route::group(['prefix'=>'{language}'], function() {

Route::name('user.')->group(function(){
    Route::view('/private','private')->middleware('auth')->name('private');

    Route::get('/login', function(){
        if(Auth::check()){
            return redirect(route('user.private'));
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
        return redirect(route('user.private'));
    }
        return view('registration');
    })->name('registration');

    Route::post('/registration',[\App\Http\Controllers\RegisterController::class, 'save']);
});
//});
