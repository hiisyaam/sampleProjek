<?php
namespace App\Controllers;

use App\Models\Modeltbl_Prestasi;

class Prestasi extends BaseController{

    protected $model;
    public function __construct() {
        helper('date');
        $this->model = new Modeltbl_Prestasi();
    }
    
    public function index(){
        $data = [
            'title' => 'Form Prestasi Santri',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),
        ];
        return view('/prestasi/index',$data);
    }

    public function save(){
        $this->model->save([
                'nama' => $this->request->getVar('nama'),
                'kategori' => $this->request->getVar('kategori'),
                'juara' => $this->request->getVar('juara'),
                'nama_lomba' => $this->request->getVar('nama_lomba')
                // 'sertifikat' =>$this->request->getVar('sertifikat')
        ]);
    
            session()->setFlashdata('pesan','Data Berhasil Ditambahkan');
            return redirect()->to('/prestasi');
    }
}