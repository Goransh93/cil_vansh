<?php
$currentURL = current_url();
$customer_id = $this->uri->segment(3);
print_r($customer_id);
$user_id['rent_form_id']  = $customer_id;
$get_customer_all_details = getAlldataById('rent_form',$user_id);
$user_data = array_shift($get_customer_all_details);
print_r($user_data);
$purpose_of_renting = $user_data->purpose_of_renting;
$type_of_agreement = $user_data->type_of_agreement;
$duration_of_agreement = $user_data->duration_of_agreement;
$type_of_property = $user_data->type_of_property;
$landlord_name = $user_data->landlord_name;
$landlord_age = $user_data->landlord_age;
$landlord_gender = $user_data->landlord_gender;
if($landlord_gender == 'Male'){
  $landlord_title = 'Mr.';
}else{
   $landlord_title = 'Ms';
}
$landlord_father_name = $user_data->landlord_father_name;
$landlord_husband_name = $user_data->landlord_husband_name;
$landlord_street_address = $user_data->landlord_street_address;
$landlord_city = $user_data->landlord_city;
$landlord_state = $user_data->landlord_state;
$landlord_pincode = $user_data->landlord_pincode;
$tenant_name = $user_data->tenant_name;
$tenant_age = $user_data->tenant_age;
$tenant_gender = $user_data->tenant_gender;
if($tenant_gender == 'Male'){
  $tenant_title = 'Mr.';
}else{
   $tenant_title = 'Ms';
}
$tenant_father_name = $user_data->tenant_father_name;
$tenant_husband_name = $user_data->tenant_husband_name;
$tenant_id_cardno = $user_data->tenant_id_cardno;
$tenant_identity_doc_name = $user_data->tenant_identity_doc_name;
$tenant_street_address = $user_data->tenant_street_address;
$tenant_city = $user_data->tenant_city;
$tenant_state = $user_data->tenant_state;
$tenant_pincode = $user_data->tenant_pincode;


$rental_property_address = $user_data->rental_property_address;
$rental_property_city = $user_data->rented_property_city;
$rental_property_state = $user_data->rented_property_state;
$rental_property_pin = $user_data->rented_property_pin;
$rental_property_place_agreement = $user_data->rental_property_place_agreement;
$rental_property_execution_date = $user_data->rental_property_execution_date;
$rental_property_no_of_office = $user_data->rental_property_no_of_office;
$rental_property_no_of_carparking = $user_data->rental_property_no_of_carparking;
$rental_property_room_set = $user_data->rental_property_room_set;
$rental_property_floor = $user_data->rental_property_floor;
$rental_property_bathrooms = $user_data->rental_property_bathrooms;
$rental_property_area = $user_data->rental_property_area;
$rental_property_balconies = $user_data->rental_property_balconies;
$rental_property_is_subletting_allow = $user_data->rental_property_is_subletting_allow;
$rent_security_deposit_amount = $user_data->rent_security_deposit_amount;
$rent_giving_date = $user_data->rent_giving_date;
$monthly_maintaince = $user_data->monthly_maintaince;
$security_deposit_payment_mode = $user_data->security_deposit_payment_mode;
$rent_amount = $user_data->rent_amount;
$rent_amount_word = $user_data->rent_amount_word;
$dd_check_value = $user_data->dd_check_value;
$date_of_commencement = $user_data->date_of_commencement;
$rate_of_rent_percent = $user_data->rate_of_rent_percent;
$aggreed_among_both_parties = $user_data->aggreed_among_both_parties;
$terms_painting = $user_data->terms_painting;
$terms_pets = $user_data->terms_pets;
$terms_food = $user_data->terms_food;
$terms_lock_in_period = $user_data->terms_lock_in_period;
$penalty_clause_1 = $user_data->penalty_clause_1;
$penalty_clause_2 = $user_data->penalty_clause_2;
$penalty_clause_3 = $user_data->penalty_clause_3;
$utilities_list = $user_data->utilities_list;

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

<meta charset="utf-8">	
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">	

<style type="text/css">
body { background: #f9f9f9; }	
.centerdiv { width: 871px; padding: 20px;  height: 390px; position: relative; background: #fff; box-shadow: 0px 0px 10px 0px #f1f1f1;  margin:auto; position: absolute; left: 0; right: 0; top: 0px; bottom: 0px; }
.coreticon { color: #f7941d; text-align: center; display: block; padding: 0px 0; font-size: 100px; }
.outline { border-bottom: 2px solid #3878af; padding-bottom: 5px; }
.logoright { float: right;  }

.thanks-hding { text-align: left; padding-top: 18px; display: inline-block;  color: #3878af; font-size: 28px; }
.thanks-prgh { text-align: left; padding-top: 20px; color:#635d5d; font-size: 18px; }
.clickhere { font-size: 16px;  color: #197dd2; text-decoration: none; }
.backtohome { font-size: 16px; text-align: center; display: block; padding-top: 20px;  color: #197dd2; text-decoration: none; }
.backtohome:hover, .clickhere:hover { text-decoration: none; color: #197dd2; }
.backtohome > i { color:#f7941d; position: relative; top: 1px; }
.thankslogo { width: 25%; margin: 20px auto 10px; display: block; }
.bold{
	font-weight: bold;
}
</style>	
</head>
<body>
<div class="centerdiv">

	<div class="outline">
		<h1 class="thanks-hding">Legal Document</h1>
	</div>
	<br>
	<button onclick="window.print()" style="padding: 5px 20px; height: 30px;">Print</button>
	
	<P style="width: 100%; font-size: 14px; margin: 0;">This Rent Agreement is hereby executed at <span id="rental_property_place_agreement1" class = "bold">___</span></P>


<p style="width: 100%; font-size: 14px;">
between:- </p>
<p style="width: 100%; font-size: 14px;">1.<span id="landlord_title1" class = "bold"><?=$landlord_title?></span> <span id="landlord_name1" class = "bold"><?= $landlord_name?></span> <span id="son_of" class = "bold"> S/o Mr. <?=$landlord_father_name?></span> <span id="landlord_husband1" class = "bold"> W/o <?=$landlord_husband_name?></span> <span id="landlord_father_name1" class="bold"></span> R/o <span id="landlord_street_address1" class = "bold"><?=$landlord_street_address?>, <?= $landlord_city?>- 
<?= $landlord_pincode?> <?=$landlord_state?>, </span> (hereinafter jointly and severally called the “Landlord/First Party” which expression shall include his heirs, legal representatives, successors and assigns)</p>
<p style="width: 100%; font-size: 14px;">AND</p>

<!-- second part -->
<p style="width: 100%; font-size: 14px;" id="residential_second_section">2.<span id="tenant_title1" class = "bold">
<?=$tenant_title?></span><span id="tenant_name1" class = "bold"><?=$tenant_name?></span>  <span id="son_of2" class = "bold"> S/o Mr. <?=$tenant_father_name?></span> <span id="tenant_husband1" style="display: none" class = "bold"> f/o </span> <span id="tenant_father_name1" class = "bold"></span> R/o <span id="tenant_street_address1" class = "bold"><?=$tenant_street_address?>, <?=$tenant_city?>- <?=$tenant_pincode?>, <?=$tenant_state?></span> <span class="bold"><?=$tenant_identity_doc_name?>-<?=$tenant_id_cardno?>	
</span> 
(hereinafter jointly and severally called the “Tenant” which expression shall include his heirs, legal representatives, successors and assigns)</p>

<p style="width: 100%; font-size: 14px;display: none;" id="commercial_second_section">2.<span id="tenant_title1" class = "bold">___</span><span id="tenant_name1" class = "bold">___</span> S/o <span id="tenant_father_name1" class = "bold">___</span> R/o <span id="tenant_street_address1" class = "bold">___</span> <span id="tenant_city1" class = "bold">___</span> <span id="tenant_state1" class = "bold">___</span>  (hereinafter called the SECOND PARTY/TENANT)</p>
<!-- end second part -->

<!--  third part -->
<p style="width: 100%; font-size: 14px; margin: 0;" id="residential_third_section">Now whereas the Landlord is the owner and in possession of <span id="type_of_property1" class = "bold"><?=$type_of_property?></span> situated at <span id="rental_property_address1" class = "bold"> <?=$rental_property_address?>,<?=$rental_property_city?>-<?=$rental_property_pin?>,<?=$rental_property_state?> </span> and is ready to let out the portion of the said property consisting of Number of Room Set(<span id="rental_property_room_set1" class = "bold"><?=$rental_property_room_set?></span>), Bathrooms (<span id="rental_property_bathrooms1" class = "bold"> <?=$rental_property_bathrooms?> </span>) ,Area (<span id="rental_property_area1" class = "bold"><?=$rental_property_area?> sqft.</span>) ,No. Of Balconies (<span id="rental_property_balconies1" class = "bold"><?=$rental_property_bathrooms?></span>) ,No. Of Car Parking Slots (<span id="rental_property_no_of_carparking1" class = "bold"><?=$rental_property_no_of_carparking?></span>) to the second party on monthly rent basis for <span id="purpose_of_renting1" class = "bold"><?=$duration_of_agreement?></span> months,on the request of the second party.</p> 

<p style="width: 100%; font-size: 14px; margin: 0;display: none" id="commercial_third_section">Now whereas the first party is the owner in possession of  Office/commercial property  situated at <span id="rental_property_address1" class = "bold">___</span> and is ready to let out the said Office/Commercial Premises consisting of <span id="rental_property_no_of_office1" class = "bold">___</span> to the second party on monthly rent basis, on the request of the second party.</p>
<!-- end third part -->


<p style="width: 100%; font-size: 14px; margin: 0;">NOW THIS AGREEMENT WITNESSETH AS UNDER:</p> 
<!--  four part -->
<p style="width: 100%; font-size: 14px; margin: 0;" id="residential_four_section">1. That the rate of rent of the said House/Property is fixed at Rs.<span id="rent_amount1" class = "bold"><?=$rent_amount?></span>/- Only (Rupees <span id="rent_amount_word" class = "bold"><?=$rent_amount_word?></span> only) per month.</p> 

<p style="width: 100%; font-size: 14px; margin: 0;display: none" id="commercial_four_section">1.That the rate of rent of the said Shop/Property is fixed at Rs. <span id="rent_amount1" class = "bold">...</span>/- (Rupees<span id="rent_amount1" class = "bold">___</span>Only) per month.</p>
<!-- end four part -->


<p style="width: 100%; font-size: 14px; margin: 0;">2.That the rent of the said house shall be effective from <span id="date_of_commencement1" class = "bold"><?=$date_of_commencement?></span> and shall be continued initially for a period of <span id="duration_of_agreement1" class = "bold"> <?=$duration_of_agreement?> </span> months. </p>
<p style="width: 100%; font-size: 14px; margin: 0;">3. That the period of tenancy may be extended for its further period only on the option of the first party and in that event the rate of rent shall be increased @<span id="rate_of_rent_percent1" class = "bold"><?=$rate_of_rent_percent?></span>% after every years on its previous rent.</p>


<p style="width: 100%; font-size: 14px; margin: 0;">4. That the monthly rent shall be payable by the second party to the first party latest by the  <span id="rent_giving_date1" class = "bold"><?=$rent_giving_date?></span> day of each English Calendar month in advance. </p> 

<p style="width: 100%; font-size: 14px; margin: 0;">5. That in case the second party would fail to pay the monthly rent to the first party consequently for two months, then the second party shall have to vacate the premises in question immediately.</p> 

<p style="width: 100%; font-size: 14px; margin: 0;">6. That the second party shall hand over the vacant physical possession of the rented house to the first party at the time of expiry of the tenancy period positively</p>
<!--  five part -->

<p style="width: 100%; font-size: 14px; margin: 0;" id="residential_five_section">7. That the second party shall be abide by all the rules and regulations of the local authorities/Society. </p> 

<p style="width: 100%; font-size: 14px; margin: 0;display: none;" id="commercial_five_section">That the second party shall be abide by all the rules and regulations of the local authorities</p>
<!--  end five part -->
<!--  six part -->

<p style="width: 100%; font-size: 14px; margin: 0;" id="residential_six_section">8. That the second party shall use the rental premises only for <span id="purpose_of_renting1" class = "bold"><?=$purpose_of_renting?></span> purpose</p>
<p style="width: 100%; font-size: 14px; margin: 0;display: none" id="commercial_six_section">8.That the second party shall use the rental premises only for Commercial/Office purpose. </p>
<!--  end six part -->

<p style="width: 100%; font-size: 14px; margin: 0;">9. That the second party shall pay the <span id="monthly_maintaince1" class = "bold">___</span> charges extra than the said agreed rent to the first party regularly as and when the bills for such expenses/charges are produced by the concerned authorities. </p> 
<!-- (no) -->
<p style="width: 100%; font-size: 14px; margin: 0;">10. That the second party shall not damage the fittings and fixtures fitted in the rented premises and shall maintain the same in good condition and shall also make arrangements for the repair and/or replacement of the damaged fittings and fixtures whatsoever would be required, at his/her own expenses. </p>

<!-- (yes) -->
<p style="width: 100%; font-size: 14px; margin: 0;" id="rental_property_is_subletting_allow1">11. That the second party shall not sublet, part with the possession or assign the same to any person in any manner.</p>

<!--  seven part -->
<p style="width: 100%; font-size: 14px; margin: 0;display: none" id="residential_seven_section">The second party is allowed to sublet the said premises further </p> 
<!--  end seven part -->
<p style="width: 100%; font-size: 14px; margin: 0;" id="sublet_yes" style="display: none;">12. That the second party shall not make any constructions or additions or alterations in the building as well as the open space and roof without the written consent of the first party. </p> 

<p style="width: 100%; font-size: 14px; margin: 0;">13. That the day to day repairs such as fuse, leakage in water taps etc. shall be carried out by the second party on his own expenses and the major repairs like cracks in walls and building etc. shall be borne by the first party on his own expenses when so informed by the second party. </p>

<p style="width: 100%; font-size: 14px; margin: 0;">14. That the lessee shall permit the landlord or any of their authorised person to enter the said premises at reasonable time for inspection purposes. </p>

<p style="width: 100%; font-size: 14px; margin: 0;">15. That the first party shall pay all the taxes such as property tax, house tax etc. as are or may hereinafter be assessed by the local authorities in respect of the premises in question. </p> 
<!--  eight part -->
<p style="width: 100%; font-size: 14px; margin: 0;" id="residential_eight_section">16. That the second party shall have to give <span id="notice_period1" class = "bold">____________</span> month advance notice in writing to the first party, in case of his vacating the premises in question before the period of tenancy, and the tenancy may also be terminated by the first party by giving <span id="notice_period1" class = "bold">____________</span> month notice to the second party for getting the premises in question vacated. </p>

<p style="width: 100%; font-size: 14px; margin: 0;display: none" id="commercial_eight_section">16.	That all trade taxes relating to business shall be paid by the second party directly and shall clear all govt. and private dues time to time.</p>
<!--  end eight part -->
<!--  start nine part -->
<p style="width: 100%; font-size: 14px; margin: 0;" id="residential_nine_section">17. That the parties to the agreement have specifically agreed that considering the location, accommodation and conditions of the said property/premises in question, the agreed rent is a fair rent and is in consequences with the prevalent market rates and the second party has accepted it as a   standard rent.</p>

<p style="width: 100%; font-size: 14px; margin: 0;display: none" id="commercial_nine_section">17.	That the second party shall have to give <span id="notice_period1" class = "bold">___</span> month advance notice in writing to the first party, in case of his vacating the premises in question before the period of tenancy, and the tenancy may also be terminated by the first party by giving month  <span id="notice_period1" class = "bold">___</span>notice to the second party for getting the premises in question vacated.</p>
<!--  end nine part -->
<!--  start ten part -->
<p style="width: 100%; font-size: 14px; margin: 0;" id="residential_ten_section">18. That the said rental premises are pre-installed with following Utilities:
	<span id="utilities_list1" class = "bold"><?=$utilities_list?></span><br>Note: Any Damage to said utilities during the rental tenure, the tenant will have to bear the repairing/replacement Charges.</p>

<p style="width: 100%; font-size: 14px; margin: 0;display: none" id="commercial_ten_section">18.	That the parties to the agreement have specifically agreed that considering the location, accommodation and conditions of the said property/premises in question, the agreed rent is a fair rent and is in consequences with the prevalent market rates and the second party has accepted it as a standard rent.</p>
	<!--  end ten part -->
<!--  start eleven part -->
<section id="residential_eleven_section"><p style="width: 100%; font-size: 14px; margin: 0;">19.That the Landlord and Tenant has agreed upon following Terms:</p>
<div id="terms_pets_sec" style="display: none;">
<!-- <span class = "bold" id="terms_pets1">___</span> -->
<p style="width: 100%; font-size: 14px; margin: 0;">a. Pets: The Tenant will be allowed.</p>
</div>

<div id="painting_terms" style="display: none">
<!-- <span class = "bold" id="terms_painting1">___</span> -->
<p style="width: 100%; font-size: 14px; margin: 0;">b. Painting: The Land Lord shall get the “Rented Property” Painted and cleaned at the time of handing over possession to tenant. The Tenant shall pay to the landlord the painting charges or get the premises painted and cleaned on termination of lease and vacating the premises</p>
</div>
<div id="food_terms" style="display: none">
<!-- <span class = "bold" id="terms_food1" >___</span> -->
<p style="width: 100%; font-size: 14px; margin: 0;">c. Food: the Tenant shall strictly cook only vegetarian food within the Leased Premises. </p>
</div>
<div id="lock_in_period_terms" style="display: none">
<!-- <span class = "bold" id="terms_lock_in_period1" >___</span> -->
<p style="width: 100%; font-size: 14px; margin: 0;">d. Lock-in Period: The Lease shall have a lock-in Period of 
<span class="bold"><?= $terms_lock_in_period?></span> Months, before which termination is not possible by either parties. If either party terminated the lease during the lock-in period then they shall pay the sum equal to two months rent to the other party as penelty</p>
</div>
<div id="penalty_clause_1_terms" style="display: none">
<p style="width: 100%; font-size: 14px; margin: 0;">
<b>Penalty Clause:</b>(a)The Tenant will have to bear the penalty of Rs. <span class = "bold" id="penalty_clause_1_val">><?=$penalty_clause_1?></span>per Day for Non Payment of Rent </p>

</div>
<div id="penalty_clause_2_terms" style="display: none">
<p>(b) The Tenant will have to bear the penalty of Rs. <span class = "bold" id="penalty_clause_2_val"><?=$penalty_clause_2?></span>
			per Day for (Over Stay )</p>
</div>
<div id="penalty_clause_3_terms" style="display: none">	
<p>(c) The Tenant will have to bear the penalty of Rs. <span class = "bold" id="penalty_clause_3_val"><?=$penalty_clause_3?></span>per Day for (Late Payment of Rent)</p>
</div>
</section>
<section style="display: none" id="commercial_eleven_section"><p style="width: 100%; font-size: 14px; margin: 0;">19. The second party will give peaceful positive possession to first party at the time of vacation of premises.</p> </section>
<!--  end eleven part -->
<!--  start twel part -->
<p style="width: 100%; font-size: 14px; margin: 0;" id="residential_twel_section">20. That the Tenant has deposited Security amounting Rs.<span id="rent_security_deposit_amount1" class = "bold"><?= $rent_security_deposit_amount?></span>(Rupees)
Via Cash/Cheque No.<span id="dd_check_value1" class = "bold"><?=$dd_check_value?></span> which shall be refundable at the time of vacation of premises by the Tenant after adjust any dues/penalty/repairing charges etc.  
</p>
<p style="width: 100%; font-size: 14px; margin: 0;display: none" id="commercial_twel_section">20. That the second party will not engage any partner or outsider in the business without the written consent of the first party. In that case be must have to vacate the premises.</p>
<!--  end twel part -->
<!--  start thirty part -->
<p style="width: 100%; font-size: 14px; margin: 0;" id="residential_thirty_section">21. That the terms and conditions of this Agreement as stated above shall be binding on both the  parties. The terms of this Agreement are final and irrevocable. 
IN WITNESS WHEREOF the parties hereto have signed this agreement on the date, month and year first above written in the presence of witnesses at Faridabad. </p>
<p style="width: 100%; font-size: 14px; margin: 0;display: none" id="commercial_thirty_section">21.	That the second party shall not permit the entitled to use the said premises obnoxious to public interest or not permissible  under the law.  Any antisocial activities done by the tenant, shall not be allowed in this premises. </p>
<!--  end thirty part -->
<!--  start fourty part -->
<p style="width: 100%; font-size: 14px; margin: 0;display: none" id="commercial_fourty_section">22.	That the in the event of any dispute or differences arising out of this agreement the matter will be referred to the arbitrator approved by the common consent of both the parties and his decision will be binding on both the parties. </p>
<!--  end fourty part -->
<!--  start fifty part -->
<p style="width: 100%; font-size: 14px; margin: 0;display: none" id="commercial_fifty_section">22.	That the said rental premises are pre-installed with following Utilities:
	<span id="utilities_list1" class = "bold"><?=$utilities_list?></span><br>
	
Note: Any Damage to said utilities during the rental tenure, the tenant will have to bear the repairing/replacement Charges.
</p>
<!--  end fifty part -->
<!--  start sixty part -->
<section id="commercial_sixty_section" style="display: none"><p style="width: 100%; font-size: 14px; margin: 0;">19.That the Landlord and Tenant has agreed upon following Terms:</p>

<div id="painting_terms" style="display: none">
<!-- <span class = "bold" id="terms_painting1">___</span> -->
<p style="width: 100%; font-size: 14px; margin: 0;">b. Painting: The Land Lord shall get the “Rented Property” Painted and cleaned at the time of handing over possession to tenant. The Tenant shall pay to the landlord the painting charges or get the premises painted and cleaned on termination of lease and vacating the premises</p>
</div>
<div id="lock_in_period_terms" style="display: none">
<!-- <span class = "bold" id="terms_lock_in_period1" >___</span> -->
<p style="width: 100%; font-size: 14px; margin: 0;">d. Lock-in Period: The Lease shall have a lock-in Period of __________________________Months, before which termination is not possible by either parties. If either party terminated the lease during the lock-in period then they shall pay the sum equal to two months rent to the other party as penelty</p>
</div>
<div id="penalty_clause_1_terms" style="display: none">
<p style="width: 100%; font-size: 14px; margin: 0;">
<b>Penalty Clause:</b>(a)The Tenant will have to bear the penalty of Rs. <span class = "bold" id="penalty_clause_1_val">
<?=$penalty_clause_1?></span>per Day for Non Payment of Rent </p>

</div>
<div id="penalty_clause_2_terms" style="display: none">
<p>(b) The Tenant will have to bear the penalty of Rs. <span class = "bold" id="penalty_clause_2_val">___</span>
			per Day for (Over Stay )</p>
</div>
<div id="penalty_clause_3_terms" style="display: none">	
<p>(c) The Tenant will have to bear the penalty of Rs. <span class = "bold" id="penalty_clause_3_val">___</span>per Day for (Late Payment of Rent)</p>
</div>
</section>
<!--  end sixty part -->
<!--  start seventy part -->
<p style="width: 100%; font-size: 14px; margin: 0;display: none" id="commercial_seventy_section">23. That the terms and conditions of this Agreement as stated above shall be binding on both the  parties. The terms of this Agreement are final and irrevocable. 


IN WITNESS WHEREOF the parties hereto have signed this agreement on the date, month and year first above written in the presence of witnesses at Faridabad.
<!--  end seventy part --> 
</p>
</div>
</div>     

</body>
</html>