@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-light">{{ __('Tambah Perusahaan  ') }}</div>
                <div class="m-5">
                    <form action="perusahaan" method="post">
                        @csrf
                        <div class="mb-3  ">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control " id="nama" name="nama" required>
                        </div>

                        <div class="mb-3">
                            <label for="pegawai">Daftar Pegawai</label>
                            <select name="id_pegawai" id="pegawai" class="form-control" name="id" >
                                <option value="">--pilih--</option>
                                @foreach ($pegawai as $index)
                                <option value="{{$index->id}}">{{$index->nama}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-success" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>  
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

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

