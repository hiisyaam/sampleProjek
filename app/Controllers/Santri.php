<?php

namespace App\Controllers;

use App\Models\Modeltbl_Santri;
use App\Models\Modeltbl_Guru;
use App\Models\Modeltbl_Amil;
use App\Models\Modeltbl_StaffTU;

class Santri extends BaseController
{

    protected $dataSantri;
    protected $dataGuru;
    protected $dataAmil;
    protected $dataStaffTU;
    public function __construct()
    {
        $this->dataSantri = new Modeltbl_Santri;
        $this->dataGuru = new Modeltbl_Guru();
        $this->dataAmil = new Modeltbl_Amil();
        $this->dataStaffTU = new Modeltbl_StaffTU();
    }

    public function index():string
    {
        $data = [
            'title' => 'List Data Santri SD',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),
            'unit' => 'SD',
            'dataSantri' => $this->dataSantri->where('unit','SD')->findAll()
        ];

        return view('/Data/santri',$data);
    }

    
    public function SMP()
    {
        $data = [
            'title' => 'List Data Santri SMP',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),
            'unit' => 'SMP',
            'dataSantri' => $this->dataSantri->where('unit','SMP')->findAll()
        ];
        return view('/Data/santri',$data);
    }

    public function SMA()
    {
        $data = [
            'title' => 'List Data Santri SMA',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),
            'unit' => 'SMA',
            'dataSantri' => $this->dataSantri->where('unit', 'SMA')->findAll()
        ];
        return view('/Data/santri',$data);
    }

    // public function guru():string
    // {
    //     helper('date');
    //     $dataKaryawan = $this->dataGuru->findAll();
    //     $data = [
    //         'title' => 'List Data Guru',
    //         'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),
    //         'jabatan' => 'Guru',
    //         'dataKaryawan' => $dataKaryawan
    //     ];
    //     return view('/DataSDM/tampilDataKaryawan',$data);
    // }

    // public function staffTU():string
    // {
    //     helper('date');
    //     $dataKaryawan = $this->dataStaffTU->findAll();
    //     $data = [
    //         'title' => 'List Data Staff TU',
    //         'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),
    //         'jabatan' => 'Staff TU',
    //         'dataKaryawan' => $dataKaryawan
    //     ];
    //     return view('/DataSDM/tampilDataKaryawan',$data);
    // }
    
    // public function amil():string
    // {
    //     helper('date');
    //     $dataKaryawan = $this->dataAmil->findAll();
    //     $data = [
    //         'title' => 'List Data Amil',
    //         'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),
    //         'jabatan' => 'Amil',
    //         'dataKaryawan' => $dataKaryawan
    //     ];
    //     return view('/DataSDM/tampilDataKaryawan',$data);
    // }
    
    public function detail($id){
        helper('date');
        $data = [
            'title' => 'Detail Data',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),
            'data' => $this->dataSantri->getSantri($id)
        ];

        if(empty($data['data'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data tidak ditemukan');
        }

        return view('/Data/Detail',$data);
    }

    public function create(){

        helper('date');
        $data = [
            'title' => 'Tambah Data',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i')),
        ];
        
        return view('data/add',$data);
    }

    public function save(){
        $this->dataSantri->save([
            'nama_santri' => $this->request->getVar('namaSantri'),
            'nis' => $this->request->getVar('nis'),
            'unit'=>$this->request->getVar('unit'),
            'kelas' => $this->request->getVar('kelas'),
            'tahun_ajaran'=>$this->request->getVar('tahun_ajaran'),
            'alamat' => $this->request->getVar('alamat')
        ]);

        session()->setFlashdata('pesan','Santri Atas Nama '.$this->request->getVar('namaSantri').' Berhasil Ditambahkan');
        return redirect()->to('/santri/create');
    }

    public function delete($id){
        $this->dataSantri->delete($id);
        session()->setFlashdata('pesan','Data berhasil di hapus');
        return redirect()->to('/santri');
    }
}