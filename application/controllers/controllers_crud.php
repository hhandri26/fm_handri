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
  	$data['script_apps'] = 'admin/script_js.php';
    $data['table']       = $this->controllers_m->get_data();
  	$this->load->view('admin/controllers/index', $data);
  }

  public function add()
  {
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {

          $this->load->library('form_validation');
          $this->form_validation->set_rules('controller','controller harus Di isi','trim|required' );
          $this->form_validation->set_rules('akses','akses harus Di isi','trim|required' );
          if($this->form_validation->run()){
            $data = array(   'controller'  => $this->input->post('controller'),
                              'akses'       => $this->input->post('akses'),
                          );
            $res = $this->controllers_m->add($data);
            if ($res) {
                  $data['success']    = true;
                  $data['redirect_url'] = base_url('#Controllers_crud/index');
              }

          }
          else{
            foreach ($_POST as $key => $value) {
                  $data['messages'][$key] = form_error($key);
              }
          }
          echo json_encode($data);
     }
     else{
      $data['role_user']   = $this->controllers_m->get_role_user()->result();
      $data['script_apps'] = 'admin/script_js.php';
      $data['role_user']   = $this->controllers_m->get_role_user()->result();
      $this->load->view('admin/controllers/add', $data);
     }
  	
  }

  public function edit()
  {

  }

  public function delete()
  {

  }

 }