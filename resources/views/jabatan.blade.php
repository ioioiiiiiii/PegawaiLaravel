@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-light">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="my-1">
    <a href="jabatan-add" class= "btn btn-dark ml-5">Add Data</a>
</div>

@if(Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@endif  
<table class="table">
    <thead>
        <tr>
            <th>No. </th>
            <th>ID Jabatan</th>
            <th>Nama</th>
            <th>Nama Pegawai</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($listjabatan as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->id}}</td>
            <td>{{$data->nama}}</td>
            <td>
                @foreach ($data->pegawai as $pegawai)
                ~{{$pegawai->nama}} <br>
                @endforeach
            </td>
            <td>
                <a href="jabatan-edit/{{$data->id}}" class="btn btn-info">Edit</a>
                <form class="d-inline" action="/jabatan/{{$data->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" name="submit" class="btn btn-danger" onclick="return confirm('Serius pgn dihapus bang?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
            </div>
@endsection