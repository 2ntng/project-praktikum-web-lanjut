<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductModel;
use PDO;

class Admin extends Controller
{
    public function __construct()
    {
        $this->product = new ProductModel();
    }
    public function settings()
    {
        return view('admin/v_settings');
    }
    public function save()
    {
        return redirect()->to('/dashboard');
    }
}
