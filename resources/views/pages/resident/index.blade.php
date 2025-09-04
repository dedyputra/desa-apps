@extends('layouts.app')


@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Data Penduduk</h1>
  <a href="/resident/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
</div>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Penduduk</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Status Perkawinan</th>
            <th>Pekerjaan</th>
            <th>Telepon</th>
            <th>Status Penduduk</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($residents as $index => $item)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->nik }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->gender == 'male' ? 'Laki-laki' : 'Perempuan' }}</td>
            <td>{{ $item->birth_place }}, {{ $item->birth_date }}</td>
            <td>{{ $item->address }}</td>
            <td>{{ $item->religion }}</td>
            <td>{{ $item->marital_status }} </td>
            <td>{{ $item->occupation }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->status }}</td>
            <td>
              <div class="d-flex flex-column flex-sm-row gap-2">
                <a href="/resident/{{ $item->id }}" class="d-inline-block mr-2 btn btn-sm btn-warning">
                  <i class="fas fa-pen"></i>
                </a>
                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#confirmationDelete-{{ $item->id }}">
                  <i class="fas fa-trash"></i>
                </button>
              </div>
            </td>

          </tr>
          @include("pages.resident.confirmation-delete")
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
