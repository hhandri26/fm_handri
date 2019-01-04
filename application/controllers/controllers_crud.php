<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Controllers_crud extends MY_Controller 
{
  public function __construct() {
        parent::__construct();
        $this->cekLogin();
        $this->load->helper(array('Form', 'Cookie', 'String'));
        $this->load->model('controllers_m');
    }
  public function index()
  {
  	$data['role_user']	 = $this->controllers_m->get_role_user()->result();
  	$data['script_apps'] = 'admin/script_js.php';
  	$this->load->view('admin/controllers/index', $data);
  }

  public function add()
  {
  	$controller 	=$this->input->post('controller');
  	$akses			  =$this->input->post('akses');
  	$this->controllers_m->add($controller,$akses);
  	$this->session->set_flashdata('info', 'Berhasil Menambahkan controller');
  	redirect('dashboard#Controllers_crud/index');
  }

  public function get_data()
  {
  	 $data=$this->controllers_m->get_data();
	   echo json_encode($data);
  }
 }