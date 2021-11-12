<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

// Public Route
Route::get('/', function () {
    return view('landingpage');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);

// Private Route
Route::get('/dashboardbos', [BosController::class, 'index']);

Route::get('/dashboardstaff', function () {
    return view('dashboardstaff');
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
