<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

class Category extends Controller
{
    public function phimBo()
    {
        return view('web.category.list');
    }
}
