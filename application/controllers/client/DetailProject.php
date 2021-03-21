<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailProject extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('DummyDataModel');
  }
  

  public function getSessionIdProject($id)
  {
      $data = array(
          'idProject'=>$id
      );
      $this->session->set_userdata($data);
      echo "200";
  }

    public function detailProjectRequest()
	{
        $idProject =  $this->session->idProject;
		$data['title'] = "Detail Project - Request";
		$data['content'] = "dashboards/client/subcontent/detail_project/detail_project_request";
		$this->load->view('dashboards/client/index_client', $data);	
	}

	public function detailProjectChooseInspector()
	{
		$data['title'] = "Detail Project - Choose Available Inspector";
		$data['content'] = "dashboards/client/subcontent/detail_project/choose_available_Inspector";
		$this->load->view('dashboards/client/index_client', $data);		
	}

	public function detailProjectOnProcess()
	{
		// Data Test
		$isOnInpection=false;
		$data['isOnInpection'] = $isOnInpection;
		$data['title'] = "Detail Project - Project On Process";
		$data['content'] = "dashboards/client/subcontent/detail_project/project_on_process";
		$this->load->view('dashboards/client/index_client', $data);		
	}

	public function detailProjectRevision(){
		$isOnInpection=false;
		$data['isOnInpection'] = $isOnInpection;
		$data['title'] = "Detail Project - Revision";
		$data['getDataLastInspection']= $this->DummyDataModel->dataLastInspectionReport();
		$data['content'] = "dashboards/client/subcontent/detail_project/revision";
		$this->load->view('dashboards/client/index_client', $data);		
	}

	public function detailProjectDone()
	{
		$data['title'] = "Detail Project - Project Done";
		$data['content'] = "dashboards/client/subcontent/detail_project/project_done";
		$this->load->view('dashboards/client/index_client', $data);			
	}
}

/* End of file Controllername.php */
