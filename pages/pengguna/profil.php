<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="../../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css" />
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css" />
  <!-- CodeMirror -->
  <link rel="stylesheet" href="../../plugins/codemirror/codemirror.css" />
  <link rel="stylesheet" href="../../plugins/codemirror/theme/monokai.css" />
  <!-- SimpleMDE -->
  <link rel="stylesheet" href="../../plugins/simplemde/simplemde.min.css" />
  <!-- Theme saya -->
  <link rel="stylesheet" href="../../dist/css/style.css" />
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css" />
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css" />
</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed"
  style="margin: 0px; padding: 0px; background-color: rgb(241, 242, 242)">
  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="../../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60" />
    </div>

    <!-- Navbar -->

    <nav class="main-header navbar navbar-expand navbar-white navbar-light shadow-sm">
      <div class="container">
        <!-- Left navbar links -->
        <div class="col-7">
          <ul class="navbar-nav">
            <div class="col-4">
              <li class="nav-item d-none d-sm-inline-block">
                <a href="../../index.php" class="nav-link">LOGO</a>
              </li>
            </div>
            <div class="col-8">
              <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search" style="width: 100%">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Cari Cerita"
                    aria-label="Search" />
                  <div class="input-group-append">
                    <button class="btn btn-sidebar"></button>
                  </div>
                </div>
              </div>
            </div>
          </ul>
        </div>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto iconnavbar">
          <!-- Navbar Search -->
          <li class="nav-item">
            <a class="nav-link" href="../../index.php" role="button">
              <i class="fas fa-home"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../index.php" role="button">
              <i class="fas fa-server"></i>
            </a>
          </li>

          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="../../#">
              <i class="far fa-bell"></i>
              <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="../../#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle" />
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Brad Diesel
                      <span class="float-right text-sm text-info"><i class="fas fa-circle"></i></span>
                    </h3>
                    <p class="text-sm">Call me whenever you can...</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
            </div>
          </li>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item">
            <a class="nav-link iconnavbar" href="../../index.php" role="button">
              <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"
                style="height: 130%" />
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" type="button" data-toggle="modal" data-target="#modal-tambah">
              <i class="far fa-plus-square"></i>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <br />
    <br />
    <div class="container">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-12" style="height: 170px;  ">
              <div class="fotopage">
                <img src="../../dist/img/photo1.png" alt="Responsive image" style="
                      height: 250px;
                      width: 100%;
                      object-fit: cover;
                      
                    " />
                <div class="overlay"></div>
                <div class="overlay1"></div>
                <div class="overlay2"></div>
                <div class="overlay2"></div>
              </div>
            </div>

            <div class="col-md-12" style="height: 170px;z-index: 1; ">
              <div class="container">
                <div class="row">
                  <div class="col-md-2">
                    <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"
                      style="width: 10rem; border: 2px solid white" />
                  </div>
                  <div class="col-md-6">
                    <div class="col-md-12">
                      <p class="font-weight-bold" style="font-size: 2rem;    position: absolute;
                        margin-top: -45px;">
                        Nama
                      </p>
                      <p class="font-weight-bold" style="font-size: 1.0625rem;    margin-top: 60px;"> Kredebsial profil
                      </p>

                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="float-right font-weight-bold" style="font-size: 1.0625rem; margin-top: 60px;">
                      <i class="fas fa-cog"></i> Ubah foto sampul <br>

                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="container ">
              <div class="col-md-12" style="background-color: white;
            height: 150px;
            margin-top: -90px;
             ">
                <br>
                <div class="col-md-12" style="border-top: 1.5px solid rgb(189, 189, 189);"></div>
                <div class="col-md-12" style="z-index:1 ;">
                  <div class="float-right font-weight-bold" style="font-size: 1.0625rem; margin-top: 20px;">
                    <a class="btn btn-light" type="button" data-toggle="modal" data-target="#modal-edit-profil"
                      style="border: 1px solid black">
                      Edit profil
                    </a> 
                  </div>
                  <br>
                  <br>
                  <br>
                  <div class="row text-center " style=" margin-top: 10px;">
                    <div class="col"></div>
                    <div class="col" style="border-bottom: 3px solid #b92b27 ;">
                      <button type="button" class="btn">Unggahan</button>
                    </div>
                    <div class="col"></div>
                    <div class="col">
                      <button type="button" class="btn">Pertanyaan</button>
                    </div>
                    <div class="col"></div>
                    <div class="col">
                      <button type="button" class="btn">Berbagi</button>
                    </div>
                    <div class="col"></div>

                  </div>
                </div>
              </div>
            </div>



            <!-- /.col -->

            <!-- /.col -->
          </div>
        </div>
      </div>
    </div>


    <br>



    <div class="container">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12">
                <!-- Box Comment -->
                <div class="card card-widget">
                  <div class="card-header ">
                    <p class="font-weight-bold  "  type="button" data-toggle="modal" data-target="#modal-edit-profil">Deskripsi pengguna</p>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body" style="padding-top: 10px;">
 
                    <div class="col-12" type="button" data-toggle="modal" data-target="#modal-edit-profil">
                      <table>
                        <tr>
                          <td><i class="fas fa-suitcase"></i> &emsp;</td>
                          <td>pekerjaan</td>
                        </tr>
                        <tr>
                          <td><i class="fas fa-graduation-cap"> </i> &emsp;</td>
                          <td>pendidikan</td>
                        </tr>
                        <tr>
                          <td><i class="fas fa-map-marker-alt"></i> &emsp;</td>
                          <td>lokasi</td>
                        </tr>
                      </table>
                    </div> 
                  </div>
                  <!-- /.card-body -->

                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->

              </div>


            </div>

          </div>

          <div class="col-md-8">
            <div class="12">
              <div class="card card-widget">
                <div class="card-header">
                  <div class="user-block">
                    <img class="img-circle" src="../../dist/img/user1-128x128.jpg" alt="User Image" />
                    <span class="username">Jonathan Burke Jr.

                    </span>
                    <span class="description">Nama topik - kredensial profil</span>
                    <a class="btn font-weight-bold" type="button" data-toggle="modal" data-target="#modal-tambah" style="position: relative;
                      margin-left: -12px;">
                      Apa yang ingin anda tanyakan atau bagikan?
                    </a>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-footer -->
              </div>



              <div class="card card-widget">
                <div class="card-header">
                  <div class="user-block">
                    <img class="img-circle" src="dist/img/user1-128x128.jpg" alt="User Image" />
                    <span class="username"><a href="#">Jonathan Burke Jr. <button class="btn  " type="submit" name="op"
                          value="Link 1">Ikuti</button>
                        </li></a>
                    </span>
                    <span class="description">Nama topik - kredensial profil</span>
                  </div>
                  <!-- /.user-block -->
                  <div class="card-tools">
                    <p>#ASK</p>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                  <p class="font-weight-bold">Judul.</p>
                  <p>I took this photo this morning. What do you guys think?</p>
                  <img class="img-fluid pad" src="../dist/img/photo2.png" alt="Photo" />
                  <br>
                  <div class="row">
                    <div class="col-2 iconnavbar" style="background-color:yellow; border-radius: 20rem;">
                      <button type="button" class="btn btn-sm">
                        <i class="far fa-thumbs-up"></i> 22
                      </button>
                      <span>|</span>
                      <button type="button" class="btn btn-sm">
                        <i class="far fa-thumbs-down"></i>
                      </button>
                    </div>
                    <button type="button" class="btn btn-sm">
                      <i class="far fa-edit"></i> <span>Jawab</span>
                    </button>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer card-comments">
                  <div class="card-comment">
                    <!-- User image -->
                    <img class="img-circle img-sm" src="dist/img/user3-128x128.jpg" alt="User Image" />

                    <div class="comment-text">
                      <span class="username">
                        Maria Gonzales
                        <span class="text-muted float-right">8:03 PM Today</span> </span><!-- /.username -->
                      It is a long established fact that a reader will be
                      distracted by the readable content of a page when looking at
                      its layout.
                    </div>
                    <!-- /.comment-text -->
                  </div>
                  <!-- /.card-comment -->

                  <!-- /.card-comment -->
                </div>
                <!-- /.card-footer -->
                <div class="card-footer">
                  <form action="#" method="post">
                    <img class="img-fluid img-circle img-sm" src="dist/img/user4-128x128.jpg" alt="Alt Text" />
                    <!-- .img-push is used to add margin to elements next to floating images -->
                    <div class="img-push">
                      <input type="text" class="form-control form-control-sm"
                        placeholder="Press enter to post comment" />
                    </div>
                  </form>
                </div>
                <!-- /.card-footer -->
              </div>






              <div class="card card-widget">
                <div class="card-header">
                  <div class="user-block">
                    <img class="img-circle" src="dist/img/user1-128x128.jpg" alt="User Image" />
                    <span class="username"><a href="#">Jonathan Burke Jr. <button class="btn  " type="submit" name="op"
                          value="Link 1">Ikuti</button>
                        </li></a>
                    </span>
                    <span class="description">Nama topik - kredensial profil</span>
                  </div>
                  <!-- /.user-block -->
                  <div class="card-tools">
                    <p>#ASK</p>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                  <p class="font-weight-bold">Judul.</p>
                  <p>I took this photo this morning. What do you guys think?</p>
                  <img class="img-fluid pad" src="../dist/img/photo2.png" alt="Photo" />
                  <br>
                  <div class="row">
                    <div class="col-2 iconnavbar" style="background-color:yellow; border-radius: 20rem;">
                      <button type="button" class="btn btn-sm">
                        <i class="far fa-thumbs-up"></i> 22
                      </button>
                      <span>|</span>
                      <button type="button" class="btn btn-sm">
                        <i class="far fa-thumbs-down"></i>
                      </button>
                    </div>
                    <button type="button" class="btn btn-sm">
                      <i class="far fa-edit"></i> <span>Jawab</span>
                    </button>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer card-comments">
                  <div class="card-comment">
                    <!-- User image -->
                    <img class="img-circle img-sm" src="dist/img/user3-128x128.jpg" alt="User Image" />

                    <div class="comment-text">
                      <span class="username">
                        Maria Gonzales
                        <span class="text-muted float-right">8:03 PM Today</span> </span><!-- /.username -->
                      It is a long established fact that a reader will be
                      distracted by the readable content of a page when looking at
                      its layout.
                    </div>
                    <!-- /.comment-text -->
                  </div>
                  <!-- /.card-comment -->

                  <!-- /.card-comment -->
                </div>
                <!-- /.card-footer -->
                <div class="card-footer">
                  <form action="#" method="post">
                    <img class="img-fluid img-circle img-sm" src="dist/img/user4-128x128.jpg" alt="Alt Text" />
                    <!-- .img-push is used to add margin to elements next to floating images -->
                    <div class="img-push">
                      <input type="text" class="form-control form-control-sm"
                        placeholder="Press enter to post comment" />
                    </div>
                  </form>
                </div>
                <!-- /.card-footer -->
              </div>
            </div>
            <!-- /.card -->
          </div>

        </div>
      </div>
    </div>








    <!-- .modal -->

    <?php include '../modal/modal.php' ?>

    <!-- /.modal -->
  
 
  <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge("uibutton", $.ui.button);
  </script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="../../plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="../../plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="../../plugins/moment/moment.min.js"></script>
  <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="../../plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.js"></script>
  <!-- Summernote -->
  <script src="../../plugins/summernote/summernote-bs4.min.js"></script>
  <!-- CodeMirror -->
  <script src="../../plugins/codemirror/codemirror.js"></script>
  <script src="../../plugins/codemirror/mode/css/css.js"></script>
  <script src="../../plugins/codemirror/mode/xml/xml.js"></script>
  <script src="../../plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="../../dist/js/pages/dashboard.js"></script>
  <script>
    $(function () {
      // Summernote
      $("#summernote").summernote();

      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai",
      });
    });
  </script>
</body>

</html>