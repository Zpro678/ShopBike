<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index() {
        return view('user.index');
    }

    public function bicycles() {
        return view('user.bicycles');
    }

    public function parts() {
        return view('user.parts');
    }

    public function accessories() {
        return view('user.accessories');
    }

    public function cart() {
        return view('user.cart');
    }

    public function single() {
        return view('user.single');
    }

    
    public function error404() {
        return view('user.404');
    }
}
