<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <!-- Detail Pasien Card -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Pasien</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Kolom Detail Pasien -->
                <div class="col-md-6 mb-3">
                    <h5 class="font-weight-bold">Nama Pasien:</h5>
                    <p><?= $data['pasien']; ?></p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5 class="font-weight-bold">Keluhan:</h5>
                    <p><?= $data['keluhan']; ?></p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5 class="font-weight-bold">Pemeriksa:</h5>
                    <p><?= $data['pemeriksa']; ?></p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5 class="font-weight-bold">Jenis Rawat:</h5>
                    <p><?= $data['jenis_rawat']; ?></p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5 class="font-weight-bold">Resep:</h5>
                    <p><?= $data['resep']; ?></p>
                </div>
            </div>     
            <div class="row">
                <div class="col-sm-10 offset-sm-2 d-flex justify-content-end">
                    <a href="/Kesehatan/dataPasien" class="btn btn-secondary btn-sm">Kembali</a>
                    <form class="d-inline" action="/kesehatan/delete/<?= $data['id']; ?>" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger btn-sm mx-1" type="submit">Hapus</button>
                    </form>
                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
