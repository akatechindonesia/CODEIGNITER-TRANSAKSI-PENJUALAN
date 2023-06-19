<?php

namespace App\Controllers;

use App\Models\BarangModel;
use CodeIgniter\Controller;

class BarangController extends BaseController
{
    public function index()
    {
        $model = new BarangModel();
        $data['barang'] = $model->findAll();
        $data['title'] = 'Halaman Barang';

        echo view('templates/header', $data); // Menampilkan header
        echo view('barang/index', $data); // Menampilkan konten halaman
        echo view('templates/footer');
    }

    public function create()
    {
        $data['title'] = 'Halaman Create Barang';
        echo view('templates/header', $data); // Menampilkan header
        echo view('barang/create', $data); // Menampilkan konten halaman
        echo view('templates/footer');
    }

    public function store()
    {
        $model = new BarangModel();
        $rules = [
            'nama_barang' => 'required|min_length[3]',
            'harga' => 'required|numeric|max_length[10]'
        ];

        if ($this->validate($rules)) {
            $data = [
                'nama_barang' => $this->request->getPost('nama_barang', FILTER_SANITIZE_STRING),
                'harga' => $this->request->getPost('harga')
            ];
            $model->insert($data);
            return redirect()->to('/barang');
        } else {
            $data['validation'] = $this->validator;
            $data['title'] = 'Halaman Create Barang';
            echo view('templates/header', $data); // Menampilkan header
            echo view('barang/create', $data); // Menampilkan konten halaman
            echo view('templates/footer');
        }
    }


    public function edit($id)
    {
        $model = new BarangModel();
        $data['barang'] = $model->find($id);

        $data['title'] = 'Halaman Edit Barang';
        echo view('templates/header', $data); // Menampilkan header
        echo view('barang/edit', $data); // Menampilkan konten halaman
        echo view('templates/footer');
    }

    public function update($id)
    {
        $model = new BarangModel();
        $data = [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'harga' => $this->request->getPost('harga')
        ];
        $model->update($id, $data);

        return redirect()->to('/barang');
    }

    public function delete($id)
    {
        $model = new BarangModel();
        $model->delete($id);

        return redirect()->to('/barang');
    }
}
