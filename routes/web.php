<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\web\Home;
use \App\Http\Controllers\web\Category;
use \App\Http\Controllers\web\Video;

Route::get('/', [Home::class,'index'])->name('home');
Route::get('phim-bo', [Category::class,'phimBo'])->name('phim-bo');
Route::get('video', [Video::class,'index'])->name('video');
