<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\web\HomeController;
use \App\Http\Controllers\web\CategoryController;
use \App\Http\Controllers\web\VideoController;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('danh-muc/{slug}', [CategoryController::class,'show'])->name('category');
Route::get('video/detail/{brief}', [VideoController::class,'show'])->name('video');
Route::get('video/search/q-{search}', [VideoController::class,'search'])->name('video.search');
Route::get('search/q-{search}', [VideoController::class,'qSearch']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
