<?php
  class Users_model extends CI_Model {
  
    public $table = 'tb_users';

    public function cekAkun($username, $password)
    {
      $this->db->where('username', $username);
      $this->db->where('active', '1');
      $this->db->where('password', $password);
      $query = $this->db->get($this->table)->row();
      return $query;        
    }

  }