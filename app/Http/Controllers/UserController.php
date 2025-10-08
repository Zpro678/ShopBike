<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function error4041(Request $request)
    {
        $ip = $request->ip();
        return view('user.404.404', compact('ip'));
    }

    public function index() {
        return view('user.index.index');
    }

    public function bicycles() {
        return view('user.bicycles.bicycles');
    }

    public function parts() {
        return view('user.parts.parts');
    }

    public function accessories() {
        return view('user.accessories.accessories');
    }

    public function cart() {
        return view('user.cart.cart');
    }

    public function single() {
        return view('user.single.single');
    }

    
    public function error404() {
        return view('user.404.404');
    }
}
