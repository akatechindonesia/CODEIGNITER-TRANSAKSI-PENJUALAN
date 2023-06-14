<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'barang_id' => 1,
                'supplier_id' => 1,
                'quantity' => 5,
                'harga' => 5000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 2,
                'barang_id' => 2,
                'supplier_id' => 2,
                'quantity' => 10,
                'harga' => 10000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('transaksi')->insertBatch($data);
    }
}
