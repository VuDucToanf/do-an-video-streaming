<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cms\Admin\Admin\Login;
use App\Http\Controllers\cms\Home;


//Route::get('login', [\App\Http\Controllers\cms\Auth\Auth::class, 'getLogin'])->name('login');
//Route::get('logout', [\App\Http\Controllers\cms\Auth\Auth::class, 'getLogout'])->name('logout');
//Route::post('login',[\App\Http\Controllers\cms\Auth\Auth::class, 'postLogin']);

Route::get('login', [Login::class, 'index']);
Route::post('store', [Login::class, 'store']);

Route::get('', [Home::class, 'index'])->name('cms.home');
