<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckLoginUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check login
        if (!Auth::guard('khachhang')->check()) {
            // Chưa login -> trả về trang /login và '1 session error'
            return redirect('/login')->with('error', 'Bạn cần đăng nhập để xem giỏ hàng!');
        }

        // Đã login
        return $next($request);
    }

    
}
