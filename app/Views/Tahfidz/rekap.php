<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Rekap Tahfidz</h5>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <button class="btn btn-primary" data-toggle="modal" data-target="#addTahfidzModal">
                <i class="fas fa-plus"></i>
                Tambah Rekap Tahfidz
                </button>
            </div>
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
                            <th>Kelas</th>
                            <th>Hafalan Terakhir</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rekapTahfidz as $data): ?>
                        <tr class="<?= $data['status'] == 'Belum Sampai' ? 'table-danger' : ''; ?>">
                            <td><?= $data['nama']; ?></td>
                            <td><?= $data['kelas']; ?></td>
                            <td><?= $data['hafalan_terakhir']; ?></td>
                            <td><?= $data['status']; ?></td>
                            <td><?= $data['keterangan']; ?></td>
                        </tr>
                       <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Modal untuk tambah rekap tahfidz -->
    <div class="modal fade" id="addTahfidzModal" tabindex="-1" aria-labelledby="addTahfidzModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTahfidzModalLabel">Tambah Rekap Tahfidz</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addTahfidzForm" action="/tahifdz/rekap/save" method="POST">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label for="studentName">Nama</label>
                            <input type="text" class="form-control" id="studentName" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="class">Kelas</label>
                            <input type="text" class="form-control" id="class" name="kelas" required>
                        </div>
                        <div class="form-group">
                            <label for="lastMemorization">Hafalan Terakhir</label>
                            <input type="text" class="form-control" id="lastMemorization" name="hafalan_terakhir" required>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option>Sampai Target</option>
                                <option>Belum Sampai</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Keterangan</label>
                            <input type="text" class="form-control" id="description" name="keterangan">
                        </div>
                        <div class="text-right">
                            <a href="/tahifdz/rekap/save">
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                            </a>               
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
