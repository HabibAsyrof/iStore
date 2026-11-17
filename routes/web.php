<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('halaman_utama');
Route::get('/admin', [adminController::class, 'index'])->name('halaman_utama');

