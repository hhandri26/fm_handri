<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller 
{
  public $data = [];
  function __construct()
  {
    parent::__construct();
    $this->cekLogin();
    $this->load->model('users_m');
    $this->load->database();
    $this->load->library(['ion_auth', 'form_validation']);
    $this->load->helper(['url', 'language']);

    $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

    $this->lang->load('auth');
    
  }

  function index()
  {   
    	$data['content'] = 'admin/users/index';    
      $this->load->view('admin/home', $data);
   
  }

  function view()
  {
    $data=$this->users_m->list_users();
    echo json_encode($data);
  }

  



  
}