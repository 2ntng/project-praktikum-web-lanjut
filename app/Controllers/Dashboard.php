<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductModel;
use App\Models\UserModel;
use PDO;

class Dashboard extends Controller
{
    public function __construct()
    {
        $this->product = new ProductModel();
        $this->user = new UserModel();
    }
    public function index()
    {
        $session = session();
        $stockProduct = $this->product->select('stock AS stock,name AS name,COUNT(product_id) AS jumlah')->where('deleted_at',NULL)->where('user_id', session()->get('user_id'))->groupBy('stock')->get();
        $jumlahUser = $this->user->CountAllResults();
        if ($session->get('role') == 0) {
            return view('admin/v_index',[
                'jumlahUser'=> $jumlahUser,
                'jumlahAdmin' => $this->user->like('role','0')->countAllResults(),
                'jumlahNonAdmin'=>$this->user->like('role','1')->countAllResults(),
            ]);
        } else {
            return view('user/v_index',[
                'jumlahProduct' => $this->product->where('user_id', session()->get('user_id'))->countAllResults(),
                'stockProduct'=> $stockProduct,
            ]);
        }
    }
    public function settings()
    {
        return view('admin/v_settings');
    }
}
