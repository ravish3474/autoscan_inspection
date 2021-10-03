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

}