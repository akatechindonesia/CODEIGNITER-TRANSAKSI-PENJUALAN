<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SupplierSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_supplier' => 'Jaya Makmur',
                'alamat' => 'jl. Oekarno hatta - Banyuwangi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_supplier' => 'Sumber Rezeki',
                'alamat' => 'Jl. adi sucipto no. 112 - Rogojampi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_supplier' => 'Trijaya',
                'alamat' => 'Jl. kh. fawaid - Jember',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('supplier')->insertBatch($data);
    }
}
