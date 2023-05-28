<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\perusahaan;

class perusahaanController extends Controller
{
    public function index()
    {
        $perusahaan = perusahaan::with('pegawai')->get();
        return view('perusahaan',['listperusahaan'=>$perusahaan]);
    }
}
