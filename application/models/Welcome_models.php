<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// ---------------------------------------------Admin Login & Logout -----------------------------------------------------------//

	class Welcome_models extends CI_Model
	{
		public function slideshow()
		{
			$this->db->select('*');
			$this->db->from('tb_promotion');
			$this->db->order_by('id','desc');
			$this->db->limit(3);
			return $this->db->get();
		}
	}