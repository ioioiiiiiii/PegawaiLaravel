@extends('layouts.app')

@section('content')

<div class="card-body">
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-light">{{ __('Edit Tugas  ') }}</div>
                <div class="m-5">
                    <form action="/tugas/{{$tugas->id}}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="jobdesk"><b>Nama</b></label>
                        <input type="text" class="form-control" id="jobdesk" name="jobdesk" value="{{$tugas->jobdesk}}" required>
                    </div>
                
                    <div class="mb-3"> <label ><b>Pegawai</b></label><br>
                        @foreach ($pegawai as $index => $pegawai)
                        <input type="checkbox" name="pegawai_id[]" value="{{ $pegawai->id }}">{{ $pegawai->nama }}<br> 
                        @endforeach
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-success" type="submit">Simpan</button>
                    </div>  
                    
            </div>
        </div>
    </form>
</div>
@endsection