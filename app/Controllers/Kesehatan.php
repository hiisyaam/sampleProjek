<?php

namespace App\Controllers;


use App\Models\Modeltbl_Kesehatan;

class Kesehatan extends BaseController{

    protected $dataKesehatan;

    public function __construct()
    {
        helper('date');
        $this->dataKesehatan = new Modeltbl_Kesehatan();
    }

    
    public function index(){
        $data = [
            'title' => 'Form Tambah Pasien',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),           
        ];
        return view('/kesehatan/index',$data);
    }


    public function listPasien(){
        $data = [
            'title' => 'List Data Pasien',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),
            'dataPasien' => $this->dataKesehatan->getPasien()
        ];
        return view('/Kesehatan/dataPasien',$data);
    }

    public function detail($id){
        $data = [
            'title' => 'Detail Pasien',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),
            'data' => $this->dataKesehatan->getPasien($id)
        ];

        if(empty($data['data'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Tidak ditemukan');
        }

        return view('/kesehatan/detailPasien',$data);
    }

    public function save(){
        $this->dataKesehatan->save([
            'pasien' => $this->request->getVar('nama'),
            'keluhan' => $this->request->getVar('keluhan'),
            'pemeriksa' => $this->request->getVar('pemeriksa'),
            'jenis_rawat' => $this->request->getVar('jenis_rawat'),
            'resep' => $this->request->getVar('resep')
        ]);

        session()->setFlashdata('pesan','Data Berhasil Diinput');
        return redirect()->to('/kesehatan');
    }

    public function delete($id){
        $this->dataKesehatan->delete($id);
        session()->setFlashdata('pesan','Data Pasien Berhasil Dihapus');
        return redirect()->to('/Kesehatan/dataPasien');
    }
}