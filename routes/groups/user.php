<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;


Route::resource('users', UserController::class);

Route::controller(UserController::class)->prefix('users')->group(function(){
    Route::post('/', 'login')->name('user.login');
});