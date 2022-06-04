<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    // show index pages
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('pages.aboutme');
    }
}
