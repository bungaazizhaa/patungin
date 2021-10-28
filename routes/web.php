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