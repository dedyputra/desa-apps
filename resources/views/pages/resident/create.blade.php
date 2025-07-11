@extends('layouts.app')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Penduduk</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('resident.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik" required>
            </div>

            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="gander">Jenis Kelamin</label>
                <select class="form-control" id="gander" name="gander" required>
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="birth_place">Tempat Lahir</label>
                <input type="text" class="form-control" id="birth_place" name="birth_place" required>
            </div>

            <div class="form-group">
                <label for="birth_date">Tanggal Lahir</label>
                <input type="date" class="form-control" id="birth_date" name="birth_date" required>
            </div>

            <div class="form-group">
                <label for="address">Alamat</label>
                <textarea class="form-control" id="address" name="address" rows="2" required></textarea>
            </div>

            <div class="form-group">
                <label for="religion">Agama</label>
                <select class="form-control" id="religion" name="religion" required>
                    <option value="">-- Pilih Agama --</option>
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="katolik">Katolik</option>
                    <option value="hindu">Hindu</option>
                    <option value="buddha">Buddha</option>
                    <option value="konghucu">Konghucu</option>
                </select>
            </div>

            <div class="form-group">
                <label for="marital_status">Status Perkawinan</label>
                <select class="form-control" id="marital_status" name="marital_status" required>
                    <option value="">-- Pilih Status --</option>
                    <option value="single">Belum Kawin</option>
                    <option value="married">Sudah Menikah</option>
                    <option value="divorced">Cerai</option>
                    <option value="widowed">Janda/Duda</option>
                </select>
            </div>

            <div class="form-group">
                <label for="occupation">Pekerjaan</label>
                <input type="text" class="form-control" id="occupation" name="occupation" required>
            </div>

            <div class="form-group">
                <label for="phone">Telepon</label>
                <input type="text" class="form-control" id="phone" name="phone" inputmode="numeric">
            </div>

            <div class="form-group">
                <label for="status">Status Penduduk</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="">-- Pilih Status --</option>
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                    <option value="Meninggal">Meninggal</option>
                    <option value="Pindah">Pindah</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('resident.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
