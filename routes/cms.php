<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\cms\Home;
use \App\Http\Controllers\cms\Auth\Auth;
use \App\Http\Controllers\cms\Video;

Route::get('', [Home::class, 'index'])->name('cms.home');

Route::get('login', [Auth::class, 'getLogin'])->name('cms.login');
Route::get('logout', [Auth::class, 'getLogout'])->name('cms.logout');
Route::post('login',[Auth::class, 'postLogin']);

Route::get('video', [Video::class, 'index'])->name('cms.video');
