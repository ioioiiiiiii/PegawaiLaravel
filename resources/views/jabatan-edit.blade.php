@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-light">{{ __('Edit Pegawai') }}</div>
                

<div class="mt-5 ml-5 col-5 m-auto">
    <form action="/jabatan/{{$jabatan->id}}" method="POST" >
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{$jabatan->nama}}" required>
        </div>

        <div class="mb-3">
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>
    </form>
</div>
@endsection