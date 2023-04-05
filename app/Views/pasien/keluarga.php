<?= $this->extend('layout/bootstrap5'); ?>
<?= $this->section('content'); ?>
<div class="container">
<a href="#" class="float">
<i class="fa fa-asterisk"></i>
</a>
    <div class="card mb-3 shadow-sm rounded" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-4">
                <div class="position-relative top-50 start-50 translate-middle">
                    <img src="./aset/img/cowok.png" class="img-fluid rounded-start p-3" alt="...">
                </div>
            </div>
            <div class="col-8">
                <div class="card-body">
                    <h5 class="card-title">Ucok</h5>
                    <p class="card-text">
                        <span class="text-start">NoRM : 123132</span>
                        <br>
                        <span class="text-start">No JKN : 0003242343</span>
                        <br>
                        <span class="text-start">Nomor Telpon : 08823423</span>
                    </p>
            
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3 shadow-sm rounded" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-4">
                <div class="position-relative top-50 start-50 translate-middle">
                    <img src="./aset/img/cewek.png" class="img-fluid rounded-start p-3" alt="...">
                </div>
            </div>
            <div class="col-8">
                <div class="card-body">
                    <h5 class="card-title placeholder-glow"><span class="placeholder col-6"></span></h5>
                    <p class="card-text placeholder-glow"><span class="placeholder col-7"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-6"></span>
                        <span class="placeholder col-8"></span>
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>