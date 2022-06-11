<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class incubatorController extends Controller
{
    // show index
    public function index()
    {
        return view('pages.incubator.index');
    }
}
