<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\web\Home::class,'index'])->name('home');
