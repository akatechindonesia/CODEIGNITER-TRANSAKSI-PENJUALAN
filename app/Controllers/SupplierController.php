<?php

namespace App\Controllers;

use App\Models\SupplierModel;
use CodeIgniter\Controller;

class SupplierController extends Controller
{
    public function index()
    {
        $model = new SupplierModel();
        $data['supplier'] = $model->findAll();
        $data['title'] = 'Halaman Supplier';

        echo view('templates/header', $data); // Menampilkan header
        echo view('supplier/index', $data); // Menampilkan konten halaman
        echo view('templates/footer');
    }

    public function create()
    {
        $data['title'] = 'Halaman Create Supplier';

        echo view('templates/header', $data); // Menampilkan header
        echo view('supplier/create', $data); // Menampilkan konten halaman
        echo view('templates/footer');
    }

    public function store()
    {
        $model = new SupplierModel();
        $data = [
            'nama_supplier' => $this->request->getPost('nama_supplier'),
            'alamat' => $this->request->getPost('alamat')
        ];
        $model->insert($data);

        return redirect()->to('/supplier');
    }

    public function edit($id)
    {
        $model = new SupplierModel();
        $data['supplier'] = $model->find($id);
        $data['title'] = 'Halaman Edit Supplier';

        echo view('templates/header', $data); // Menampilkan header
        echo view('supplier/edit', $data); // Menampilkan konten halaman
        echo view('templates/footer');
    }

    public function update($id)
    {
        $model = new SupplierModel();
        $data = [
            'nama_supplier' => $this->request->getPost('nama_supplier'),
            'alamat' => $this->request->getPost('alamat')
        ];
        $model->update($id, $data);

        return redirect()->to('/supplier');
    }

    public function delete($id)
    {
        $model = new SupplierModel();
        $model->delete($id);

        return redirect()->to('/supplier');
    }
}
