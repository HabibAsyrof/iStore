<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('halaman_utama');
