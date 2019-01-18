<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Fungsi untuk mendapatkan nama by session
 *
 * @return string first_name last_name
 */
if(!function_exists('get_name_by_session'))
{
	function get_name_by_session($id_user = null)
	{
		$ci =& get_instance();
		$get_user = $ci->ion_auth->user($id_user);
		$extract_data = $get_user->row();
		return $extract_data->first_name.' '.$extract_data->last_name;
	}

}

//-----------------------------------------------------

/**
 * Fungsi untuk mendapatkan daftar groups
 *
 * @return array
 */
function get_daftar_groups(){
	$ci =& get_instance();
	$get_groups 	= $ci->ion_auth->groups();
	$result_groups 	= $get_groups->result();

	$array_groups 	= array();
	
	foreach($result_groups as $group)
	{
		$array_groups[$group->id] = $group->name.' - '.$group->description;
	}

	return $array_groups;
}

//-----------------------------------------------------

/**
 * need_login
 * diperlukan login untuk mengakses controller
 *
 * @return boolean
 */
function need_login($redirect_url = 'auth')
{
	$ci =& get_instance();	
	$check_login = $ci->ion_auth->logged_in();

	if($check_login === FALSE)
	{
		redirect($redirect_url);
	}
	else
	{
		return TRUE;
	}
}

//-----------------------------------------------------

/**
 * need_admin
 * diperlukan level admin untuk mengakses controller
 *
 * @return string first_name last_name
 */
function need_admin($redirect_url = 'backend/dashboard')
{
	$ci =& get_instance();	
	$check_admin = $ci->ion_auth->is_admin();

	if($check_admin === FALSE)
	{
		$ci->session->set_flashdata('action_status', '<div class="alert alert-danger">Anda tidak memiliki priviladge !</div>');

		redirect($redirect_url);
	}
}