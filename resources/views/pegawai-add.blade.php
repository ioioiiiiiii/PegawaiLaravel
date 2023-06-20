@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-light">{{ __('Tambah Perusahaan  ') }}</div>
                <div class="m-5">



<div class=" ml-5 col-5 m-auto">
    <form action="pegawai" method="post">
        @csrf
        <div class="mb-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <div class="mb-3">
            <label for="nip">NIP</label>
            <input type="text" class="form-control" id="nip" name="nip" required>
        </div>

        
        <div class="mb-3">
            <label for="perusahaan">ID Perusahaan</label>
            <select name="id_perusahaan" id="perusahaan" class="form-control" name="id" required>
                <option value="">--pilih--</option>
                @foreach ($perusahaan as $index)
                <option value="{{$index->id}}">{{$index->nama}}</option>
                @endforeach
            </select>
        </div>

        
        <div class="mb-3">
            <label for="jabatan">ID Jabatan</label>
            <select name="id_jabatan" id="jabatan" class="form-control" name="id"required>
                <option value="">--pilih--</option>
                @foreach ($jabatan as $data)
                <option value="{{$data->id}}">{{$data->nama}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="mb-3">
            <button class="btn btn-success " type="submit">Simpan</button>
        </div>
        @if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
    </form>
</div>
@endsection