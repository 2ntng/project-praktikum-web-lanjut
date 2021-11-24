<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
  
class Dashboard extends Controller
{
    public function index()
    {
        $session = session();
        if ($session->get('role') == 0) {
            return view('dashboard/v_dashAdmin');
        } else {
            return view('dashboard/v_dashUser');
        }
    }
}