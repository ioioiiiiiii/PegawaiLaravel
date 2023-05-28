<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jabatanController;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\tugasController;
use App\Http\Controllers\perusahaanController;

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
    return view('welcome');
});

Route::get('/jabatan',[jabatanController::class,'index']);
Route::get('/pegawai',[pegawaiController::class,'index']);
Route::get('/tugas',[tugasController::class,'index']);
Route::get('/perusahaan',[perusahaanController::class,'index']);
