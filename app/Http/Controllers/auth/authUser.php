<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class authUser extends Controller
{
    // show login pages
    public function login()
    {
        return view('auth.login');
    }

    public function signup()
    {
        return view('auth.register');
    }

    public function password()
    {
        return view('auth.password');
    }
}
