<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLoginAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->session()->has('admin_id')) {
            // Chưa login
            return redirect('/manager/login')->with('error', 'Vui lòng đăng nhập để tiếp tục truy cập trang quản trị');
        }

        // Đã login
        return $next($request);
    }
}
