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

    public function add($data)
    {
        $result = $this->db->insert('t_controllers', $data);
        return $result;
     
    }

  }