<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'SIP - Sistem Informasi Pasien',
        ];

        return view('/pasien/login', $data);
    }
    public function register()
    {
        $data = [
            'page_title' => 'SIP - Pendaftaran Akun',
        ];

        return view('/pasien/register', $data);
    }
    public function home()
    {
        $data = [
            'page_title' => 'SIP - Pendaftaran Akun',
        ];

        return view('/layout/layout', $data);
    }
}
