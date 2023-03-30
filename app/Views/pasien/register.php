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
                            <h1 class="h4 text-gray-900 mb-4">Pendaftaran | SIP</h1>
                        </div>
                        <form class="user">
                            <div class="form-group">
                            <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Nomor Rekam Medis">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="NIK">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control form-control-user" id="exampleInputPassword" placeholder="Tanggal Lahir">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="Nama Lengkap" disabled require>
                            </div>
                              
                            <div class="form-group">
                                <input type="number" class="form-control form-control-user" id="exampleInputPassword" placeholder="nomor whatsapp">
                            </div>
                            <div class="form-group row">
                                    <div class="col-7">
                                        <input type="number" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="OTP" require>
                                    </div>
                                    <div class="col-5">
                                    <a href="#" class="btn btn-success btn-user btn-block">
                                        <span class="icon text-white-0">
                                        <i class="fa-regular fa-paper-plane"></i>
                                        </span>
                                        <span class="text">kirim</span>
                                    </a>
                                    </div>
                                </div>
                          
                            <a href="index.html" class="btn btn-primary btn-user btn-block">
                            Buat Akun
                            </a>
                            <hr>
                            <div class="text-center">
                                <p class="small">Untuk mengetahui nomor Rekam Medis anda tanyakan pada petugas pendaftran</p>
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