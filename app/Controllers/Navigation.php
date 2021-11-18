<?php

namespace App\Controllers;

use App\Models\PenggunaModel;

class Navigation extends BaseController
{
    protected $penggunaModel;
    public function __construct()
    {
        $this->penggunaModel = new PenggunaModel();
    }
    public function dashboard()
    {
        $valid = 0;
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        //check ada username yang sama ga
        $user = $this->penggunaModel->findAll();
        foreach ($user as $user) {
            if ($user['username'] == $username) {
                $valid = 1;
            };
        };
        if ($valid == 0) {
            echo "username tidak terdaftar";
            return view('akses/v_login');
        }

        $user = $this->penggunaModel->where('username', $username)->findAll();
        $tingkat = $user[0]['tingkat'];
        $status = $user[0]['status'];
        $sandi = $user[0]['password'];

        //memeriksa password
        if ($sandi != $password) {
            echo "Password salah!";
            return view('akses/v_login');
        }

        //memeriksa status
        if ($status == "activated") {
            if ($tingkat == "admin") {
                return view('dashboard/v_dashAdmin');
            } else {
                return view('dashboard/v_dashUser');
            }
        } else {
            echo "Akun Belum Aktif";
            return view('akses/v_login');
        }
    }
    public function saveRegistrasi()
    {
        $valid = 0;
        $nama = $this->request->getVar('nama');
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $tingkat = $this->request->getVar('tingkat');

        $user = $this->penggunaModel->findAll();
        foreach ($user as $user) {
            if ($user['username'] == $username) {
                $valid = 1;
            };
        };
        if ($valid == 1) {
            echo "username sudah terdaftar";
            return view('akses/v_registrasi');
        }

        $this->penggunaModel->save([
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'tingkat' => $tingkat
        ]);

        echo "Akunmu segera diaktivasi oleh pihak Admin.";
        return view('akses/v_login');
    }
    public function productAdmin()
    {
        return view('product/v_admin');
    }
    public function login()
    {
        return view('akses/v_login');
    }
    public function registrasi()
    {
        return view('akses/v_registrasi');
    }
    public function aktivasi()
    {
        $data = [
            'user' => $this->penggunaModel->findAll()
        ];
        return view('akses/v_aktivasi', $data);
    }
}
