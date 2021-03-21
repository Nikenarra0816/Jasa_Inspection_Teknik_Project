<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DummyDataModel extends CI_Model {

	public function dataNewProject()
	{
		$newProjetData = array(
			[
				'project_name' => 'project 1',
				'created_at' => 'March 12, 2020',
				'update_at' => 'March 12, 2020',
				'status'=>'pending',
			],
			[
				'project_name' => 'project 2',
				'created_at' => 'March 12, 2020',
				'update_at' => 'March 12, 2020',
				'status'=>'Review Inspector CV',
			],
			[
				'project_name' => 'project 3',
				'created_at' => 'March 12, 2020',
				'update_at' => 'March 12, 2020',
				'status'=>'Review Inspector CV',
			],
			[
				'project_name' => 'project 4',
				'created_at' => 'March 12, 2020',
				'update_at' => 'March 12, 2020',
				'status'=>'pending',
			],
			[
				'project_name' => 'project 5',
				'created_at' => 'March 12, 2020',
				'update_at' => 'March 12, 2020',
				'status'=>'pending',
			],
			
		);
		return $newProjetData;
	}

	public function dataOnInspection()
	{
		$inspectionData = array(
			[
				'project_name' => 'project 1',
				'created_at' => 'March 12, 2020',
				'update_at' => 'March 12, 2020',
				'status'=>'ongoing',
			],
			[
				'project_name' => 'project 2',
				'created_at' => 'March 12, 2020',
				'update_at' => 'March 12, 2020',
				'status'=>'ongoing',
			],
			[
				'project_name' => 'project 3',
				'created_at' => 'March 12, 2020',
				'update_at' => 'March 12, 2020',
				'status'=>'ongoing',
			],
			[
				'project_name' => 'project 4',
				'created_at' => 'March 12, 2020',
				'update_at' => 'March 12, 2020',
				'status'=>'Inspection Report',
			],
			[
				'project_name' => 'project 5',
				'created_at' => 'March 12, 2020',
				'update_at' => 'March 12, 2020',
				'status'=>'Inspection Report',
			],
			
		);
		return $inspectionData;
	}

	public function dataProjectDone()
	{
		$projectDoneData = array(
			[
				'project_name' => 'project 1',
				'created_at' => 'March 12, 2020',
				'update_at' => 'March 12, 2020',
				'status'=>'pending',
			],
			[
				'project_name' => 'project 2',
				'created_at' => 'March 12, 2020',
				'update_at' => 'March 12, 2020',
				'status'=>'Review Inspector CV',
			],
			[
				'project_name' => 'project 3',
				'created_at' => 'March 12, 2020',
				'update_at' => 'March 12, 2020',
				'status'=>'Review Inspector CV',
			],
			[
				'project_name' => 'project 4',
				'created_at' => 'March 12, 2020',
				'update_at' => 'March 12, 2020',
				'status'=>'pending',
			],
			[
				'project_name' => 'project 5',
				'created_at' => 'March 12, 2020',
				'update_at' => 'March 12, 2020',
				'status'=>'pending',
			],
			
		);
		return $projectDoneData;
	}
	
	public function dataLastInspectionReport()
	{
		$LastInspectionReport = array(
			[
				'report_name' => 'Report_Revision_1',
				'report_at' => 'March 12, 2020'
			],
			[
				'report_name' => 'Report_Revision_2',
				'report_at' => 'March 12, 2020'
			],
			[
				'report_name' => 'Report_Revision_3',
				'report_at' => 'March 12, 2020'
			],
			[
				'report_name' => 'Report_Revision_4',
				'report_at' => 'March 12, 2020'
			],
			[
				'report_name' => 'Report_Revision_5',
				'report_at' => 'March 12, 2020'
			],
			
			
		);
		return $LastInspectionReport;
	}

	//Coordinator

	public function dataNewProjectCoordinator()
	{
		$newProjectCoordinator = array(
			[
				'id_coordinator'=>'1',
				'project_name' => 'Project 1',
				'client_name' => 'Client A',
				'date_issue' => 'March 12, 2020',
				'type_inspection' => 'Quality Inspection',
				'report'=> '1'
			],
			[
				'id_coordinator'=>'1',
				'project_name' => 'Project 1',
				'client_name' => 'Client A',
				'date_issue' => 'March 12, 2020',
				'type_inspection' => 'Quality Inspection',
				'report'=> '1'
			],
			[
				'id_coordinator'=>'1',
				'project_name' => 'Project 1',
				'client_name' => 'Client A',
				'date_issue' => 'March 12, 2020',
				'type_inspection' => 'Quality Inspection',
				'report'=> '1'
			],
			[
				'id_coordinator'=>'1',
				'project_name' => 'Project 1',
				'client_name' => 'Client A',
				'date_issue' => 'March 12, 2020',
				'type_inspection' => 'Quality Inspection',
				'report'=> '1'
			],
			[
				'id_coordinator'=>'1',
				'project_name' => 'Project 1',
				'client_name' => 'Client A',
				'date_issue' => 'March 12, 2020',
				'type_inspection' => 'Quality Inspection',
				'report'=> '1'
			],
			
			
		);
		return $newProjectCoordinator;
  }

  public function dataNewProjectChooseInspector(){
    $newProjectChooseInspector = array(
      [
        'inspector_name' => 'Inspector 1',
        'position' => 'Position Inspector',
        'status' => 0
      ], [
        'inspector_name' => 'Inspector 2',
        'position' => 'Position Inspector',
        'status' => 0
      ], [
        'inspector_name' => 'Inspector 3',
        'position' => 'Position Inspector',
        'status' => 0
      ], [
        'inspector_name' => 'Inspector 4',
        'position' => 'Position Inspector',
        'status' => 0
      ], [
        'inspector_name' => 'Inspector 5',
        'position' => 'Position Inspector',
        'status' => 0
      ], [
        'inspector_name' => 'Inspector 6',
        'position' => 'Position Inspector',
        'status' => 1
      ], [
        'inspector_name' => 'Inspector 7',
        'position' => 'Position Inspector',
        'status' => 1
      ], [
        'inspector_name' => 'Inspector 8',
        'position' => 'Position Inspector',
        'status' => 1
      ], [
        'inspector_name' => 'Inspector 9',
        'position' => 'Position Inspector',
        'status' => 1
      ], [
        'inspector_name' => 'Inspector 10',
        'position' => 'Position Inspector',
        'status' => 1
      ]
    );
    return $newProjectChooseInspector;
  }

}

/* End of file DummyData.php */
/* Location: ./application/models/DummyData.php */