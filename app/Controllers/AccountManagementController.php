<?php

namespace App\Controllers;

use App\Models\UserModel;

class AccountManagementController extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'users' => $this->userModel->where('role', 1)->findAll(),
            'admins' => $this->userModel->where('role', 0)->findAll()
        ];

        return view('admin/v_accountManagement', $data);
    }

    public function add()
    {
        return view('admin/v_add');
    }

    public function save()
    {
        $session = session();
        helper(['form']);
        $rules = [
            'fullname'      => 'required|min_length[3]|max_length[64]',
            'username'      => 'required|min_length[3]|max_length[64]|is_unique[user.username]',
            'email'         => 'required|min_length[3]|max_length[64]|valid_email|is_unique[user.email]',
            'password'      => 'required|min_length[3]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $data = [
                'username'  => $this->request->getVar('username'),
                'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'fullname'  => $this->request->getVar('fullname'),
                'email'     => $this->request->getVar('email'),
                'role'      => 0
            ];
            $this->userModel->save($data);
            $session->setFlashdata('msg', 'userRegistered');
            return redirect()->to('/admin/manage/accounts');
        } else {
            $validation = $this->validator;
            $session->setFlashdata('msg', $validation->listErrors());
        }
    }

    public function edit()
    {
        return view('admin/v_edit');
    }

    public function update()
    {
    }

    public function delete($id)
    {
        if (session()->get('role') == 0) {
            $this->userModel->delete($id);
        }
        return redirect()->to('/admin/manage/accounts');
    }
}
