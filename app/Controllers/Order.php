<?php

namespace App\Controllers;

// use App\Database\Migrations\ProductCategory;
// use App\Models\ProductModel;
// use App\Models\UserModel;
// use App\Models\ProductCategoryModel;

class Order extends BaseController
{
    // protected $product;
    // protected $userModel;
    // protected $productModel;
    // protected $productCategoryModel;
    // public function __construct()
    // {
    //     $this->userModel = new UserModel();
    //     $this->productModel = new ProductModel();
    //     $this->productCategoryModel = new ProductCategoryModel();
    //     $this->product = new ProductModel();
    //     $this->categories = new ProductCategoryModel();
    // }

    public function new()
    {
        return view('user/order/v_newOrder');
    }
    public function send()
    {
        return view('user/order/v_sendOrder');
    }
    public function sent()
    {
        return view('user/order/v_sentOrder');
    }
    public function finish()
    {
        return view('user/order/v_finishOrder');
    }
}
