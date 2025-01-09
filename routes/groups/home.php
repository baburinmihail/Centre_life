<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.home.home');
});

Route::get('/test', function () {
    return view('main.test.test');
});