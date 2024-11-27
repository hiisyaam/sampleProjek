<?= $this->extend('layout') ?>

<?= $this->section('content') ?>


<?php 
    $rute;
    if ($data['unit'] == "SD") {
        $rute = "/santriSD";
    }elseif($data['unit'] == "SMP"){
        $rute = "/santriSMP";
    }else{
        $rute = "/santriSMA";
    }
;?>

<div class="container-fluid">
    <!-- Detail Santri Card -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Santri</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Kolom Detail Santri -->
                <div class="col-md-6 mb-3">
                    <h5 class="font-weight-bold">Nama:</h5>
                    <p><?= $data['nama_santri']; ?></p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5 class="font-weight-bold">NIS:</h5>
                    <p><?= $data['nis']; ?></p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5 class="font-weight-bold">Kelas:</h5>
                    <p><?= $data['kelas']; ?></p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5 class="font-weight-bold">Alamat:</h5>
                    <p><?= $data['alamat']; ?></p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5 class="font-weight-bold">Unit Pendidikan:</h5>
                    <p><?= $data['unit']; ?></p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5 class="font-weight-bold">Tahun Ajaran:</h5>
                    <p><?= $data['tahun_ajaran']; ?></p>
                </div>
            </div>     
            <div class="row">
                

            <div class="col-sm-10 offset-sm-2 d-flex justify-content-end">
                <a href="<?= $rute; ?>" class="btn btn-secondary btn-sm">Kembali</a>
                <form action="/santri/delete/<?= $data['id_santri']; ?>" method="post" class="d-inline">
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
