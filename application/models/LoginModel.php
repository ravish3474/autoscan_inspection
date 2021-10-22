<?php
class LoginModel extends CI_Model{

	public function signin($username,$password,$login_as){
		if ($login_as==1) {
			$this->db->select('*');
			$this->db->from('coordinators');
			$this->db->where('username',$username);
			$this->db->where('password', $password);
		    $query = $this->db->get();
		    if ( $query->num_rows() > 0 )
		    {
		    	$result=$query->result_array();
		    	return $result;
		    }
		    else{
		    	return false;
		    }
		}
		else{
			echo "no HO";
		}
	}

}