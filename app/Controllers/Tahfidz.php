<?php

namespace App\Controllers;
use App\Models\Modeltbl_Tahfidz;

class Tahfidz extends BaseController
{
    protected $dataTahfidz;

    public function __construct()
    {
        $this->dataTahfidz = new Modeltbl_Tahfidz();
        helper('date');
    }

    public function index()
    {
        $data = [
            'title' => 'Tahfidz | Data Halaqoh',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s'))
        ];
        return view('/tahfidz/dataHalaqoh',$data);
    }

    public function rekapTahfidz()
    {   
        $rekapTahfidz = $this->dataTahfidz->findAll();

        $data = [
            'title' => 'Tahfidz | Rekap Tahfidz',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),
            'rekapTahfidz' => $rekapTahfidz
        ];
        return view('/tahfidz/rekap',$data);
    }

    public function save(){
        $this->dataTahfidz->save([
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'hafalan_terakhir' => $this->request->getVar('hafalan_terakhir'),
            'status' => $this->request->getVar('status'),
            'keterangan' => $this->request->getVar('keterangan')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil disimpan');
        return redirect()->to('/tahfidz/rekap');
    }
}
