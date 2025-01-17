<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;

/*
Route::get('/', function () {
    return view('main.home.home');
});

Route::get('/test', function () {
    return view('main.test.test');
});

*/

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
});