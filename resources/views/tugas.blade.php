
@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16 ">
            <div class="card">
                <div class="card-header bg bg-dark text-white">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="my-3">
    <a href="tugas-add" class= "btn btn-dark ml-5">Add Data</a>
</div>
=======
@include('navbar')

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg bg-dark text-white">{{ __('Management Tugas') }}</div>

                <div class="card-body">
                <a href="tugas-add" class= "btn btn-dark ml-5">Add Data</a>
            </div>
>>>>>>> c6801037bfd22ed36ca6ab117830bb56836e2034

@if(Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@endif

<<<<<<< HEAD

=======
>>>>>>> c6801037bfd22ed36ca6ab117830bb56836e2034
<table class="table">
    <thead >
        <tr >
            <th>No. </th>
            <th>Nama</th>
            <th>Pegawai</th>
            <th>Action</th>
<<<<<<< HEAD
=======
            <th></th>
>>>>>>> c6801037bfd22ed36ca6ab117830bb56836e2034
        </tr>
    </thead>
    <tbody>
        @foreach ($listtugas as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->jobdesk}}</td>
            <td>
                @foreach($data->pegawai as $pegawai)
                    -{{$pegawai->nama}} <br>
                @endforeach
            </td>
            <td>
                <a href="tugas-edit/{{$data->id}}" class="btn btn-info">Edit</a>
                <form class="d-inline" action="/tugas/{{$data->id}}" method="post">
<<<<<<< HEAD
                    @csrf
                    @method('DELETE')
=======
            </td>
            <td>
                    @csrf
                    @method('delete')
>>>>>>> c6801037bfd22ed36ca6ab117830bb56836e2034
                    <button type="submit" name="submit" class="btn btn-danger" onclick="return confirm('Serius pgn dihapus bang?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<<<<<<< HEAD
=======
                </div>
            </div>
        </div>
    </div>
>>>>>>> c6801037bfd22ed36ca6ab117830bb56836e2034
</div>
@endsection


