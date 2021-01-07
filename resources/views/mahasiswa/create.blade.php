<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <title>Pendaftran Mahasiswa</title>
</head>
<body>

<div class="container pt-4 bg-white">
    <div class="row">
        <div class="col-md-8 col-xl-6">
            <h1>Pendaftaran Mahasiswa</h1>
            <hr>

            <form action="{{route('mahasiswas.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nim">Nim :</label>
                    <input type="text"
                    class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{old('nim')}}">
                    @error('nim')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nama">Nama Lengkap :</label>
                    <input type="text"
                    class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama')}}">
                    @error('nama')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Jenis Kelamin : </label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="jenis_kelamin" id="laki-laki" value="L"
                            {{old('jenis_kelamin')=='L' ? 'checked' : ''}}>
                            <label for="laki-laki">Laki-laki</label>
                        </div>
                    </div>
                    <div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="jenis_kelamin" id="perempuan" value="P"
                            {{old('jenis_kelamin')=='P' ? 'checked' : ''}}>
                            <label for="perempuan">Perempuan</label>
                        </div>
                    </div>
                    @error('jenis_kelamin')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
                    @error('email')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="jurusan"></label>
                    <select name="jurusan" id="jurusan" class="form-control">
                        <option value="Tehnik Informatika"
                            {{old('jurusan')=='Tehnik Informatika' ? 'selected' : ''}}>Tehnik Informatika</option>
                        <option value="Sistem Informasi"
                            {{old('jurusan')=='Sistem Informasi' ? 'selected' : ''}}>Sistem Informasi</option>
                        <option value="Ilmu Komputer"
                            {{old('jurusan')=='Ilmu Komputer' ? 'selected' : ''}}>Ilmu Komputer</option>
                        <option value="Tehnik Komputer"
                            {{old('jurusan')=='Tehnik Komputer' ? 'selected' : ''}}>Tehnik Komputer</option>
                        <option value="Tehnik Telekomunikasi"
                            {{old('jurusan')=='Tehnik Telekomunikasi' ? 'selected' : ''}}>Tehnik Telekomunikasi</option>
                    </select>
                    @error('jurusan')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat :</label>
                    <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="10">{{old('alamat')}}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>
</div>

@include('sweetalert::alert')

<script src="{{asset('/js/app.js')}}"></script>
</body>
</html>
