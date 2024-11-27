<?php

namespace App\Models;

use CodeIgniter\Model;

class Modeltbl_Tahfidz extends Model
{
    protected $table = 'tbl_Tahfidz';
    protected $allowedFields = ['nama','kelas','hafalan_terakhir','status','keterangan'];
}