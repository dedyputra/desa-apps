@extends('layouts.app')


@section('content')

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Data Penduduk</h1>
  </div>
    <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Tabel Data Penduduk</h6>
      </div>
          <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
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
                      </tr>
                    </thead>
                        <tbody>
                     

                        </tbody>
                      </table>
                    </div>
                  </div>
              </div>


@endsection