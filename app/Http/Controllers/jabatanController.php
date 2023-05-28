<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jabatan;

class jabatanController extends Controller
{
    public function index()
    {
        $jabatan = jabatan::with('pegawai')->get();
        return view('jabatan',['listjabatan'=>$jabatan]);
    }
}
