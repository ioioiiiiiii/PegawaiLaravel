@section('content')
@include('navbar')
<h1>Halaman Daftar Akun Pegawai</h1>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Nama Pegawai</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listuser as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->id}}</td>
            <td>{{$data->username}}</td>
            <td>{{$data->password}}</td>
            <td>{{$data->pegawai['nama']}}</td>
            
            
            
        </tr>
        @endforeach
    </tbody>
</table>
