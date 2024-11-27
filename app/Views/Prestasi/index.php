<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col">
        <div class="card">
        <div class="card-body">
            <h3 class="card-title">Form Prestasi</h3>
            <form action="/prestasi/save" method="post">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Santri</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori Lomba</label>
                    <input type="text" class="form-control" id="kategori" name="kategori" required>
                </div>
                <div class="mb-3">
                    <label for="juara" class="form-label">Juara Ke</label>
                    <input type="number" class="form-control" id="juara" name="juara" min="1" max="6" required>
                </div>
                <div class="mb-3">
                    <label for="namaLomba" class="form-label">Nama Lomba</label>
                    <input type="text" class="form-control" id="namaLomba" name="nama_lomba" required>
                </div>
                <div class="mb-3">
                    <label for="buktiSertifikat" class="form-label">Upload Bukti Sertifikat</label>
                    <input type="file" class="form-control" id="buktiSertifikat" name="sertifikat" accept=".jpg,.jpeg,.png,.pdf">
                </div>
                <div class="text-right">
                    <a href="/prestasi/save">
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                    </a>               
                </div>
            </form>
        </div>
    </div>
        </div>
</div>

<?= $this->endSection(); ?>