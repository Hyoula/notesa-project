@extends('layout.template')
@section('content')
    <div id="main-wrapper" class="container" style="margin-top:200px; padding-bottom:50px">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="card border-0">
                <div class="card-body p-0">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="mb-5">
                                    <h3 class="h4 font-weight-bold text-theme">MASUK</h3>
                                </div>

                                <h6 class="h5 mb-0">Selamat Datang!</h6>
                                <p class="text-muted mt-2 mb-5">Masukan Email dan Password anda untuk masuk.</p>

	                            <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <a href="klien">
                                        <button type="button" class="btn btn-primary btn-block">Masuk</button>
                                    </a>
                                    <a href="#l" class="forgot-link float-right text-primary">Lupa Password?</a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="p-5">
                                <img src="assets\images\lt5987f5f5133b6.jpg" style="width:350px; height:auto" srcset="">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->

            <p class="text-muted text-center mt-3 mb-0">Tidak Punya Akun? <a href="signup.php" class="text-primary ml-1">Mendaftar</a></p>

            <!-- end row -->

        </div>
        <!-- end col -->
    </div>
    <!-- Row -->
</div>
@endsection
