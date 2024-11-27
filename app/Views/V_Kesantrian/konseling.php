<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Data Bimbingan dan Konseling</h5>
                </div>
                <div class="card-body">
                    <div class="container mt-5">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="inputBK-tab" data-toggle="tab" href="#inputBK" role="tab" aria-controls="inputBK" aria-selected="true">Input BK</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="listBK-tab" data-toggle="tab" href="#listBK" role="tab" aria-controls="listBK" aria-selected="false">List BK</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-3" id="myTabContent">
                                    <!-- Input BK -->
                                    <div class="tab-pane fade show active" id="inputBK" role="tabpanel" aria-labelledby="inputBK-tab">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="santriName">Nama Santri</label>
                                                    <input type="text" class="form-control" id="santriName" placeholder="Masukkan nama santri" autofocus>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="nis">NIS</label>
                                                    <input type="text" class="form-control" id="nis" placeholder="Masukkan NIS">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="kelas">Kelas</label>
                                                    <input type="text" class="form-control" id="kelas" placeholder="Masukkan kelas">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="tanggalBK">Tanggal</label>
                                                    <input type="date" class="form-control" id="tanggalBK">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="materiKonsultasi">Materi Konsultasi</label>
                                                <textarea class="form-control" id="materiKonsultasi" rows="3" placeholder="Masukkan materi konsultasi"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="tindakan">Tindakan</label>
                                                <textarea class="form-control" id="tindakan" rows="3" placeholder="Masukkan tindakan"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="catatan">Catatan</label>
                                                <textarea class="form-control" id="catatan" rows="3" placeholder="Masukkan catatan"></textarea>
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- List BK -->
                                    <div class="tab-pane fade" id="listBK" role="tabpanel" aria-labelledby="listBK-tab">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Santri</th>
                                                        <th>NIS</th>
                                                        <th>Kelas</th>
                                                        <th>Tanggal</th>
                                                        <th>Materi Konsultasi</th>
                                                        <th>Tindakan</th>
                                                        <th>Catatan</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>
                                                  <?php foreach ($dataKonseling as $data): ?>
                                                    <tr>
                                                        <td class="text-center"><?= $i++; ?></td>
                                                        <td><?= $data['nama']; ?></td>
                                                        <td><?= $data['nis']; ?></td>
                                                        <td><?= $data['kelas']; ?></td>
                                                        <td><?= $data['tanggal']; ?></td>
                                                        <td><?= $data['materi_konsul']; ?></td>
                                                        <td><?= $data['tindakan']; ?></td>
                                                        <td><?= $data['catatan']; ?></td>
                                                        <td>
                                                            <button class="btn btn-primary btn-sm">Edit</button>
                                                            <button class="btn btn-danger btn-sm">Delete</button>
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
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
