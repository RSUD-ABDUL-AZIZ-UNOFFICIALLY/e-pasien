<?= $this->extend('layout/auth'); ?>
<?= $this->section('content'); ?>


<div class="col-xl-10 col-lg-12 col-md-9">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Sistem Informasi Pasien</h1>
                        </div>
                        <form class="user">
                            <div class="form-group">
                            
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nomor Rekam Medis / NIK / WA">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="OTP">
                            </div>
                            <a href="/home" class="btn btn-primary btn-user btn-block">
                                Login
                            </a>
                            <hr>
                            <a href="/register" class="btn btn-danger btn-user btn-block">
                            <i class="fa-regular fa-user fa-bounce"></i>    Buat Akun
                            </a>
                            <div class="text-center">
                                <p class="small">Akun hanya bisa dibuat untuk pasein yang sudah memiliki nomor Rekam Medis</p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
<?= $this->endSection('content'); ?>