@extends('layout.notaris')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <div class="row m-2">
            <div class="col-md-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body p-5">
                    <div class="row">
                        <h4 class="text-bold">Selamat Datang dilayanan Notaris dan PPAT</h4>
                        <h6>Terima kasih telah menggunakan layanan kami. <br>Kami berkomitmen untuk memberikan pelayanan terbaik dan transparansi dalam setiap proses notariat yang Anda butuhkan. <br>Berikut adalah ringkasan akun Anda dan informasi terbaru mengenai layanan kami.</h6>
                    </div>
                <!-- /.row -->
                </div>
            </div>
            <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>

        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                <div class="inner">
                    <h3>460</h3>

                    <p>Kasus Dilayani</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-attach"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                <div class="inner">
                    <h3>403</h3>

                    <p>Kasus Selesai</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                <div class="inner">
                    <h3>376</h3>

                    <p>Klien Anda</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-contacts"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                <div class="inner">
                    <h3>14</h3>

                    <p>Klien Ditolak</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            </div>
            <!-- /.row -->

            <div class="card">
                <div class="card-header border-transparent">
                  <h3 class="card-title">Klien Terbaru</h3>
  
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table m-0">
                      <thead>
                      <tr>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. Handphone</th>
                        <th>Status</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td><a href="pages/examples/invoice.html">26/06/2024</a></td>
                        <td>Krisna Wirawan</td>
                        <td>krisnawirawan@gmail.com</td>
                        <td>0832354541</td>
                        <td><span class="badge badge-warning">Menunggu</span></td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">24/06/2024</a></td>
                        <td>Vebby Ardianti</td>
                        <td>vebbyardianti@gmail.com</td>
                        <td>08656565345</td>
                        <td><span class="badge badge-warning">Menunggu</span></td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">20/05/2024</a></td>
                        <td>Delon Daniel</td>
                        <td>delondaniel@gmail.com</td>
                        <td>08444346544</td>
                        <td><span class="badge badge-danger">Ditolak</span></td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">18/05/2024</a></td>
                        <td>Marita Sari</td>
                        <td>maritasari@gmail.com</td>
                        <td>Marita Sari</td>
                        <td><span class="badge badge-success">Dikonfirmasi</span></td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">15/04/2024</a></td>
                        <td>Liliyan Nazaret</td>
                        <td>liliyannazaret@gmail.com</td>
                        <td>08222454893</td>
                        <td><span class="badge badge-success">Dikonfirmasi</span></td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">09/04/2024</a></td>
                        <td>Regita Ismail</td>
                        <td>regitassmail@gmail.com</td>
                        <td>085634534643</td>
                        <td><span class="badge badge-success">Dikonfirmasi</span></td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">05/04/2024</a></td>
                        <td>Christian Tampi</td>
                        <td>christian@gmail.com</td>
                        <td>0835345433</td>
                        <td><span class="badge badge-success">Dikonfirmasi</span></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Selengkapnya</a>
                </div>
                <!-- /.card-footer -->
              </div>

            <!-- Main row -->
            <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
                <div class="card card-widget">
                    <div class="card-header">
                    <span class="username">Notifikasi Terbaru</span>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer card-comments">
                    <div class="card-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="lte/dist/img/user3-128x128.jpg" alt="User Image">

                        <div class="comment-text">
                        <span class="username">
                            Maria Gonzales
                            <span class="text-muted float-right">8:03 PM Hari ini</span>
                        </span><!-- /.username -->
                        Berkas Anda sudah ditandatangani dan disetujui oleh BPN. <br>Verifikasi dokumen untuk masuk ke tahap berikutnya.
                        </div>
                        <!-- /.comment-text -->
                    </div>
                    <!-- /.card-comment -->
                    <div class="card-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="lte/dist/img/user3-128x128.jpg" alt="User Image">

                        <div class="comment-text">
                        <span class="username">
                            Maria Gonzales
                            <span class="text-muted float-right">3.43 PM 12 Hari lalu</span>
                        </span><!-- /.username -->
                        Kami sedang memroses berkas anda di kantor BPN
                        </div>
                        <!-- /.comment-text -->
                    </div>
                    <!-- /.card-comment -->
                    </div>
                    <!-- /.card-footer -->
                </div>
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

                <!-- Calendar -->
                <div class="card bg-gradient-success">
                    <div class="card-header border-0">
    
                        <h3 class="card-title">
                        <i class="far fa-calendar-alt"></i>
                        Calendar
                        </h3>
                        <!-- tools card -->
                        <div class="card-tools">
                        <!-- button with a dropdown -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                            <i class="fas fa-bars"></i>
                            </button>
                            <div class="dropdown-menu" role="menu">
                            <a href="#" class="dropdown-item">Add new event</a>
                            <a href="#" class="dropdown-item">Clear events</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">View calendar</a>
                            </div>
                        </div>
                        <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pt-0">
                        <!--The calendar -->
                        <div id="calendar" style="width: 100%"></div>
                    </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                <!-- Map card -->
                <div class="card bg-gradient-primary invisible">
                
                <div class="card-footer bg-transparent">
                    <div class="row">
                    <div class="col-4 text-center">
                        <div id="sparkline-1"></div>
                        <div class="text-white">Visitors</div>
                    </div>
                    <!-- ./col -->
                    <div class="col-4 text-center">
                        <div id="sparkline-2"></div>
                        <div class="text-white">Online</div>
                    </div>
                    <!-- ./col -->
                    <div class="col-4 text-center">
                        <div id="sparkline-3"></div>
                        <div class="text-white">Sales</div>
                    </div>
                    <!-- ./col -->
                    </div>
                    <!-- /.row -->
                </div>
                </div>
                <!-- /.card -->

            </section>
            <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
