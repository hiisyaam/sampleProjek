<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Data Penilaian Santri</h5>
                </div>
                <div class="card-body">
                    <!-- Filter -->
                    <div class="mb-4">
                        <form class="form-inline">
                            <div class="form-group mb-2 mr-2">
                                <label for="filterName" class="sr-only">Nama</label>
                                <input type="text" class="form-control" id="filterName" placeholder="Nama" autofocus>
                            </div>
                            <div class="form-group mb-2 mr-2">
                                <label for="filterClass" class="sr-only">Kelas</label>
                                <input type="text" class="form-control" id="filterClass" placeholder="Kelas">
                            </div>
                            <button type="button" class="btn btn-success mb-2" id="applyFilter">Cari Data</button>
                        </form>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="santriTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Unit</th>
                                    <th>Nilai Akhlak</th>
                                    <th>Nilai Bahasa</th>
                                    <th>Nilai Ibadah</th>
                                    <th>Nilai Aturan Asrama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($dataNilai as $data): ?>
                                <tr>
                                    <td class="text-center"><?= $i++ ?></td>
                                    <td><?= $data['nama']; ?></td>
                                    <td><?= $data['kelas']; ?></td>
                                    <td><?= $data['unit']; ?></td>
                                    <td><?= $data['nilai_akhlak']; ?></td>
                                    <td><?= $data['nilai_bahasa']; ?></td>
                                    <td><?= $data['nilai_ibadah']; ?></td>
                                    <td><?= $data['nilai_aturanAsrama']; ?></td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal" data-id="1">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm" onclick="confirmDelete(1)">Hapus</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Data Santri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="editName">Nama</label>
                        <input type="text" class="form-control" id="editName" value="">
                    </div>
                    <div class="form-group">
                        <label for="editClass">Kelas</label>
                        <input type="text" class="form-control" id="editClass" value="">
                    </div>
                    <div class="form-group">
                        <label for="editUnit">Unit</label>
                        <select class="form-control" id="editUnit">
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editNilaiAkhlak">Nilai Akhlak</label>
                        <input type="number" class="form-control" id="editNilaiAkhlak" value="">
                    </div>
                    <div class="form-group">
                        <label for="editNilaiBahasa">Nilai Bahasa</label>
                        <input type="number" class="form-control" id="editNilaiBahasa" value="">
                    </div>
                    <div class="form-group">
                        <label for="editNilaiIbadah">Nilai Ibadah</label>
                        <input type="number" class="form-control" id="editNilaiIbadah" value="">
                    </div>
                    <div class="form-group">
                        <label for="editNilaiAsrama">Nilai Aturan Asrama</label>
                        <input type="number" class="form-control" id="editNilaiAsrama" value="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Simpan Perubahan</button>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmDelete(id) {
        if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
            // Logika untuk menghapus data dengan ID
            console.log('Data dengan ID ' + id + ' dihapus.');
        }
    }

    $('#editModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var modal = $(this);
        
        // Di sini Anda bisa memuat data yang ingin diedit berdasarkan ID
        // Misalnya, menggunakan AJAX untuk mendapatkan data dari server
        
        // Mengatur data di modal
        modal.find('#editName').val('Nama Santri ' + id);
        modal.find('#editClass').val('Kelas ' + id);
        modal.find('#editUnit').val('SMA'); // Atur sesuai data
        modal.find('#editNilaiAkhlak').val('85'); // Atur sesuai data
        modal.find('#editNilaiBahasa').val('90'); // Atur sesuai data
        modal.find('#editNilaiIbadah').val('80'); // Atur sesuai data
        modal.find('#editNilaiAsrama').val('75'); // Atur sesuai data
    });
</script>

<?= $this->endSection(); ?>
