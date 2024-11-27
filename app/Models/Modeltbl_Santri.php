<?php

namespace App\Models;

use CodeIgniter\Model;

class Modeltbl_Santri extends Model
{
    protected $table      = 'tbl_Santri';
    protected $primaryKey = 'id_santri';
    protected $allowedFields = ['nama_santri', 'nis','unit','kelas','tahun_ajaran','alamat'];

    public function getMahasiswaSMP()
    {
        return $this->where('unit', 'SMP')->findAll();
    }
}