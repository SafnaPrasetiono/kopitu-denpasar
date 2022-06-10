<?php

namespace App\Http\Controllers\en\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexControllerEn extends Controller
{
    // show index pages
    public function index()
    {
        return view('en.index');
    }

    public function about()
    {
        return view('en.pages.aboutme');
    }
}
