<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form Pengumuman</h4>
            <form>
                <div class="mb-3">
                    <label for="tujuan" class="form-label">Tujuan Pengumuman</label>
                    <select class="form-control" id="tujuan" autofocus required>
                        <option value="">Pilih Tujuan</option>
                        <option value="semua_unit">Seluruh Unit</option>
                        <option value="guru_sd">Guru Unit SD</option>
                        <option value="guru_smp">Guru Unit SMP</option>
                        <option value="guru_sma">Guru Unit SMA</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="judulPengumuman" class="form-label">Judul Pengumuman</label>
                    <input type="text" class="form-control" id="judulPengumuman" required>
                </div>
                <div class="mb-3">
                    <label for="isiPengumuman" class="form-label">Isi Pengumuman</label>
                    <textarea class="form-control" id="isiPengumuman" rows="10" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="gambarPengumuman" class="form-label">Upload Gambar (Opsional)</label>
                    <input type="file" class="form-control" id="gambarPengumuman" accept=".jpg,.jpeg,.png,.gif">
                </div>
                <div class="row mt-3">
                    <div class="col d-flex justify-content-end">
                        <button id="kirimPengumuman" class="btn btn-success">Kirim Pengumuman</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>