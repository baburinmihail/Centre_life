<?php

use App\Http\Controllers\AdminPanel\AdminPanelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::controller(AdminPanelController::class)->prefix('admin')->group(function(){
    Route::get('/panel', 'panel')->name('admin.panel');
});