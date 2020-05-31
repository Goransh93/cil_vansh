<?php  
class Cover extends My_Controller{
  
  public function index()
  {
    $this->load->model('legal_model', 'legal');
    $products = $this->legal->select_product();
    //$this->load->view( 'pages/frontpage.php', ['products'=>$products]);
    $data['main_content'] = 'pages/frontpage';
    $data['products'] = $products;
    $this->load->view('template',$data);
  }
  
  public function add_landlord() {
    $removable = true;        
    $row_index = $this->input->post('row_index');	
    $this->load->view('pages/add_landlord', ['row_index' => $row_index]);
  }
  
  public function add_tenant()
  {
    
    $removable = true;        
    $row_index = $this->input->post('row_index');	
    $this->load->view('pages/add_tenant.php', ['row_index'=>$row_index]);
    
  }	
  
  public function rentform()
  {
    $rent_form = $this->session->userdata('rent_form');
    // echo "<pre>";
    // print_r($rent_form);
    // exit;
    $data['main_content'] = 'pages/rentform';
    $data['rent_form'] = $rent_form;
    $this->load->view('template', $data);

  }

  public function rent_form_save_state() {
    $params = $this->input->post();
    $this->session->set_userdata('rent_form', $params);
  }
  
  public function rentpreview() {
    
    $rent_form['purpose_of_renting'] = $this->input->post('purpose_of_renting');
    $rent_form['type_of_agreement'] = $this->input->post('type_of_agreement');
    $rent_form['duration_of_agreement'] = $this->input->post('duration_of_agreement');
    $rent_form['type_of_property'] = $this->input->post('type_of_property');
    $rent_form['landlord_name'] = $this->input->post('landlord_name');
    $rent_form['landlord_age'] = $this->input->post('landlord_age');
    $rent_form['landlord_gender'] = $this->input->post('landlord_gender');
    $rent_form['landlord_father_name'] = $this->input->post('landlord_father_name');
    $rent_form['landlord_husband_name'] = $this->input->post('landlord_husband_name');
    $rent_form['landlord_street_address'] = $this->input->post('landlord_street_address');
    $rent_form['landlord_city'] = $this->input->post('landlord_city');
    $rent_form['landlord_state'] = $this->input->post('landlord_state');
    $rent_form['landlord_pincode'] = $this->input->post('landlord_pincode');
    $rent_form['tenant_name'] = $this->input->post('tenant_name');
    $rent_form['tenant_age'] = $this->input->post('tenant_age');
    $rent_form['tenant_gender'] = $this->input->post('tenant_gender');
    $rent_form['tenant_father_name'] = $this->input->post('tenant_father_name');
    $rent_form['tenant_husband_name'] = $this->input->post('tenant_husband_name');
    $rent_form['tenant_id_cardno'] = $this->input->post('tenant_id_cardno');
    $rent_form['tenant_identity_doc_name'] = $this->input->post('tenant_identity_doc_name');
    $rent_form['tenant_street_address'] = $this->input->post('tenant_street_address');
    $rent_form['tenant_city'] = $this->input->post('tenant_city');
    $rent_form['tenant_state'] = $this->input->post('tenant_state');
    $rent_form['tenant_pincode'] = $this->input->post('tenant_pincode');
    $rent_form['rental_property_address'] = $this->input->post('rental_property_address');	
    $rent_form['rented_property_city'] = $this->input->post('rental_property_city');
    $rent_form['rented_property_state'] = $this->input->post('rental_property_state');
    $rent_form['rented_property_pin'] = $this->input->post('rental_property_pin');
    $rent_form['rental_property_place_agreement'] = $this->input->post('rental_property_place_agreement');
    $rent_form['rental_property_execution_date'] = $this->input->post('rental_property_execution_date');
    $rent_form['rental_property_no_of_office'] = $this->input->post('rental_property_no_of_office');
    $rent_form['rental_property_no_of_carparking'] = $this->input->post('rental_property_no_of_carparking');
    $rent_form['rental_property_room_set'] = $this->input->post('rental_property_room_set');
    $rent_form['rental_property_floor'] = $this->input->post('rental_property_floor');
    $rent_form['rental_property_bathrooms'] = $this->input->post('rental_property_bathrooms');
    $rent_form['rental_property_area'] = $this->input->post('rental_property_area');
    $rent_form['rental_property_balconies'] = $this->input->post('rental_property_balconies');
    $rent_form['rental_property_is_subletting_allow'] = $this->input->post('rental_property_is_subletting_allow');
    $rent_form['rent_security_deposit_amount'] = $this->input->post('rent_security_deposit_amount');
    $rent_form['rent_giving_date'] = $this->input->post('rent_giving_date');
    $rent_form['monthly_maintaince'] = $this->input->post('monthly_maintaince');
    $rent_form['security_deposit_payment_mode'] = $this->input->post('security_deposit_payment_mode');	
    $rent_form['rent_amount'] = $this->input->post('rent_amount');	
    $rent_form['rent_amount_word'] = $this->input->post('rent_amount_word');
    print_r( $rent_form['rent_amount_word']);
    die();
    $rent_form['dd_check_value'] = $this->input->post('dd_check_value');
    $rent_form['date_of_commencement'] = $this->input->post('date_of_commencement');	    	
    $rent_form['rate_of_rent_percent'] = $this->input->post('rate_of_rent_percent');	
    $rent_form['aggreed_among_both_parties'] = $this->input->post('aggreed_among_both_parties');	
    $rent_form['terms_painting'] = $this->input->post('terms_painting');
    $rent_form['terms_pets'] = $this->input->post('terms_pets');
    $rent_form['terms_food'] = $this->input->post('terms_food');
    $rent_form['terms_lock_in_period'] = $this->input->post('terms_lock_in_period');
    $rent_form['penalty_clause_1'] = $this->input->post('penalty_clause_1');
    $rent_form['penalty_clause_2'] = $this->input->post('penalty_clause_2');
    $rent_form['penalty_clause_3'] = $this->input->post('penalty_clause_3');
    $rent_form['utilities_list'] = $this->input->post('utility_val');
    $rent_form['created_at'] = date('Y-m-d H:i:s');				
    $inserted_id    = insert_data('rent_form',$rent_form);	
    if($inserted_id  != ''){

      $response['user_id']    =  $inserted_id;
      $response['status']      = 1;
      $response['message']     = 'Data inserted';

    }else{
      $response['status']      = 2;
      $response['message']     = 'Something is wrong please try again after some time'; 
    }
    
    json_encode($response);
    
  }
  
  public function thankyou_page($customer_id = ''){
    
    $data['customer_id'] = $customer_id;
    $this->load->view('pages/rentform_thankyou.php' ,$data);
  }
  
  public function rentdata($inserted_id)
  {
    $this->load->model('legal_model', 'legal');
    $rentdata = $this->legal->rent_data($inserted_id);
    $this->load->view( 'pages/rentpreview.php', ['rentdata'=>$rentdata] );
  }
  
  
  
  public function editrentform($inserted_id)
  {
    $this->load->model('legal_model', 'legal');
    $rentdata = $this->legal->rent_data($inserted_id);
    $this->load->view( 'pages/editrentform.php', ['rentdata'=>$rentdata] );
  }
  
  
  public function updaterent($inserted_id)
  {
    $this->load->library('form_validation');
    if($this->form_validation->run('rentform') )
    {
      $post = $this->input->post();
      $this->load->model('legal_model', 'legal');
      $this->legal->update_rent($post, $inserted_id);
      return redirect('cover/rentdata/'.$inserted_id);
    }
    else
    {
      $this->load->view( 'pages/editrentform.php');	
    }		
    
  }
  
  public function finalrent($inserted_id)	 
  {
    $this->load->model('legal_model', 'legal');
    $rentdata = $this->legal->rent_data($inserted_id);
    $this->load->view( 'pages/rentagreement.php', ['rentdata'=>$rentdata] );			
  }
  
}
?>