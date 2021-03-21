<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginClient extends CI_Controller {

	public function login()
	{
		$emailInp = $this->input->post('email');
		$passwordInp = $this->input->post('password');

		if ($emailInp == "admin@email.com") {
			if ($passwordInp == "12345") {
				$this->session->set_flashdata('notif', 'login success');
				echo 'gak error';
			} else {
				$this->session->set_flashdata('notif', 'password failed');
				echo 'error';
			}
		} else {
			$this->session->set_flashdata('notif', 'email failed');
			echo 'error';
		}
		
	}

}

/* End of file LoginController.php */
/* Location: ./application/controllers/client/LoginController.php */