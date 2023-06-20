<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jabatanController;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\tugasController;
use App\Http\Controllers\perusahaanController;
use App\Http\Controllers\userrController;

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



Route::middleware(['auth'])->group(function(){
    Route::get('/', function () {
    return view('/home');
});
    Route::get('/pegawai',[pegawaiController::class,'index']);
    Route::get('/pegawai-add',[pegawaiController::class,'create']);
    Route::post('/pegawai',[pegawaiController::class,'store']);
    Route::get('/pegawai-edit/{id}',[pegawaiController::class,'edit']);
    Route::put('/pegawai/{id}',[pegawaiController::class, 'update']);
    Route::delete('/pegawai/{id}',[pegawaiController::class,'destroy']);
    
    Route::get('/jabatan',[jabatanController::class,'index']);
    Route::get('/jabatan-add',[jabatanController::class,'create']);
    Route::post('/jabatan',[jabatanController::class,'store']);
    Route::get('/jabatan-edit/{id}',[jabatanController::class,'edit']);
    Route::put('/jabatan/{id}',[jabatanController::class,'update']);
    Route::delete('/jabatan/{id}',[jabatanController::class,'destroy']);



    Route::get('/tugas',[tugasController::class,'index']);

    Route::get('/perusahaan',[perusahaanController::class,'index']);
    Route::get('/perusahaan-add',[perusahaanController::class,'create']);
    Route::post('/perusahaan',[perusahaanController::class,'store']);
    Route::get('/perusahaan-edit/{id}',[perusahaanController::class,'edit']);
    Route::put('/perusahaan/{id}',[perusahaanController::class,'update']);
    Route::delete('/perusahaan/{id}',[perusahaanController::class,'destroy']);
    
    Route::get('/user',[userrController::class,'index']);
});



Auth::routes();

Route::get('/home', [HomeController::class, 'index']);
