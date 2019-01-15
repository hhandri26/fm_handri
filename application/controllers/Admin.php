<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
  public function __construct()
  {
    parent::__construct();
    
  }

  public function index()
  {
    if ($this->ion_auth->logged_in() )
    {
 
    $this->load->view('admin/home');
    }
    else
    {
        $this->index();
    }
  }

  
}