<?php

class loginmodel extends CI_Model{

	public function login_valid($username, $password)
	{
		$q = $this->db-> where (['uname'=> $username, 'pword'=>$password])
                        ->get('user');
//$q = $this->db->get_where('user', array('uname' => $username, 'pword' => $password ));


	if($q->num_rows())
	{
			return $q->row()->id;
				}	
	else{
			return FALSE;
	}

	}
}

?>