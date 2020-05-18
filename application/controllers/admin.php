<?php

class Admin extends My_Controller{

public function dashboard()
	{		
		$this->load->model('articlesmodel', 'articles');
		$this->load->library('pagination');
    	$config =
    	[
    		'base_url' 	 => base_url('admin/dashboard'),
    		'total_rows' => $this->articles->num_rows(),
    		'per_page' 	 => 5,
    		'full_tag_open' => '<div><ul class="pagination pagination-sm">',
    		'full_tag_close' =>'</ul></div>',
    		'prev_tag_open' =>'<li class="page-item disabled"> <a class="page-link">',
    		'prev_tag_close' =>'</a></li>',
    		'next_tag_open' =>'<li class="page-item">
      							<a class="page-link">',
    		'next_tag_close' =>'</a></li>',
    		'num_tag_open'	=>'<li class="page-item">
      							<a class="page-link">',
    		'num_tag_close'	=>'</a></li>',
    		'cur_tag_open'	=> '<li class="page-item active"><a class="page-link">',
			'cur_tag_close'	=>'</a></li>',

    	];
    	$this->pagination->initialize($config);	

		
		$articles = $this->articles->articles_list($config['per_page'], $this->uri->segment(3));
		$this->load->view( 'admin/dashboard', ['articles'=>$articles]);	
	}

public function add_article()
	{


		$this->load->view('admin/newarticle');
	}

public function store_article()
	{
		$this->load->library('form_validation');
		$config = 	[	'upload_path'          => './uploads/',
               		 	'allowed_types'       => 	'jpg|jpeg|png'
               		 ];

        $this->load->library('upload');      
        $this->upload->initialize($config);
		
		if( $this->form_validation->run('article_rule') && $this->upload->do_upload('userfile') )
		{
			$post = $this->input->post();
			unset($post['Submit']);
			$data = $this->upload->data();
			$image_path =  base_url("uploads/".$data['raw_name'].$data['file_ext']);
			//echo $image_path; exit;
			$post['image_path'] = $image_path;
			$this->load->model('articlesmodel', 'articles');
			$this->_flashmessage( 
			$this->articles->insert_article($post), 
			"Article Added Successfully", 
			"Could not Load Article"  );
		}
		else
		{
			
			$upload_error = $this->upload->display_errors();
			$this->load->view ('admin/newarticle', compact('upload_error') );

		}

	}

public function edit_article($article_id)
{
	$this->load->model('articlesmodel', 'articles');
	$articles=$this->articles->findarticle($article_id);
	$this->load->view('admin/edit_article', ['articles'=>$articles]);
}

public function update_article($article_id)
{

$this->load->library('form_validation');
	if($this->form_validation->run('article_rule'))
	{
		$post = $this->input->post();
		unset($post['Submit']);
		$this->load->model('articlesmodel', 'articles');
		$this->_flashmessage( 
		$this->articles->update_article( $article_id,$post), 
		"Article Updated Successfully", 
		"Could not Update Article"  );
	}

}

public function delete_article($article_id)
{
	$this->load->model('articlesmodel', 'articles');
	$this->_flashmessage( 
		$this->articles->delete_article($article_id), 
		"Article Deleted Successfully", 
		"Could not Update Article"  );
}

public function __construct() 
{
    parent::__construct();
    
    if( ! $this->session->userdata('user_id') )
    {
		return redirect('login');
		$this->load->model('articlesmodel', 'articles');
    }
}
   

private function _flashmessage($condition, $success, $failure)
    {
    	if($condition)
    		{
    		$this->session->set_flashdata('flash', $success);
    		}
    	else{
    		$this->session->set_flashdata('flash', $failure);	
    	  	}
    	 return redirect('admin/dashboard'); 	
    }


public function pag()
    {
    	
    	$this->load->view('admin/dashboard');

    }



}
?>