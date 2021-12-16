<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\ProductCategoryModel;
use App\Models\CartItemsModel;

class ProductController extends BaseController
{

    protected $product;
    public function __construct()
    {
        $this->product = new ProductModel();
        $this->categories = new ProductCategoryModel();
    }
    public function product()
    {
        // dd(session());
        $data = [
            'product' => $this->product->where('user_id', session()->get('user_id'))->findAll(),
            'categories' => $this->categories->findAll(),
        ];
        // dd($data);
        return view('user/product/v_product', $data);
    }
    public function add_product()
    {
        $data = [
            'categories' => $this->categories->findAll(),
            
        ];
        return view('user/product/v_add', $data);
    }
    public function edit_product($product_id)
    {
        $data = [
            'product' => $this->product->find($product_id),
            'categories' => $this->categories->findAll(),
            
        ];
        if ($data['product']['user_id'] != session()->get('user_id')) {
            return redirect()->to('/product');
        }
        return view('user/product/v_edit', $data);
    }
    public function delete_product($product_id)
    {
        $data = $this->product->find($product_id);
        if ($data['user_id'] == session()->get('user_id')) {
            $cartModel = new CartItemsModel();
            $carts = $cartModel->where('product_id', $product_id)->findAll();
            foreach ($carts as $cart) {
                $cartModel->delete($cart);
            }
            $this->product->delete($product_id);
        }
        return redirect()->to('/product');
    }
    public function save_new()
    {
        // dd($this->request);
        if (!$this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Name is required!'
                ]
            ],
            'description' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Description is required!'
                ]
            ],
            'category_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Category is required!'
                ]
            ],
            'price' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Price is required!'
                ]
            ],
            'stock' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Stock is required!'
                ]
            ],
            

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $file = $this->request->getFile('image');
        if($file->isValid() && ! $file->hasMoved())
        {
            $imageName = $file->getRandomName();
            $file->move('assets/images/uploads/',$imageName);
        }
        $data = [
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description'),
            'user_id' => session()->get('user_id'),
            'category_id' => $this->request->getVar('category_id'),
            'price' => $this->request->getVar('price'),
            'stock' => $this->request->getVar('stock'),
            'image' => $imageName,
        ];

        $this->product->save($data);
        session()->setFlashdata('inputmsg', 'Ditambahkan!');
        return redirect()->to('/product');
    }
    public function save_edit($product_id)
    {
        if (!$this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Name is required!'
                ]
            ],
            'description' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Description is required!'
                ]
            ],
            'category_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Category is required!'
                ]
            ],
            'price' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Price is required!'
                ]
            ],
            'stock' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Stock is required!'
                ]
            ],


        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $file = $this->request->getFile('image');
        if($file->isValid() && ! $file->hasMoved())
        {
            $imageName = $file->getRandomName();
            $file->move('assets/images/uploads/',$imageName);
        } else {
            $imageName = $this->product->find($product_id)['image'];
        }
        $this->product->update($product_id, [
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description'),
            'user_id' => session()->get('user_id'),
            'category_id' => $this->request->getVar('category_id'),
            'price' => $this->request->getVar('price'),
            'stock' => $this->request->getVar('stock'),
            'image' => $imageName,
        ]);
        session()->setFlashdata('inputmsg', 'Diubah!');
        return redirect()->to('/product');
    }

    public function get_categories()
    {
    }
}
