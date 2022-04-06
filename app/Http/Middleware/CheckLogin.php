<?php

namespace App\Http\Middleware;

use Closure;
// use Illuminate\Http\Request;

//sử dụng đối tượng Auth để kiểm tra đăng nhập
use Auth;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //Kiểm tra xem user đã đăng nhập chưa
        //url('login') -> tạo url
        //redirect -> di chuyển đến một url
        if(Auth::check() == false)
            return redirect(url('login'));
        return $next($request);
    }
}
