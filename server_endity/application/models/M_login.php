<?php 
 
class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	public function cek_level($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$result=$this->db->get('users');
		if($result->num_rows()==1)
		{
			return $result->row(3)->level;
		}
		else
		{
			return false;
		}
	}	
}

