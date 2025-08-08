<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    public function index()
    {
        return redirect(route('auth.login'));
    }

    public function login()
    {
        return view('auth.login');
    }

    public function signup()
    {
        return view('auth.signup');
    }
}
