<?php

namespace App\Controllers;

use App\Models\UserModel;

class Navigation extends BaseController
{

    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function productAdmin()
    {
        return view('product/v_admin');
    }
    public function login()
    {
        $session = \Config\Services::session();
        $session->destroy();
        return view('akses/v_login');
    }
    public function registrasi()
    {
        $session = \Config\Services::session();
        $session->destroy();
        return view('akses/v_registrasi');
    }
    public function aktivasi()
    {
        $data = [
            'user' => $this->userModel->findAll()
        ];
        return view('akses/v_aktivasi', $data);
    }
}
