<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid mt-4">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Berobat Pasien</h6>
    </div>
    <div class="card-body">
        <form action="/kesehatan/save" method="POST">
            <?= csrf_field(); ?>
            <?php if (session()->getFlashdata('pesan')): ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                    <meta http-equiv="refresh" content="1" />
                </div>
            <?php endif; ?>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="unitPendidikan">Masukan Nama</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Lengkap" name="nama" autofocus>
                </div>
                <div class="form-group col-md-4">
                    <label for="namaHalaqoh">Keluhan</label>
                    <input type="text" class="form-control" placeholder="Masukan Keluhan" name="keluhan">
                </div>
                <div class="form-group col-md-4">
                    <label for="ustadzPengampu">Pemeriksa</label>
                    <select id="ustadzPengampu" name="pemeriksa" class="form-control">
                        <option value="" selected>--Pemeriksa Pasien--</option>
                        <option value="Unit1">dr. A</option>
                        <option value="Unit2">dr. B</option>
                        <option value="Unit3">dr. C</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="unitPendidikan">Jenis Rawat</label>
                    <select id="unitPendidikan" name="jenis_rawat" class="form-control">
                        <option value="" selected>--Pilih Jenis Rawat--</option>
                        <option value="Rawat Inap">Rawat Inap</option>
                        <option value="Rawat Jalan">Rawat Jalan</option>
                        <option value="Istirahat Dirumah">Istirahat Dirumah</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="namaHalaqoh">Resep Obat</label>
                    <input type="text" class="form-control" placeholder="Masukan Resep Obat" name="resep">
                </div>
            </div>

            <div class="text-right">
                <a href="/kesehatan/save">
                <button type="submit" class="btn btn-success">Submit</button>
                </a>               
            </div>

        </form>
</div>
    </div>
</div>


<?= $this->endSection(); ?>