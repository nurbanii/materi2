<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('kategori', [HomeController::class, 'showKategori']);
Route::get('loginn', [AuthController::class, 'showLoginn']);

Route::post('produk/filter', [ProdukController::class, 'filter']);

Route::resource('produk', ProdukController::class);
Route::resource('user', UserController::class);


Route::get('loginn', [AuthController::class, 'showLoginn'])->name('loginn');
Route::post('loginn', [AuthController::class, 'LoginnProcess']);
Route::get('logout', [AuthController::class, 'logout']);

