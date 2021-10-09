<?php
class CasesModel extends CI_Model{

	public function select_distinct($column_name,$where,$table){
		$this->db->distinct();
		$this->db->select($column_name);
		$this->db->from($table);
		$this->db->where($where); 
		$query = $this->db->get()->result_array();
		return $query;
	}

	private function _get_users_data(){ 

        $this->db->select('*'); 

        $this->db->from('users'); 

    }

	public function fetch_new_cases($coord_id){
		$sql = "SELECT 
			     a.*,  
			    b.c_name AS source_name,
			    c.c_name AS destination_name
				FROM cases as a
			    LEFT JOIN coordinators as b ON a.source_branch=b.admin_id
			    LEFT JOIN coordinators as c ON a.destination_branch=c.admin_id WHERE a.case_status=0 AND (a.source_branch='$coord_id' || a.destination_branch='$coord_id')";
		$query = $this->db->query($sql);
    	return $query->result_array();
	}

	public function count_all_users($coord_id,$case_status){ 

        $sql = "SELECT 
			     a.*,  
			    b.c_name AS source_name,
			    c.c_name AS destination_name
				FROM cases as a
			    LEFT JOIN coordinators as b ON a.source_branch=b.admin_id
			    LEFT JOIN coordinators as c ON a.destination_branch=c.admin_id WHERE a.case_status=$case_status AND (a.source_branch='$coord_id' || a.destination_branch='$coord_id')";

        $query = $this->db->query($sql)->num_rows(); 

        return $query; 

    }

     public function get_users($limit, $start,$coord_id,$case_status){ 

        $sql = "SELECT 
			     a.*,  
			    b.c_name AS source_name,
			    c.c_name AS destination_name
				FROM cases as a
			    LEFT JOIN coordinators as b ON a.source_branch=b.admin_id
			    LEFT JOIN coordinators as c ON a.destination_branch=c.admin_id WHERE a.case_status=$case_status AND (a.source_branch='$coord_id' || a.destination_branch='$coord_id') LIMIT $start,$limit";
		$query = $this->db->query($sql);
    	return $query->result_array();

    }

}