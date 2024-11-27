<?= $this->extend('layout') ?>

<?= $this->section('content')?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="row">
            <div class="col-8 mx-3 mb-1">
                <!-- Page Heading -->
                <div class="my-3">
                    <a href="/tampilData/create">
                        <button type="submit" class="btn btn-primary btn-icon-plus">
                            <span class="icon text-white-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                                <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5"/>
                                <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
                            </svg>
                            </span>
                            <span class="text">Tambah Data Santri</span>
                        </button>
                    </a>
                </div>
                <h1 class="h3 mb-1 text-gray-800">Data Santri <?= $unit ?></h1>
                <p class="mb-4">Gunakan fitur filter di bawah untuk mencari data santri.</p>
                <form action="">
                    <div class="mt-3">
                        <label for="tahunAjaran">Tahun Ajaran</label>
                        <select class="form-control" aria-label="Default select example" name="tahunAjaran" id="tahunAjaran">
                            <option selected>--Pilih Tahun Ajaran--</option>
                            <option>2024/2025</option>
                            <option>2023/2024</option>
                            <option>2022/2023</option>
                            <option>2021/2022</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="kelas">Pilih Kelas</label>
                        <select class="form-control" aria-label="Default select example" name="kelas" id="kelas">
                            <option selected>--Pilih Kelas--</option>
                            <option>3 SD</option>
                            <option>4 SD</option>
                            <option>5 SD</option>
                            <option>6 SD</option>
                            <!-- Tambahkan opsi lain sesuai kebutuhan -->
                        </select>
                    </div>
                    <div class="my-3 text-right">
                        <button type="submit" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-search"></i>
                            </span>
                            <span class="text">Cari Data</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Santri Tahun Ajaran 2024/2025</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th>Nama</th>
                            <th>NIS</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($dataSantri as $data): ?>
                        <tr>
                            <td class="text-center"><?= $no++; ?></td>
                            <td><?= $data['nama_santri']; ?></td>
                            <td><?= $data['nis']; ?></td>
                            <td>
                                <a href="/tampilData/<?= $data['id_santri']; ?>" class="btn btn-primary btn-sm">Detail</a>
                                <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <!-- Tambahkan data santri lainnya di sini -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
