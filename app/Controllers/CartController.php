<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\UserModel;
use App\Models\CartItemsModel;

class CartController extends BaseController
{
    public function __construct()
    {
        $this->product = new ProductModel();
        $this->user = new UserModel();
        $this->cartItems = new CartItemsModel();
        helper('number');
        helper('form');
    }
   
    public function add()
    {
        $productId = $this->request->getPost('id');
        $product = $this->product->find($productId);
        $itemOfProduct = $this->cartItems->where('product_id', $productId)->first();
        if ($itemOfProduct == NULL) {
            $data=[
                'user_id'      => session()->get('user_id'),
                'product_id'   => $this->request->getPost('id'),
                'quantity'     => $this->request->getVar('jumlah')
            ];
            $this->cartItems->save($data);
        } else{
            $data=[
                'quantity'     => $itemOfProduct['quantity'] + $this->request->getVar('jumlah')
            ];
            $id = $this->cartItems->where('product_id', $productId)->first()['cart_item_id'];
            $this->cartItems->update($id, $data);
        }
        return redirect()->to(base_url('/user/cart'));
    }
    public function clear(){
        $cart = \Config\Services::cart();
        $cart->destroy();
    }
    public function delete($id)
    {
        $this->cartItems->delete($id);
        return redirect()->to(base_url('/user/cart'));
        // dd($data);
    }
    public function checkout()
    {
        $cart = \Config\Services::cart();
        $i=0;
        foreach ( $cart->contents() as $value) {
            $value2 = $this->product->where('product_id',$value['id'])->where('deleted_at',NULL)->findAll();
            if((int)$value2[0]['stock']- $value['qty']<0){
                if (!$this->validate([
                    'stock' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => $value2[0]['name'].' stock sedang Kosong, Silahkan hubungin penjual!'
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
