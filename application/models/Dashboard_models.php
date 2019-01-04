<?php
  class Dashboard_models extends CI_Model {
  
  

    public function get_group_menu($level)
    {
      if($level ==1)
      {
         $this->db->select('group_menu.nama,group_menu.level_user,group_menu.level_admin, group_menu.icon, sub_menu.nama_sub, sub_menu.controller, sub_menu.methode');
          $this->db->from('group_menu');
          $this->db->join('sub_menu','group_menu.id = sub_menu.id_group_menu');
          return $this->db->get();

      }
      else 
        {
          $this->db->select('group_menu.nama,group_menu.level_user,group_menu.level_admin, group_menu.icon, sub_menu.nama_sub, sub_menu.controller, sub_menu.methode');
          $this->db->from('group_menu');
          $this->db->where('group_menu.level_user', $level);
          $this->db->join('sub_menu','group_menu.id = sub_menu.id_group_menu');
          return $this->db->get();
        }          
    }

   

  }