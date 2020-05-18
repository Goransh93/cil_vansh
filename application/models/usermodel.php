<?php 
class UserModel extends MY_Model{
	public function getUser()
	{
		//$this->load->database();
		$q =$this->db->where('lastname', 'Pathak')
			->get("user_accounts");
		return $q->result();
	}

	public function test(){
		echo"Test function from usermodel";
	}
}

 ?>