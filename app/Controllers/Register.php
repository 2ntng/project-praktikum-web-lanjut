<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{

    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('access/v_register', $data);
    }
    public function save()
    {
        $session = session();
        helper(['form']);
        $rules = [
            'fullname'      => 'required|min_length[3]|max_length[64]',
            'username'      => [
                'rules' => 'required|min_length[3]|max_length[64]|is_unique[user.username]',
                'errors' => [
                    'is_unique' => 'Username is not available!'
                ]
            ],
            'email'         => [
                'rules' => 'required|min_length[3]|max_length[64]|valid_email|is_unique[user.email]',
                'errors' => [
                    'is_unique' => 'Email address is already in use!'
                ]
            ],
            'password'      => 'required|min_length[3]|max_length[200]',
            'confpassword'  => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Passwords do not match!'
                ]
            ]
        ];

        if ($this->validate($rules)) {
            $model = new UserModel();
            $data = [
                'username'  => $this->request->getVar('username'),
                'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'fullname'  => $this->request->getVar('fullname'),
                'email'     => $this->request->getVar('email'),
                'role'      => 1
            ];
            $model->save($data);
            $session->setFlashdata('userRegistered', 'userRegistered');
            return redirect()->to('/register');
        }else{
            $validation = $this->validator;
            $session->setFlashdata('error', $validation->listErrors());
            return redirect()->back()->withInput();
        }
    }
}
