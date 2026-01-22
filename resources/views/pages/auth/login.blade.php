<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Login | Aplikasi Desaku</title>

  <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">
  <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">

  <style>
    .bg-login-custom {
      background: linear-gradient(135deg, #4e73df, #224abe);
    }

  </style>
</head>

<body class="bg-login-custom">
  @if ($errors->any())
  @dd($errors->all())

  @endif

  <div class="container">
    <div class="row justify-content-center align-items-center" style="min-height:100vh;">
      <div class="col-xl-9 col-lg-10 col-md-9">
        <div class="card o-hidden border-0 shadow-lg">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-6 d-none d-lg-flex align-items-center justify-content-center bg-primary text-white">
                <div class="text-center px-4">
                  <i class="fas fa-city fa-4x mb-3"></i>
                  <h3 class="font-weight-bold">Aplikasi Desaku</h3>
                  <p class="small mt-2">
                    Sistem Informasi Administrasi Desa
                    <br> Cepat • Aman • Terintegrasi
                  </p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center mb-4">
                    <h1 class="h4 text-gray-900 font-weight-bold">Login</h1>
                    <p class="small text-muted">Silakan masuk untuk melanjutkan</p>
                  </div>
                  <form method="POST" action="/login" class="user">
                    @csrf
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-white">
                            <i class="fas fa-envelope text-primary"></i>
                          </span>
                        </div>
                        <input type="email" name="email" class="form-control form-control-user" id="inputEmail" placeholder="Email" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-white">
                            <i class="fas fa-lock text-primary"></i>
                          </span>
                        </div>
                        <input type="password" name="password" class="form-control form-control-user" id="inputPassword" placeholder="Password" required>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block font-weight-bold">
                      <i class="fas fa-sign-in-alt mr-2"></i> Masuk
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="/">Create An Account</a> | <a class="small" href="/">Forgot Password?</a>

                  </div>
                  <div class="text-center">
                    <small class="text-muted">
                      © {{ date('Y') }} Aplikasi Desaku
                    </small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>

</body>
</html>
