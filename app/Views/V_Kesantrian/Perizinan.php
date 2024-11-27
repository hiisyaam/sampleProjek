<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Perizinan Santri</h6>
                </div>
                <div class="card-body">
                <form>
                        <div class="mb-3">
                            <label for="namaSiswa" class="form-label">Nama Siswa</label>
                            <input type="text" class="form-control" id="namaSiswa" placeholder="Masukkan Nama Siswa" autofocus required>
                        </div>

                        <div class="mb-3">
                            <label for="tanggalIzin" class="form-label">Tanggal Izin</label>
                            <input type="date" class="form-control" id="tanggalIzin" required>
                        </div>

                        <div class="mb-3">
                            <label for="tanggalKembali" class="form-label">Tanggal Kembali</label>
                            <input type="date" class="form-control" id="tanggalKembali" required>
                        </div>

                        <div class="mb-3">
                            <label for="penjemput" class="form-label">Penjemput</label>
                            <input type="text" class="form-control" id="penjemput" placeholder="Masukkan Nama Penjemput" required>
                        </div>

                        <div class="mb-3">
                            <label for="alasanPerizinan" class="form-label">Alasan Perizinan/Tujuan Perizinan</label>
                            <textarea class="form-control" id="alasanPerizinan" rows="4" placeholder="Masukkan Alasan atau Tujuan Perizinan" required></textarea>
                        </div>
                        <div class="row mt-3">
                            <div class="col d-flex justify-content-end">
                                <button id="nextBtn" class="btn btn-success">Simpan Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
