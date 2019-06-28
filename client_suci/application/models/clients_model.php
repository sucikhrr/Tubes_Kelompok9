<?php

class Clients_model extends CI_Model
	{
	public function client_login($username,$password)
	{
		$cek = $this->db->get_where('clients', array('username'=>$username,'password'=>$password));

			if($cek->num_rows()>0)
			{
					return 1;
			}

			else
			{
				return 0;
			}
	}
}
?>