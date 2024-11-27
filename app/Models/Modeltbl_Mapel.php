<?php

namespace App\Models;

use CodeIgniter\Model;

class Modeltbl_Mapel extends Model
{
    protected $table = 'tbl_Mapel';
    protected $allowedFields =['nama_mapel','guru','kelas', 'tahun_ajaran','keterangan'];
}