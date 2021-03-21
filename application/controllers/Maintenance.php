<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maintenance extends CI_Controller {
	
    public function index() {
        $this->output->set_status_header('503'); 
        $this->load->view('maintenance_view');
   }  
}
