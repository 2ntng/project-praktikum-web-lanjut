<?php

namespace App\Controllers;

use App\Database\Migrations\ProductCategory;
use App\Models\ProductModel;
use App\Models\UserModel;
use App\Models\ProductCategoryModel;

class Navigation extends BaseController
{
    protected $product;
    protected $userModel;
    protected $productModel;
    protected $productCategoryModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->productModel = new ProductModel();
        $this->productCategoryModel = new ProductCategoryModel();
        $this->product = new ProductModel();
        $this->categories = new ProductCategoryModel();
        helper('number');
        helper('form');
    }
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
            'product_category' => $this->productCategoryModel->findAll(),
            'products' => $this->productModel->findAll(),
            'product' => $this->product->findAll(),
            'cart' => \Config\Services::cart(),
        ];
        return view('user/v_home', $data);
        // dd($data);
    }

    public function product_detail($product_id)
    {
        $data = [
            // 'product' => $this->productModel->findAll()
            'product' => $this->product->find($product_id),
            'categories' => $this->categories->findAll(),
            'cart' => \Config\Services::cart(),
        ];
        return view('user/v_product_detail', $data);
    }

    public function cart_detail()
    {
        return view('user/v_cart_detail');
    }

    public function cart_checkout()
    {
        return view('user/v_checkout_detail');
    }
}
