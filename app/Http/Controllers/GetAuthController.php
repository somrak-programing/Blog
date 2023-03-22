<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetAuthController extends Controller
{
    public function showLogin(){
        return view('login');
    }

    public function checkLogin(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
    }
}
