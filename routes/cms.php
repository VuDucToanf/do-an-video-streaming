<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\cms\HomeController;
use \App\Http\Controllers\cms\Auth\Auth;
use \App\Http\Controllers\cms\VideoController;
use \App\Http\Controllers\cms\CategoryController;
use App\Http\Controllers\cms\BannerController;
use App\Http\Controllers\cms\UserController;
use App\Http\Controllers\cms\ActorController;
use App\Http\Controllers\cms\AuthorController;
use App\Http\Controllers\cms\ReportAccessLogController;
use App\Http\Controllers\cms\AccessLogController;
use App\Http\Controllers\cms\ReportLikeController;
use App\Http\Controllers\cms\LikeController;
use App\Http\Controllers\cms\AdminController;

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
        Route::get('video/search-film', [VideoController::class, 'searchFilm']);

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

        Route::get('user/delete/{id}', [UserController::class, 'delete'])->name('cms.user.delete');
        Route::resource('user', 'cms\UserController');

        Route::get('actor', [ActorController::class, 'index'])->name('cms.actor');
        Route::get('actor/show/{id}', [ActorController::class, 'show'])->name('cms.actor.show');
        Route::get('actor/create', [ActorController::class, 'create'])->name('cms.actor.create');
        Route::post('actor/create', [ActorController::class, 'store']);
        Route::get('actor/edit/{id}', [ActorController::class, 'edit'])->name('cms.actor.edit');
        Route::post('actor/edit/{id}', [ActorController::class, 'update']);
        Route::get('actor/delete/{id}', [ActorController::class, 'delete'])->name('cms.actor.delete');

        Route::get('author', [AuthorController::class, 'index'])->name('cms.author');
        Route::get('author/show/{id}', [AuthorController::class, 'show'])->name('cms.author.show');
        Route::get('author/create', [AuthorController::class, 'create'])->name('cms.author.create');
        Route::post('author/create', [AuthorController::class, 'store']);
        Route::get('author/edit/{id}', [AuthorController::class, 'edit'])->name('cms.author.edit');
        Route::post('author/edit/{id}', [AuthorController::class, 'update']);
        Route::get('author/delete/{id}', [AuthorController::class, 'delete'])->name('cms.author.delete');

        Route::get('admin', [AdminController::class, 'index'])->name('cms.admin');
        Route::get('admin/show/{id}', [AdminController::class, 'show'])->name('cms.admin.show');
        Route::get('admin/create', [AdminController::class, 'create'])->name('cms.admin.create');
        Route::post('admin/create', [AdminController::class, 'store']);
        Route::get('admin/edit/{id}', [AdminController::class, 'edit'])->name('cms.admin.edit');
        Route::post('admin/edit/{id}', [AdminController::class, 'update']);
        Route::get('admin/delete/{id}', [AdminController::class, 'delete'])->name('cms.admin.delete');

        Route::get('report-access-log', [ReportAccessLogController::class, 'index'])->name('cms.report_access_log');
        Route::get('report-like', [ReportLikeController::class, 'index'])->name('cms.report_like');
        Route::get('access-log/{id}', [AccessLogController::class, 'detail'])->name('cms.access_log');
        Route::get('like/{id}', [LikeController::class, 'detail'])->name('cms.like');
    }
});
