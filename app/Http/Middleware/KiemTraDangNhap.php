<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Session\Session;

class KiemTraDangNhap
{
    public function handle($request, Closure $next)
    {
        if($request->session()->exists('TrangThaiDangnhap'))
            return $next($request);
        else
            return redirect()->action('DanhNhapController@getLogin');
    }
}
