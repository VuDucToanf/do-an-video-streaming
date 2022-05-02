<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\web\HomeController;
use \App\Http\Controllers\web\CategoryController;
use \App\Http\Controllers\web\VideoController;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('danh-muc/{slug}', [CategoryController::class,'show'])->name('category');
Route::get('video/{brief}', [VideoController::class,'show'])->name('video');
