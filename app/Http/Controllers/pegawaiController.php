<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;

class pegawaiController extends Controller
{
    public function index()
    {
        $pegawai = pegawai::with(['jabatan','tugas','perusahaan'])->get();
        return view('pegawai',['listpegawai'=>$pegawai]);
    }
}
