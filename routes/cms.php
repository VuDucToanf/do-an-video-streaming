<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\cms\HomeController;
use \App\Http\Controllers\cms\Auth\Auth;
use \App\Http\Controllers\cms\VideoController;
use \App\Http\Controllers\cms\CategoryController;

Route::get('login', [Auth::class, 'getLogin'])->name('cms.login');
Route::get('logout', [Auth::class, 'getLogout'])->name('cms.logout');
Route::post('login',[Auth::class, 'postLogin']);

Route::group(['middleware' => ['cms']], function () {
    session_start();
    if(isset($_SESSION['admin'])) {
        Route::get('', [HomeController::class, 'index'])->name('cms.home');
        Route::get('video', [VideoController::class, 'index'])->name('cms.video');
        Route::get('video/create', [VideoController::class, 'create'])->name('cms.video.create');
        Route::post('video/create', [VideoController::class, 'store']);

        Route::get('category', [CategoryController::class, 'index'])->name('cms.category');
        Route::get('category/view', [CategoryController::class, 'view'])->name('cms.category.view');
        Route::get('category/create', [CategoryController::class, 'create'])->name('cms.category.create');
        Route::post('category/create', [CategoryController::class, 'store']);
        Route::get('category/update/{id}', [CategoryController::class, 'update'])->name('cms.category.update');
        Route::post('category/update/{id}', [CategoryController::class, 'save']);
        Route::get('category/delete/{id}', [CategoryController::class, 'delete'])->name('cms.category.delete');
    }
});
