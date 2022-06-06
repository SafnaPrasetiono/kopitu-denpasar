<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\categories;
use Illuminate\Http\Request;

class memberAdmin extends Controller
{
    // jenis usaha pages
    public function category()
    {
        return view('admin.categories.index');
    }

    public function categorySub($id)
    {
        $ctg = categories::find($id);
        return view('admin.categories.detail', ['ctg' => $ctg]);
    }
}
