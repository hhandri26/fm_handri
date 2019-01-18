<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller 
{
  public function __construct()
  {
    parent::__construct();
    $this->cekLogin();
    
  }

  public function index()
  {   
	$data['content'] = 'admin/dashboard';    
    $this->load->view('admin/home', $data);
   
  }

  
}