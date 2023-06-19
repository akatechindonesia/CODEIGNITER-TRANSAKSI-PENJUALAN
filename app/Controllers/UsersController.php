<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UsersController extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();
        $data['title'] = 'Halaman Users';

        echo view('templates/header', $data); // Menampilkan header
        echo view('users/index', $data); // Menampilkan konten halaman
        echo view('templates/footer');
    }

    public function create()
    {
        $data['title'] = 'Halaman Create Users';

        echo view('templates/header', $data); // Menampilkan header
        echo view('users/create', $data); // Menampilkan konten halaman
        echo view('templates/footer');
    }

    public function store()
    {
        $userModel = new UserModel();

        $rules = [
            'username' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[3]',
        ];

        if ($this->validate($rules)) {
            $data = [
                'username' => $this->request->getPost('username', FILTER_SANITIZE_STRING),
                'email' => $this->request->getPost('email', FILTER_SANITIZE_STRING),
                'password' => $this->request->getPost('password', FILTER_SANITIZE_STRING),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            $userModel->insert($data);
            return redirect()->to('/users');
        } else {
            $data['validation'] = $this->validator;
            $data['title'] = 'Halaman Create Users';

            echo view('templates/header', $data); // Menampilkan header
            echo view('users/create', $data); // Menampilkan konten halaman
            echo view('templates/footer');
        }
    }

    public function edit($id)
    {
        $userModel = new UserModel();
        $data['user'] = $userModel->find($id);
        $data['title'] = 'Halaman Edit Users';

        echo view('templates/header', $data); // Menampilkan header
        echo view('users/edit', $data); // Menampilkan konten halaman
        echo view('templates/footer');
    }

    public function update($id)
    {
        $userModel = new UserModel();
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        $userModel->update($id, $data);
        return redirect()->to('/users');
    }

    public function delete($id)
    {
        $userModel = new UserModel();
        $userModel->delete($id);
        return redirect()->to('/users');
    }
}
