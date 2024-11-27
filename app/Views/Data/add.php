<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>


<div class="container">
    <div class="row">
        <div class="col">
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Santri</h6>
        </div>
        <div class="card-body">
            <form action="/santri/save" method="POST">
            <?= csrf_field(); ?>
            <?php if(session()->getFlashdata('pesan')):?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                    <meta http-equiv="Refresh" content="0.6">
                </div>
            <?php endif; ?>
            <div class="mb-3 row">
                <label for="namaSantri" class="col-sm-2 col-form-label">Nama Santri</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="namaSantri" id="namaSantri" placeholder="Masukkan Nama Santri" autofocus>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nis" id="nis" placeholder="Masukkan NIS">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="unit" class="col-sm-2 col-form-label">Unit Pendidikan</label>
                <div class="col-sm-10">
                    <select class="form-control" name="unit" id="unit">
                        <option selected>-- Pilih Unit Pendidikan --</option>
                        <option>SD</option>
                        <option>SMP</option>
                        <option>SMA</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                    <select class="form-control" name="kelas" id="kelas">
                        <option selected>-- Pilih Kelas --</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tahun_ajaran" class="col-sm-2 col-form-label">Tahun Ajaran</label>
                <div class="col-sm-10">
                    <select class="form-control" name="tahun_ajaran" id="tahun_ajaran">
                        <option selected>-- Pilih Tahun Ajaran --</option>
                        <option>2024/2025</option>
                        <option>2023/2024</option>
                        <option>2022/2023</option>
                        <option>2021/2022</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan Alamat"></textarea>
                </div>
            </div>
            <div class="row text-right">
                <div class="col-sm-10 offset-sm-2">
                    
                    <a href="#" class="btn btn-secondary btn-sm">Kembali</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                    <a href="/santri/save">
                        <button type="submit" class="btn btn-success btn-sm">Submit</button>
                    </a>
                </div>
            </div>
        </form>
        </div>
    </div>
        </div>
    </div>
</div>
   

<?= $this->endSection(); ?>