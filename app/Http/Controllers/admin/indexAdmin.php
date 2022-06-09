<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Models\galleries_contents;
use App\Models\members;
use App\Models\news;
use Illuminate\Support\Facades\Auth;

class indexAdmin extends Controller
{
    public function index()
    {
        $members = members::count();
        $news = news::count();
        $gallery = galleries_contents::count();
        $usaha = categories::count();
        return view('admin.index', [
            'members' => $members,
            'news' => $news,
            'gallery' => $gallery,
            'usaha' => $usaha,
        ]);
    }

    public function logout()
    {
        if(Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
            return redirect()->route('index');
        }
    }
}

