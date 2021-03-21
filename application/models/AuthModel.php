<?php
class AuthModel extends CI_Model{
    private $tbl_user = 'tbl_user';
    
    function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
    }	

    function getLast(){
        return $this->db->select('id_user')
        ->limit(1)->order_by('id_user',"DESC")
        ->from('tbl_user')
        ->get()->result();
    }

    function getUserIdCat(){
        return $this->db->select('id_category')
        ->from('category_user')
        ->where_in('category','Client')->get()->result();
    }

    function save_account($data){
        $this->db->insert('tbl_user',$data);
        return $this->db->insert_id();
    }

    function cek_email_exist($data){
		return $this->db->get_where('tbl_user',$data);
    }
    
    function update($where,$data){
		$this->db->where($where);
		$this->db->update('tbl_user',$data);
	}	
}