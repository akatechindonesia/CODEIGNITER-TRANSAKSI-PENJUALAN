<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username',
        'email',
        'password',
        'created_at',
        'updated_at'
    ];

    // Tambahkan method atau fungsi lain yang dibutuhkan

}
