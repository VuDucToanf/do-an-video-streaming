<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;

class Home extends Controller
{
    public function index()
    {
        return view('cms.home.index');
    }
}
