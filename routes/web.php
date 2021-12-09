<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ProdukBosController;
use App\Http\Controllers\ProdukStaffController;
use App\Http\Controllers\TransaksiBosController;
use App\Http\Controllers\TransaksiStaffController;

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
Route::get('/inputproduk', [ProdukController::class, 'index']);
Route::post('/inputproduk', [ProdukController::class, 'store']);
Route::put('/editproduk/{idProduk}', [ProdukController::class, 'update']);
Route::delete('/deleteproduk/{idProduk}', [ProdukController::class, 'destroy']);
Route::get('/inputtransaksi', function () {
    return view('inputtransaksi');
});
Route::post('/inputtransaksi', [TransaksiController::class, 'store']);
Route::put('/edittransaksi/{idTransaksi}', [TransaksiController::class, 'update']);
Route::delete('/deletetransaksi/{idTransaksi}', [TransaksiController::class, 'destroy']);
Route::post('/logout', [LoginController::class, 'logout']);

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

Route::get('/produkbos', [ProdukBosController::class, 'index']);
Route::get('/produkstaff', [ProdukStaffController::class, 'index']);

Route::get('/transaksibos', [TransaksiBosController::class, 'index']);
Route::get('/transaksistaff', [TransaksiStaffController::class, 'index']);