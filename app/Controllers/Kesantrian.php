<?php

namespace App\Controllers;
use App\Models\Modeltbl_NilaiKesantrian;
use App\Models\Modeltbl_Perizinan;
use App\Models\Modeltbl_Pelanggaran;
use App\Models\Modeltbl_Konseling;

class Kesantrian extends BaseController{

    protected $nilaiKesantrian;
    protected $perizinan;
    protected $pelanggaran;
    protected $konseling;

    public function index() : string {
        
        helper('date');
        $data = [
            'title' => 'Input Penilaian Kesantrian',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),           
        ];
        return view('/V_Kesantrian/Penilaian',$data);
    }

    public function izin() : string {
        
        helper('date');
        $data = [
            'title' => 'Input Penilaian Kesantrian',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),           
        ];
        return view('/V_Kesantrian/Perizinan',$data);
    }

    public function dataizin() : string {
        helper('date');
        $this->perizinan = new Modeltbl_Perizinan();
        $dataIzin = $this->perizinan->findAll();
        $data = [
            'title' => 'Data Izin Santri',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),
            'dataIzin' => $dataIzin
        ];
        return view('/V_Kesantrian/DataPerizinan',$data);
    }

    public function pelanggaran() : string {
        helper('date');
        $this->pelanggaran = new Modeltbl_Pelanggaran();
        $dataPelanggaran = $this->pelanggaran->findAll();
        $data = [
            'title' => 'Halaman Pelanggaran',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),
            'dataPelanggaran' => $dataPelanggaran
        ];
        return view('/V_Kesantrian/pelanggaran',$data);
    }

    public function dataNilai() : string {
        helper('date');
        $this->nilaiKesantrian = new Modeltbl_NilaiKesantrian();
        $dataNilai = $this->nilaiKesantrian->findAll();
        $data = [
            'title' => 'Data Nilai Santri',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),
            'dataNilai' => $dataNilai
        ];
        return view('/V_Kesantrian/DataNilai',$data);
    }

    public function konseling() : string {
        helper('date');
        $this->konseling = new Modeltbl_Konseling();
        $dataKonseling = $this->konseling->findAll();
        $data = [
            'title' => 'Bimbingan dan Konseling',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),
            'dataKonseling' => $dataKonseling
        ];
        return view('/V_Kesantrian/konseling',$data);
    }

} 