<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('AuthModel');
	}

	public function index()
	{
		$data['fullname'] = '';
		$data['company'] = '';
		$data['email'] = '';
		$data['password'] = '';
		$this->load->view('auth/register', $data);	
	}

	public function registration()
	{
		$fullname = $this->input->post('fullname');
		$company = $this->input->post('company');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		$idCat = $this->AuthModel->getUserIdCat();
		$lastId = $this->AuthModel->getLast();
		$newId = (int)$lastId[0]->{"id_user"} + 1;
		$idCat = $idCat[0]->{"id_category"};
		
		$data = array(
			'id_user' => $newId,
			'created_date' => date('Y-m-d H:i:s'),
			'update_date' => date('Y-m-d H:i:s'),
			'name' => $fullname,
			'email' => $email,
			'password' => md5($password),
			'company' => $company,
			'picture' => '',
			'phone' => '',
			'attachment' => NULL,
			'status' => 0,
			'id_category' => $idCat
		);

		$this->AuthModel->save_account($data);
		redirect('login');
	}
}
