<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'barang_id', 'supplier_id', 'quantity', 'harga', 'created_at', 'updated_at'];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';

    public function getAllTransaksi()
    {
        return $this->join('users', 'users.id = transaksi.user_id')
            ->join('supplier', 'supplier.id = transaksi.supplier_id')
            ->join('barang', 'barang.id = transaksi.barang_id')
            ->select('transaksi.*, users.username as nama_user, supplier.nama_supplier as nama_supplier, barang.nama_barang as nama_barang')
            ->findAll();
    }

    public function getTransaksiByPeriod($start_date, $end_date)
    {
        return $this->db->table('transaksi')
            ->join('users', 'users.id = transaksi.user_id')
            ->join('barang', 'barang.id = transaksi.barang_id')
            ->join('supplier', 'supplier.id = transaksi.supplier_id')
            ->select('transaksi.*, users.username as nama_user, barang.nama_barang as nama_barang, supplier.nama_supplier as nama_supplier, transaksi.created_at as tanggal_transaksi')
            ->where('transaksi.created_at >=', $start_date)
            ->where('transaksi.created_at <=', $end_date)
            ->get()
            ->getResultArray();
    }

    public function getUserTransaksi()
    {
        return $this->belongsTo(UserModel::class, 'user_id');
    }

    public function getBarangTransaksi()
    {
        return $this->belongsTo(BarangModel::class, 'barang_id');
    }

    public function getSupplierTransaksi()
    {
        return $this->belongsTo(SupplierModel::class, 'supplier_id');
    }
}
