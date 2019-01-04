<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller 
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
    $level              = $this->session->userdata('level');
    $data['group_menu'] = $this->Dashboard_models->get_group_menu($level)->result();
    $this->load->view('admin/home', $data);
  }

  
}