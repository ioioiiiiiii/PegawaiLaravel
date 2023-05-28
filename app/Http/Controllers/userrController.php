<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userrController extends Controller
{
    public function index()
    {
        $userr = userr::all();
        return view('userr',['listuser'=>$userr]);
    }
}
