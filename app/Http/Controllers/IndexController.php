<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function check(Request $request)
    {
        $ip = $request->ip();
        $agent = $request->header('User-Agent');

        return view('user.index.index',compact('ip', 'agent'));
    }

    
}
