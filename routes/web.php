<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view("index");
});
Route::get('/login', function () {
    return view("login");
});
Route::get('/products', function () {
    return view("products");
});
Route::get('/productdetails', function () {
    return view("productdetails");
});
Route::get('/register', function () {
    return view("register");
});
Route::get('/base', function () {
    return view("admin.base");
});
Route::get('/beranda', function () {
    return view("admin.beranda");
});
Route::get('/kategori', function () {
    return view("admin.kategori");
});
Route::get('/produk', function () {
    return view("admin.produk");
});
Route::get('/loginn', function () {
    return view("admin.loginn");
});
Route::get('/registerr', function () {
    return view("admin.registerr");
});
