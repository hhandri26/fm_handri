<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form', 'security');
		$this->load->library('form_validation');
		$this->load->library('excel');
		$this->load->library('pdf');
		$this->load->model('welcome_models');
	}
	public function index()
	{
		
		$this->load->view('admin/home', $data);
	}

	
}