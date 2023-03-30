<?= $this->extend('layout/layout'); ?>
<?= $this->section('content'); ?>


<div class="container">
    
    <div class="row">
        <div class="col-4">
            <div class="container">
                <div class="row">
                    <a href="#" class="btn btn-primary btn-circle btn-lg">
                        <i class="fa-solid fa-user-plus"></i>
                    </a>
                </div>
                <div class="row">
                    <p class="text-justify">Tambah Anggota Keluarga</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="container">
                <div class="row">
                    <a href="#" class="btn btn-primary btn-circle btn-lg">
                        <i class="fa-solid fa-people-roof"></i>
                    </a>
                </div>
                <div class="row">
                    <p class="text-center">Anggota Keluarga</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="container">
                <div class="row">
                    <a href="#" class="btn btn-primary btn-circle btn-lg">
                        <i class="fa-solid fa-list"></i>
                    </a>
                </div>
                <div class="row">
                    <p class="text-center">Daftar Online</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="container">
                <div class="row">
                    <a href="#" class="btn btn-primary btn-circle btn-lg">
                    <i class="fa-solid fa-flask-vial"></i>
                    </a>
                </div>
                <div class="row">
                    <p class="text-justify">Cek Lab</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="container">
                <div class="row">
                    <a href="#" class="btn btn-primary btn-circle btn-lg">
                    <i class="fa-solid fa-display"></i>
                    </a>
                </div>
                <div class="row">
                    <p class="text-center">Antian Online</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="container">
                <div class="row">
                    <a href="#" class="btn btn-primary btn-circle btn-lg">
                    <i class="fa-solid fa-check-to-slot"></i>
                    </a>
                </div>
                <div class="row">
                    <p class="text-center">Cek in</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>