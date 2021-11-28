<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Management extends Controller
{
    public function index()
    {
        return view('admin/v_userManagement');
    }
    public function add()
    {
        return view('admin/v_add');
    }
}
