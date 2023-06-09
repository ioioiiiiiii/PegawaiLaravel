<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\userr;

class userrController extends Controller
{
    public function index()
    {
        $userr = userr::with('pegawai')->get();
        return view('userr',['listuser'=>$userr]);
    }
}
