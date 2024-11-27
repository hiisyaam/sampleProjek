<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Data Mata Pelajaran</h5>
        </div>
        <div class="card-body">
            <?php if (session()->getFlashdata('pesan')): ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                    <meta http-equiv="refresh" content="1" />
                </div>
            <?php endif; ?>
            
            <div class="d-flex justify-content-between align-items-center mb-3">
                <button class="btn btn-success" data-toggle="modal" data-target="#addSubjectModal">
                    <i class="fas fa-plus"></i> Tambah Mata Pelajaran
                </button>
            </div>
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tahun Ajaran 2024/2025</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Mata Pelajaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listMatkul as $data): ?>
                                <tr>
                                    <td><?= $data['nama_mapel']; ?></td>
                                    <td>
                                    <a href="/mapel/<?= $data['id']; ?>" class="btn btn-primary btn-sm">Detail</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Modal untuk tambah mata pelajaran -->
            <div class="modal fade" id="addSubjectModal" tabindex="-1" aria-labelledby="addSubjectModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addSubjectModalLabel">Tambah Mata Pelajaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="addSubjectForm" action="/mapel/save" method="POST">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <label for="nama_mapel">Nama Mata Pelajaran</label>
                                    <input type="text" class="form-control" id="nama_mapel" name="nama_mapel" required>
                                </div>
                                <div class="form-group">
                                    <label for="teacher">Guru Pengampu</label>
                                    <input type="text" class="form-control" id="teacher" name="guru" required>
                                </div>
                                <div class="form-group">
                                    <label for="class">Kelas</label>
                                    <select class="form-control" aria-label="Default select example" name="kelas" id="kelas">
                                        <option selected>-- Pilih Kelas --</option>
                                        <option>3 SD</option>
                                        <option>4 SD</option>
                                        <option>5 SD</option>
                                        <option>6 SD</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="academicYear">Tahun Ajaran</label>
                                    <select class="form-control" aria-label="Default select example" name="tahun_ajaran">
                                        <option selected> --Pilih Tahun Ajaran-- </option>
                                        <option>2022/2023</option>
                                        <option>2023/2024</option>
                                        <option>2024/2025</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="description">Keterangan</label>
                                    <input type="text" class="form-control" name="keterangan">
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-success btn-sm">Simpan Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Modal untuk edit mata pelajaran -->
            
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<!-- <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editSubjectModal" onclick="editSubject(this)">Edit</button>
<button class="btn btn-danger btn-sm">Hapus</button> -->


<!-- <div class="modal fade" id="editSubjectModal" tabindex="-1" aria-labelledby="editSubjectModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editSubjectModalLabel">Edit Mata Pelajaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editSubjectForm">
                    <input type="hidden" id="editSubjectId">
                    <div class="form-group">
                        <label for="editSubjectName">Nama Mata Pelajaran</label>
                        <input type="text" class="form-control" id="editSubjectName" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="editTeacher">Guru Pengampu</label>
                        <input type="text" class="form-control" id="editTeacher" required>
                    </div>
                    <div class="form-group">
                        <label for="editClass">Kelas</label>
                        <select class="form-control" aria-label="Default select example" name="kelas" id="kelas">
                            <option selected>-- Pilih Kelas --</option>
                            <option>3 SD</option>
                            <option>4 SD</option>
                            <option>5 SD</option>
                            <option>6 SD</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editAcademicYear">Tahun Ajaran</label>
                        <select class="form-control" aria-label="Default select example" name="kelas" id="kelas">
                            <option selected> --Pilih Tahun Ajaran-- </option>
                            <option>2022/2023</option>
                            <option>2023/2024</option>
                            <option>2024/2025</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editDescription">Keterangan</label>
                        <input type="text" class="form-control" id="editDescription">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->
