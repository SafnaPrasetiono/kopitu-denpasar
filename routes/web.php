<?php

use App\Http\Controllers\admin\indexAdmin;
use App\Http\Controllers\auth\authAdmin;
use App\Http\Controllers\auth\authUser;
use App\Http\Controllers\pages\indexController;
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
Route::get('/beranda/tentang-kami', [indexController::class, 'about'])->name('aboutme');


Route::get('/beranda/masuk', [authUser::class, 'login'])->name('login');
Route::get('/beranda/daftar', [authUser::class, 'signup'])->name('register');
Route::get('/beranda/password', [authUser::class, 'password'])->name('password.get');
// Route::post('/beranda/masuk/post', [authUser::class, 'loginPost'])->name('login.post');


Route::get('/admin/login', [authAdmin::class, 'login'])->name('admin.login');
Route::post('/admin/login/post', [authAdmin::class, 'loginPost'])->name('admin.login.post');
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/' , [indexAdmin::class, 'index'])->name('admin.index');
    Route::get('/dashboard' , [indexAdmin::class, 'index'])->name('admin.dashboard');

    Route::get('/logout', [indexAdmin::class, 'logout'])->name('logout');
});
