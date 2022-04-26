<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\cms\Home;
use \App\Http\Controllers\cms\Auth\Auth;
use \App\Http\Controllers\cms\Video;
use \App\Http\Controllers\cms\Category;

Route::get('login', [Auth::class, 'getLogin'])->name('cms.login');
Route::get('logout', [Auth::class, 'getLogout'])->name('cms.logout');
Route::post('login',[Auth::class, 'postLogin']);

Route::group(['middleware' => ['cms']], function () {
    session_start();
    if(isset($_SESSION['admin'])) {
        Route::get('', [Home::class, 'index'])->name('cms.home');
        Route::get('video', [Video::class, 'index'])->name('cms.video');

        Route::get('category', [Category::class, 'index'])->name('cms.category');
        Route::get('category/create', [Category::class, 'create'])->name('cms.category.create');
        Route::post('category/create', [Category::class, 'store']);
    }else{

    }
});
