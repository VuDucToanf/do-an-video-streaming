<?php

namespace App\Http\Controllers\cms\Auth;

use Illuminate\Routing\Controller;

class Auth extends Controller
{
    protected $user;
    protected $auth;

    public function getLogin(){
        return view('cms.layouts.login');
    }

    public function postLogin()
    {

    }

    public function getLogout()
    {
        $this->auth->logout();
        return redirect('/');
    }
}
