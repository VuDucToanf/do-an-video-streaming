<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\web\Home::class,'index'])->name('home');
Route::get('phim-bo', [\App\Http\Controllers\web\Category::class,'phimBo'])->name('phim-bo');

Auth::routes();

Route::get('/home', 'web\Home@index')->name('home');
