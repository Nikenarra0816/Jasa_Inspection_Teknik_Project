<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginCoordinator extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('AuthModel');
	}

	public function index(){
		$data['email'] = '';
		$data['password'] = '';
		$this->load->view('dashboards/coordinator/logincoordinator', $data);
	}
}
