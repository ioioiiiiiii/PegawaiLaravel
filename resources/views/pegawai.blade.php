@section('content')
@include('navbar')
<h1>Halaman Daftar Pegawai</h1>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="my-3">
    <a href="pegawai-add" class= "btn btn-dark ml-5">Add Data</a>
</div>

@if(Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@endif



<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Perusahaan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listpegawai as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->id}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->jabatan['nama']}}</td>
            <td>{{$data->perusahaan['nama']}}</td>
            <td>
                <a href="pegawai-edit/{{$data->id}}" class="btn btn-info">Edit</a>
                <form class="d-inline" action="/pegawai/{{$data->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="submit" class="btn btn-danger" onclick="return confirm('Serius pgn dihapus bang?')">Delete</button>
                </form>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


