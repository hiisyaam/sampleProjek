<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Cari Data Pasien</h6>
        </div>
        <div class="card-body">
            <form action="">
                <div class="form-row">
                    <div class="col-md-12">
                        <label for="unitPendidikan">Nama Pasien</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Masukan Nama Pasien" aria-label="Nama Pasien" aria-describedby="button-addon2">
                            <div class="input-group-append">                     
                                <button class="btn btn-success" type="submit" id="button-addon2">Cari Data</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card shadow mb-4 mt-3">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6>
    </div>
    <div class="card-body">
                <?php if (session()->getFlashdata('pesan')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                        <meta http-equiv="refresh" content="1" />
                    </div>
                <?php endif; ?>
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Pemeriksa</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dataPasien as $data): ?>
                    <tr>
                        <td><?= $data['pasien']; ?></td>
                        <td><?= $data['pemeriksa']; ?></td>
                        <td>
                            <a href="/kesehatan/detailPasien/<?= $data['id']; ?>" class="btn btn-primary">Detail</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>

<?= $this->endSection(); ?>
