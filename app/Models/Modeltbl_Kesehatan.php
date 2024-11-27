<?php

namespace App\Models;

use CodeIgniter\Model;

class Modeltbl_Kesehatan extends Model
{
    protected $table = 'tbl_Kesehatan';
    protected $allowedFields = ['pasien','keluhan','pemeriksa','jenis_rawat','resep'];
}