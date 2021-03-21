<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class UserSetting extends CI_Controller {

  
  public function __construct(){
    parent::__construct();
  }
  
  public function index(){
    $data['title'] = "View History Inspector Choosed";
    $data['content'] = "dashboards/coordinator/usersetting";
    $this->load->view('dashboards/coordinator/index_coordinator',$data);		
  }

}

/* End of file UserSetting.php */
 ?>