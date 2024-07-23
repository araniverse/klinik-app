<?php

use App\Models\TransaksiPasien;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\WilayahController;
use App\Http\Controllers\DataObatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataTindakanController;
use App\Http\Controllers\TransaksiPasienController;


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

Route::get('/', [HomeController::class, 'index'])->name('home');
//Route::get('/', [PegawaiController::class, 'index']);
// Route::get('/suratmasuk', [PegawaiController::class, 'index']);
// Route::get('/suratkeluar', [PegawaiController::class, 'index']);

Route::resource('home', HomeController::class);
Route::resource('pegawai', PegawaiController::class);
Route::resource('wilayah', WilayahController::class);
Route::resource('dataobat', DataObatController::class);
Route::resource('datatindakan', DataTindakanController::class);
Route::resource('transaksipasien', TransaksiPasienController::class);

Auth::routes();
