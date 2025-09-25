<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateUserData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

       $email = $request->input('email');
        $phone = $request->input('phone');

       $message = [];

        // Kiểm tra email hợp lệ
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $message[] = 'Email không hợp lệ';
        }

        // Kiểm tra phone phải đúng 10 số
        if (!preg_match('/^[0-9]{10}$/', $phone)) {
            $message[] = 'Số điện thoại phải có 10 chữ số';
        }

        // Nếu có lỗi thì trả về JSON
        if (!empty($message)) {
            return response()->json([
                'success' => false,
                'message' => implode(' | ', $message) // nối các lỗi bằng dấu |
            ], 400);
        }

        return $next($request);
    
    }
}
