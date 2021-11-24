<?php

namespace App\Controllers;

use App\Models\UserModel;

class Registrasi extends BaseController
{

    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function saveRegistrasi()
    {
        $session = \Config\Services::session();
        $valid = 0;
        $fullname = $this->request->getVar('fullname');
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $email = $this->request->getVar('email');
        $role = 1;

        $user = $this->userModel->findAll();
        foreach ($user as $user) {
            if ($user['username'] == $username) {
                $valid = 1;
            };
        };
        if ($valid == 1) {
            $session->set('flash', 'Username Invalid');
            return redirect()->to(base_url('registrasi'));
        }

        $this->userModel->save([
            'fullname' => $fullname,
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'role' => $role
        ]);

        $session->set('flash', 'Registrasi Berhasil');
        return redirect()->to(base_url('login'));
    }
}
