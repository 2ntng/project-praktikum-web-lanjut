<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\UserModel;

class User extends BaseController
{
    public function __construct()
    {
        $this->product = new ProductModel();
        $this->user = new UserModel();
    }
    public function settings()
    {
        helper(['form']);
        $data = $this->user->find(session()->get('user_id'));
        return view('user/v_settings', $data);
    }
    public function save()
    {
        helper(['form']);
        $rules = [
            'fullname'      => 'required|min_length[3]|max_length[64]',
            'username'      => [
                'rules' => 'required|min_length[3]|max_length[64]|is_unique[user.username,user_id,'.session()->get('user_id').']',
                'errors' => [
                    'is_unique' => 'Username is not available!'
                ]
            ],
            'email'         => [
                'rules' => 'required|min_length[3]|max_length[64]|valid_email|is_unique[user.email,user_id,'.session()->get('user_id').']',
                'errors' => [
                    'is_unique' => 'Email address is already in use!'
                ]
            ]
        ];

        if ($this->validate($rules)) {
            $model = new UserModel();
            $data = [
                'username'  => $this->request->getVar('username'),
                'fullname'  => $this->request->getVar('fullname'),
                'email'     => $this->request->getVar('email')
            ];
            $model->update(session()->get('user_id'), $data);
            session()->setFlashdata('accUpdated', 'accUpdated');
            return redirect()->to('/user/settings');
        }else{
            $validation = $this->validator;
            session()->setFlashdata('error', $validation->listErrors());
            return redirect()->back()->withInput();
        }
    }
}
