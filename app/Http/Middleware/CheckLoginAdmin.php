<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckLoginAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Kiểm tra nếu đã login guard KHÁCH HÀNG, thì không cho vào admin
        if (Auth::guard('khachhang')->check()) {
            return redirect('/client/403');
        }

        //Check login
        if (!Auth::guard('nhanvien')->check()) {
            // Chưa login
            return redirect('/manager/login')->with('error', 'Vui lòng đăng nhập để tiếp tục truy cập trang quản trị');
        }

        // Đã login
        return $next($request);
        
    }
}
