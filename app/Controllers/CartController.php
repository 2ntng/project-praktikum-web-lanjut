<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Product;
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
            'options' => array('gambar' => NULL, 'user_id' => session()->get('user_id'))
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
    public function checkout()
    {
        $cart = \Config\Services::cart();
        
        foreach ( $cart->contents() as $value) {
            $value2 = $this->product->where('product_id',$value['id'])->where('deleted_at',NULL)->findAll();
            if((int)$value2[0]['stock']- $value['qty']<0){
                if (!$this->validate([
                    'stock' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Stock Kosong'
                        ]
                    ],
                ])) {
                    session()->setFlashdata('error', $this->validator->listErrors());
                    return redirect()->back();
                }
            }else{
            $this->product->update($value['id'], [
                'stock' => (int)$value2[0]['stock']- $value['qty']
            ]);
        }
    }
        $cart->destroy();
        return redirect()->to(base_url('/newOrder'));
    }
}
