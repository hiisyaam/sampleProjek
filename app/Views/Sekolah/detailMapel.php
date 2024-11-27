<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <!-- Detail Mata Pelajaran Card -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Mata Pelajaran</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Kolom Detail Mata Pelajaran -->
                <div class="col-md-6 mb-3">
                    <h5 class="font-weight-bold">Nama Mata Pelajaran:</h5>
                    <p><?= $data['nama_mapel']; ?></p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5 class="font-weight-bold">Guru Pengampu:</h5>
                    <p><?= $data['guru']; ?></p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5 class="font-weight-bold">Kelas:</h5>
                    <p><?= $data['kelas']; ?></p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5 class="font-weight-bold">Tahun Ajaran:</h5>
                    <p><?= $data['tahun_ajaran']; ?></p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5 class="font-weight-bold">Keterangan:</h5>
                    <p><?= $data['keterangan']; ?></p>
                </div>
            </div>     
            <div class="row">
                <div class="col-sm-10 offset-sm-2 d-flex justify-content-end">
                    <a href="/mapel" class="btn btn-secondary btn-sm">Kembali</a>
                    <form class="d-inline" action="/mapel/delete/<?= $data['id']; ?>" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
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
