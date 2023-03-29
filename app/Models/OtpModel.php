<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;

class OtpModel extends Model
{
    protected $table      = 'otp';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    // protected $allowedFields = [
    //     'username', 'email', 'password',
    // ];

    // public function cek_login($nama)
    // public function cek_login($nama)
    // {
    //     return $this->db->table('driver')
    //         // ->where(array('nama' => $nama, 'password' => $password))
    //         ->where(array('nama' => $nama))
    //         ->orWhere(array('email' => $nama))
    //         ->orWhere(array('telp' => $nama))
    //         ->get()->getRowArray();
    // }
}