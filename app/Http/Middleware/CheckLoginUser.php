<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

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
        if (!$request->session()->has('user_id')) {
            // Chưa login
            return redirect('/login')->with('error', 'Bạn cần đăng nhập để xem giỏ hàng!');
        }

        // Đã login
        return $next($request);
    }

    
}
