<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session; 

use Illuminate\Http\Request;
use App\Models\tugas;
use App\Models\pegawai;

class tugasController extends Controller
{
    public function index()
    {
        $tugas = tugas::with('pegawai')->get();
        return view('tugas',['listtugas' => $tugas]);
    }
<<<<<<< HEAD

    public function create(){
        $pegawai = pegawai::all();
        return view('tugas-add', compact(['pegawai']));
    }

    public function store(Request $request)
    {
        $pegawai = $request->input("pegawai_id");
        $tugas = tugas::create($request->all());
        $tugas->pegawai()->sync($pegawai);

        if($tugas){
            Session::flash('status','Sukses');
            Session::flash('message','Penambahan data Berhasil');
        }
        return redirect(('/tugas'));
    }
    public function edit(Request $request, $id)
    {
        $tugas = tugas::with( ['pegawai'])->findOrFail($id);
        $pegawai = pegawai::all();
        if($tugas){
            Session::flash('status','Sukses');
            Session::flash('message','Data Berhasil diUpdate');
        }
        return view('tugas-edit', [ 'pegawai' => $pegawai,'tugas' => $tugas]);
    }

    public function update(Request $request, $id)
    {
        $tugas = tugas::findOrFail($id);
        $pegawai = $request->input("pegawai_id");
        $tugas->pegawai()->sync($pegawai);

        $tugas->update($request->all());
        
        return redirect(('/tugas'));
    }

    public function destroy(Request $request,$id)
    {
        $tugas = tugas::findOrFail($id);

        $tugas ->delete($request->all());

        if($tugas){
            Session::flash('status', 'Berhasil');
            Session::flash('message', 'Data berhasil Dihapus');
        }
        return redirect('/tugas');
    }

=======
    
>>>>>>> c6801037bfd22ed36ca6ab117830bb56836e2034
}
