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
        Route::get('video/create', [Video::class, 'create'])->name('cms.video.create');
        Route::post('video/create', [Video::class, 'store']);

        Route::get('category', [Category::class, 'index'])->name('cms.category');
        Route::get('category/view', [Category::class, 'view'])->name('cms.category.view');
        Route::get('category/create', [Category::class, 'create'])->name('cms.category.create');
        Route::post('category/create', [Category::class, 'store']);
        Route::get('category/update/{id}', [Category::class, 'update'])->name('cms.category.update');
        Route::post('category/update/{id}', [Category::class, 'save']);
        Route::get('category/delete/{id}', [Category::class, 'delete'])->name('cms.category.delete');
    }
});
