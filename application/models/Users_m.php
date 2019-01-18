<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// ---------------------------------------------Admin Login & Logout -----------------------------------------------------------//

	class Users_m extends CI_Model
	{
		function list_users()
		{
			$hasil=$this->db->query("SELECT * FROM users");
			return $hasil->result();
		}
	}