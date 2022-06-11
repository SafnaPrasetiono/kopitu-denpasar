<?php

use App\Http\Controllers\admin\galeryAdmin;
use App\Http\Controllers\admin\indexAdmin;
use App\Http\Controllers\admin\memberAdmin;
use App\Http\Controllers\admin\newsAdmin;
use App\Http\Controllers\admin\profileAdmin;
use App\Http\Controllers\pages\memberController;
use App\Http\Controllers\auth\authAdmin;
use App\Http\Controllers\auth\authUser;
use App\Http\Controllers\en\pages\galleryControllerEn;
use App\Http\Controllers\en\pages\indexControllerEn;
use App\Http\Controllers\en\pages\memberControllerEn;
use App\Http\Controllers\en\pages\newsControllerEn;
use App\Http\Controllers\pages\galleryController;
use App\Http\Controllers\pages\incubatorController;
use App\Http\Controllers\pages\indexController;
use App\Http\Controllers\pages\newsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This routing web kopitu denpasar form komite-umkm
| Created by Safna Prasetiono
| Startup form 1 june 2022
| Version 1.0.0
|
*/

// index lang form indo
Route::get('/', [indexController::class, 'index'])->name('index');
Route::get('/beranda', [indexController::class, 'index'])->name('index');
Route::get('/beranda/keanggotaan', [memberController::class, 'member'])->name('member');
Route::get('/beranda/keanggotaan/daftar', [memberController::class, 'register'])->name('member.register');
Route::post('/beranda/keanggotaan/simpan', [memberController::class, 'store'])->name('member.register.store');
Route::get('/beranda/berita', [newsController::class, 'index'])->name('news');
Route::get('/beranda/berita/data', [newsController::class, 'search'])->name('news.search');
Route::get('/beranda/berita/artikel/{slug}', [newsController::class, 'detail'])->name('news.detail');
Route::get('/beranda/galeri', [galleryController::class, 'index'])->name('gallery');
Route::get('/beranda/tentang-kami', [indexController::class, 'about'])->name('aboutme');
Route::get('/beranda/inkubator', [incubatorController::class, 'index'])->name('incubator');

// translate to english
Route::get('/en', [indexControllerEn::class, 'index'])->name('en.index');
Route::get('/en/beranda', [indexControllerEn::class, 'index'])->name('en.index');
Route::get('/en/beranda/keanggotaan', [memberControllerEn::class, 'member'])->name('en.member');
Route::get('/en/beranda/keanggotaan/daftar', [memberControllerEn::class, 'register'])->name('en.member.register');
Route::post('/en/beranda/keanggotaan/simpan', [memberControllerEn::class, 'store'])->name('en.member.register.store');
Route::get('/en/beranda/berita', [newsControllerEn::class, 'index'])->name('en.news');
Route::get('/en/beranda/berita/data', [newsControllerEn::class, 'search'])->name('en.news.search');
Route::get('/en/beranda/berita/artikel/{slug}', [memberControllerEn::class, 'detail'])->name('en.news.detail');
Route::get('/en/beranda/galeri', [galleryControllerEn::class, 'index'])->name('en.gallery');
Route::get('/en/beranda/tentang-kami', [indexControllerEn::class, 'about'])->name('en.aboutme');


// Route::get('/beranda/masuk', [authUser::class, 'login'])->name('login');
// Route::get('/beranda/daftar', [authUser::class, 'signup'])->name('register');
// Route::get('/beranda/password', [authUser::class, 'password'])->name('password.get');
// Route::post('/beranda/masuk/post', [authUser::class, 'loginPost'])->name('login.post');


Route::get('/admin/login', [authAdmin::class, 'login'])->name('admin.login');
Route::post('/admin/login/post', [authAdmin::class, 'loginPost'])->name('admin.login.post');
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/', [indexAdmin::class, 'index'])->name('admin.index');
    Route::get('/dashboard', [indexAdmin::class, 'index'])->name('admin.dashboard');

    // profile admin routing
    Route::get('/profile', [profileAdmin::class, 'index'])->name('admin.profile');

    // keanggotaan
    Route::get('/dashboard/members/data', [memberAdmin::class, 'index'])->name('admin.member');
    Route::get('/dashboard/members/detail/{id}', [memberAdmin::class, 'detail'])->name('admin.member.detail');
    Route::get('/dashboard/jenis-usaha', [memberAdmin::class, 'category'])->name('admin.category');
    Route::get('/dashboard/jenis-usaha/{id}', [memberAdmin::class, 'categorySub'])->name('admin.category.sub');

    // Routing news
    Route::get('/berita', [newsAdmin::class, 'index'])->name('admin.news');
    Route::get('/berita/buat', [newsAdmin::class, 'create'])->name('admin.news.create');
    Route::post('/berita/buat/simpan', [newsAdmin::class, 'store'])->name('admin.news.create.store');
    Route::get('/berita/ubah/{id}', [newsAdmin::class, 'edit'])->name('admin.news.edit');
    Route::put('/berita/rubah/{id}', [newsAdmin::class, 'update'])->name('admin.news.update');
    Route::get('/berita/upload/editore', [newsAdmin::class, 'editor'])->name('admin.news.upload.editor');

    // galery admin routing
    Route::get('/galeri', [galeryAdmin::class, 'index'])->name('admin.gallery');
    Route::get('/galeri/buat', [galeryAdmin::class, 'create'])->name('admin.gallery.create');
    Route::post('/galeri/buat/simpan', [galeryAdmin::class, 'post'])->name('admin.gallery.post');
    Route::get('/galeri/buat/gambar/{id}', [galeryAdmin::class, 'images'])->name('admin.gallery.create.images');
    Route::post('/galeri/buat/gambar/simpan/{id}', [galeryAdmin::class, 'imagesPost'])->name('admin.gallery.create.images.post');
    Route::get('/galeri/buat/selesai/{id}', [galeryAdmin::class, 'finish'])->name('admin.gallery.create.finish');
    Route::post('/galeri/buat/selesai/simpan/{id}', [galeryAdmin::class, 'publish'])->name('admin.gallery.create.finish.post');
    Route::get('/galeri/update/{id}', [galeryAdmin::class, 'edit'])->name('admin.gallery.update');
    Route::put('/galeri/update/simpan/{id}', [galeryAdmin::class, 'update'])->name('admin.gallery.update.post');

    Route::get('/logout', [indexAdmin::class, 'logout'])->name('logout');
});
