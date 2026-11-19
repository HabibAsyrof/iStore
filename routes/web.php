<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::resource('admin', adminController::class);
Route::resource('frontend', FrontendController::class);
