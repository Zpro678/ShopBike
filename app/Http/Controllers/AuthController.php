<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KhachHang;

class AuthController extends Controller
{
    //Login
    public function loginIndex()
    {
        return view('auth.login');
    }

    //Register
    public function registerIndex()
    {
        return view('auth.register');
    }

    //Logout
    public function logout(Request $request)
    {
        $request->session()->forget('current_user');
        $request->session()->forget('user_id');

        return redirect('/');
    }
    
}
