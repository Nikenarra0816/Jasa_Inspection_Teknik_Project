<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyProject extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
        $data['title'] = "My Project";
        $data['content'] = "dashboards/inspector/subcontent/myproject";
		$this->load->view('dashboards/inspector/index_inspector', $data);		
		
	}

	

}

/* End of file MyProject.php */
/* Location: ./application/controllers/inspector/MyProject.php */