<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;

class Home extends Controller
{
    public function index()
    {
        if(!isset($_SESSION['admin'])){
            return redirect('/login');
        }
        return view('cms.home.index');
    }
}
