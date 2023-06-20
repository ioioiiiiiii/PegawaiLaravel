<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use App\Models\pegawai;
use App\Models\jabatan;

use App\Models\userr;
use App\Models\perusahaan;
class pegawaiController extends Controller
{
    public function index()
    {
        $pegawai = pegawai::with(['jabatan','tugas','perusahaan','userr'])->get();
        return view('pegawai',['listpegawai'=>$pegawai]);
    }

    public function create()
    {
        $perusahaan = perusahaan::all();
        $jabatan = jabatan::all();

        return view('pegawai-add', compact('perusahaan','jabatan'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nip' => 'unique:pegawai'
        ]);

        $pegawai=pegawai::create($request->all());

        if($pegawai){
            Session::flash('status','Sukses');
            Session::flash('message','Penambahan data Berhasil');
        }
        return redirect('/pegawai');
    }

    
    public function edit(Request $request, $id)
    {
        $pegawai = pegawai::with( ['perusahaan','jabatan'])->findOrFail($id);
        $perusahaan = perusahaan::where('id','!=',$pegawai->id_perusahaan)->get(['id','nama']);
        $jabatan = jabatan::where('id','!=',$pegawai->id_jabatan)->get(['id','nama']);
        return view('pegawai-edit',['pegawai' =>$pegawai,'perusahaan'=>$perusahaan, 'jabatan'=>$jabatan]);
    }
    
    public function update(Request $request, $id)
    {
        $pegawai = pegawai::findOrFail($id);

        $pegawai->update($request->all());
        if($pegawai){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil DiEdit');
        }
        return redirect('/pegawai');
    }

    public function destroy($id)
    {
        $pegawai = pegawai::find($id)->delete();

        if($pegawai){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil Dihapus');
        }
        return redirect('pegawai');
    }
}