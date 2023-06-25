<<<<<<< HEAD
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-light">{{ __('Tambah Tugas  ') }}</div>
                <div class="m-5">

                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

<div class=" ml-5 col-5 m-auto">
    <form action="tugas" method="post">
        @csrf
        <div class="mb-3">
            <label for="jobdesk">Nama</label>
            <input type="text" class="form-control" id="jobdesk" name="jobdesk" required>
        </div>

        
        <div class="mb-3"> <label ><b>Pegawai</b></label><br>
            @foreach ($pegawai as $index => $pegawai)
            <input type="checkbox" name="pegawai_id[]" value="{{ $pegawai->id }}">{{ $pegawai->nama }}<br> 
            @endforeach
        </div>
      
        
        <div class="mb-3">
            <button class="btn btn-success " type="submit">Simpan</button>
        </div>
       
    </form>
</div>
@endsection
=======

>>>>>>> c6801037bfd22ed36ca6ab117830bb56836e2034
