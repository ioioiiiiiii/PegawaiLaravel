<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tugas;

class tugasController extends Controller
{
    public function index()
    {
        $tugas = tugas::with('pegawai')->get();
        return view('tugas',['listtugas' => $tugas]);
    }
    
}
