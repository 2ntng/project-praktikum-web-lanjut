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

    public function productAdmin()
    {
        return view('product/v_admin');
    }
}
