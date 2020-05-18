<?php include ('header.php');?>
<?php include ('service_function.php');?> 

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h2 class="text-center pt-5 pb-3">Rental agreement</h2>
      <form method="POST" action="cover/rentpreview" id="rentprevieform">
        <div class="row boxdesign">
          <div class="col-sm-12">
            <div id="rentform_error"></div>
            <!-- Progress Bar -->
            <ul id="progressbar" class="rentaltoplist">
              <li class="active">Agreement</li>
              <li>Landlord</li>
              <li>Tenant</li>
              <li>Property</li>
              <li>Rent</li>
              <li>Terms</li>
              <li>Utilities</li>
            </ul>    
          </div>
          <div class="col-md-6">
            <div class="agreement-box fixdivscroll">
              <!-- Start Step 1 -->
              <fieldset id="first" class="loginbox pt-4">
                <h3 class="agreement-hding borderbot ">Agreement Details</h3>
                <div class="radio-toolbar">
                  <p class="agrement-title">Purpose of Renting *</p>
                  <input type="radio" name="purpose_of_renting" id="Residential" value="Residential" >
                  <label for="Residential" class="label1">
                      <span>Residential</span>
                  </label>
                  <input type="radio" name="purpose_of_renting" id="Commercial" value="Commercial">
                   <label for="Commercial" class="label2">
                      <span>Commercial</span>
                  </label>
                </div>
                <div class="mt-4 mb-4 borderbot"></div>

                <div class="radio-toolbar">
                  <p class="agrement-title">Type of Agreement</p>
                  <input type="radio" name="type_of_agreement" id="monthly_rental" value="Monthly Rental" >
                  <label for="monthly_rental" class="label1">
                      <span>Monthly Rental</span>
                  </label>
                  <input type="radio" name="type_of_agreement" id="long_term_lease" value="Long Term Lease">
                   <label for="long_term_lease" class="label2">
                      <span>Long Term Lease</span>
                  </label>
                </div>
                <div class="mt-4 mb-4 borderbot"></div>

                <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-3">
                        <p class="agrement-title">Duration of Agreement (in months)</p>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="inputfield" name="duration_of_agreement" id="duration_of_agreement">
                      </div>
                    </div>  
                  </div>

                <div class="radio-toolbar" id="residential_property">
                  <p class="agrement-title">Type of Property</p>
                  <input type="radio" name="type_of_property" id="house_property" value="House" >
                  <label for="house_property" class="label1">
                      <span>House</span>
                  </label>
                  <input type="radio" name="type_of_property" id="apartment_property" value="Apartment">
                   <label for="apartment_property" class="label2">
                      <span>Apartment</span>
                  </label>
                  <input type="radio" name="type_of_property" id="room_property" value="Room">
                   <label for="room_property" class="label2">
                      <span>Room</span>
                  </label>
                </div>
               
                 <div class="radio-toolbar" id="commercial_property" style="display: none">
                  <p class="agrement-title">Type of Property</p>
                  <input type="radio" name="type_of_property" id="shop_property" value="Shop" >
                  <label for="shop_property" class="label1">
                      <span>Shop</span>
                  </label>
                  <input type="radio" name="type_of_property" id="company_property" value="Company">
                   <label for="company_property" class="label2">
                      <span>Company</span>
                  </label>
                 
                </div>
              
                <input class="next_btn" name="next" type="button" value="Next" onclick="document1();">
              </fieldset>
              <!-- End Step 1 -->
              <!-- Start Step 2 -->
              <fieldset class="loginbox pt-4 ">
                <h3 class="agreement-hding borderbot">Landlord Details</h3>
                
                <div class="radio-toolbar">
                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-3">
                        <p class="agrement-title">Name *</p>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="inputfield" name="landlord_name" id="landlord_name">
                      </div>
                    </div>  
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-3">
                        <p class="agrement-title">Age</p>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="inputfield" name="landlord_age" id="landlord_age">
                      </div>
                    </div>  
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-3">
                        <p class="agrement-title">Gender  *</p>
                      </div>
                      <div class="col-sm-9">
                        <input type="radio" name="landlord_gender" id="male_landlord" value="Male">
                        <label for="male_landlord" class="label1">
                          <span>Male</span>
                        </label>
                        <input type="radio" name="landlord_gender" id="female_landlord" value="Female">
                        <label for="female_landlord" class="label2">
                          <span>Female</span>
                        </label>
                      </div>
                    </div>  
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-3">
                        <p class="agrement-title">Father's Name</p>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="inputfield" name="landlord_father_name" id="landlord_father_name">
                      </div>
                    </div>  
                  </div>
                
                  <div class="form-group" id="landlord_husband_name_val" style="display: none">
                    <div class="row">
                      <div class=" col-sm-3">
                        <p class="agrement-title">Husband's Name</p>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="inputfield" name="landlord_husband_name" id="landlord_husband_name">
                      </div>
                    </div>  
                  </div>
               
                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-3">
                        <p class="agrement-title">Street Address</p>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="inputfield" name="landlord_street_address" id="landlord_street_address">
                      </div>
                    </div>  
                  </div>  
                   <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-3">
                        <p class="agrement-title">City</p>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="inputfield" name="landlord_city" id="landlord_city">
                      </div>
                    </div>  
                  </div> 
                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-3">
                        <p class="agrement-title">State</p>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="inputfield" name="landlord_state" id="landlord_state">
                      </div>
                    </div>  
                  </div> 

                   <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-3">
                        <p class="agrement-title">Pincode</p>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="inputfield" name="landlord_pincode" id="landlord_pincode">
                      </div>
                    </div>  
                  </div> 
               <input type="hidden" name="count_row" id="count_row" value="">
              <div id="membership_service_rows_div">
              </div>
             <div class="row">
              <div class="col-md-12">
                <button type="button" class="btn btn-primary btn-block" id="add-membership-service-row">Add Landlord</button>
              </div>
               </div>
                </div>
                <input class="pre_btn" name="previous" type="button" value="Previous">
                <input class="next_btn" name="next" type="button" value="Next" onclick="document2();">
                
              </fieldset>
              <!-- End Step 2 -->

              <!-- Start Step 3 -->
              <fieldset class="loginbox pt-4 ">
               
                <h3 class="agreement-hding borderbot">Tenant Details</h3>
               
                <div class="radio-toolbar">
                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-3">
                        <p class="agrement-title">Name*</p>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="inputfield" name="tenant_name" id="tenant_name">
                      </div>
                    </div>  
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-3">
                        <p class="agrement-title">Age</p>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="inputfield" name="tenant_age" id="tenant_age">
                      </div>
                    </div>  
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-3">
                        <p class="agrement-title">Gender*</p>
                      </div>
                      <div class="col-sm-9">
                        <input type="radio" name="tenant_gender" id="male_tenant" value="Male">
                        <label for="male_tenant" class="label1">
                            <span>Male</span>
                        </label>
                        <input type="radio" name="tenant_gender" id="female_tenant" value="Female">
                         <label for="female_tenant" class="label2">
                            <span>Female</span>
                        </label>
                      </div>
                    </div>  
                  </div>
                
                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-3">
                        <p class="agrement-title">Father's Name*</p>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="inputfield" name="tenant_father_name" id="tenant_father_name">
                      </div>
                    </div>  
                  </div>

                  
                  <div class="form-group" id="tenant_husband_name_val" style="display: none">
                    <div class="row">
                      <div class=" col-sm-3">
                        <p class="agrement-title">Husband's Name</p>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="inputfield" name="tenant_husband_name" id="tenant_husband_name">
                      </div>
                    </div>  
                  </div>
                
                 <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-3">
                        <p class="agrement-title">Identity</p>
                      </div>
                      <div class="col-sm-9">
                        <select class="inputfield" name="tenant_identity_doc_name" id="tenant_identity_doc_name">
                          <option value="">Select Identity Document</option>
                          <option value="Aadhaar">Aadhaar</option>
                          <option value="Driving License">Driving License</option>
                          <option value="Pan Card">Pan Card</option>
                          <option value="Passport">Passport</option>
                          <option value="Voters Id">Voters Id</option>
                          <option value="Others">Others</option>
                        </select>
                      </div>
                    </div>  
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-3">
                        <p class="agrement-title">Id Card No.</p>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="inputfield" name="tenant_id_cardno" id="tenant_id_cardno">
                      </div>
                    </div>  
                  </div>

                  

                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-3">
                        <p class="agrement-title">Street Address</p>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="inputfield" name="tenant_street_address" id="tenant_street_address">
                      </div>
                    </div>  
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-3">
                        <p class="agrement-title">City</p>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="inputfield" name="tenant_city" id="tenant_city">
                      </div>
                    </div>  
                  </div> 
                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-3">
                        <p class="agrement-title">State</p>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="inputfield" name="tenant_state" id="tenant_state">
                      </div>
                    </div>  
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-3">
                        <p class="agrement-title">Pincode</p>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="inputfield" name="tenant_pincode" id="tenant_pincode">
                      </div>
                    </div>  
                  </div>
                  <input type="hidden" name="tenant_count_row" id="tenant_count_row" value="">
              <div id="tenant_rows_div">
              </div>
             <div class="row">
              <div class="col-md-12">
                <button type="button" class="btn btn-primary btn-block" id="add-tenant-row">Add Tenant</button>
              </div>
               </div>
                </div>
                <input class="pre_btn" type="button" value="Previous">
                <input class="next_btn" name="next" type="button" value="Next" onclick="document3();">
               
                </fieldset>  
              <!-- End Step 3 -->

              <!-- Start Step 4 -->
              <fieldset class="loginbox pt-4 ">
                <h3 class="agreement-hding borderbot">Rental Property Details</h3>
                <div class="radio-toolbar">
                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">Rented Property address</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="inputfield" name="rental_property_address" id="rental_property_address">
                      </div>
                    </div>  
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">City</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="inputfield" name="rental_property_city" id="rental_property_city">
                      </div>
                    </div>  
                  </div>
                   <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">Pin</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="inputfield" name="rental_property_pin" id="rental_property_pin">
                      </div>
                    </div>  
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">State</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="inputfield" name="rental_property_state" id="rental_property_state">
                      </div>
                    </div>  
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">Tenant Place Of Agreement</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="inputfield" name="rental_property_place_agreement" id="rental_property_place_agreement">
                      </div>
                    </div>  
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">Date of Execution</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="date" class="inputfield" name="rental_property_execution_date" id="rental_property_execution_date">
                      </div>
                    </div>  
                  </div>
                  
                 
                  <div class="form-group" id="no_of_office" style="display: none">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">Number of office</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="inputfield" name="rental_property_no_of_office" id="rental_property_no_of_office">
                      </div>
                    </div>  
                  </div>

                 <div class="form-group" id="room_set" style="display: none">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">Number of Room set</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="inputfield" name="rental_property_room_set" id="rental_property_room_set">
                      </div>
                    </div>  
                  </div>
                  <div class="form-group" id="floor" style="display: none">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">Floor</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="inputfield" name="rental_property_floor" id="rental_property_floor">
                      </div>
                    </div>  
                  </div>
                   <div class="form-group" id="bathrooms" style="display: none">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">No of Bathrooms</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="inputfield" name="rental_property_bathrooms" id="rental_property_bathrooms">
                      </div>
                    </div>  
                  </div>
                  <div class="form-group" id="area" style="display: none">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">Area</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="inputfield" name="rental_property_area" id="rental_property_area">
                      </div>
                    </div>  
                  </div>
                   <div class="form-group" id="balconies" style="display: none">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">No. Of Balconies</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="inputfield" name="rental_property_balconies" id="rental_property_balconies">
                      </div>
                    </div>  
                  </div>
                  <div class="form-group" id="car_park_slot" style="display: none">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">No. of Car Parking Slots</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="inputfield" name="rental_property_no_of_carparking" id="rental_property_no_of_carparking">
                      </div>
                    </div>  
                  </div>
                
                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">Is Subletting Allowed?</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="radio" name="rental_property_is_subletting_allow" id="yes_rental_property_is_subletting_allow" value="Yes">
                        <label for="yes_rental_property_is_subletting_allow" class="label1">
                          <span>Yes</span>
                        </label>
                        <input type="radio" name="rental_property_is_subletting_allow" id="no_rental_property_is_subletting_allow" value="No">
                        <label for="no_rental_property_is_subletting_allow" class="label1">
                          <span>No</span>
                        </label>
                      </div>
                    </div>  
                  </div>
                </div>
                <input class="pre_btn" type="button" value="Previous">
                <input class="next_btn" name="next" type="button" value="Next" onclick="document4();">
              </fieldset>
              <!-- End Step 4 -->

              <!-- Start Step 5 -->
              <fieldset class="loginbox pt-4 ">
              
                <h3 class="agreement-hding borderbot">Rent Details</h3>
                
                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">Rent amount(per months)</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="inputfield" name="rent_amount" id="rent_amount">
                      </div>
                    </div>  
                  </div>
                <div class="radio-toolbar">
                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">Security Deposit Amount</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="inputfield"  name="rent_security_deposit_amount" id="rent_security_deposit_amount">
                      </div>
                    </div>  
                  </div>

                    <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">Scurity Deposit Payment Mode</p>
                      </div>
                      <div class="col-sm-8">
                        <select class="inputfield" name="security_deposit_payment_mode" id="security_deposit_payment_mode">
                          <option value="Cash">cash</option>
                          <option value="Cheque">Cheque</option>
                          <option value="DD">DD</option>
                          <option value="Online Transfer">Online Transfer</option>
                          
                        </select>
                      </div>
                    </div>  
                  </div>


                  <div class="form-group" id="dd_check_no" style="display: none">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">DD and Check No</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="inputfield" name="dd_check_value" id="dd_check_value">
                      </div>
                    </div>  
                  </div>

       <div class="form-group">
                          <div class="row">
                            <div class=" col-sm-5">
                              <p class="agrement-title">Charges other than Rent*</p>
                            </div>
                            <div class="col-sm-7">
                           
                              <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="electricity" value="Electricity">
                              <label class="form-check-label" for="inlineCheckbox1">Electricity</label>
                              </div>
                              <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="water" value="Water & Sewer">
                              <label class="form-check-label" for="inlineCheckbox2">Water & Sewer</label>
                              </div>
                              <div class="form-check ">
                              <input class="form-check-input" type="checkbox" id="society" value="Society Maintenance">
                              <label class="form-check-label" for="inlineCheckbox3">Society Maintenance</label>
                              </div>
                              <div class="form-check ">
                              <input class="form-check-input" type="checkbox" id="nil" value="no other">
                              <label class="form-check-label" for="inlineCheckbox3">No extra charges</label>
                              </div>

                            </div>
                          </div>  
                        </div>



<!-- 
                    <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">Monthly Maintaince(Electricity Water and Sewer Charges etc.)</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="inputfield" name="monthly_maintaince" id="monthly_maintaince">
                      </div>
                    </div>  
                  </div> -->
                
              
                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">Rent Commencement Date(w.e.f)</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="date" class="inputfield" name="date_of_commencement" id="date_of_commencement">
                      </div>
                    </div>  
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">rate of rent increased(%) in every year</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="inputfield" name="rate_of_rent_percent" id="rate_of_rent_percent">
                      </div>
                    </div>  
                  </div>

                   <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">Notice Period(in months)</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="inputfield" name="notice_period" id="notice_period">
                      </div>
                    </div>  
                  </div>

                  <!-- <div class="form-group">
                    <p>Additional Requirement</p>
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">Agreed among both the parties</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="inputfield" name="aggreed_among_both_parties" id="aggreed_among_both_parties">
                      </div>
                    </div>  
                  </div> -->
                 
                </div>
                <input class="pre_btn" type="button" value="Previous">
                <input class="next_btn" name="next" type="button" value="Next" onclick="document5();">
              </fieldset>
              <!-- End Step 5 -->

              <!-- Start Step 6 -->
              <fieldset class="loginbox pt-4 ">
                
                <h3 class="agreement-hding borderbot">Additional Terms</h3>
                <div class="radio-toolbar">
                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">Painting *</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="radio" name="terms_painting" id="include_terms_painting" value="Include">
                        <label for="include_terms_painting" class="label1">
                            <span>Include</span>
                        </label>
                        <input type="radio" name="terms_painting" id="exclude_terms_painting" value="Exclude">
                         <label for="exclude_terms_painting" class="label2">
                            <span>Exclude</span>
                        </label>
                      </div>
                    </div>  
                  </div>
                  <div class="form-group" id="residential_pets" style="display: none">
                    <div class="row">
                  <div class=" col-sm-4">
                    <p class="agrement-title">Pets *</p>
                  </div>
                      <div class="col-sm-8">
                        <input type="radio" name="terms_pets" id="include_terms_pets" value="Include">
                        <label for="include_terms_pets" class="label1">
                            <span>Include</span>
                        </label>
                        <input type="radio" name="terms_pets" id="exclude_terms_pets" value="Exclude">
                         <label for="exclude_terms_pets" class="label2">
                            <span>Exclude</span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">Food *</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="radio" name="terms_food" id="include_terms_food" value="Include">
                        <label for="include_terms_food" class="label1">
                            <span>Include</span>
                        </label>
                        <input type="radio" name="terms_food" id="exclude_terms_food" value="Exclude">
                         <label for="exclude_terms_food" class="label2">
                            <span>Exclude</span>
                        </label>
                      </div>
                    </div>  
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">Lock-in Period *</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="radio" name="terms_lock_in_period" id="include_terms_lock_in_period" value="Include">
                        <label for="include_terms_lock_in_period" class="label1">
                            <span>Include</span>
                        </label>
                        <input type="radio" name="terms_lock_in_period" id="exclude_terms_lock_in_period" value="Exclude">
                         <label for="exclude_terms_lock_in_period" class="label2">
                            <span>Exclude</span>
                        </label>
                      </div>
                    </div>  
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-4">
                        <p class="agrement-title">Penalty Clause</p>
                       <p class="agrement-title">Tenant will have to bear the penalty of Rs. __ per Day for Non Payment of Rent </p>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="inputfield" name="penalty_clause_1" id="penalty_clause_1">
                      </div>
                    </div>  
                  </div>
                   <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-4">
                       <p class="agrement-title">Tenant will have to bear the penalty of Rs. __ per Day for (Over Stay)</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="inputfield" name="penalty_clause_2" id="penalty_clause_2">
                      </div>
                    </div>  
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-4">
                       <p class="agrement-title">Tenant will have to bear the penalty of Rs. __ per Day for (Late Payment of Rent)</p>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="inputfield" name="penalty_clause_3" id="penalty_clause_3">
                      </div>
                    </div>  
                  </div>
                </div>
                <input class="pre_btn" type="button" value="Previous">
                <input class="next_btn" name="next" type="button" value="Next" onclick="document6();">
              </fieldset>
              <!-- End Step 6 -->
              
              <!-- Start Step 7 -->
              <fieldset class="loginbox pt-4 ">
              
                <h3 class="agreement-hding borderbot">List Of Utilities</h3>
                 <table id="utilities_list">
                  <tr>
                        <td><label for="Office-Chairs">Office Furnitures</label></td>
                    </tr>
                    <tr>
                        <td><input id="Workstations" type="checkbox" value="Workstations"/><label for="Workstations">Workstations</label></td>
                    </tr>
                    <tr>
                        <td><input id="Sofa" type="checkbox" value="Sofa"/><label for="Sofa">Sofa</label></td>
                    </tr>
                    <tr>
                        <td><input id="Tables" type="checkbox" value="Tables"/><label for="Tables">Tables</label></td>
                    </tr>
                    <tr>
                        <td><input id="Almirah" type="checkbox" value="Almirah"/><label for="Almirah">Almirah</label></td>
                    </tr>
                    <tr>
                        <td><input id="Office-Chairs" type="checkbox" value="Office-Chairs"/><label for="Office-Chairs">Office-Chairs</label></td>
                    </tr>
  
                     <tr>
                        <td><label for="Office-Chairs">Fittings</label></td>
                    </tr>
                     <tr>
                        <td><input id="bulbs" type="checkbox" value="Bulbs"/><label for="bulbs">Bulbs</label></td>
                    </tr>
                    <tr>
                        <td><input id="tube_lights" type="checkbox" value="Tube-Lights"/><label for="tube_lights">Tube-Lights</label></td>
                    </tr>
                    <tr>
                        <td><input id="ceiling_fan" type="checkbox" value="Ceiling-Fans"/><label for="ceiling_fan">Ceiling-Fans</label></td>
                    </tr>
                    <tr>
                        <td><input id="chimney" type="checkbox" value="Chimney"/><label for="chimney">Chimney</label></td>
                    </tr>

                    <tr>
                        <td><label for="Office-Chairs">Appliances</label></td>
                    </tr>
                     <tr>
                        <td><input id="air_conditioner" type="checkbox" value="Air-Conditioner"/><label for="air_conditioner">Air-Conditioner</label></td>
                    </tr>
                    <tr>
                        <td><input id="gas_stove" type="checkbox" value="Gas Stove"/><label for="gas_stove">Gas Stove</label></td>
                    </tr>
                    <tr>
                        <td><input id="tv" type="checkbox" value="TV"/><label for="tv">TV</label></td>
                    </tr>
                    <tr>
                        <td><input id="washing_machine" type="checkbox" value="Washing-Machine"/><label for="washing_machine">Washing-Machine</label></td>
                    </tr>
                  
                </table>
                <input class="pre_btn" type="button" value="Previous">
                <input class="next_btn" name="next" type="button" value="Next" onclick="document7();">
                
              </fieldset>
              <!-- End Step 7 -->

              <!-- Start Final Step 8  -->
              <fieldset class="loginbox pt-4 ">
                
                <div class="radio-toolbar">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="fserror-box">
                        <strong>Following fields are to be filled in the form*</strong> <br><br>
                        <h4 class="fserror-title">Agreement Details</h4>
                        <ul class="fserror-list">
                          <li>Start Date</li>
                        </ul>
                        <h4 class="fserror-title">Landlord Details</h4>
                        <ul class="fserror-list">
                          <li>Start Date</li>
                        </ul>
                      </div>
                      <p class="agrement-title"><strong>Please follow these steps:</strong></p>
                      <ol class="finalstipul">
                        <li>Make the payment</li>
                        <li>Review & Edit your document</li>
                        <li>Print, share or get it delivered</li>
                      </ol>
                      <a href="#" class="procedpay-link">Want more than one set of document? Have any queries? Click here to let us know.</a>
                    </div>
                    
                  </div>
                </div>
                <input class="pre_btn" type="button" value="Previous">
               <input class="submit_btn" type="submit" value="Submit" onclick="submitFormData();document6();">
              </fieldset>
              <!-- End Final Step 8 -->
            </div>
          </div>
          <div class="col-sm-6" id="sidebar"> 
            <!-- <small class="doc-prevtxt">Document Preview</small>       -->
            <div class="agreementxt-box digleftbg">   
             <?php include ('rent_agreement.php');?> 
           </div>
          </div>
        </div>
      </form>  
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="extra" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Landlord</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <div class="modal-body" id="extra_body">
   
       </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  // Add landlord service
       var count = 0;
      $('button#add-membership-service-row').click(function() {
          var formdata_val = "Cover/add_landlord";
          var count_row = count + 1;
          count++;
          $('#count_row').val(count_row);
        $.ajax({
            method: 'POST',
            url: formdata_val,
            data: { row_index: count_row },
            dataType: 'html',
            success: function(response) {
                if (response) {
                 $('#extra').modal('show'); 
                $('#extra_body').append(response); 
                }


            },
        });
    });
    $(document).on('click', '.remove_service_row', function() {
        swal({
            title: "Are you sure",
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then(willDelete => {
            if (willDelete) {
                $(this)
                    .closest('.service_row')
                    .remove();
            }
        });
    });
</script>
<script type="text/javascript">
  // Add tenant service
       var count = 0;
      $('button#add-tenant-row').click(function() {
          var formdata_val = "Cover/add_tenant";
          var tenant_count_row = count + 1;
          count++;
          $('#tenant_count_row').val(tenant_count_row);
        $.ajax({
            method: 'POST',
            url: formdata_val,
            data: { row_index: tenant_count_row },
            dataType: 'html',
            success: function(result) {
                if (result) {
                    var appended = $('#tenant_rows_div').append(result);

                }
            },
        });
    });
    $(document).on('click', '.remove_service_row', function() {
        swal({
            title: "Are you sure",
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then(willDelete => {
            if (willDelete) {
                $(this)
                    .closest('.service_row')
                    .remove();
            }
        });
    });
</script>
<script type="text/javascript">
  
$(document).ready(function() {
var count = 0; // To Count Blank Fields
/*------------ Validation Function-----------------*/
$(".submit_btn").click(function(event) {
var radio_check = $('.rad'); // Fetching Radio Button By Class Name
var input_field = $('.text_field'); // Fetching All Inputs With Same Class Name text_field & An HTML Tag textarea
var text_area = $('textarea');
// Validating Radio Button
if (radio_check[0].checked == false && radio_check[1].checked == false) {
var y = 0;
} else {
var y = 1;
}
// For Loop To Count Blank Inputs
for (var i = input_field.length; i > count; i--) {
if (input_field[i - 1].value == '' || text_area.value == '') {
count = count + 1;
} else {
count = 0;
}
}

});
/*---------------------------------------------------------*/
$(".next_btn").click(function() { // Function Runs On NEXT Button Click
$(this).parent().next().fadeIn('slow');
$(this).parent().css({
'display': 'none'
});
// Adding Class Active To Show Steps Forward;
$('.active').next().addClass('active');
});
$(".pre_btn").click(function() { // Function Runs On PREVIOUS Button Click
$(this).parent().prev().fadeIn('slow');
$(this).parent().css({
'display': 'none'
});
// Removing Class Active To Show Steps Backward;
$('.active:last').removeClass('active');
});

});

</script>
<!-- <?php //include ('footer.php');?> -->

<!-- Fix terms box -->

<script type="text/javascript" src="<?php echo base_url('assets/js/rAF.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/ResizeSensor.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/sticky-sidebar.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/custom.js') ?>">
  $(window).on("load resize", function() {
     if ($(window).width() >= 769) {  
        var a = new StickySidebar('#sidebar', {
        topSpacing: 0,
        bottomSpacing: 0,
        containerSelector: '.fixdivscroll',
        innerWrapperSelector: '.digleftbg'
    });      
       }   
    });   
    
</script>
<script type="text/javascript">
  $("input[name='purpose_of_renting']").click(function(){
    // alert($("input[name='purpose_of_renting']:checked").val());
    if($("input[name='purpose_of_renting']:checked").val() == "Residential"){
      $("#room_set").show();
      $("#floor").show();
      $("#bathrooms").show();
      $("#area").show();
      $("#balconies").show();
      $("#car_park_slot").show();
      $("#residential_property").show();
      $("#commercial_property").hide();
      $("#commercial_property_address").hide();
      $("#no_of_office").hide();
      $("#residential_pets").show();
      $("#residential_second_section").show();
      $("#commercial_second_section").hide();
      $("#residential_third_section").show();
      $("#commercial_third_section").hide();
      $("#residential_five_section").show();
      $("#commercial_five_section").hide();
      $("#residential_six_section").show();
      $("#commercial_six_section").hide();
      $("#residential_seven_section").show();
      $("#residential_eight_section").show();
      $("#commercial_eight_section").hide();
      $("#residential_nine_section").show();
      $("#commercial_nine_section").hide();
      $("#residential_ten_section").show();
      $("#commercial_ten_section").hide();
      $("#residential_eleven_section").show();
      $("#commercial_eleven_section").hide(); 
      $("#residential_twel_section").show();
      $("#commercial_twel_section").hide();
      $("#residential_thirty_section").show();
      $("#commercial_thirty_section").hide();
      $("#commercial_fourty_section").hide();
      $("#commercial_fifty_section").hide();
      $("#commercial_sixty_section").hide();
      $("#commercial_seventy_section").hide();
      
    }else{

     $("#commercial_property").show();
     $("#residential_property").hide();
     $("#commercial_property_address").show();
     $("#no_of_office").show();
     $("#room_set").hide();
     $("#floor").hide();
     $("#bathrooms").hide();
     $("#area").hide();
     $("#balconies").hide();
     $("#car_park_slot").hide();
     $("#residential_pets").hide();
     $("#residential_second_section").hide();
     $("#commercial_second_section").show();
     $("#residential_third_section").hide();
     $("#commercial_third_section").show();
     $("#residential_five_section").hide();
     $("#commercial_five_section").show();
     $("#residential_six_section").hide();
     $("#commercial_six_section").show();
     $("#residential_seven_section").hide();
     $("#residential_eight_section").hide();
     $("#commercial_eight_section").show();
     $("#residential_nine_section").hide();
     $("#commercial_nine_section").show();
     $("#residential_ten_section").hide();
     $("#commercial_ten_section").show();
     $("#residential_eleven_section").hide();
     $("#commercial_eleven_section").show();
     $("#residential_twel_section").hide();
     $("#commercial_twel_section").show();
     $("#residential_thirty_section").hide();
     $("#commercial_thirty_section").show();
     $("#commercial_fourty_section").show();
     $("#commercial_fifty_section").show();
     $("#commercial_sixty_section").show();
     $("#commercial_seventy_section").show();
               
    }
});

  $("input[name='landlord_gender']").click(function(){
    if($("input[name='landlord_gender']:checked").val() == "Female"){
     $("#landlord_husband_name_val").show();
     $("#tenant_husband_name_val").hide();
    }else{
      $("#landlord_husband_name_val").hide();
      $("#tenant_husband_name_val").show();
    }
});
  
   $("input[name='tenant_gender']").click(function(){
    if($("input[name='tenant_gender']:checked").val() == "Female"){
     $("#tenant_husband_name_val").show();
     $("#landlord_husband_name_val").hide();
    
    }else{
      $("#tenant_husband_name_val").hide();
     $("#landlord_husband_name_val").show();
    }
});



  $("input[name='terms_painting']").click(function(){
    if($(this).val()){
     $("#painting").show();
     
    }
});

  $("#security_deposit_payment_mode").change(function(){
  var val = $(this).val();
  if(val == 'Cheque' || val == 'DD'){
   $("#dd_check_no").show();
  }else{
    $("#dd_check_no").hide();
  }
  });

   $("input[name='rental_property_is_subletting_allow']").click(function(){
    if($("input[name='rental_property_is_subletting_allow']:checked").val() == "Yes"){
     $("#sublet_yes").show();
     $("#sublet_no").hide();
    }else{
     $("#sublet_no").show();
     $("#sublet_yes").hide();
    }
});

 $("input[name='terms_painting']").click(function(){
    if($("input[name='terms_painting']:checked").val() == "Include"){
     $("#painting_terms").show();
    }else{
      $("#painting_terms").hide(); 
    }
});

 $("input[name='terms_pets']").click(function(){
        if($("input[name='terms_pets']:checked").val() == "Include"){
      alert("Include");
     $("#terms_pets_sec").show();
    }else{
      alert("exclude"); 
      $("#terms_pets_notallw").show(); 
      $("#terms_pets_sec").hide();
    }
});
  
  $("input[name='terms_food']").click(function(){
    if($("input[name='terms_food']:checked").val() == "Include"){
     $("#food_terms").show();
    }else{
      $("#food_terms").hide(); 
    }
});

  $("input[name='terms_lock_in_period']").click(function(){
    if($("input[name='terms_lock_in_period']:checked").val() == "Include"){
     $("#lock_in_period_terms").show();
    }else{
      $("#lock_in_period_terms").hide(); 
    }
});

// landlord to form
document.getElementById('landlord_name').addEventListener('input', function () {
document.getElementById('landlord_name1').innerText = document.getElementById('landlord_name').value;
})

document.getElementById('landlord_father_name').addEventListener('input', function () {
document.getElementById('landlord_father_name1').innerText = document.getElementById('landlord_father_name').value;
})

// male female

$(function () {
    $('input:radio[name="landlord_gender"]').change(function () {
      if ($(this).val() == 'Male') {
        var landlord_title = 'Mr.';
        document.getElementById('landlord_title1').innerText =  landlord_title;
      } else {
         var landlord_title = 'Ms.';
         document.getElementById('landlord_title1').innerText =  landlord_title;
    }

  });
  });

  landlord_husband_name.addEventListener('input', function () {
    
    let x
    if (document.getElementById('landlord_husband_name').value.length == 0) {
      x = document.getElementById('landlord_husband_name').value
    } else {
      x = `W/o ` + document.getElementById('landlord_husband_name').value
    }
    console.log(x);
    document.getElementById('landlord_husband1').innerText = x
  })



document.getElementById('landlord_street_address').addEventListener('input', function () {
document.getElementById('landlord_street_address1').innerText = document.getElementById('landlord_street_address').value;
})

document.getElementById('landlord_city').addEventListener('input', function () {
document.getElementById('landlord_city1').innerText = document.getElementById('landlord_city').value;
})

document.getElementById('landlord_state').addEventListener('input', function () {
document.getElementById('landlord_state1').innerText = document.getElementById('landlord_state').value;
})  

document.getElementById('landlord_pincode').addEventListener('input', function () {
document.getElementById('landlord_pincode1').innerText = document.getElementById('landlord_pincode').value;
}) 





// tenant to form
document.getElementById('tenant_name').addEventListener('input', function ()
 {
  console.log(document.getElementById('tenant_name').value);
  document.getElementById('tenant_name2').innerText = document.getElementById('tenant_name').value;
})


$(function () {
    $('input:radio[name="tenant_gender"]').change(function () {
      if ($(this).val() == 'Male') {
        var tenant_title = 'Mr.';
        document.getElementById('tenant_title2').innerText =  tenant_title;
      } else {
         var tenant_title = 'Ms.';
         document.getElementById('tenant_title2').innerText =  tenant_title;;
    }

  });
  });

  tenant_husband_name.addEventListener('input', function () {
    
    let x
    if (document.getElementById('tenant_husband_name').value.length == 0) {
      x = document.getElementById('tenant_husband_name').value
    } else {
      x = `W/o ` + document.getElementById('tenant_husband_name').value
    }
    console.log(x);
    document.getElementById('tenant_husband_2').innerText = x

  })



document.getElementById('tenant_father_name').addEventListener('input', function () {
document.getElementById('tenant_father_name2').innerText = document.getElementById('tenant_father_name').value;
})

document.getElementById('tenant_street_address').addEventListener('input', function () {
document.getElementById('tenant_street_address2').innerText = document.getElementById('tenant_street_address').value;
})


document.getElementById('tenant_id_cardno').addEventListener('input', function () {
document.getElementById('tenant_id_name').innerText = '(' + document.getElementById('tenant_identity_doc_name').value + ' No.';  
document.getElementById('tenant_id_value').innerText = document.getElementById('tenant_id_cardno').value + ')';
})

document.getElementById('tenant_city').addEventListener('input', function () {
document.getElementById('tenant_city2').innerText = document.getElementById('tenant_city').value;
})

document.getElementById('tenant_state').addEventListener('input', function () {
document.getElementById('tenant_state2').innerText = document.getElementById('tenant_state').value;
})  

document.getElementById('tenant_pincode').addEventListener('input', function () {
document.getElementById('tenant_pincode2').innerText = document.getElementById('tenant_pincode').value;
}) 

// rented property address

document.getElementById('rental_property_address').addEventListener('input', function () {
document.getElementById('rental_property_address1').innerText = document.getElementById('rental_property_address').value;
}) 
document.getElementById('rental_property_city').addEventListener('input', function () {
document.getElementById('rental_property_city1').innerText = document.getElementById('rental_property_city').value;
}) 

document.getElementById('rental_property_state').addEventListener('input', function () {
document.getElementById('rental_property_state1').innerText = document.getElementById('rental_property_state').value;
}) 

document.getElementById('rental_property_pin').addEventListener('input', function () {
document.getElementById('rental_property_pin1').innerText = document.getElementById('rental_property_pin').value;
}) 

document.getElementById('rental_property_pin').addEventListener('input', function () {
document.getElementById('rental_property_pin1').innerText = document.getElementById('rental_property_pin').value;
}) 

document.getElementById('rental_property_place_agreement').addEventListener('input', function () {
document.getElementById('rental_property_place_agreement1').innerText = document.getElementById('rental_property_place_agreement').value;
}) 

document.getElementById('rental_property_execution_date').addEventListener('input', function () {
document.getElementById('rental_property_execution_date1').innerText = document.getElementById('rental_property_execution_date').value;
}) 

// rent amount

document.getElementById('rent_amount').addEventListener('input', function () {
document.getElementById('rent_amount1').innerText = document.getElementById('rent_amount').value;
document.getElementById('rent_amount_word').innerText = inWords(document.getElementById('rent_amount').value);
}) 

document.getElementById('rent_security_deposit_amount').addEventListener('input', function () {
document.getElementById('rent_security_deposit_amount1').innerText = document.getElementById('rent_security_deposit_amount').value;
document.getElementById('rent_security_deposit_amount_word').innerText = inWords(document.getElementById('rent_security_deposit_amount').value);
}) 

document.getElementById('security_deposit_payment_mode').addEventListener('input', function () {
document.getElementById('security_deposit_payment_mode1').innerText = document.getElementById('security_deposit_payment_mode').value;
}) 

$('#ref').hide();

document.getElementById('dd_check_value').addEventListener('input', function () {
  document.getElementById('dd_check_value1').innerText = document.getElementById('dd_check_value').value;
  if(document.getElementById('dd_check_value').value !=0){
  $('#ref').show();  
  }
  else{
   $('#ref').hide(); 
  }

})


document.getElementById('electricity').addEventListener('input', function () {
var checkBox = document.getElementById("electricity");
if (checkBox.checked == true){
 document.getElementById('electricity1').innerText  = $('#electricity').val();
  } 
else{
 document.getElementById('electricity1').innerText  = '';
  }
  
 })

document.getElementById('water').addEventListener('input', function () {
var checkBox = document.getElementById("water");
if (checkBox.checked == true){
 document.getElementById('water1').innerText  = $('#water').val();
  } 
    else{
 document.getElementById('water1').innerText  = '';

  } 
 })

document.getElementById('society').addEventListener('input', function () {
var checkBox = document.getElementById("society");
if (checkBox.checked == true){
 document.getElementById('society1').innerText  = $('#society').val();
  }
  else{
 document.getElementById('society1').innerText  = '';

  } 
 })


document.getElementById('nil').addEventListener('input', function () {
var checkBox = document.getElementById("nil");
if (checkBox.checked == true){
 document.getElementById('nil1').innerText  = $('#nil').val();
  }
  else{
 document.getElementById('nil1').innerText  = '';

  }   

 })

document.getElementById('rate_of_rent_percent').addEventListener('input', function () {
document.getElementById('rate_of_rent_percent1').innerText = document.getElementById('rate_of_rent_percent').value;
}) 

document.getElementById('rate_of_rent_percent').addEventListener('input', function () {
document.getElementById('rate_of_rent_percent1').innerText = document.getElementById('rate_of_rent_percent').value;
}) 

document.getElementById('rate_of_rent_percent').addEventListener('input', function () {
document.getElementById('rate_of_rent_percent1').innerText = document.getElementById('rate_of_rent_percent').value;
}) 

document.getElementById('notice_period').addEventListener('input', function () {
x=document.getElementsByClassName("notice_period1");  // Find the elements
    for(var i = 0; i < x.length; i++){
    x[i].innerText=document.getElementById('notice_period').value;    // Change the content
   }
}) 


document.getElementById('penalty_clause_1').addEventListener('input', function () {

document.getElementById('penalty_clause_11_val').innerText  =  document.getElementById('penalty_clause_1').value 

if(document.getElementById('penalty_clause_1').value !=0){

$('#penalty_clause_1_terms').show();  
  
  }
  else{
   $('#penalty_clause_1_terms').hide(); 
  }

}) 





 // var extra_charge = new Array();
 //        var utilities_list = document.getElementById("utilities_list");
 //        var chks = utilities_list.getElementsByTagName("INPUT");
 //        for (var i = 0; i < chks.length; i++) {
 //            if (chks[i].checked) {
 //                selected.push(chks[i].value);
 //            }
 //        }
 //        if (selected.length > 0) {
 //            var utility_val = selected.join(",");
 //        }
 //  $("#utilities_list1").html(utility_val);
 //  $("#utilities_list2").html(utility_val);  



</script>
