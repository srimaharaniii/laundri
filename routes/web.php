<?php

use App\Http\Controllers\pelangganController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\penyerahanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/cektemplate', function () {
    return view('layouts.template');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Data penyerahan
Route::get('/penyerahan',[penyerahanController::class,'index']);
Route::get('/penyerahan/tambah', [PenyerahanController::class, 'create']);
Route::post('/penyerahan', [PenyerahanController::class, 'store']);
Route::get('/penyerahan/edit/{id}', [PenyerahanController::class, 'edit']);
Route::put('/penyerahan/{id}', [PenyerahanController::class, 'update']);
Route::delete('/penyerahan/{id}', [PenyerahanController::class, 'destroy']);

//Data Pelanggan
Route::get('/pelanggan',[pelangganController::class,'index']);
Route::get('/pelanggan/tambah', [pelangganController::class, 'create']);
Route::post('/pelanggan', [pelangganController::class, 'store']);
Route::get('/pelanggan/edit/{id}', [pelangganController::class, 'edit']);
Route::put('/pelanggan/{id}', [pelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [pelangganController::class, 'destroy']);

//Data Pembayaran
Route::get('/pembayaran',[pembayaranController::class,'index']);
Route::get('/pembayaran/tambah', [pembayaranController::class, 'create']);
Route::post('/pembayaran', [pembayaranController::class, 'store']);
Route::get('/pembayaran/edit/{id}', [pembayaranController::class, 'edit']);
Route::put('/pembayaran/{id}', [pembayaranController::class, 'update']);
Route::delete('/pembayaran/{id}', [pembayaranController::class, 'destroy']);
