@section('content')
@include('navbar')
<h2>Daftar Jabatan</h2>
<table class="table">
    <thead>
        <tr>
            <th>No. </th>
            <th>Nama</th>
            <th>Pegawai</th>
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
        </tr>
        @endforeach
    </tbody>
</table>