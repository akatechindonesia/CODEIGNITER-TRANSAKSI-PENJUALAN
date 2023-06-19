<?php

namespace App\Controllers;

use App\Models\TransaksiModel;
use App\Models\UserModel;
use App\Models\SupplierModel;
use App\Models\BarangModel;

class TransaksiController extends BaseController
{
    protected $transaksiModel, $SupplierModel, $UserModel, $BarangModel;

    public function __construct()
    {
        $this->transaksiModel = new TransaksiModel();
        $this->UserModel = new UserModel();
        $this->SupplierModel = new SupplierModel();
        $this->BarangModel = new BarangModel();
    }

    public function index()
    {
        $data['transaksi'] = $this->transaksiModel->getAllTransaksi();
        $data['title'] = 'Halaman Transaksi';

        echo view('templates/header', $data); // Menampilkan header
        echo view('transaksi/index', $data); // Menampilkan konten halaman
        echo view('templates/footer');
    }

    public function create()
    {
        $userModel = new UserModel();
        $barangModel = new BarangModel();
        $supplierModel = new SupplierModel();

        $data['users'] = $userModel->findAll();
        $data['barang'] = $barangModel->findAll();
        $data['suppliers'] = $supplierModel->findAll();
        $data['title'] = 'Halaman Create Transaksi';

        echo view('templates/header', $data);
        echo view('transaksi/create', $data);
        echo view('templates/footer');
    }

    public function store()
    {

        $rules = [
            'user_id' => 'required|numeric',
            'barang_id' => 'required|numeric',
            'supplier_id' => 'required|numeric',
            'quantity' => 'required|numeric',
            'harga' => 'required|numeric|max_length[10]'
        ];

        if ($this->validate($rules)) {

            $data = [
                'user_id' => $this->request->getPost('user_id', FILTER_SANITIZE_STRING),
                'barang_id' => $this->request->getPost('barang_id', FILTER_SANITIZE_STRING),
                'supplier_id' => $this->request->getPost('supplier_id', FILTER_SANITIZE_STRING),
                'quantity' => $this->request->getPost('quantity', FILTER_SANITIZE_STRING),
                'harga' => $this->request->getPost('harga', FILTER_SANITIZE_STRING),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];

            $this->transaksiModel->insert($data);
            return redirect()->to('/transaksi');
        } else {
            $userModel = new UserModel();
            $barangModel = new BarangModel();
            $supplierModel = new SupplierModel();

            $data['validation'] = $this->validator;
            $data['users'] = $userModel->findAll();
            $data['barang'] = $barangModel->findAll();
            $data['suppliers'] = $supplierModel->findAll();
            $data['title'] = 'Halaman Create Transaksi';

            echo view('templates/header', $data);
            echo view('transaksi/create', $data);
            echo view('templates/footer');
        }
    }

    public function edit($id)
    {
        $data['transaksi'] = $this->transaksiModel->find($id);

        $userModel = new UserModel();
        $barangModel = new BarangModel();
        $supplierModel = new SupplierModel();

        $data['users'] = $userModel->findAll();
        $data['barang'] = $barangModel->findAll();
        $data['suppliers'] = $supplierModel->findAll();

        $data['title'] = 'Halaman Edit Transaksi';

        echo view('templates/header', $data); // Menampilkan header
        echo view('transaksi/edit', $data); // Menampilkan konten halaman
        echo view('templates/footer');
    }

    public function update($id)
    {
        $data = [
            'user_id' => $this->request->getPost('user_id'),
            'barang_id' => $this->request->getPost('barang_id'),
            'supplier_id' => $this->request->getPost('supplier_id'),
            'quantity' => $this->request->getPost('quantity'),
            'harga' => $this->request->getPost('harga'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $this->transaksiModel->update($id, $data);

        return redirect()->to('/transaksi');
    }

    public function delete($id)
    {
        $this->transaksiModel->delete($id);

        return redirect()->to('/transaksi');
    }

    public function report()
    {
        // Menampilkan halaman laporan
        $data['title'] = 'Halaman Report Transaksi';

        echo view('templates/header', $data); // Menampilkan header
        echo view('transaksi/report', $data); // Menampilkan konten halaman
        echo view('templates/footer');
    }

    public function generateReport()
    {
        // Mengambil data transaksi berdasarkan periode yang diberikan
        $startDate = $this->request->getPost('start_date');
        $endDate = $this->request->getPost('end_date');
        $transaksiModel = new TransaksiModel();
        $data['transaksi'] = $transaksiModel->getTransaksiByPeriod($startDate, $endDate);
        $data['startDate'] = $startDate;
        $data['endDate'] = $endDate;

        // Menampilkan halaman laporan dengan data transaksi
        $data['title'] = 'Halaman Report Transaksi';

        echo view('templates/header', $data); // Menampilkan header
        echo view('transaksi/report', $data); // Menampilkan konten halaman
        echo view('templates/footer');
    }
}
