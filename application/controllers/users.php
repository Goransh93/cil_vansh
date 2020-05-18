<?php

class users extends MY_Controller{

	public function index(){
		//$this->load->library(array('email','form_validation'));
		//$this->email;
		//$this->form_validation;
		//$this->load->model('usermodel');
		//$data['users']=$this->usermodel->getUser();


		//$this->load->view('user_list', $data);
		//$this->load->helpers('array');
		//$arr =['abc'=>'ABC', 'xyz'=>'XYZ'];
		//echo element('ac', $arr, 'Not found');
		//$this->load->library('test');
		//$this->test->abc();
		//$this->test->
		//$this->load->library('email');
		//$this->email->test();
		$this->test();
		$this->load->model('usermodel');
		$this->usermodel->test1();

	}
}