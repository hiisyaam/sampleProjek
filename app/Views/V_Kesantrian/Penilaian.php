<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Penilaian Santri</h5>
                </div>
                <div class="card-body">
                    <div class="container mt-5">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="inputSantri-tab" data-toggle="tab" href="#inputSantri" role="tab" aria-controls="inputSantri" aria-selected="true">Input Santri</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="nilaiAkhlak-tab" data-toggle="tab" href="#nilaiAkhlak" role="tab" aria-controls="nilaiAkhlak" aria-selected="false">Nilai Akhlak</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="nilaiBahasa-tab" data-toggle="tab" href="#nilaiBahasa" role="tab" aria-controls="nilaiBahasa" aria-selected="false">Nilai Bahasa</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="nilaiIbadah-tab" data-toggle="tab" href="#nilaiIbadah" role="tab" aria-controls="nilaiIbadah" aria-selected="false">Nilai Ibadah</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="nilaiAsrama-tab" data-toggle="tab" href="#nilaiAsrama" role="tab" aria-controls="nilaiAsrama" aria-selected="false">Nilai Aturan Asrama</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-3" id="myTabContent">
                                    <!-- Input Santri -->
                                    <div class="tab-pane fade show active" id="inputSantri" role="tabpanel" aria-labelledby="inputSantri-tab">
                                        <form>
                                            <div class="form-group">
                                                <label for="santriName">Nama</label>
                                                <input type="text" class="form-control" id="santriName" placeholder="Masukkan nama" autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label for="santriClass">Kelas</label>
                                                <input type="text" class="form-control" id="santriClass" placeholder="Masukkan kelas" >
                                            </div>
                                            <div class="form-group">
                                                <label for="santriUnit">Unit</label>
                                                <select class="form-control" id="santriUnit" >
                                                    <option>SD</option>
                                                    <option>SMP</option>
                                                    <option>SMA</option>
                                                </select>
                                            </div>
                                            <div class="text-right">
                                                <a href="#">
                                                <button type="submit" class="btn btn-success">Next</button>
                                                </a>               
                                            </div>           
                                        </form>
                                    </div>
                                    <!-- Nilai Akhlak -->
                                    <div class="tab-pane fade" id="nilaiAkhlak" role="tabpanel" aria-labelledby="nilaiAkhlak-tab">
                                        <form>
                                            <div class="form-group">
                                                <label for="nilaiAkhlak1">Akhlaq Kepada Teman
                                                </label>
                                                <input type="number" class="form-control" id="nilaiAkhlak1" placeholder="Masukkan nilai" >
                                            </div>
                                            <div class="form-group">
                                                <label for="nilaiAkhlak2">Akhlak Kepada Guru</label>
                                                <input type="number" class="form-control" id="nilaiAkhlak2" placeholder="Masukkan nilai">
                                            </div>
                                            <div class="form-group">
                                                <label for="nilaiAkhlak3">Akhlak Kepada Lingkungan</label>
                                                <input type="number" class="form-control" id="nilaiAkhlak3" placeholder="Masukkan nilai">
                                            </div>
                                            <div class="form-group">
                                                <label for="nilaiAkhlak4">Catatan Akhlak</label>
                                                <input type="text" class="form-control" id="nilaiAkhlak4" placeholder="Masukkan Catatan">
                                            </div>
                                            <div class="text-right">
                                                <a href="#">
                                                <button type="button" class="btn btn-secondary" id="prevNilaiAkhlak">Previous</button>
                                                <button type="button" class="btn btn-success" id="nextNilaiAkhlak">Next</button>
                                                </a>               
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <!-- Nilai Bahasa -->
                                    <div class="tab-pane fade" id="nilaiBahasa" role="tabpanel" aria-labelledby="nilaiBahasa-tab">
                                        <form>
                                            <div class="form-group">
                                                <label for="nilaiBahasa1">Bahasa Arab</label>
                                                <input type="number" class="form-control" id="nilaiBahasa1" placeholder="Masukkan nilai">
                                            </div>
                                            <div class="form-group">
                                                <label for="nilaiBahasa2">Kosakata</label>
                                                <input type="number" class="form-control" id="nilaiBahasa2" placeholder="Masukkan nilai">
                                            </div>
                                            <div class="form-group">
                                                <label for="nilaiBahasa3">Kegiatan Bahasa</label>
                                                <input type="number" class="form-control" id="nilaiBahasa3" placeholder="Masukkan nilai">
                                            </div>
                                            <div class="form-group">
                                                <label for="nilaiBahasa4">Catatan Bahasaa</label>
                                                <input type="text" class="form-control" id="nilaiBahasa4" placeholder="Masukkan nilai">
                                            </div>
                                            <div class="text-right">
                                                <a href="#">
                                                <button type="button" class="btn btn-secondary" id="prevNilaiAkhlak">Previous</button>
                                                <button type="button" class="btn btn-success" id="nextNilaiAkhlak">Next</button>
                                                </a>               
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Nilai Ibadah -->
                                    <div class="tab-pane fade" id="nilaiIbadah" role="tabpanel" aria-labelledby="nilaiIbadah-tab">
                                        <form>
                                            <div class="form-group">
                                                <label for="nilaiIbadah1">Shalat Rawatib</label>
                                                <input type="number" class="form-control" id="nilaiIbadah1" placeholder="Masukkan nilai">
                                            </div>
                                            <div class="form-group">
                                                <label for="nilaiIbadah2">Shalat Wajib</label>
                                                <input type="number" class="form-control" id="nilaiIbadah2" placeholder="Masukkan nilai">
                                            </div>
                                            <div class="form-group">
                                                <label for="nilaiIbadah3">Shalat Sunnah</label>
                                                <input type="number" class="form-control" id="nilaiIbadah3" placeholder="Masukkan nilai">
                                            </div>
                                            <div class="form-group">
                                                <label for="nilaiIbadah4">Dzikir</label>
                                                <input type="number" class="form-control" id="nilaiIbadah4" placeholder="Masukkan nilai">
                                            </div>
                                            <div class="form-group">
                                                <label for="nilaiIbadah5">Catatan Ibadah</label>
                                                <input type="number" class="form-control" id="nilaiIbadah5" placeholder="Masukkan Catatan">
                                            </div>
                                            <div class="text-right">
                                                <a href="#">
                                                <button type="button" class="btn btn-secondary" id="prevNilaiAkhlak">Previous</button>
                                                <button type="button" class="btn btn-success" id="nextNilaiAkhlak">Next</button>
                                                </a>               
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Nilai Aturan Asrama -->
                                    <div class="tab-pane fade" id="nilaiAsrama" role="tabpanel" aria-labelledby="nilaiAsrama-tab">
                                        <form>
                                            <div class="form-group">
                                                <label for="nilaiAsrama1">Peraturan Asrama</label>
                                                <input type="number" class="form-control" id="nilaiAsrama1" placeholder="Masukkan nilai">
                                            </div>
                                            <div class="form-group">
                                                <label for="nilaiAsrama2">Peraturan KBM</label>
                                                <input type="number" class="form-control" id="nilaiAsrama2" placeholder="Masukkan nilai">
                                            </div>
                                            <div class="form-group">
                                                <label for="nilaiAsrama3">Kebersihan Asrama</label>
                                                <input type="number" class="form-control" id="nilaiAsrama3" placeholder="Masukkan nilai">
                                            </div>
                                            <div class="form-group">
                                                <label for="nilaiAsrama4">Kebersihan Diri</label>
                                                <input type="number" class="form-control" id="nilaiAsrama4" placeholder="Masukkan nilai">
                                            </div>
                                            <div class="form-group">
                                                <label for="nilaiAsrama5">Catatan Asrama</label>
                                                <input type="text" class="form-control" id="nilaiAsrama5" placeholder="Masukkan Catatan">
                                            </div>
                                            <div class="text-right">
                                                <a href="#">
                                                <button type="button" class="btn btn-secondary" id="prevNilaiAkhlak">Previous</button>
                                                <button type="button" class="btn btn-primary" id="nextNilaiAkhlak">Submit</button>
                                                </a>               
                                            </div>
                                        </form>
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
