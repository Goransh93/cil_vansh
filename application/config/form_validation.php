
<?php

$config = array(
        'rentform' => array(
                array(
                        'field' => 'l_pin',
                        'label' => 'Pin Code',
                        'rules' => 'required|numeric|exact_length[6]'
                ),
                 array(
                        'field' => 't_pin',
                        'label' => 'Pin Code',
                        'rules' => 'required|numeric|exact_length[6]'
                ),
                 array(
                        'field' => 'rp_pin',
                        'label' => 'Pin Code',
                        'rules' => 'required|numeric|exact_length[6]'
                ),     
                  array(
                        'field' => 'rp_amount',
                        'label' => 'Rent Amount',
                        'rules' => 'required|numeric'
                ),
                  array(
                        'field' => 'rp_security',
                        'label' => 'Rent Security',
                        'rules' => 'required|numeric'
                ),

                 array(
                        'field' => 'rp_floor',
                        'label' => 'Rented Floor',
                        'rules' => 'required|alpha'
                ),   
                 array(
                        'field' => 'rp_advance',
                        'label' => 'Rent Advance',
                        'rules' => 'required|numeric'
                ),       
                array(
                        'field' => 'rp_duration',
                        'label' => 'Rent Duration',
                        'rules' => 'required|numeric|less_than_equal_to[11]'   
                ), 
                array(
                        'field' => 'rp_increment',
                        'label' => 'Annual Increment',
                        'rules' => 'required|numeric'  
                )

        ),
        'article_rule' => array(
                array(
                        'field' => 'title',
                        'label' => 'Article Title',
                        'rules' => 'required'
                ),
                array(
                         'field' => 'body',
                         'label' => 'Article Body',
                         'rules' => 'required'
                ),

        )
);          










?>