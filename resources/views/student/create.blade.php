<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
 <title>Pendaftaran RSMN</title>
</head>
<body>
<div class="container pt-4 bg-white">
 <div class="row">
 <div class="col-md-8 col-xl-6">
 <h1>Pendaftaran Pasien RSMN</h1>
 <hr>
 <form action="{{ route('student.store') }}"method="POST">
 @csrf
 <div class="form-group">
 <label for="no">No Rujukan</label>
 <input type="text"
 class="form-control @error('no') is-invalid @enderror"
 id="no" name="no" value="{{ old('no') }}">
 @error('no')
 <div class="text-danger">{{ $message }}</div>
 @enderror
 </div>
 <div class="form-group">
 <label for="nama">Nama Lengkap</label>
 <input type="text"
 class="form-control @error('nama') is-invalid @enderror"
 id="nama" name="nama" value="{{ old('nama') }}">
 @error('nama')
 <div class="text-danger">{{ $message }}</div>
 @enderror
 </div>
 <div class="form-group">
 <label>Jenis Kelamin</label>
 <div>
 <div class="form-check form-check-inline">
 <input class="form-check-input" type="radio" name="jenis_kelamin"
 id="laki_laki" value="L"
 {{ old('jenis_kelamin')=='L' ? 'checked': '' }} >
 <label class="form-check-label" for="laki_laki">Laki-laki</label>
 </div>
 <div class="form-check form-check-inline">
 <input class="form-check-input" type="radio" name="jenis_kelamin"
 id="perempuan" value="P"
 {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
 <label class="form-check-label" for="perempuan">Perempuan</label>
 </div>
 @error('jenis_kelamin')
 <div class="text-danger">{{ $message }}</div>
 @enderror
 </div>
 </div>
 <div class="form-group">
 <label for="jurusan">Pemeriksaan Spesialis</label>
 <select class="form-control" name="jurusan" id="jurusan">
 <option value="Gigi"
 {{ old('jurusan')=='Gigi' ? 'selected': '' }} >
 Gigi
 </option>
 <option value="THT"
 {{ old('jurusan')=='THT' ? 'selected': '' }} >
 THT
 </option>
 <option value=" Kulit"
 {{ old('jurusan')==' Kulit' ? 'selected': '' }} >
 Kulit
 </option>
 <option value="Mata"
 {{ old('jurusan')=='Mata' ? 'selected': '' }} >
 Mata
 </option>
 <option value="Anak"
 {{ old('jurusan')=='Anak' ? 'selected': '' }} >
 Anak
 </option>
 <option value=" Jantung"
 {{ old('jurusan')==' Jantung' ? 'selected': '' }} >
 Jantung
 </option>
 <option value=" Bedah"
 {{ old('jurusan')==' Bedah' ? 'selected': '' }} >
 Bedah
 </option>
 <option value=" Penyakit Dalam"
 {{ old('jurusan')==' Penyakit Dalam' ? 'selected': '' }} >
 Penyakit Dalam
 </option>
 <option value=" Saraf"
 {{ old('jurusan')==' Saraf' ? 'selected': '' }} >
 Saraf
 </option>
 </select>
 @error('jurusan')
 <div class="text-danger">{{ $message }}</div>
 @enderror
 </div>
 <div class="form-group">
 <label for="alamat">Alamat</label>
 <textarea class="form-control" id="alamat" rows="3"
 name="alamat">{{ old('alamat') }}</textarea>
 </div>
 <button type="submit" class="btn btn-primary mt-2">Daftar</button>
 <p class="mt-5"> Note *No Rujukan di dapat dari membuat janji dengan dokter </p>
 </form>
 </div>
 </div>
 </div>
 </body>
 </html>
