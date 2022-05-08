<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\web\HomeController;
use \App\Http\Controllers\web\CategoryController;
use \App\Http\Controllers\web\VideoController;
use \App\Http\Controllers\web\LikeController;
use \App\Http\Controllers\web\DislikeController;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('danh-muc/{slug}', [CategoryController::class,'show'])->name('category');

Route::get('video/detail/{brief}', [VideoController::class,'show'])->name('video');
Route::get('video/search/q-{search}', [VideoController::class,'search'])->name('video.search');
Route::get('search/q-{search}', [VideoController::class,'qSearch']);
Route::get('video/is-recommended', [VideoController::class,'recommend'])->name('recommend');
Route::get('video/like', [VideoController::class,'like'])->name('like');
Route::get('video/info/{brief}', [VideoController::class,'info'])->name('video.info');
Route::get('video/actor/{slug}', [VideoController::class,'searchWithActor'])->name('actor');
Route::get('video/author/{slug}', [VideoController::class,'searchWithAuthor'])->name('author');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/like/store', [LikeController::class, 'store']);
Route::get('getLikes/{id}', [LikeController::class, 'getLikes']);
Route::post('like/delete', [LikeController::class, 'removeLike'])->name('like.delete');
