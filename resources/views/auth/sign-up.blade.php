<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/logo.jpg">
  <title>
    Registrasi
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/349ee9c857.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/corporate-ui-dashboard.css?v=1.0.0" rel="stylesheet" />
</head>

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="position-absolute w-40 top-0 start-0 h-100 d-md-block d-none">
                <div class="oblique-image position-absolute d-flex fixed-top ms-auto h-100 z-index-0 bg-cover me-n8" style="background-image:url('../assets/img/bg.jpg')">
                  <div class="text-start position-absolute fixed-bottom ms-7">
                    <h6 class="text-white text-sm mb-5">Copyright © 2024 TEAM UBSI</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-black text-dark display-6">Sign up</h3>
                  <p class="mb-0">Nice to meet you! Please enter your details.</p>
                </div>
                <div class="card-body">
                  <form role="form" action="{{ route('registrasi.submit')}}" method="post">
                    @csrf
                    <label>Nama Lengkap</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Masukan Nama" aria-label="Name" aria-describedby="name-addon" name="nama">
                    </div>
                    <label>Alamat Email</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" placeholder="Enter your email address" aria-label="Email" aria-describedby="email-addon" name="email">
                    </div>
                    <label>No Telp</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" placeholder="Enter your email address" aria-label="Email" aria-describedby="email-addon" name="telp">
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" placeholder="Create a password" aria-label="Password" aria-describedby="password-addon">
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn btn-dark w-100 mt-4 mb-3">Sign up</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-xs mx-auto">
                    Already have an account?
                    <a href="javascript:;" class="text-dark font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Corporate UI Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/corporate-ui-dashboard.min.js?v=1.0.0"></script>
</body>

</html>