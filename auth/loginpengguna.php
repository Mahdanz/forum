<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>#</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css" />
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css" />
</head>

<body class="hold-transition login-page">
  <div class="login-box" style="width: 650px">
    <!-- /.login-logo -->
    <div class="card">
      <div class="row">
        <div class="col-12 text-center">LOGO</div>
        <!-- login -->


        <?php
        if (isset($_GET['pesan'])) {
          if ($_GET['pesan'] == "gagal") {
            echo "Login gagal! username dan password salah!";
          } else if ($_GET['pesan'] == "logout") {
            echo "Anda telah berhasil logout";
          } else if ($_GET['pesan'] == "belum_login") {
            echo "Anda harus login untuk mengakses halaman admin";
          }
        }
        ?>

 
          <div class="col-6">
            <div class="container" style="margin-top: 50px; margin-bottom: 50px">
              <div class="card-body login-card-body">
                <p style="border-bottom: 1px solid black; margin-bottom: 30px">
                  Masuk
                </p>

                <form action="cek_login_pengguna.php" method="post">
                  <p class="font-weight-bold" style="margin-bottom: 5px">
                    Email
                  </p>
                  <div class="input-group mb-3">
                    <input type="text" name="email" class="form-control"  placeholder="Masukkan email"/>
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                    </div>
                  </div>
                  <p class="font-weight-bold" style="margin-bottom: 5px">
                    Kata Sandi
                  </p>
                  <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control"  placeholder="Masukkan kata sandi"/>
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                  </div>
                  <br />
                  <br />
                  <br />
                  <div class="row">
                    <!-- /.col -->
                    <div class="col-4"></div>
                    <div class="col-4">
                      <button type="submit" value="LOGIN" class="btn btn-primary btn-block" style="margin-top: 10px">
                        Masuk
                      </button>
                    </div>
                    <!-- /.col -->
                  </div>
                </form>
              </div>
            </div>
          </div>
        
        <!-- daftar -->
        <div class="col-6">
          <div class="container" style="
                border-left: 1px solid black;
                margin-top: 50px;
                margin-bottom: 50px;
              ">
            <div class="card-body login-card-body">
              <p style="border-bottom: 1px solid black; margin-bottom: 30px">
                Buat akun
              </p>

              <form action="#" method="post">
                <p class="font-weight-bold" style="margin-bottom: 5px">
                  Email
                </p>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" />
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                </div>
                <p class="font-weight-bold" style="margin-bottom: 5px">
                  Nama pengguna
                </p>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" />
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-6">
                    <p class="font-weight-bold" style="margin-bottom: 5px">
                      Kata sandi
                    </p>
                    <div class="input-group mb-3">
                      <input type="password" class="form-control" />
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-6">
                    <p class="font-weight-bold" style="margin-bottom: 5px">
                      Umur
                    </p>
                    <div class="input-group mb-3">
                      <input type="number" class="form-control" />
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-heart"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <!-- /.col -->
                  <div class="col-3"></div>
                  <div class="col-5">
                    <button type="submit" class="btn btn-primary btn-block">
                      Buat akun
                    </button>
                  </div>
                  <!-- /.col -->
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
</body>

</html>