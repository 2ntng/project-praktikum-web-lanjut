<?php

namespace App\Controllers;

use App\Database\Migrations\ProductCategory;
use App\Models\ProductModel;
use App\Models\UserModel;
use App\Models\ProductCategoryModel;

class Navigation extends BaseController
{

    protected $userModel;
    protected $productModel;
    protected $productCategoryModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->productModel = new ProductModel();
        $this->productCategoryModel = new ProductCategoryModel();
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
            'product_category' => $this->productCategoryModel->findAll(),
            'products' => $this->productModel->where('category_id',)->findAll()
        ];
        return view('user/v_home', $data);
        // dd($data);
    }

    public function product_detail()
    {
        $data = [
            'product' => $this->productModel->findAll()
        ];
        return view('user/v_product_detail');
    }
}
