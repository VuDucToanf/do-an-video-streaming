<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function phimBo()
    {
        return view('web.category.list');
    }
}
