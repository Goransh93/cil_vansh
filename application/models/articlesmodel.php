<?php 

class Articlesmodel extends CI_Model{


public function articles_list($limit, $offset)
{
$user_id = $this->session->userdata('user_id');
$q = $this->db
			->select('*')
			->from('articles')
			->where('user_id', $user_id)
			->limit( $limit, $offset ) 	
			->get();
return $q->result();				
}

public function all_articles_list($limit, $offset){
$q = $this->db
			->select('*')
			->from('articles')
			->limit( $limit, $offset )
			->order_by('created_at', 'DESC') 	
			->get();
return $q->result();	
}

public function num_rows()
{
$user_id = $this->session->userdata('user_id');
$q = $this->db
			->select('title')
			->select('id')
			->from('articles')
			->where('user_id', 2)
			->get();
return $q->num_rows();				
}


public function insert_article($post){
	return $this->db->insert('articles', $post);

}

public function findarticle($article_id){
	$q=$this->db
			->select(['id', 'title','body'])
			->where('id', $article_id)
			->from('articles')
			->get();
	return $q->row();
}

public function update_article($article_id, Array $articles){
return $this->db
	  ->where('id', $article_id)
      ->update('articles', $articles);

}

public function delete_article($article_id)
{
	return $this->db->
			where('id', $article_id)
			 ->delete('articles');
}

public function search_article($search, $limit, $offset ){
$q=$this->db->from('articles')
			->like('title', $search)
			->limit( $limit, $offset ) 
			->get();
	return $q->result();	
}
public function search_num_rows($search){
$q=$this->db->from('articles')
			->like('title', $search)
			->get();
	return $q->num_rows($search);	
}

public function open($id){
	$q=$this->db->from('articles')
				->where('id', $id)
				->get();
	if( $q->num_rows($id) )	
	return $q->row();
			
}


}

 ?>