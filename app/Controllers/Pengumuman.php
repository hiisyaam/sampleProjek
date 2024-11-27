<?php
namespace App\Controllers;


class Pengumuman extends BaseController{
    public function index(){
            $data = [
                'title' => 'Detail Data',
                'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),
            ];
    
            return view('/Pengumuman/index',$data);
    }
}