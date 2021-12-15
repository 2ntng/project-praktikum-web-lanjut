<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class CartController extends BaseController
{
    public function __construct()
    {
        $this->product = new ProductModel();
        helper('number');
        helper('form');
    }
    
    public function add()
    {
        $cart = \Config\Services::cart();
        $data=[
            'id'      => $this->request->getPost('id'),
            'qty'     => $this->request->getVar('jumlah'),
            'price'   => $this->request->getPost('price'),
            'name'    => $this->request->getPost('name'),
         ];
        $cart->insert($data);
         return redirect()->to(base_url('/home'));
    }
    public function clear(){
        $cart = \Config\Services::cart();
        $cart->destroy();
    }
    public function delete($rowid)
    {
        $cart = \Config\Services::cart();
        $cart->remove($rowid);
        return redirect()->to(base_url('/user/cart'));
        // dd($data);
    }
}
