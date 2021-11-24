<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    
    protected $product;
    public function __construct()
    {
        $this->product = new ProductModel();
        
    }

    public function product()
    {
        $data['product'] = $this->product->findAll();
        // dd($data);
        return view('user/v_product', $data);
    }
    public function add_product()
    {
        return view('user/v_add_product');
    }
    public function data()
    {
        if (!$this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'description' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'price' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'supply' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
           
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $data = [
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description'),
            'price' => $this->request->getVar('price'),
            'supply' => $this->request->getVar('supply')
        ];
        
 
        session()->setFlashdata('message', 'Tambah Data Pasien Berhasil');
        $this->product->save($data);
        
        return redirect()->to('/product');
    }
}
