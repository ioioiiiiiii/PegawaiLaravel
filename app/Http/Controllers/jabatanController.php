<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\jabatan;

use App\Models\pegawai;

class jabatanController extends Controller
{
    public function index()
    {
        $jabatan = jabatan::with('pegawai')->get();
        return view('jabatan',['listjabatan'=>$jabatan]);
    }


    public function create()
    {
        $pegawai = pegawai::all();
        return view('jabatan-add',compact('pegawai'));
    }

    public function store (Request $request)
    {
        $validated = $request->validate([
            'nama' => 'unique:jabatan'
        ]);

        $jabatan=jabatan::create($request->all());


        if($jabatan){
            Session::flash('status','Sukses');
            Session::flash('message','Penambahan data Berhasil');
        }
        return redirect('/jabatan');
    }

    public function edit(Request $request,$id)
    {
        $jabatan = jabatan::with('pegawai')->findOrFail($id);
        $pegawai =pegawai::where('id','!=',$jabatan->id_pegawai)->get(['id','nama']);
        return view('jabatan-edit', ['jabatan' => $jabatan]);
    }

    public function update(Request $request, $id)
    {
        $jabatan = jabatan::findOrFail($id);

        $jabatan->update($request->all());
        if($jabatan){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil DiEdit');
        }
        return redirect('/jabatan');
    }

    public function destroy($id)
    {
        $jabatan = jabatan::find($id)->delete();

        if($jabatan){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil Dihapus');
        }
        return redirect('jabatan');
    }
}
