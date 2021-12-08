<?php

namespace App\Controllers;

use App\Models\UserModel;

class Navigation extends BaseController
{

    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
        
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
        return view('user/v_home');
    }

    public function product_detail()
    {
        return view('user/v_product_detail');
    }

    
}
