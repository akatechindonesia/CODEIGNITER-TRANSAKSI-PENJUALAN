# CodeIgniter 4 Framework

transaksi penjualan is one simple example of ci4 implementation, there are few shcema for database like bellow.
- i was added for xss filter for input field
- joining some of tables.
- report request data from two dates 

User : 
    'username' => 'firdasu eko nuraynto',
    'email' => 'firdausekon@gmail.com',
    'password' => password_hash('password', PASSWORD_DEFAULT),
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s'),

Barang : 
    'nama_barang' => 'Pensil',
    'harga' => 1000,
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s'),

Supplier :
    'nama_supplier' => 'Jaya Makmur',
    'alamat' => 'jl. Oekarno hatta - Banyuwangi',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s'),

Transaksi : 
   'user_id' => 1,
   'barang_id' => 1
   'supplier_id' => 1,
   'quantity' => 5,
   'harga' => 5000,
   'created_at' => date('Y-m-d H:i:s'),
   'updated_at' => date('Y-m-d H:i:s'),

thanks. we hope can help anybody.
