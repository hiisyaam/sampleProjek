<?php

namespace App\Controllers;

use App\Models\Modeltbl_santrisma;
use App\Models\Modeltbl_santrismp;
use App\Models\Modeltbl_santrisd;
use App\Models\Modeltbl_Guru;
use App\Models\Modeltbl_Amil;
use App\Models\Modeltbl_StaffTU;

class Absen extends BaseController
{

    protected $dataSantriSMA;
    protected $dataSantriSMP;
    protected $dataSantriSD;
    protected $dataGuru;
    protected $dataAmil;
    protected $dataStaffTU;

    public function __construct()
    {
        $this->dataSantriSD = new Modeltbl_santrisd();
        $this->dataSantriSMP = new Modeltbl_santrismp();
        $this->dataSantriSMA = new Modeltbl_santrisma();
        $this->dataGuru = new Modeltbl_Guru();
        $this->dataAmil = new Modeltbl_Amil();
        $this->dataStaffTU = new Modeltbl_StaffTU();
    }

    public function SD():string
    {
        helper('date');
        $dataSantri = $this->dataSantriSD->select('nama_santri, nis')->findAll();
        $data = [
            'title' => 'Absensi SD',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),  
            'unit' => 'Unit SD',
            'dataSantri' => $dataSantri        
        ];
        return view('/Absen/AbsensiSantri',$data);
    }

    public function SMP():string
    {
        helper('date');
        $dataSantri = $this->dataSantriSMP->select('nama_santri, nis')->findAll();
        $data = [
            'title' => 'Absensi SMP',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),  
            'unit' => 'Unit SMP',
            'dataSantri' => $dataSantri               
        ];
        return view('/Absen/AbsensiSantri',$data);
    }

    public function SMA():string
    {
        helper('date');
        $dataSantri = $this->dataSantriSMA->select('nama_santri, nis')->findAll();
        $data = [
            'title' => 'Absensi SMA',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),  
            'unit' => 'Unit SMA',
            'dataSantri' => $dataSantri         
        ];
        return view('/Absen/AbsensiSantri',$data);
    }

    public function karyawan():string
    {
        helper('date');
       
    
    $dataGuru = $this->dataGuru->select('nama, jabatan')->findAll();
    $dataAmil = $this->dataAmil->select('nama, jabatan')->findAll();
    $dataStaffTU = $this->dataStaffTU->select('nama, jabatan')->findAll();
    $dataKaryawan = array_merge($dataGuru, $dataAmil, $dataStaffTU);

    $data = [
            'title' => 'Absensi Karyawan',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),  
            'unit' => 'Karyawan',
            'dataKaryawan' => $dataKaryawan
        ];
    return view('/Absen/AbsensiKaryawan',$data);
    }
}