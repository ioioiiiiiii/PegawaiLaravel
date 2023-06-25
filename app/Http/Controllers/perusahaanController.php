<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;




use Illuminate\Http\Request;

use App\Models\perusahaan;

use App\Models\pegawai;

class perusahaanController extends Controller
{
    public function index()
    {
        $perusahaan = perusahaan::with('pegawai')->get();
        return view('perusahaan',['listperusahaan'=>$perusahaan]);
    }

    public function create()
    {
        $pegawai = pegawai::all();
        return view('perusahaan-add',compact('pegawai'));
    }

    public function store (Request $request)
    {
        $validated = $request->validate([
            'nama' => 'unique:perusahaan'
        ]);

        $perusahaan=perusahaan::create($request->all());


        if($perusahaan){
            Session::flash('status','Sukses');
            Session::flash('message','Penambahan data Berhasil');
        }
        return redirect('/perusahaan');
    }

    public function edit(Request $request,$id)
    {
        $perusahaan = perusahaan::with('pegawai')->findOrFail($id);
        $pegawai =pegawai::where('id','!=',$perusahaan->id_perusahaan)->get(['id','nama']);
        return view('perusahaan-edit', ['perusahaan' => $perusahaan]);
    }

    public function update(Request $request, $id)
    {
        $perusahaan = perusahaan::findOrFail($id);

        $perusahaan->update($request->all());
        if($perusahaan){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil DiEdit');
        }
        return redirect('/perusahaan');
    }

    public function destroy($id)
    {
        $perusahaan = perusahaan::find($id)->delete();

        if($perusahaan){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil Dihapus');
        }
        return redirect('perusahaan');
    }

}

