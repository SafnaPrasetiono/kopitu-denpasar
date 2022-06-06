<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class memberController extends Controller
{
    public function member()
    {
        return view('pages.members.index');
    }
    public function register()
    {
        return view('pages.members.register');
    }
}
