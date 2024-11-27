<?php
namespace App\Controllers;
use App\Models\Modeltbl_Mapel;

class Sekolah extends BaseController
{

    protected $ModelSekolah;
    protected $listMatkul;
    public function __construct()
    {
        $this->ModelSekolah = new Modeltbl_Mapel();
        helper('date');
    }
    public function index(){
        $data = [
            'title' => 'Data Mata Pelajaran',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),
            'listMatkul' => $this->ModelSekolah->getMapel()
        ];
        return view('/sekolah/mapel',$data);
    }

    public function save(){
        
        $this->ModelSekolah->save([
            'nama_mapel'=> $this->request->getVar('nama_mapel'),
            'guru' => $this->request->getVar('guru'),
            'kelas' => $this->request->getVar('kelas'),
            'tahun_ajaran'=>$this->request->getVar('tahun_ajaran'),
            'keterangan' => $this->request->getVar('keterangan')
        ]);

        session()->setFlashdata('pesan','Data Berhasil Ditambahkan');
        return redirect()->to('/mapel');
    }


    public function detail($id){
        $data = [
            'title' => 'Detail Data',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),
            'data' => $this->ModelSekolah->getMapel($id)
        ];

        if(empty($data['data'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Tidak ditemukan');
        }

        return view('/sekolah/detailMapel',$data);
    }

    public function delete($id){
        $this->ModelSekolah->delete($id);
        session()->setFlashdata('pesan','Mata Pelajaran'.$this->request->getVar('nama_mapel').'Berhasil Dihapus');
        return redirect()->to('/mapel');
    }

    
}