@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Tambah Penduduk</h1>
</div>
<div class="card shadow mb-4">
  <div class="col">
    <form action="/resident" method="POST">
      @csrf
      <div class="card-body">
        <div class="form-group mb-3">
          <label for="nik">NIK</label>
          <input type="text" inputmode="numeric" id="nik" name="nik" placeholder="Masukkan NIK" required class="form-control
            @error('nik') is-invalid @enderror" value="{{ old('nik') }}" @error('nik') is-invalid @enderror>
          <span class="invalid-feedback" role="alert">
            @error('nik')
            {{ $message }}
          </span>
          @enderror>
        </div>
        <div class="form-group mb-3">
          <label for="name">Nama Lengkap</label>
          <input type="text" inputmode="numeric" id="name" name="name" placeholder="Masukkan Nama Lengkap" required class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
        </div>
        <div class="form-group mb-3">
          <label for="gender">Jenis Kelamin</label>
          <select id="gender" name="gender" required class="form-control @error('gender') is-invalid @enderror">

            <option value="">-- Pilih Jenis Kelamin --</option>
            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Laki-laki</option>
            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Perempuan</option>
          </select>
          @error('gender')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label for="birth_place">Tempat Lahir</label>
          <input type="text" id="birth_place" name="birth_place" required placeholder="Masukkan Tempat Lahir" required class="form-control  @error('birth_place') is-invalid @enderror" value="{{ old('birth_place') }}">
        </div>
        <div class="form-group mb-3">
          <label for="birth_date">Tanggal Lahir</label>
          <input type="date" id="birth_date" name="birth_date" required class="form-control @error('birth_date') is-invalid @enderror" value="{{ old('birth_date') }}">
        </div>
        <div class="form-group mb-3">
          <label for="address">Alamat</label>
          <textarea id="address" name="address" rows="3" required placeholder="Masukkan Alamat" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}"></textarea>
        </div>
        <div class="form-group mb-3">
          <label for="religion">Agama</label>
          <input type="text" id="religion" name="religion" required placeholder="Masukkan Agama" required class="form-control @error('religion') is-invalid @enderror" value="{{ old('religion') }}">
        </div>
        <div class="form-group mb-3">
          <label for="marital_status">Status Perkawinan</label>
          <select id="marital_status" name="marital_status" required class="form-control @error('maritial_status') is-invalid @enderror" value="{{ old('maritial_status') }}">
            <option value="">--Pilih Status Perkawinan--</option>
            <option value="single">Belum Kawin</option>
            <option value="married">Sudah Menikah</option>
            <option value="divorced">Cerai</option>
            <option value="widowed">Janda/Duda</option>
          </select>
        </div>
        <div class="form-group mb-3">
          <label for="occupation">Pekerjaan</label>
          <input type="text" id="occupation" name="occupation" required placeholder="Masukkan Pekerjaan" required class="form-control @error('occupation') is-invalid @enderror" value="{{ old('occupation') }}">
        </div>
        <div class="form-group mb-3">
          <label for="phone">Telepon</label>
          <input type="text" inputmode="numeric" id="phone" name="phone" required placeholder="Masukkan Nomor Telepon" required class="form-control  @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
        </div>
        <div class="form-group mb-3">
          <label for="status">Status Penduduk</label>
          <select id="status" name="status" required class="form-control @error('status') is-invalid @enderror">

            <option value="">-- Pilih Status Penduduk --</option>
            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Aktif</option>
            <option value="moved" {{ old('status') == 'moved' ? 'selected' : '' }}>Pindah</option>
            <option value="divorced" {{ old('status') == 'divorced' ? 'selected' : '' }}>Almarhum</option>
          </select>
          @error('status')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
      </div>
  </div>
  <div class="card-footer">
    <div class="d-flex justify-content-end">
      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="/resident" class="btn btn-secondary ml-2">Kembali</a>
    </div>
  </div>
  </form>
</div>
@endsection
