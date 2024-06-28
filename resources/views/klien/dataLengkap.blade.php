<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Notesa-Klien</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="lte/plugins/fontawesome-free/css/all.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="lte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-danger navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
        <form class="form-inline">
            <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
                </button>
            </div>
            </div>
        </form>
        </div>
    </li>

    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
        <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
            <img src="lte/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
            <div class="media-body">
                <h3 class="dropdown-item-title">
                Brad Diesel
                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
            </div>
            <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
            <img src="lte/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
                <h3 class="dropdown-item-title">
                John Pierce
                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
            </div>
            <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
            <img src="lte/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
                <h3 class="dropdown-item-title">
                Nora Silvester
                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
            </div>
            <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
    </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light elevation-4 sidebar-light-danger">
    <!-- Brand Logo -->
    <a href="/" class="brand-link bg-danger">
    <span class="brand-text font-weight-light">NOTESA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">Christian Tampi</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
            </button>
        </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="klien" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Dashboard
            </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="profil-klien" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
                Profil Anda
            </p>
            </a>
        </li>

        <li class="nav-header">PROSES LAYANAN</li>

        <li class="nav-item">
            <a href="layanan-aktif" class="nav-link">
            <i class="nav-icon fas fa-list"></i>
            <p>
                Layanan Dipilih
            </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="progress" class="nav-link active">
            <i class="nav-icon fas fa-bars"></i>
            <p>
                Progress Layanan
            </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>
                Riwayat Transaksi
            </p>
            </a>
        </li>

        <li class="nav-header">DAFTAR LAYANAN</li>

        <li class="nav-item">
            <a href="daftar-ppat" class="nav-link ">
            <i class="nav-icon fas fa-th"></i>
            <p>
                PPAT
            </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="daftar-notaris" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Notaris
            </p>
            </a>
        </li>

        <li class="nav-header">LAINNYA</li>

        <li class="nav-item">
            <a href="klien" class="nav-link">
            <i class="nav-icon fas fa-comment"></i>
            <p>
                Testimoni
            </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-question"></i>
            <p>
                Bantuan
            </p>
            </a>
        </li>
        <li class="nav-item menu-open mt-3">
            <a href="/" class="nav-link"  data-toggle="modal" data-target="#modal-logout">
                <center>
                    <p>LOGOUT</p>
                </center>
            </a>
        </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

{{-- -------------------------------------------------------------------------------------------------------------- --}}
{{-- -------------------------------------------------------------------------------------------------------------- --}}

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Kelengkapan Data</h1>
        </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-4">
        <div class="card card-danger">
            <div class="card-header">
            <h3 class="card-title">Keterangan</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
                </button>
            </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label for="inputName">Status</label>
                <input type="text" id="inputName" class="form-control" value="Verifikasi Dokumen" disabled>
            </div>
            <div class="form-group">
                <label for="inputDescription">Deskripsi</label>
                <textarea id="inputDescription" class="form-control disabled" rows="4" disabled>Dokumen berikut sudah ditandatangani dan diperiksa oleh kanton BPN. Silahkan cek ulang dan verifikasi dokumen berikut. Berikan Tanggapan jika anda belum puas.</textarea>
            </div>
            <div class="form-group">
                <label for="inputClientCompany">Tanggal Diperbarui</label>
                <input type="text" id="inputClientCompany" class="form-control" value="27/07/2024" disabled>
            </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
        <div class="col-md-8">
            <div class="card card-info">
                <div class="card-header">
                <h3 class="card-title">Files</h3>
    
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
                </div>
                <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th>File Name</th>
                        <th>File Size</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
    
                    <tr>
                        <td>Surat Akta Tanah.pdf</td>
                        <td>49.8005 kb</td>
                        <td class="text-right py-0 align-middle">
                        <div class="btn-group btn-group-sm">
                            <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fas fa-download"></i></a>
                        </div>
                        </td>
    
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->


            <div class="card card-success">
                <div class="card-header">
                <h3 class="card-title">Verifikasi</h3>
    
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
                </div>
                <div class="card-body">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Setuju untuk verifikasi data</label>
                    </div>
                    
                </div>
                <div class="card-footer">
                    <h6 style="color:red;font-size:12px;">Klik tombol diatas jika anda ingin verifikasi data</h6>
                </div>

                <!-- /.card-body -->
            </div>

            <div class="card card-secondary">
                <div class="card-header">
                <h3 class="card-title">Tanggapan</h3>
    
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="inputClientCompany">Tanggapan Anda</label>
                    <input type="text" id="inputClientCompany" class="form-control" Placeholder="Tulis tanggapanmu disini">
                    </div>
                </div>
                <div class="card-footer">
                    <h6 style="color:red;font-size:12px;">Isi tanggapan hanya jika anda tidak ingin verifikasi dokumen</h6>
                </div>
                <!-- /.card-body -->
            </div>


            </div>
        </div>
    <div class="row">
        <div class="col-12">
        <a href="progress" class="btn btn-secondary">Kembali</a>
        <a href="progress" class="btn btn-success float-right">Save Changes</a>
        </div>
    </div>
    </section>
    <!-- /.content -->
        </div>
</div>
<!-- /.content-wrapper -->



<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<div class="modal fade" id="modal-logout">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Komfirmasi Logout</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah and yakin untuk keluar ?</b></p>
            </div>
            <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <a href="/">
                <button type="submit" class="btn btn-primary">Logout</button>
            </a>
            </div>
        </div>
    </div>
</div>
{{-- -------------------------------------------------------------------------------------------------------------- --}}
{{-- -------------------------------------------------------------------------------------------------------------- --}}


<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="lte/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="lte/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="lte/plugins/raphael/raphael.min.js"></script>
<script src="lte/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="lte/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="lte/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="lte/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="lte/dist/js/pages/dashboard2.js"></script>
</body>
</html>
