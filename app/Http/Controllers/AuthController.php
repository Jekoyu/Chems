<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('default', [
            'title' => 'Login',
            'content' => view('page.login')
        ]);
    }

    public function register()
    {
        return view('default', [
            'title' => 'Register',
            'content' => view('page.register')
        ]);
    }
    public function forgotPassword()
    {
        return view('default', [
            'title' => 'Forgot Password',
            'content' => view('page.forgot-password')
        ]);
    }
}
