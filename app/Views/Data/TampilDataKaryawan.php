<?= $this->extend('layout') ?>

<?= $this->section('content')?>

<div class="container-fluid">



<div class="card shadow mb-4">
    <div class="row">
        <div class="col-8 mx-3 mb-1">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 mt-3 text-gray-800">Data <?= $jabatan ?></h1>
            <p class="mb-4">Untuk memudahkan pencarian, gunakan fitur filter data dibawah ini.</p>
            <form action="">
                <div class="mt-3">
                    <label for="jurusan">Pilih Unit</label>
                        <select class="form-control" aria-label="Default select example" name="jurusan">
                                <option selected>--Pilih Unit--</option>
                                <option>SD</option>
                                <option>SMP</option>
                                <option>SMA</option>                                               
                        </select>
                </div>
            </form>
        </div>

        <div class="col-8 mx-3 mb-3">
            <form action="">
                <div class="mt-3">
                    <label for="jurusan">Bagian</label>
                        <select class="form-control" aria-label="Default select example" name="jurusan">
                                <option selected>--Divisi Bagian--</option>
                                <option>Kesantrian</option>
                                <option>Tahfidz</option>
                                <option>Madrasah</option>                                             
                        </select>
                </div>
                <div class="my-3 text-right">
                    <a href="#" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                        <span class="text">Cari Data</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tahun Ajaran 2024/2025</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($dataKaryawan as $data): ?>
                    <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td><?= $data['nama']; ?></td>
                        <td><?= $data['jabatan']; ?></td>
                        <td>
                        <a href="#" class="btn btn-primary btn-sm">Detail</a>
                        <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>


<?= $this->endSection(); ?>
