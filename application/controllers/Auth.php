<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
  public function __construct() {
        parent::__construct();
        $this->load->helper(array('Form', 'Cookie', 'String'));
    }
  public function cekAkun()
  {
    $this->load->model('users_model');
    $username   = $this->input->post('username');
    $pass       = $this->input->post('password');
    $password   = md5($pass);
    $query      = $this->users_model->cekAkun($username, $password);
    if (!$query) 
    {
      $this->form_validation->set_message('cekAkun', 'Username atau password yang Anda masukkan salah!');
      return FALSE;
    } 
      else 
      {
        $userData = array(
          'username'  => $query->username,
          'password'  => $query->password,
          'level'     => $query->level,
          'logged_in' => TRUE
        );
        $this->session->set_userdata($userData);
        return TRUE;
    }
  }

  public function login()
  {
    if ($this->session->userdata('logged_in')) redirect(base_url());
      if ($this->input->post('submit')) 
      {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|callback_cekAkun');
        $this->form_validation->set_message('required', '%s tidak boleh kosong!');
          if ($this->form_validation->run() === TRUE) 
          {
            redirect('dashboard');
          } 
      }
    
    $this->load->view('login/index');
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('welcome');
  }
}