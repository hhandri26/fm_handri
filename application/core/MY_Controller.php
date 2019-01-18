<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{
  public function cekLogin()
  {
    if (!$this->ion_auth->logged_in()) {
    	 $this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Maaf!</strong> Silahkan Login terlebidahulu.
                                            </div>');
        redirect('login');
     
    }
    
  }
}