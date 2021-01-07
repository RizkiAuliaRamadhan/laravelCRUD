<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <title>{{$mahasiswa->nama}}</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">{{$mahasiswa->nama}}</h1>
    <ul class="list-group">
        <li class="list-group-item">Nim : {{$mahasiswa->nim}}</li>
        <li class="list-group-item">Nama : {{$mahasiswa->nama}}</li>
        <li class="list-group-item">Jenis Kelamin : {{$mahasiswa->jenis_kelamin}}</li>
        <li class="list-group-item">Email : {{$mahasiswa->email}}</li>
        <li class="list-group-item">Jurusan : {{$mahasiswa->jurusan}}</li>
        <li class="list-group-item">Alamat : {{$mahasiswa->alamat}}</li>
    </ul>
    <a class="btn btn-primary" href="{{url('/mahasiswas')}}">Kembali</a>
</div>

<script src="{{asset('/js/app.js')}}"></script>
</body>
</html>

