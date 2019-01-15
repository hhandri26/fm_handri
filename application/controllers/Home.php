<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
  public function __construct()
  {
    parent::__construct();
    $this->cekLogin();
    $this->load->model('Dashboard_models');
    $this->load->library('phpgrid');
  }

  public function index()
  {
    $data['test']     = 'welcome';
    $this->load->view('admin/home', $data);
  }

  
}