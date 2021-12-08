<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ProductModel;
use App\Models\ProductCategoryModel;

class Navigation extends BaseController
{
    protected $product;
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->product = new ProductModel();
        $this->categories = new ProductCategoryModel();
        helper('number');
        helper('form');
    }
    
    // Routes dari raymond
    public function template()
    {
        return view('user/v_template');
    }

    public function user()
    {
        return view('user/v_index');
    }

    public function home()
    {
        $data = [
            'product'=> $this->product->findAll(),
            'cart'=>\Config\Services::cart(),
        ];
        return view('user/v_home',$data);
    }

    public function product_detail($product_id)
    {
        $data = [
            'product' => $this->product->find($product_id),
            'categories' => $this->categories->findAll(),
            'cart'=>\Config\Services::cart(),
        ];
        return view('user/v_product_detail',$data);
    }

    
}
