<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('AuthModel');
	}

	public function index()
	{
		$data['email'] = '';
		$data['password'] = '';
		$this->load->view('auth/login', $data);
	}

	public function forget()
	{
		$data['email'] = '';
		$this->load->view('auth/forget', $data);
	}
	
	public function change()
	{
		$data['password1'] = '';
		$data['password2'] = '';
		$this->load->view('auth/change', $data);
	}
	
	function aksi_login(){
		$email = $this->input->post('emailUser');
		$password = $this->input->post('passwordUser');
	
		$where = array(
			'email' => $email,
			'password' => md5($password)
		);
	
		$cek = $this->AuthModel->cek_login("tbl_user",$where)->num_rows();
		$res = $this->AuthModel->cek_login("tbl_user",$where)->result();
		
		if($cek > 0){
			$data_session = array(
				'email' => $email,
				'status' => "Client",
				'logged' => TRUE
			);
 
			$this->session->set_userdata($data_session);
 
			redirect("client/MyProject");
 
		}else{
			$data['email'] = $email;
			$data['password'] = $password;
			$data['message']='<div class="alert alert-danger" style="margin:13px 0px -5px 0px">Sandine salah paling</div>';
			$this->load->view('auth/login', $data);
		}
	}

	function check_email(){
		$email = $this->input->post('email');
		
		$where = array(
			'email' => $email,
		);

		$cek = $this->AuthModel->cek_email_exist($where)->num_rows();
	
		if($cek > 0){
			
			$data_session = array(
				'email' => $email,
				'status' => "",
				'logged' => FALSE
			);
 
			$this->session->set_userdata('userdata', $data_session);
        
	
			redirect("login/change");
		}else{
			$data['email'] = $email;
			$data['message']='<div class="alert alert-danger" style="margin:13px 0px -5px 0px">Cek ada gak emailnya</div>';
			$this->load->view('auth/forget', $data);
		}
	}

	function change_password(){
		$password1 = $this->input->post('password1');
		$password2 = $this->input->post('password2');
		
		$user_data = $this->session->userdata('userdata');
		$email = $user_data["email"];
		
		if($password1 == $password2){
			
			$where = array(
				'email' => $email
			);

			$data = array(
				'password' => md5($password1)
			);

			$this->AuthModel->update($where, $data);
			redirect('login');
		}else{
			$data['password1'] = $password1;
			$data['password2'] = $password2;
			$data['message']='<div class="alert alert-danger" style="margin:13px 0px -5px 0px">Gak Podo Cok</div>';
			$this->load->view('auth/change', $data);
		}
	}
}
