<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\cms\HomeController;
use \App\Http\Controllers\cms\Auth\Auth;
use \App\Http\Controllers\cms\VideoController;
use \App\Http\Controllers\cms\CategoryController;
use App\Http\Controllers\cms\BannerController;

Route::get('login', [Auth::class, 'getLogin'])->name('cms.login');
Route::get('logout', [Auth::class, 'getLogout'])->name('cms.logout');
Route::post('login',[Auth::class, 'postLogin']);

Route::group(['middleware' => ['cms']], function () {
    session_start();
    if(isset($_SESSION['admin'])) {
        Route::get('', [HomeController::class, 'index'])->name('cms.home');

        Route::get('video', [VideoController::class, 'index'])->name('cms.video');
        Route::get('video/show/{id}', [VideoController::class, 'show'])->name('cms.video.show');
        Route::get('video/create', [VideoController::class, 'create'])->name('cms.video.create');
        Route::post('video/create', [VideoController::class, 'store']);
        Route::get('video/edit/{id}', [VideoController::class, 'edit'])->name('cms.video.edit');
        Route::post('video/edit/{id}', [VideoController::class, 'update']);
        Route::get('video/delete/{id}', [VideoController::class, 'delete'])->name('cms.video.delete');

        Route::get('category', [CategoryController::class, 'index'])->name('cms.category');
        Route::get('category/view', [CategoryController::class, 'view'])->name('cms.category.view');
        Route::get('category/create', [CategoryController::class, 'create'])->name('cms.category.create');
        Route::post('category/create', [CategoryController::class, 'store']);
        Route::get('category/update/{id}', [CategoryController::class, 'update'])->name('cms.category.update');
        Route::post('category/update/{id}', [CategoryController::class, 'save']);
        Route::get('category/delete/{id}', [CategoryController::class, 'delete'])->name('cms.category.delete');

        Route::get('banner', [BannerController::class, 'index'])->name('cms.banner');
        Route::get('banner/show/{id}', [BannerController::class, 'show'])->name('cms.banner.show');
        Route::get('banner/create', [BannerController::class, 'create'])->name('cms.banner.create');
        Route::post('banner/create', [BannerController::class, 'store']);
        Route::get('banner/edit/{id}', [BannerController::class, 'edit'])->name('cms.banner.edit');
        Route::post('banner/edit/{id}', [BannerController::class, 'update']);
        Route::get('banner/delete/{id}', [BannerController::class, 'delete'])->name('cms.banner.delete');
    }
});
