<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Caption Halaman</title>
    <!-- Referensi -->
    <?php include 'referensi.php';?>
    <!-- daterange picker -->
    <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">
      <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">
    <!-- /.Referensi -->
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include 'navbar.php';?>
        <!-- /.navbar -->


        <!-- Main Sidebar Container -->
        <?php include 'sidebar.php';?>
        <!-- /.Main Sidebar Container -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="mb-2 row">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Judul Halaman</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PNU</a></li>
              <li class="breadcrumb-item active">SI</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content 1 -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <!-- Form -->
            <form method="POST" action="#" enctype="multipart/form-data">
            <div class="card">
              <div class="border-0 card-header">
                <h3 class="card-title">Form Sederhana</h3>
              </div>
              <div class="card-body">
                  <div class="form-group">
                    <label for="user_email">User eMail</label>
                    <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Masukan Email Anda">
                  </div>
                  <div class="form-group">
                    <label for="user_password">Password</label>
                    <input type="password" class="form-control" name="user_password" id="user_password" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="user_nama">Nama Lengkap</label>
                    <input type="text" class="form-control" name="user_nama" id="user_nama" placeholder="Nama Lengkap">
                  </div>
                  <!-- radio -->
                  <div class="form-group">
                      <label for="user_nama">Gender</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" id="gender0" checked>
                          <label class="form-check-label">Wanita</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" id="gender1">
                          <label class="form-check-label">Pria</label>
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="user_prodi">Program Studi</label>
                    <select class="form-control" name="user_prodi" name="user_prodi" id="user_prodi" placeholder="Pilih Program Studi">
                      <option value="01">Keperawatan</option>
                      <option value="02">Teknologi Penangkapan Ikan</option>
                      <option value="03">Teknologi Pengolahan Hasil Laut</option>
                      <option value="04">Teknologi Budidaya Ikan</option>
                      <option value="05">Sistem Informasi</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="file_foto">Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="file_foto" id="file_foto">
                        <label class="custom-file-label" for="file_foto">Pilih Foto</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="setuju" id="setuju">
                    <label class="form-check-label" for="setuju">Menyetujui Syarat & Ketentuan Yang Berlaku</label>
                  </div>
              </div>
              <div class="card-footer">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary float-right">Simpan</button>
              </div>
            </div>
            <!-- /.card -->
            </form>
            <!-- /.form -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-md-6">
            <!-- Form -->
            <form method="POST" action="#" enctype="multipart/form-data">
            <div class="card">
              <div class="border-0 card-header">
                <h3 class="card-title">Form Advance</h3>
              </div>
              <div class="card-body">
                  <!-- Date -->
                  <div class="form-group">
                    <label>Tanggal:</label>
                      <div class="input-group date" id="tanggal_lahir" data-target-input="nearest">
                          <input type="text" class="form-control datetimepicker-input" data-target="#tanggal_lahir"/>
                          <div class="input-group-append" data-target="#tanggal_lahir" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                  </div>
                  <!-- Date and time -->
                  <div class="form-group">
                    <label>Tanggal & Jam:</label>
                      <div class="input-group date" id="waktu" data-target-input="nearest">
                          <input type="text" class="form-control datetimepicker-input" data-target="#waktu"/>
                          <div class="input-group-append" data-target="#waktu" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                  </div>
                  <!-- /.form group -->
                  <!-- time Picker -->

                    <div class="form-group">
                    <label>Time picker:</label>

                    <div class="input-group date" id="timepicker" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#timepicker"/>
                      <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="far fa-clock"></i></div>
                      </div>
                      </div>
                    </div>
                    <!-- /.form group -->

              </div>
              <div class="card-footer">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary float-right">Simpan</button>
              </div>
            </div>
            <!-- /.card -->
            </form>
            <!-- /.form -->
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <!-- Form -->
            <form method="POST" action="#" enctype="multipart/form-data">
            <div class="card">
              <div class="border-0 card-header">
                <h3 class="card-title">Form Editor</h3>
              </div>
              <div class="card-body">
                <textarea id="summernote">
                  Silahkan <em>ketik</em> <u>text</u> <strong>disini</strong>
                </textarea>
              </div>
              <div class="card-footer">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary float-right">Simpan</button>
              </div>
            </div>
            <!-- /.card -->
            </form>
            <!-- /.form -->
          </div>
          <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content 1 -->

  </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <?php include 'controlsidebar.php';?>
        <!-- /.control-sidebar -->
        <!-- Main Footer -->
        <?php include 'footer.php';?>
        <!-- /.Main Footer -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <?php include 'script.php';?>
    <script src="assets/plugins/moment/moment.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
      $(function(){
          //Date picker
          $('#tanggal_lahir').datetimepicker({
            format: 'L'
          });
          //Date and time picker
          $('#waktu').datetimepicker({ icons: { time: 'far fa-clock' } });

          //Timepicker
          $('#timepicker').datetimepicker({
            format: 'LT'
          })
          // Summernote
          $('#summernote').summernote({
            height: 300
          })
      });
    </script>
    <!-- /.REQUIRED SCRIPTS -->
</body>
</html>