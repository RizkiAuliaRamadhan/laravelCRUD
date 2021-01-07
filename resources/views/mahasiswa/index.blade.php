<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <title>Data Mahasiswa</title>
</head>
<body>

<div class="container">
    <h1 class="text-center">Data Mahasiswa</h1>
    <a href="{{route('mahasiswas.create')}}" class="btn btn-primary">Tambah Data</a>
    <br>
    <table class="table table-striped table-inverse">
        <thead class="thead-inverse">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($mahasiswas as $mahasiswa)
                <tr>
                    <td scope="row">{{$loop->iteration}}</td>
                    <td><a href="{{route('mahasiswas.show', ['mahasiswa' => $mahasiswa->id])}}">{{$mahasiswa->nim}}</a></td>
                    <td>{{$mahasiswa->nama}}</td>
                    <td>{{$mahasiswa->jenis_kelamin}}</td>
                    <td>{{$mahasiswa->email}}</td>
                    <td>{{$mahasiswa->jurusan}}</td>
                    <td>{{$mahasiswa->alamat}}</td>
                    <td>
                        <a href="{{route('mahasiswas.edit', ['mahasiswa' => $mahasiswa->id])}}" class="btn btn-success">ubah</a>
                        <form action="{{route('mahasiswas.destroy', ['mahasiswa' => $mahasiswa->id])}}" method="post" onclick="return confirm('yakin mau dihapus?')">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <div class="text-danger">Data Kosong</div>
            @endforelse
        </tbody>
    </table>
</div>

<script src="{{asset('/js/app.js')}}"></script>
@include('sweetalert::alert')
<script src="{{asset('/vendor/sweetalert/sweetalert.all.js')  }}"></script>

<script>
    swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
});
</script>
</body>
</html>
