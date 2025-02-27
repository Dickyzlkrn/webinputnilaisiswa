<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>{{ config('app.name', 'SMK NURUL ISLAM') }}</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="../assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>



            <div class="card card-primary">
              <div class="card-header text-center"><h4>MANAGEMEN DATA SISWA SMK NURUL ISLAM</h4>
              </div>

              <div class="card-body">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                {{-- <form method="POST" action="#" class="needs-validation" novalidate=""> --}}
                  <div class="form-group">
                    <label for="identity">Email / Username</label>
                    <input id="identity" type="text" class="form-control" name="identity" tabindex="1" required autofocus>

                    @error('identity')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

  @if($errors->any())
  @foreach ($errors->all() as $error)
    <div class="text-danger">
    {{ $error }}
    </div>
  @endforeach
@endif

                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      {{-- <div class="float-right">
                        <a href="/forgot-password" class="text-small">
                          Lupa Password?
                        </a>
                      </div> --}}
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>

                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                <br>


    <div class="float-right">
                        <a href="./" class="btn btn-info text-small">
                          <i class="fas fa-home"></i> Beranda
                        </a>
                      </div>
              </div>
            </div>

            @php
              // exec('git rev-parse --verify HEAD 2> /dev/null', $output);
              // $hash = $output[0];
              // dd($hash)

              $commitHash = trim(exec('git log --pretty="%h" -n1 HEAD'));

              $commitDate = new \DateTime(trim(exec('git log -n1 --pretty=%ci HEAD')));
              $commitDate->setTimezone(new \DateTimeZone('UTC'));

              // dd($commitDate);
              // dd($commitDate->format('Y-m-d H:i:s'));
              $versi=$commitDate->format('Ymd.H.i.s');
          @endphp

            <div class="simple-footer">
              Copyright &copy; 2021  v2. {{ $versi }}
            </div>
          </div>

        </div>


      </div>



  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
</body>
</html>
