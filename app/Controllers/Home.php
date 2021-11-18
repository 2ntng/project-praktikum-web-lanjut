<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function template()
    {
        return view('admin/v_admin_template');
    }
    public function admin()
    {
        return view('admin/v_admin_index');
    }
    public function product()
    {
        return view('admin/v_admin_product');
    }
}
