<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'Halaman Home';

        echo view('templates/header', $data); // Menampilkan header
        echo view('welcome_message', $data); // Menampilkan konten halaman
        echo view('templates/footer');
    }
}
