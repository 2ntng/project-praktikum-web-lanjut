<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{

    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function validasi()
    {
        $session = \Config\Services::session();
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
            $session->set('flash', 'Username Invalid');
            return redirect()->to(base_url('login'));
        }

        $user = $this->userModel->where('username', $username)->findAll();
        $role = $user[0]['role'];
        $sandi = $user[0]['password'];

        //memeriksa password
        if ($sandi != $password) {
            $session->set('flash', 'Password Invalid');
            return redirect()->to(base_url('login'));
        }
        $data = [
            'nama' => $user[0]['fullname'],
        ];
        $session->set('flash', $user[0]['user_id']);
        //memeriksa role
        if ($role == "admin") {
            return view('dashboard/v_dashAdmin', $data);
        } else {
            return view('dashboard/v_dashUser', $data);
        }
    }
}
