<?php

class User extends MY_Controller
{
public function index()
	{
		$this->load->model('articlesmodel', 'articles');
		$this->load->library('pagination');
    	$config =
    	[
    		'base_url' 	 => base_url('user/index'),
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

		
		$articles = $this->articles->all_articles_list($config['per_page'], $this->uri->segment(3));
		$this->load->view('public/articles_list', ['articles'=>$articles]);

	}
public function search_articles()
{
 $this->load->library('form_validation');
	$this->form_validation->set_rules('search', 'Search', 'required');

		if( $this->form_validation->run('search') )
		{
			$search = $this->input->post('search');
			return redirect ("user/search_results/$search");
		}
	else
		{
			
			$this->index();
		}
	
	}

public function search_results($search){
		$this->load->model('articlesmodel', 'articles');
		$this->load->library('pagination');
    	$config =
    	[
    		'base_url' 	 => base_url("user/search_results/$search"),
    		'total_rows' => $this->articles->search_num_rows($search),
    		'per_page' 	 => 5,
    		'uri_segment' => 4,
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

		
		$articles = $this->articles->search_article($search, $config['per_page'], $this->uri->segment(4));
		$this->load->view('public/searched_articles', ['articles'=>$articles]);

}

public function open_article($id)
    {
        
        $this->load->model('articlesmodel', 'articles');
        $articles = $this->articles->open($id);
        $this->load->view('public/article_opened', compact('articles') );        

    }
}
?>