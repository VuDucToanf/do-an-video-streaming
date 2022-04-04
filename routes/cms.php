<?php

use Illuminate\Support\Facades\Route;

Route::get('', [\App\Http\Controllers\cms\Home::class, 'index'])->name('home');

Route::get('login', [\App\Http\Controllers\cms\Home::class, 'getLogin'])->name('login');
Route::post('login', 'cms\Home@postLogin');
