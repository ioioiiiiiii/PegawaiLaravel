
@include('navbar')
<h2>Daftar Jabatan</h2>
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
                -{{$pegawai->nama}} <br>
                @endforeach
            </td>
        </tr>
        @endforeach
    </tbody>
</table>