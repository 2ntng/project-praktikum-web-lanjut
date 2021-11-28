<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AccountManagement extends Controller
{
    public function index()
    {
        return view('admin/v_accountManagement');
    }
    public function add()
    {
        return view('admin/v_add');
    }
}
