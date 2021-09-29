<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Caption Halaman</title>
    <!-- Referensi -->
    <?php include 'referensi.php';?>
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

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="border-0 card-header">
                <h3 class="card-title">Judul Card</h3>
                <div class="card-tools">                
                  <a href="#" class="btn btn-tool text-warning btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool text-primary btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                  <a href="#" class="btn btn-tool text-success btn-sm ">
                    <i class="fas fa-plus"></i> Tambah Data
                  </a>
                </div>
              </div>
              <div class="card-body">
              <table class="table table-striped table-hover table-valign-middle">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>IPS</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>1905001</td>
                        <td>Lionel Messi</td>
                        <td>
                          <small class="mr-1 text-success"><i class="fas fa-arrow-up"></i>0.51</small>3.51
                        </td>
                        <td>
                          <a href="#" class="text-muted"><i class="fas fa-eye"></i><small>Detail </small></a>
                          <a href="#" class="text-info"><i class="fas fa-edit"></i><small>Edit </small></a>
                          <a href="#" class="text-danger"><i class="fas fa-trash"></i><small>Hapus</small></a>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>1905002</td>
                        <td>Christiano Ronaldo</td>
                        <td>
                          <small class="mr-1 text-danger"><i class="fas fa-arrow-down"></i>0.30</small>3.20
                        </td>
                        <td>
                          <a href="#" class="text-muted"><i class="fas fa-eye"></i><small>Detail </small></a>
                          <a href="#" class="text-info"><i class="fas fa-edit"></i><small>Edit </small></a>
                          <a href="#" class="text-danger"><i class="fas fa-trash"></i><small>Hapus</small></a>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>1905003</td>
                        <td>Tonny Kroos</td>
                        <td>
                          <small class="mr-1 text-warning"><i class="fas fa-arrows-alt-h"></i>0</small>3.75
                        </td>
                        <td>
                          <a href="#" class="text-muted"><i class="fas fa-eye"></i><small>Detail </small></a>
                          <a href="#" class="text-info"><i class="fas fa-edit"></i><small>Edit </small></a>
                          <a href="#" class="text-danger"><i class="fas fa-trash"></i><small>Hapus</small></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
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
    <!-- /.REQUIRED SCRIPTS -->
</body>
</html>