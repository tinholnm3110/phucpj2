<?php

namespace App\Http\Middleware\admin;

use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckQuyenTaiKhoan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
        if(Auth::guard('admin')->check()){
            return $next($request);
        }
         abort(403,"Ban khong co quyen truy cap");
    }
}
