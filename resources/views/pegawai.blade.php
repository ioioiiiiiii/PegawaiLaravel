@section('content')
@include('navbar')
<h1>Halaman Daftar Pegawai</h1>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Tugas</th>
            <th>Perusahaan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listpegawai as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->id}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->jabatan['nama']}}</td>
            <td>
                @foreach($data->tugas as $tugas)
                -{{$tugas->jobdesk}} <br>
                @endforeach
            </td>
            <td>{{$data->perusahaan['nama']}}</td>
            
            
        </tr>
        @endforeach
    </tbody>
</table>
