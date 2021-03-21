<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {

	public function index()
	{
		$data['title'] = "Invoice";
		$data['content'] = "dashboards/client/subcontent/invoice";
		$this->load->view('dashboards/client/index_client', $data);	
	}

}

/* End of file Invoice.php */
/* Location: ./application/controllers/client/Invoice.php */