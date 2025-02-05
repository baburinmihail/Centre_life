<?php

use App\Http\Controllers\AdminPanel\AdminPanelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\Artical\AcrticalController;
use App\Http\Controllers\AdminPanel\Document\DocumentController;


Route::resource('artikals', AcrticalController::class);
Route::resource('documents', DocumentController::class);

Route::controller(AdminPanelController::class)->prefix('admin')->group(function(){
    Route::get('/artikal_list', 'artikal_list')->name('artikal.list');
    Route::get('/dockument_list', 'dockument_list')->name('dockument.list');
    Route::get('/rekomend_list', 'rekomend_list')->name('rekomend.list');
});

