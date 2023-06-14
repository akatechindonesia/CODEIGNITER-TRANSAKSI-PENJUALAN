<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model
{
    protected $table = 'supplier';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_supplier', 'alamat'];

    // Tambahkan metode lain yang diperlukan, seperti untuk mencari data, dll.
}
