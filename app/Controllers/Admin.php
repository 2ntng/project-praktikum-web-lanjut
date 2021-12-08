<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use PDO;

class Admin extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function settings($id)
    {
        $data = [
            'profile' => $this->userModel->find($id)
        ];
        return view('admin/v_settings', $data);
    }

    public function save()
    {
        return redirect()->to('/dashboard');
    }

    // EDIT PROFILE SETTINGS
    public function update($id)
    {
        $data = [
            'fullname' => $this->request->getVar("fullname"),
            'username' => $this->request->getVar("username"),
            'email' => $this->request->getVar("email"),
        ];
        $this->userModel->update($id, $data);
        return redirect()->to('admin/v_settings');
    }
}
