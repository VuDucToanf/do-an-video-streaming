<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\web\HomeController;
use \App\Http\Controllers\web\CategoryController;
use \App\Http\Controllers\web\VideoController;
use \App\Http\Controllers\web\LikeController;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('danh-muc/{slug}', [CategoryController::class,'show'])->name('category');
Route::get('video/detail/{brief}', [VideoController::class,'show'])->name('video');
Route::get('video/search/q-{search}', [VideoController::class,'search'])->name('video.search');
Route::get('search/q-{search}', [VideoController::class,'qSearch']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/like/store', [LikeController::class, 'store']);
Route::get('getLikes/{video}', [LikeController::class, 'getLikes']);
Route::post('like/delete', [LikeController::class, 'removeLike'])->name('like.delete');
