<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('access/v_login');
    } 
  
    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'      => $data['user_id'],
                    'username'     => $data['username'],
                    'fullname'     => $data['fullname'],
                    'email'        => $data['email'],
                    'role'        => $data['role'],
                    'logged_in'    => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            }else{
                $session->setFlashdata('msg', 'wrongPassword');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'usernameNotFound');
            return redirect()->to('/login');
        }
    }
  
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }

}
