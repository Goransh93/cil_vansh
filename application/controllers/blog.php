<?php


class Blog extends CI_Controller{
    public function index(){
        $this->load->model('authenticatefromfacebook', 'facebook');
        $data = $this->facebook->getData();
        print_r($data);
        $this->load->view('blogindex');
    }

    public function add(){
       echo "Add Function of Blog Controller"; 
    }
}