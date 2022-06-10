<?php

namespace App\Http\Controllers\en\pages;

use App\Http\Controllers\Controller;
use App\Models\news;
use Illuminate\Http\Request;

class newsControllerEn extends Controller
{
    // show news pages
    public function index(){
        return view('en.pages.news.index');
    }
    public function detail($slug){
        $data = news::where('slug', $slug)->first();
        return view('en.pages.news.detail', ['data'=>$data]);
    }
    public function search(Request $request)
    {
        $src = $request->search;
        return view('en.pages.news.search', ['src' => $src]);
    }
}
