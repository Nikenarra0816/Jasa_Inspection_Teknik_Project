<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MyProjectModel extends CI_Model
{

    public $statusNewProject = array('1', '2');
    public $statusProjectInspection = array('3', '4');
    public $statusProjectDone = '5';
    public $idUser;


    public function __construct()
    {
        parent::__construct();
        $dataClient = $this->db->select('*')->from('tbl_user')->where('email', $this->session->email)
            ->get()->result();
        foreach ($dataClient as $dataClients) {
            $this->idUser = $dataClients->id_user;
        }
    }


    //=================================Common=================================
    public function getTypeInspection()
    {
        $idType = array('1', '2', '3', '4', '5', '6');
        $getData = $this->db->select('*')
            ->from('tbl_typeinspection')
            ->where_in('id_type', $idType)->get()->result();
        return $getData;
    }

    public function getProject($status,$idUser)
    {
        $getData = $this->db->select('tbl_project.*')
            ->from('tbl_project')
            ->join('tbl_user', 'tbl_user.id_user = tbl_project.id_user')
            ->where_in('tbl_project.status', $status)
            ->where('tbl_project.id_user', $idUser)
            ->where('tbl_user.id_category', 1)
            ->get()->result();
        return $getData;
    }

    public function countProject($status,$idUser){
        $getData = $this->db->select('tbl_project.*')
        ->from('tbl_project')
        ->join('tbl_user', 'tbl_user.id_user = tbl_project.id_user')
        ->where_in('tbl_project.status', $status)
        ->where('tbl_project.id_user', $idUser)
        ->where('tbl_user.id_category', 1)
        ->count_all_results();
        return $getData;
    }
    //=================================New Project=================================
  
    public function getNewProject()
    {   
        return $this->getProject($this->statusNewProject,$this->idUser);
    }

    public function filterNewProject($indicatorParam)
    {
        $indicator = "allStatus";
        if (!empty($indicatorParam)) {
            $indicator = $indicatorParam;
        }
        if ($indicator == "allStatus") {
            $getData = $this->getProject($this->statusNewProject,$this->idUser);
        } elseif ($indicator == "pending") {
            $getData = $this->getProject(1,$this->idUser);
        } else {
            $getData = $this->getProject(2,$this->idUser);
        }
        return $getData;
    }

    public function getCountNewProject()
    {

        return $this->countProject($this->statusNewProject,$this->idUser);
    }

    public function addNewProject()
    {
        $post = $this->input->post();
        $idType = 0;
        $idType = $post['id_type'];

        if ($post['id_type'] == "other") {
            $getMaxIdType = $this->db->select_max('id_type')
                ->get('tbl_typeinspection')->result();
            foreach ($getMaxIdType as $getMaxIdTypes) {
                $idType = $getMaxIdTypes->id_type;
            }
            $data = array(
                'id_type' => $idType + 1,
                'created_date' => NULL,
                'update_date' => NULL,
                'type_name' => $post['type_name'],
                'description' => NULL
            );
            $this->db->insert('tbl_typeinspection', $data);
        }

        date_default_timezone_set('Asia/Jakarta'); //Server time
        $id = date('ymdhis');

        $data = array(
            'id_project' => $id,
            'start_date' => $post["start_date"],
            'end_date' => $post["end_date"],
            'attachment' => $post["attachment"],
            'project_name' => $post["project_name"],
            'vendor' => $post["vendor"],
            'vendor_address' => $post["vendor_address"],
            'id_type' => $idType,
            'id_user' => $this->idUser,
            'phone' => $post["phone"],
            'status' => 1
        );

        $insertProject =  $this->db->insert('tbl_project', $data);

        if ($insertProject) {
            return true;
        } else {
            return false;
        }
    }

    //=================================On Inspection=================================
    public function getOnInspection()
    {
        return $this->getProject($this->statusProjectInspection,$this->idUser);
    }

    public function getCountProjectInspection()
    {
        return $this->countProject($this->statusProjectInspection,$this->idUser);
    }

    public function filterOnInspection($indicatorParam)
    {
        $indicator = "allStatus";
        if (!empty($indicatorParam)) {
            $indicator = $indicatorParam;
        }
        if ($indicator == "allStatus") {
            $getData = $this->getProject($this->statusProjectInspection,$this->idUser);
        } elseif ($indicator == "ongoing") {
            $getData = $this->getProject(3,$this->idUser);
        } else {
            $getData = $this->getProject(4,$this->idUser);
        }
        return $getData;
    }

    //=================================Project Done=================================
    public function getProjectDone()
    {
        return $this->getProject($this->statusProjectDone,$this->idUser);
    }

    public function getCountProjectDone()
    {
        return $this->countProject($this->statusProjectDone,$this->idUser);
    }
}

/* End of file ModelName.php */
