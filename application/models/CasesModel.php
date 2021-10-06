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

	public function fetch_new_cases($coord_id){
		$sql = "SELECT * FROM cases JOIN coordinators AS t1 ON coordinators.admin_id = cases.source_branch JOIN coordinators AS t2 ON coordinators.admin_id = cases.destination_branch WHERE source_branch='$coord_id' OR destination_branch='$coord_id'";
		$query = $this->db->query($sql);
    	return $query->result_array();
	}

}