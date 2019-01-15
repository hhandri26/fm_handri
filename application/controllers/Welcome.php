<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$data['content']		='home/home';
		$this->load->view('home/index', $data);
	}

	
}
