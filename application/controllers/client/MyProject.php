<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyProject extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('DummyDataModel');
		$this->load->model('client/MyProjectModel');
	}

	public function index()
	{
		$data['title'] = "My Project";
		$data['getDataNewProject']=$this->MyProjectModel->getNewProject();
		$data['getDataOnInspection']=$this->MyProjectModel->getOnInspection();
		$data['getDataProjectDone']=$this->MyProjectModel->getProjectDone();
		$data['getCountNewProject']=$this->MyProjectModel->getCountNewProject();
		$data['getCountProjectDone']=$this->MyProjectModel->getCountProjectDone();
		$data['getCountProjectOnInspection']=$this->MyProjectModel->getCountProjectInspection();
		$data['content'] = "dashboards/client/subcontent/myproject";
		$this->load->view('dashboards/client/index_client', $data);		
	}

	public function newProjectDashboard()
	{
		$indicator = $this->input->post('filterstatus');
		if(empty($indicator)){
			$indicator='allStatus';
		}
		$data['filterNewProject']=$indicator;
		$data['title'] = "New Project";
		$data['getDataNewProject']=$this->MyProjectModel->filterNewProject($indicator);
		$data['content'] = "dashboards/client/subcontent/new_project";
		$this->load->view('dashboards/client/index_client', $data);
	}

	public function onInspectionDashboard()
	{
		$indicator = $this->input->post('filterstatus');
		if(empty($indicator)){
			$indicator='allStatus';
		}
		$data['filterInspection']=$indicator;
		$data['title'] = "On Inspection";
		$data['getDataOnInspection']=$this->MyProjectModel->filterOnInspection($indicator);
		$data['content'] = "dashboards/client/subcontent/on_inspection";
		$this->load->view('dashboards/client/index_client', $data);	
	}

	public function projectDoneDashboard()
	{
		$data['title'] = "Project Done";
		$data['getDataProjectDone']=$this->MyProjectModel->getProjectDone();
		$data['content'] = "dashboards/client/subcontent/project_done";
		$this->load->view('dashboards/client/index_client', $data);		
	}

	public function settingsProfile()
	{
		$data['title'] = "Settings Profile";
		$data['content'] = "dashboards/client/subcontent/settings_profile";
		$this->load->view('dashboards/client/index_client', $data);				
	}

	

}

/* End of file MyProject.php */
/* Location: ./application/controllers/client/MyProject.php */