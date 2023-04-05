<?= $this->extend('layout/bootstrap5'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Pasien</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Pilih anggota pasein</option>
                <option value="1">1212-Ahmad</option>
                <option value="2">1234-Jhony</option>
                <option value="3">2134-Agus</option>
            </select>
            <div id="emailHelp" class="form-text">Jika nama pasien tidak ada tamhakan anggota keluarga.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tanggal kunjungan</label>
            <input type="date" class="form-control" id="exampleInputPassword1" value="2023-07-22" min="2023-04-3" max="2023-07-22">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Poliklinik</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Pilih Poliklinik</option>
                <option value="1">Anak</option>
                <option value="2">Bedah</option>
                <option value="3">Syaraf</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Dokter</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Pilih Dokter</option>
                <option value="1">Agus</option>
                <option value="2">Serpti</option>
                <option value="3">Ayi</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis Bayar</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Pilih Jenis Bayar</option>
                <option value="1">Umum</option>
                <option value="2">BPJS Kesehatan</option>
                <option value="3">Jasa Raharja</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nomor Rujukan</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
            <div id="emailHelp" class="form-text">Abaikan jika anda pasien umum</div>
        </div>
        <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
</div>
<?= $this->endSection('content'); ?>