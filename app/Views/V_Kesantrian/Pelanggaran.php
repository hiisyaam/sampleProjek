<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Data Pelanggaran Santri</h5>
                </div>
                <div class="card-body">
                    <div class="container mt-5">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="inputPelanggaran-tab" data-toggle="tab" href="#inputPelanggaran" role="tab" aria-controls="inputPelanggaran" aria-selected="true">Input Pelanggaran</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="listPelanggaran-tab" data-toggle="tab" href="#listPelanggaran" role="tab" aria-controls="listPelanggaran" aria-selected="false">List Pelanggaran</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-3" id="myTabContent">
                                    <!-- Input Pelanggaran -->
                                    <div class="tab-pane fade show active" id="inputPelanggaran" role="tabpanel" aria-labelledby="inputPelanggaran-tab">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="santriName">Nama Santri</label>
                                                    <input type="text" class="form-control" id="santriName" placeholder="Masukkan nama santri" autofocus>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="namaKamar">Nama Kamar</label>
                                                    <input type="text" class="form-control" id="namaKamar" placeholder="Masukkan nama kamar">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="waliAsrama">Wali Asrama</label>
                                                    <input type="text" class="form-control" id="waliAsrama" placeholder="Masukkan nama wali asrama">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="namaPelanggaran">Nama Pelanggaran</label>
                                                    <input type="text" class="form-control" id="namaPelanggaran" placeholder="Masukkan nama pelanggaran">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="poin">Poin</label>
                                                    <input type="number" class="form-control" id="poin" placeholder="Masukkan poin pelanggaran">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="tindakan">Tindakan</label>
                                                    <input type="text" class="form-control" id="tindakan" placeholder="Masukkan tindakan">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="kategori">Kategori</label>
                                                    <select class="form-control" id="kategori">
                                                        <option>Sedang</option>
                                                        <option>Berat</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="tanggalPelanggaran">Tanggal</label>
                                                    <input type="date" class="form-control" id="tanggalPelanggaran" placeholder="Masukkan tanggal pelanggaran">
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- List Pelanggaran -->
                                    <div class="tab-pane fade" id="listPelanggaran" role="tabpanel" aria-labelledby="listPelanggaran-tab">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Santri</th>
                                                        <th>Nama Kamar</th>
                                                        <th>Wali Asrama</th>
                                                        <th>Nama Pelanggaran</th>
                                                        <th>Poin</th>
                                                        <th>Tindakan</th>
                                                        <th>Kategori</th>
                                                        <th>Tanggal</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($dataPelanggaran as $data): ?>
                                                    <tr>
                                                        <td class="text-center"><?= $i++; ?></td>
                                                        <td><?= $data['nama']; ?></td>
                                                        <td><?= $data['nama_kamar']; ?></td>
                                                        <td><?= $data['wali_Asrama']; ?></td>
                                                        <td><?= $data['pelanggaran']; ?></td>
                                                        <td><?= $data['poin']; ?></td>
                                                        <td><?= $data['tindakan']; ?></td>
                                                        <td><?= $data['kategori']; ?></td>
                                                        <td><?= $data['tanggal']; ?></td>
                                                        <td class="text-start">
                                                            <button class="btn btn-primary btn-sm px-2 py-1">Edit</button>
                                                            <button class="btn btn-danger btn-sm px-2 py-1 ">Delete</button>
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
