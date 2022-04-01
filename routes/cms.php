<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\cms\Home::class,'index'])->name('home');
