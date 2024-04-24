<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login( )
    {
        return view('login');
    }
    
    public function forget_password( )
    {
        return view('forget_password');
    }
}
