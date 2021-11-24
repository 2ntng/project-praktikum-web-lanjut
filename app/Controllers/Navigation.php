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
    public function dashboard()
    {
        $valid = 0;
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        //check ada username yang sama ga
        $user = $this->userModel->findAll();
        foreach ($user as $user) {
            if ($user['username'] == $username) {
                $valid = 1;
            };
        };
        if ($valid == 0) {
            echo "Username not found!";
            return view('akses/v_login');
        }

        $a_username = $this->userModel->where('username', $username)->findAll();
        $role = $a_username[0]['role'];
        $a_password = $a_username[0]['password'];

        //memeriksa password
        if ($a_password != $password) {
            echo "Password salah!";
            return view('akses/v_login');
        }

        // memeriksa role
        if ($role == 0) {
            return view('dashboard/v_dashAdmin');
        } else {
            return view('dashboard/v_dashUser');
        }
    }
    public function saveRegistrasi()
    {
        $valid = 0;
        $fullname = $this->request->getVar('fullname');
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $role = $this->request->getVar('role');

        $user = $this->userModel->findAll();
        foreach ($user as $user) {
            if ($user['username'] == $username) {
                $valid = 1;
            };
        };
        if ($valid == 1) {
            echo "username sudah terdaftar";
            return view('akses/v_registrasi');
        }

        $this->userModel->save([
            'fullname' => $fullname,
            'username' => $username,
            'password' => $password,
            'role' => $role
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
            'user' => $this->userModel->findAll()
        ];
        return view('akses/v_aktivasi', $data);
    }
}
