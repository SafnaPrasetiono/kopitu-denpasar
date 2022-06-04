<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class indexAdmin extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function logout()
    {
        if(Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
            return redirect()->route('index');
        }
    }
}

