<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block">
                            <center>
                                <p>
                                    <h1 class="text-primary">Sistem Inventaris Laboratorium (SiLab)</h1>
                                </p>
                                <p></p>
                                <img src="<?= base_url('assets/images/logo-undiksha.png') ?>" alt="profile" width='300' height='300' />
                                <p></p>
                            </center>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h5 class="h5 text-gray-900 alert-info mb-4 " role="alert">Selamat datang di login admin panel. Silakan masukan username dan password anda</h5>
                                </div>
                                <form class="user" method="post" action="<?= base_url('Login'); ?>">
                                    <?= $this->session->flashdata('message'); ?>
                                    <div class="form-group mb-4 ">
                                        <input type="text" name="nama" class="form-control form-control-user" id="nama" aria-describedby="namaHelp" placeholder="Username....." value="<?= set_value('nama') ?>">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group mb-4 ">
                                        <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password......">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block mb-4">
                                        Login
                                    </button>
                                    <hr>
                                </form>
                                <a class="btn btn-danger btn-user btn-block user  mb-4" href="forgot-password.html">Forgot Password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>