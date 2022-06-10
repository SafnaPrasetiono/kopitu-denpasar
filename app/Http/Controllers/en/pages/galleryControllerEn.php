<?php

namespace App\Http\Controllers\en\pages;

use App\Http\Controllers\Controller;
use App\Models\galleries_content;
use Illuminate\Http\Request;

class galleryControllerEn extends Controller
{
    // show index and data
    public function index()
    {
        return view('en.pages.gallery');
    }
}
