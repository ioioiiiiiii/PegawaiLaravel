@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-light">{{ __('Edit Pegawai') }}</div>
                

<div class="mt-5 ml-5 col-5 m-auto">
    <form action="/pegawai/{{$pegawai->id}}" method="POST" >
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{$pegawai->nama}}" required>
        </div>

        <div class="mb-3">
            <label for="nip">NIP</label>
            <input type="text" class="form-control" id="nip" name="nip" value="{{$pegawai->nip}}"required>
        </div>

        
        <div class="mb-3">
            <label for="perusahaan">ID Perusahaan</label>
            <select name="id_perusahaan" id="perusahaan" class="form-control"  required>
               <option value="{{$pegawai->perusahaan->id}}">{{$pegawai->perusahaan->nama}}</option>
               @foreach ($perusahaan as $data)
                    <option value="{{$data->id}}">{{$data->nama}}</option>
               @endforeach
            </select>
        </div>

        
        <div class="mb-3">
            <label for="jabatan">ID Jabatan</label>
            <select name="id_jabatan" id="jabatan" class="form-control" required>
                <option value="{{$pegawai->jabatan->id}}">{{$pegawai->jabatan->nama}}</option>
                @foreach ($jabatan as $index)
                    <option value="{{$index->id}}">{{$index->nama}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="mb-3">
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>
    </form>
</div>
@endsection