<?php
  class Controllers_m extends CI_Model {
  
  

    public function get_data()
    {
        $hasil=$this->db->query("SELECT * FROM t_controllers");
        return $hasil->result();
          
    }

    public function get_role_user()
    {
      $this->db->select('*');
      $this->db->from('t_role_users');
      return $this->db->get();
    }

    public function add($controller,$akses)
    {
       if ($this->db->get_where('t_controllers', array('controller' => $controller))->row()) 
       {

            $this->session->set_flashdata('info', 'Nama controller sudah terdaftar');
            redirect('dashboard#Controllers_crud/index');
        }
        else{
           $hasil=$this->db->query("INSERT INTO t_controllers (controller,akses)VALUES('$controller','$akses')");
          return $hasil;
        } 
     
    }

  }