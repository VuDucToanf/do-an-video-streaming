<?php

use Illuminate\Support\Facades\Route;

Route::get('', [\App\Http\Controllers\cms\Home::class, 'index'])->name('home');

Route::get('login', [\App\Http\Controllers\cms\Auth\Auth::class, 'getLogin'])->name('login');
Route::get('logout', [\App\Http\Controllers\cms\Auth\Auth::class, 'getLogout'])->name('logout');
Route::post('login', 'cms\Auth\Auth@postLogin');
