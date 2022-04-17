<?php

namespace App\Http\Controllers\cms\Admin\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function index()
    {
        return view('cms.layouts.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt(
            [
                'username' => $request->input('username'),
                'password' => $request->input('password'),
            ], $request->input('remember'))) {
                return route('home');
        }
        else {
            return redirect()->back();
        }
    }
}
