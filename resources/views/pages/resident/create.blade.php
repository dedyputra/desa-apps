@extends('layouts.app')

@section('content')
<!-- Page Heading -->
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
           <input type="text" inputmode="numeric" id="nik" name="nik" class="form-control"  placeholder="Masukkan NIK" required>
        </div>
        <div class="form-group mb-3">
           <label for="name">Nama Lengkap</label>
           <input type="text" inputmode="numeric" id="name" name="name" class="form-control"  placeholder="Masukkan Nama Lengkap" required>
        </div>
        <div class="form-group mb-3">
             <label for="gender">Jenis Kelamin</label>
            <select class="form-control" id="gender" name="gender" required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="male">Laki-laki</option>
                <option value="female">Perempuan</option>
            </select>
        </div>

        <div class="form-group mb-3">
         <label for="birth_place">Tempat Lahir</label>
         <input type="text" class="form-control" id="birth_place" name="birth_place" required placeholder="Masukkan Tempat Lahir" required>
        </div>
        <div class="form-group mb-3">
            <label for="birth_date">Tanggal Lahir</label>
            <input type="date" class="form-control" id="birth_date" name="birth_date" required>
        </div>
        <div class="form-group mb-3">
            <label for="address">Alamat</label>
            <textarea class="form-control" id="address" name="address" rows="3" required placeholder="Masukkan Alamat"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="religion">Agama</label>
            <input type="text" class="form-control" id="religion" name="religion" required placeholder="Masukkan Agama" required>
        </div>
         <div class="form-group mb-3">
            <label for="marital_status">Status Perkawinan</label>
              <select class="form-control" id="marital_status" name="marital_status" required>
                    <option value="">--Pilih Status Perkawinan--</option>
                    <option value="single">Belum Kawin</option>
                    <option value="married">Sudah Menikah</option>
                    <option value="divorced">Cerai</option>
                    <option value="widowed">Janda/Duda</option>
              </select>
        </div>
        <div class="form-group mb-3">
            <label for="occupation">Pekerjaan</label>
            <input type="text" class="form-control" id="occupation" name="occupation" required placeholder="Masukkan Pekerjaan" required>
        </div>
        <div class="form-group mb-3">
            <label for="occupation">Telepon</label>
            <input type="text" class="form-control" inputmode="numeric" id="phone" name="phone" required placeholder="Masukkan Nomor Telepon" required>
        </div>
        <div class="form-group mb-3">
                <label for="status">Status Penduduk</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="">-- Pilih Status Penduduk --</option>
                    <option value="active">Aktif</option>
                    <option value="moved">Pindah</option>
                    <option value="divorced">Almarhum</option>
                </select>
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
