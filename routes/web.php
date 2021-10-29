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
    return view('landingpage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/profilupdate', function () {
    return view('profilupdate');
});

Route::get('/produkbos', function () {
    return view('produkbos');
});

Route::get('/produkstaff', function () {
    return view('produkstaff');
});

Route::get('/inputproduk', function () {
    return view('inputproduk');
});

Route::get('/editproduk', function () {
    return view('editproduk');
});

Route::get('/dashboardbos', function () {
    return view('dashboardbos');
});

Route::get('/dashboardstaff', function () {
    return view('dashboardstaff');
});

Route::get('/transaksibos', function () {
    return view('transaksibos');
});

Route::get('/transaksistaff', function () {
    return view('transaksistaff');
});

Route::get('/inputtransaksi', function () {
    return view('inputtransaksi');
});

Route::get('/edittransaksi', function () {
    return view('edittransaksi');
});