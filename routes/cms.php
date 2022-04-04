<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\cms\Home::class, 'index'])->name('home');

Route::get('/login', [\App\Http\Controllers\cms\Home::class, 'login'])->name('login');
