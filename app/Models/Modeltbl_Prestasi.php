<?php
namespace App\Models;

use CodeIgniter\Model;

class Modeltbl_Prestasi extends Model{
    protected $table      = 'tbl_prestasi';
    protected $allowedFields = ['nama','kategori','juara','nama_lomba'];
}