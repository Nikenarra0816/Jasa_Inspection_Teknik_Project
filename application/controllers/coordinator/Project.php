<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('DummyDataModel');
    }
    

    public function index()
    {
        $data['title'] = "Dashboard";
        $data['content'] = "dashboards/coordinator/subcontent/dashboard";
        $data['dataNewProject'] = $this->DummyDataModel->dataNewProjectCoordinator();
        $this->load->view('dashboards/coordinator/index_coordinator',$data);		
    }

    public function new()
    {
        $data['title'] = "New Project";
        $data['content'] = "dashboards/coordinator/subcontent/new_project";
        $data['dataNewProject'] = $this->DummyDataModel->dataNewProjectCoordinator();
        $this->load->view('dashboards/coordinator/index_coordinator',$data);		
    }

    public function chooseInspector(){
      $data['title'] = "New Project";
      $data['content'] = "dashboards/coordinator/subcontent/new_project_choose_inspector";
      $data['dataNewProject'] = $this->DummyDataModel->dataNewProjectChooseInspector();
      $this->load->view('dashboards/coordinator/index_coordinator',$data);		
    }
}

/* End of file Controllername.php */
