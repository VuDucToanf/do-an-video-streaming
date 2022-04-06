<?php

use Illuminate\Support\Facades\Route;

Route::get('', [\App\Http\Controllers\cms\Home::class, 'index'])->name('cms-home');

Route::get('login', [\App\Http\Controllers\cms\Auth\Auth::class, 'getLogin'])->name('cms-login');
Route::get('logout', [\App\Http\Controllers\cms\Auth\Auth::class, 'getLogout'])->name('cms-logout');
Route::post('login',[\App\Http\Controllers\cms\Auth\Auth::class, 'postLogin']);
