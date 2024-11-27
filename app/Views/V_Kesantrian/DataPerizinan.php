<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<div id="content">

                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Perizinan Santri</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Siswa</th>
                                            <th>Tanggal Izin</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Penjemput</th>
                                            <th>Alasan Perizinan</th>
                                            <th>Status</th>
                                            <th>Sudah Kembali</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; foreach ($dataIzin as $d): ?>
                                        <tr >
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td><?= $d['nama']; ?></td>
                                            <td><?= $d['tgl_izin']; ?></td>
                                            <td><?= $d['tgl_kembali']; ?></td>
                                            <td><?= $d['penjemput']; ?></td>
                                            <td><?= $d['alasan']; ?></td>
                                            <td><?= $d['status']; ?></td>
                                            <td><input type="checkbox"></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <div class="text-right">
                                    <a href="#">
                                    <button type="submit" class="btn btn-success">Simpan Data</button>
                                    </a>               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <?= $this->endSection(); ?>