<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailProject extends CI_Controller {

    // $status => new (New Project), client (Client Approved), waiting (Waiting Approval)
    public function index($status = 'new'){
      $data['title'] = "Inspection Request";
      $data['content'] = "dashboards/coordinator/subcontent/detail_project/inspection_request";
      $data['status'] = $status;
      $this->load->view('dashboards/coordinator/index_coordinator',$data);		
    }

    public function historyInspectorChoosed(){
      $data['title'] = "View History Inspector Choosed";
      $data['content'] = "dashboards/coordinator/subcontent/detail_project/history_inspector_choosed";
      $this->load->view('dashboards/coordinator/index_coordinator',$data);		
    }

    public function detailInspectorChoosed(){
      $data['title'] = "View Detail Inspector Choosed";
      $data['content'] = "dashboards/coordinator/subcontent/detail_project/detail_inspector_choosed";
      $this->load->view('dashboards/coordinator/index_coordinator',$data);		
    }
}

/* End of file Controllername.php */
