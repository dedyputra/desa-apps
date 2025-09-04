<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Apps Desaku</title>

  <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">
    @include('layouts.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        @include('layouts.navbar')
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>
      @include('layouts.footer')
    </div>
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  @include('layouts.logout-modal')

  <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>
  <script src="{{ asset('template/vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('template/js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ asset('template/js/demo/chart-pie-demo.js') }}"></script>
  <script src="{{ asset('template/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable();
    });

  </script>

</body>

</html>
