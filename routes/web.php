<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\web\HomeController;
use \App\Http\Controllers\web\CategoryController;
use \App\Http\Controllers\web\VideoController;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('phim-bo', [CategoryController::class,'phimBo'])->name('phim-bo');
Route::get('video', [VideoController::class,'index'])->name('video');
