<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;


Route::controller(UserController::class)->prefix('users')->group(function(){
    Route::post('/login', 'login')->name('users.login');
});

Route::resource('users', UserController::class);

