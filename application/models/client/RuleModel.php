<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RuleModel extends CI_Model {

    //=================================Rules=================================
    public function rulesAddNewProject(){
        return [
            ['field' => 'start_date',
            'label' => 'Start Date',
            'rules' => 'required'],

            ['field' => 'end_date',
            'label' => 'End Date',
            'rules' => 'required'],

            ['field' => 'attachment',
            'label' => 'attachment',
            'rules' => 'required'],
            
            ['field' => 'project_name',
            'label' => 'Project Name',
            'rules' => 'required'],

            ['field' => 'vendor',
            'label' => 'Vendor',
            'rules' => 'required'],

            ['field' => 'vendor_address',
            'label' => 'Vendor Address',
            'rules' => 'required'],

            ['field' => 'id_type',
            'label' => 'Type inspection',
            'rules' => 'required'],

            ['field' => 'phone',
            'label' => 'Phone Number',
            'rules' => 'required|numeric|max_length[15]']
        ];
    }

    
}

/* End of file ModelName.php */
