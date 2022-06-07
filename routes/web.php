<?php

use App\Http\Controllers\admin\indexAdmin;
use App\Http\Controllers\admin\memberAdmin;
use App\Http\Controllers\admin\newsAdmin;
use App\Http\Controllers\pages\memberController;
use App\Http\Controllers\auth\authAdmin;
use App\Http\Controllers\auth\authUser;
use App\Http\Controllers\pages\indexController;
use App\Http\Controllers\pages\newsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [indexController::class, 'index'])->name('index');
Route::get('/beranda', [indexController::class, 'index'])->name('index');

Route::get('/beranda/keanggotaan', [memberController::class, 'member'])->name('member');
Route::get('/beranda/keanggotaan/daftar', [memberController::class, 'register'])->name('member.register');
Route::post('/beranda/keanggotaan/simpan', [memberController::class, 'store'])->name('member.register.store');

Route::get('/beranda/berita', [newsController::class, 'index'])->name('news');
Route::get('/beranda/berita/{slug}', [newsController::class, 'detail'])->name('news.detail');

Route::get('/beranda/tentang-kami', [indexController::class, 'about'])->name('aboutme');


Route::get('/beranda/masuk', [authUser::class, 'login'])->name('login');
Route::get('/beranda/daftar', [authUser::class, 'signup'])->name('register');
Route::get('/beranda/password', [authUser::class, 'password'])->name('password.get');
// Route::post('/beranda/masuk/post', [authUser::class, 'loginPost'])->name('login.post');


Route::get('/admin/login', [authAdmin::class, 'login'])->name('admin.login');
Route::post('/admin/login/post', [authAdmin::class, 'loginPost'])->name('admin.login.post');
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/', [indexAdmin::class, 'index'])->name('admin.index');
    Route::get('/dashboard', [indexAdmin::class, 'index'])->name('admin.dashboard');

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

    Route::get('/logout', [indexAdmin::class, 'logout'])->name('logout');
});
