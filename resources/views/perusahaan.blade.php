@section('content')
@include('navbar')
<h1>Halaman Daftar Pegawai</h1>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Daftar Pegawai</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($listperusahaan as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->id}}</td>
            <td>{{$data->nama}}</td>
            <td>
                @foreach($data->pegawai as $pegawai)
                    -{{$pegawai->nama}} <br>
                @endforeach
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
