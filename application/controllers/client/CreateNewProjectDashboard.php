<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CreateNewProjectDashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('client/MyProjectModel');
        $this->load->model('client/RuleModel');
    }

    //=====================Common========================
    public function downloadInquiry()
	{
		force_download('assets/client/doc/common/Request_for_Inspection_Form.pdf',NULL);
    }
    
    //===================================================

    public function index()
    {
        $data['title'] = "Create New Project";
        $data['getTypeInspection'] = $this->MyProjectModel->getTypeInspection();
        $data['content'] = "dashboards/client/subcontent/create_new_project";
        $this->load->view('dashboards/client/index_client', $data);
    }

    public function uploadInquiry()
    {
        if (!empty($_FILES['file']['name'])) {
            $config['upload_path'] = 'assets/client/doc/client';
            $config["allowed_types"] = "pdf";
            $config['file_name'] = str_replace(' ','_',$_FILES['file']['name']);

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')) {
                $uploadData = $this->upload->data();
            }
        }
    }

    // public function deleteUploadInquiry(){// DELETE FILE IN SERVER
    //     $targetdir="assets/client/doc/";
    //     $filename = $targetdir.$_POST['name'];
    //     unlink($filename);
    // }

    public function createNewProject()
    {
            $validation = $this->form_validation;
            $validation->set_rules($this->RuleModel->rulesAddNewProject());

            if ($validation->run() == TRUE) {
                if($this->MyProjectModel->addNewProject()){
                    echo "200";
                }
            } else {
                $array= array(
                    'start_date_error' => form_error('start_date'),
                    'end_date_error' => form_error('end_date'),
                    'attachment_error' => form_error('attachment'),
                    'project_name_error' => form_error('project_name'),
                    'vendor_error' => form_error('vendor'),
                    'vendor_address_error' => form_error('vendor_address'),
                    'id_type_error' => form_error('id_type'),
                    'phone_error' => form_error('phone'),
                    'type_name_error' => form_error('type_name')
                   );
                   echo json_encode($array);
            }
    }
}

/* End of file Controllername.php */
