<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\ProductModel;
class Dashboard extends Controller
{
    public function __construct()
    {
        $this->product = new ProductModel();
        
    }
    public function index()
    {
        $session = session();
        $jumlahProduct = $this->product->countAllResults();
        $stockProduct = $this->product->select('name AS name, stock AS stock,COUNT(product_id) AS jumlah')->groupBy('stock')->get();
        if ($session->get('role') == 0) {
            return view('admin/v_index');
        } else {
            return view('user/v_index',[
                'jumlahProduct' => $jumlahProduct,
                'stockProduct'=> $stockProduct,
            ]);
        }
    }
}