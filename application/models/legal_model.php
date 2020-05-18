<?php 
class Legal_model extends CI_Model{

	public function select_product(){
		$q = $this->db
			->select('*')
			->from('draf_product')
			->get();
		return $q->result();
	}

	public function insert_rentform($post)
	{
	if ($this->db->insert('rent_form', $post) )
	$insertId = $this->db->insert_id();
  	return  $insertId;
	}

	public function rent_data($inserted_id)
	{
		
			$q = $this->db
					->select('*')
					->from('rent_form')
					->where('id', $inserted_id)
					->get();
		return $q->result();				
	}

	public function update_rent($post, $inserted_id)
	{
		

	return $this->db
	 	 ->where('id', $inserted_id)
      	->update('rent_form', $post);
				
	}

}




 ?>