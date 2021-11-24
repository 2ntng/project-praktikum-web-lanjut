<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
  
class Dashboard extends Controller
{
    public function index()
    {
        $session = session();
        if ($session->get('role') == 0) {
            return view('admin/v_admin_index');
        } else {
            return view('user/v_index');
        }
    }
}