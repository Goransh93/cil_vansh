<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('basic_helper')){
 

    function insert_data($table,$data){
      $ci=& get_instance();
      $ci->load->database();
      $ci->db->insert($table,$data);
      $id = $ci->db->insert_id();
      return $id;
       
       }

     function generateCustomerLead($hl_customer_id){

        $ci=& get_instance();
        $ci->load->database();
        $wher_customer_id['customer_id'] = $hl_customer_id;
        $customer_all_data = getAlldataById('generic_customer_details',$wher_customer_id);
        if(!empty($customer_all_data)){
        $customer_mobile = $customer_all_data[0]->customer_mobile;
        $data_user['leadgenration_reference_id']  = $customer_mobile;
        $data_user['leadgenration_product_sub_id'] = '3';
        $data_user['leadgenration_created_time']= date("Y-m-d" . " " . "h:i:s");
        $data_user['leadgenration_push_status_active']= '0';
        $data_user['leadgenration_active']= '1';
        $insert_user_lead_id      = insert_data('generic_lead_genration',$data_user);
        } 
        if($insert_user_lead_id  != ''){
         $response = $insert_user_lead_id;
        }else{
          $response = 0;
        }
        return $response;
      
      }

      function getAlldata($table){

        $ci=& get_instance();
        $ci->load->database();
        $query = $ci->db->get($table);
        return $query->result();

      }

        function getAlldataDescBl($table,$bl_customer_id){

           $ci=& get_instance();
           $ci->load->database();
           $query = $ci->db->where('bl_customer_id',$bl_customer_id);
           $query= $ci->db->order_by('bl_id',"DESC");
           $query = $ci->db->get($table);
           return $query->result();

        }

       function getAlldataDescHl($table,$hl_customer_id){

          $ci=& get_instance();
          $ci->load->database();
          $query = $ci->db->where('hl_customer_id',$hl_customer_id);
          $query= $ci->db->order_by('hl_id',"DESC");
          $query = $ci->db->get($table);
          return $query->result();

        }


         function getAlldataDescCl($table,$car_customer_id){

           $ci=& get_instance();
           $ci->load->database();
           $query = $ci->db->where('car_customer_id',$car_customer_id);
           $query= $ci->db->order_by('car_id',"DESC");
           $query = $ci->db->get($table);
            return $query->result();

        }
        
         function getAlldataDescEl($table,$education_loan_customer_id){

            $ci=& get_instance();
            $ci->load->database();           
            $query = $ci->db->where('education_loan_customer_id',$education_loan_customer_id);
            $query= $ci->db->order_by('education_loan_id',"DESC");
            $query = $ci->db->get($table);
            return $query->result();

        }


         function getAlldataDescGl($table,$gold_customer_id){

          $ci=& get_instance();
          $ci->load->database();           
          $query = $ci->db->where('gold_loan_customer_id',$gold_customer_id);
          $query= $ci->db->order_by('gold_loan_id',"DESC");
          $query = $ci->db->get($table);
          return $query->result();

        }


       function getAlldataDescPl($table,$pl_customer_id){

         $ci=& get_instance();
         $ci->load->database();
         $query = $ci->db->where('pl_customer_id',$pl_customer_id);
         $query= $ci->db->order_by('pl_id',"DESC");
         $query = $ci->db->get($table);
         return $query->result();

        }


       function getAlldataDescLap($table,$loan_against_customer_id){

         $ci=& get_instance();
         $ci->load->database();
         $query = $ci->db->where('loan_against_customer_id',$loan_against_customer_id);
         $query= $ci->db->order_by('loan_against_id',"DESC");
         $query = $ci->db->get($table);
         return $query->result();

        }


      function getAlldataById($table,$id){

        $ci=& get_instance();
        $ci->load->database();
        $query = $ci->db->get_where($table, $id); 
        return $query->result();

      }


        function getAlldataByIdRs($table,$id){

          $ci=& get_instance();
          $ci->load->database();
          $query = $ci->db->get_where($table, $id); 
          return $query->result_array();

        }



      function updaterow($data,$table,$id){

        $ci=& get_instance();
        $ci->load->database();
        $ci->db->where($id);
        $ci->db->update($table,$data);
        $dataval = $ci->db->last_query();
        return true;

      }

    

        function updaterow_return_id($data,$table,$id){

          $ci=& get_instance();
          $ci->load->database();
          $ci->db->where($id);
          $ci->db->update($table,$data);
          $query = $ci->db->get_where($table, $id);
          $query = $query->result();
          $id = isset($query[0]->hl_id) ? $query[0]->hl_id :0;
          return $id;
       }


        function updaterow_return_blid($data,$table,$id){

          $ci=& get_instance();
          $ci->load->database();
          $ci->db->where($id);
          $ci->db->update($table,$data);
          $query = $ci->db->get_where($table, $id);
          $query = $query->result();
          $id = isset($query[0]->bl_id) ? $query[0]->bl_id :0;
          return $id;

       }


      function isVarExists($table,$var){

        $ci=& get_instance();
        $ci->load->database();
        $query = $ci->db->select('*')->where($var)->get($table)->num_rows();
        return $query;

        }


      function mail_function($data){

        $ci=& get_instance();
        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'rokdabazaar.com';
        $config['smtp_port'] = '465';
        $config['smtp_timeout']='10';  
        $config['smtp_crypto']='ssl';
        $config['smtp_user'] = 'hello@rokdabazaar.com';
        $config['smtp_pass'] = ';#jMan-#PJtr';
        $config['smtp_from_name'] = 'RokdaBazaar';
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = 'TRUE';
        $ci->load->library('email',$config);
        $ci->email->initialize($config);
        $ci->email->set_newline("\r\n");
        $ci->email->set_mailtype("html");
        $ci->email->from('hello@rokdabazaar.com','RokdaBazaar');
        $ci->email->to($data['email']);
        $ci->email->subject($data['subject']);
        //$ci->email->message('this is the test message');
        $ci->email->message($data['template']);
        $response = $ci->email->send();
        $r = $ci->email->send(FALSE);
        // if (!$r)
        //   $response = $ci->email->print_debugger();
        //   echo '<pre>';
        //   print_r($response);
        //  die();
                 
        }


       

      function updateagent_row($data,$table,$id){
        
        $ci=& get_instance();
        $DB1 = $ci->load->database('crm', TRUE);
        $DB1->where($id);
        $DB1->update($table,$data);
        //$updatevar= $DB1->last_query();
        return true;

      }
      

     function getAgentdataById($table,$id){

        $ci=& get_instance();
        $DB1 =  $ci->load->database('crm', TRUE);
        $query = $DB1->get_where($table, $id); 
        return $query->result();

      }

      function traceObject($object = NULL){

        $ip_address = $_SERVER['REMOTE_ADDR'];
        if($ip_address == '182.77.28.8'){
        echo "-----------------";
        echo "<br/>";
        print_r($object);
        echo "<br/>";
        echo "-----------------";
        }

       }

      function getCityNameById($id){

       $ci=& get_instance();
       $ci->load->database();
       $query = $ci->db->select('city_name')->where('city_id' ,$id)->get('generic_cities');
       $query_data = $query->result();
       if(!empty($query_data)){
       $city_name = $query_data[0]->city_name;
        }else{
        $city_name = '';
        }
        return $city_name;

      }

      function getCityIdByName($cityname){

       $ci=& get_instance();
       $ci->load->database();
       $query = $ci->db->select('city_id')->where('city_name' ,$cityname)->get('generic_cities');
       $query_data = $query->result();
       if(!empty($query_data)){
       $city_id = $query_data[0]->city_id;
        }else{
        $city_id = '';
        }
        return $city_id;

      }

       function getEmployerNameById($id){

        $ci=& get_instance();
       $ci->load->database();
       $query = $ci->db->select('employer_name')->where('employer_id' ,$id)->get('generic_master_employer_name');
       $query_data = $query->result();
       if(!empty($query_data)){
       $employer_name = $query_data[0]->employer_name;
        }else{
        $employer_name = '';
        }
        return $employer_name;

      }

       function getStateNameById($id){

         $ci=& get_instance();
         $ci->load->database();
         $query = $ci->db->select('state_name')->where('state_id' ,$id)->get('generic_state');
         $query_data = $query->result();
         if(!empty($query_data)){
         $state_name = $query_data[0]->state_name;
         }else{
         $state_name = '';
         }
         return $state_name;

        }

       
        
         
    
    }