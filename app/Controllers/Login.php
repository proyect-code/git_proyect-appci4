<?php
namespace App\Controllers;
//use App\Models\LoginModel;


class Login extends BaseController
{
	public function __construct(){
        helper('url');
		helper(['form']);
    }
	
    public function index(){
        echo view('Login');
    } 
  
    public function logoutsession(){
        $session = session();
        $session->destroy();
        return redirect()->to('/login/index');
    }
}
