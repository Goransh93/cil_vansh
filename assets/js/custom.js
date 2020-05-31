  // $(document).ready(function () {
      
  //   $('#nextBtn').click(function(){
  //   var l_name =  document.getElementById("l_name").value;
  //   var l_fname =  document.getElementById("l_fname").value; 
  //   var l_address =  document.getElementById("l_address").value;  
  //   var l_state =  document.getElementById("l_state").value; 
  //   var l_pin =  document.getElementById("l_pin").value; 
  //   var l_country =  document.getElementById("l_country").value; 

  //   $("#out_name_1").text(l_name);
  //   $("#out_fname_1").text(l_fname);
  //   $("#out_address_1").text(l_address+',');
  //   $("#out_state_1").text(l_state+',');
  //   $("#out_country_1").text(l_country+',');
  //   $("#out_pin_1").text(l_pin+',');

  //   var t_name =  document.getElementById("t_name").value;
  //   var t_fname =  document.getElementById("t_fname").value; 
  //   var t_address =  document.getElementById("t_address").value;  
  //   var t_state =  document.getElementById("t_state").value; 
  //   var t_pin =  document.getElementById("t_pin").value; 
  //   var t_country =  document.getElementById("t_country").value; 

  //   if (t_name != '' && t_fname != '' && t_address != '' && t_state != '' && t_pin != '' && t_country != '') {

  //   $("#out_name_t").text(t_name);
  //   $("#out_fname_t").text(t_fname);
  //   $("#out_address_t").text(t_address+',');
  //   $("#out_state_t").text(t_state+',');
  //   $("#out_country_t").text(t_country+',');
  //   $("#out_pin_t").text(t_pin+',');

  //   }
    
  //   var rp_address =  document.getElementById("rp_address").value;
  //   var rp_village =  document.getElementById("rp_village").value; 
  //   var rp_state =  document.getElementById("rp_state").value;  
  //   var rp_pin =  document.getElementById("rp_pin").value; 
  //   var rp_country =  document.getElementById("rp_country").value; 
  //   var rp_roomset =  document.getElementById("rp_roomset").value; 
  //   var rp_floor =  document.getElementById("rp_floor").value; 

  //   if (rp_address != '' && rp_village != '' && rp_state != '' && rp_pin != '' && rp_country != '' && rp_roomset != '' && rp_floor != '') {

  //   $("#out_address_rp").text(rp_address+',');
  //   $("#out_village_rp").text(rp_village+',');
  //   $("#out_state_rp").text(rp_state+',');
  //   $("#out_pin_rp").text(rp_pin+',');
  //   $("#out_country_rp").text(rp_country+',');
  //   $("#out_roomset_rp").text(rp_roomset);
  //   $("#out_floor_rp").text(rp_floor);

  //   }

  //   var rp_amount =  document.getElementById("rp_amount").value;
  //   var rp_security =  document.getElementById("rp_security").value; 
  //   var rp_advance =  document.getElementById("rp_advance").value;  
  //   var rp_date =  document.getElementById("rp_date").value; 
  //   var rp_duration =  document.getElementById("rp_duration").value; 
  //   var rp_increment =  document.getElementById("rp_increment").value; 

  //   $("#out_amount_rp").text(rp_amount);
  //   $("#out_security_rp").text(rp_security);
  //   $("#out_advance_rp").text(rp_advance);
  //   $("#out_date_rp").text(rp_date);
  //   $("#out_duration_rp").text(rp_duration);
  //   $("#out_increment_rp").text(rp_increment);
  //     })
  //   })
$(document).ready(function () {
  // session storage in landlord.
  var readlandlorddetail = JSON.parse(sessionStorage.getItem("landlorddetail"));
document.getElementById('landlord_name1').innerText = readlandlorddetail.landlord_name;
document.getElementById('landlord_name').value = readlandlorddetail.landlord_name;
document.getElementById('landlord_father_name1').innerText = readlandlorddetail.landlord_father_name;
document.getElementById('landlord_father_name').value = readlandlorddetail.landlord_father_name;
document.getElementById('landlord_street_address1').innerText = readlandlorddetail.landlord_street_address;
document.getElementById('landlord_street_address').value = readlandlorddetail.landlord_street_address;
document.getElementById('landlord_city1').innerText = readlandlorddetail.landlord_city;
document.getElementById('landlord_city').value = readlandlorddetail.landlord_city;
document.getElementById('landlord_state1').innerText = readlandlorddetail.landlord_state;
document.getElementById('landlord_state').value = readlandlorddetail.landlord_state;
document.getElementById('landlord_pincode1').innerText = readlandlorddetail.landlord_pincode;
document.getElementById('landlord_pincode').value = readlandlorddetail.landlord_pincode;
document.getElementById('landlord_age').value = readlandlorddetail.landlord_age;
 if(readlandlorddetail.landlord_husband_name.length>0 ){

    document.getElementById('landlord_husband1').innerText = 'w/o ' + readlandlorddetail.landlord_husband_name;  
  }
  else{
    document.getElementById('landlord_husband1').innerText = readlandlorddetail.landlord_husband_name;
  }

 if(readlandlorddetail.landlord_gender == "Male" ){
    document.getElementById("male_landlord").checked = true;
    document.getElementById('landlord_title1').innerText = "Mr";
    
  }
  else{
    document.getElementById("female_landlord").checked = true;
    document.getElementById('landlord_title1').innerText = "Ms";
   
  }
document.getElementById('landlord_age').value = readlandlorddetail.landlord_age;


// session storage in tenant form.
  var readtenantdetail = JSON.parse(sessionStorage.getItem("tenantdetail"));

  console.log(readtenantdetail);
document.getElementById('tenant_name2').innerText = readtenantdetail.tenant_name;
document.getElementById('tenant_name').value = readtenantdetail.tenant_name;
document.getElementById('tenant_father_name2').innerText = readtenantdetail.tenant_father_name;
document.getElementById('tenant_father_name').value = readtenantdetail.tenant_father_name;
document.getElementById('tenant_street_address2').innerText = readtenantdetail.tenant_street_address;
document.getElementById('tenant_street_address').value = readtenantdetail.tenant_street_address;
document.getElementById('tenant_city2').innerText = readtenantdetail.tenant_city;
document.getElementById('tenant_city').value = readtenantdetail.tenant_city;
document.getElementById('tenant_state2').innerText = readtenantdetail.tenant_state;
document.getElementById('tenant_state').value = readtenantdetail.tenant_state;
document.getElementById('tenant_pincode2').innerText = readtenantdetail.tenant_pincode;
document.getElementById('tenant_pincode').value = readtenantdetail.tenant_pincode;
document.getElementById('tenant_age').value = readtenantdetail.tenant_age;

if(readtenantdetail.tenant_gender == "Male" ){
    document.getElementById("male_tenant").checked = true;
    document.getElementById('tenant_title2').innerText = "Mr";
    
  }
  else{
    document.getElementById("female_tenant").checked = true;
    document.getElementById('tenant_title1').innerText = "Ms";
   
  }

// document.getElementById('tenant_name2').innerText = window.sessionStorage.getItem("tenant_name");
// document.getElementById('tenant_name').value = window.sessionStorage.getItem("tenant_name");

// document.getElementById('tenant_father_name2').innerText = window.sessionStorage.getItem("tenant_father_name");
// document.getElementById('tenant_father_name').value = window.sessionStorage.getItem("tenant_father_name");

// document.getElementById('tenant_street_address2').innerText = window.sessionStorage.getItem("tenant_street_address");
// document.getElementById('tenant_street_address').value = window.sessionStorage.getItem("tenant_street_address");

// document.getElementById('tenant_city2').innerText = window.sessionStorage.getItem("tenant_city");
// document.getElementById('tenant_city').value = window.sessionStorage.getItem("tenant_city");

// document.getElementById('tenant_state2').innerText = window.sessionStorage.getItem("tenant_state");
// document.getElementById('tenant_state').value = window.sessionStorage.getItem("tenant_state");

// document.getElementById('tenant_pincode2').innerText = window.sessionStorage.getItem("tenant_state");
// document.getElementById('tenant_pincode').value = window.sessionStorage.getItem("tenant_pincode");

//  if(document.getElementById('tenant_husband_name').value.length>0 ){
//   document.getElementById('tenant_husband2').innerText = 'w/o' + window.sessionStorage.getItem("tenant_husband_name");  
//   }
//   else{
//    document.getElementById('tenant_husband2').innerText = window.sessionStorage.getItem("tenant_husband_name");
//   }
// document.getElementById('tenant_husband_name').value = window.sessionStorage.getItem("tenant_husband_name");

// document.getElementById('tenant_title2').innerText = window.sessionStorage.getItem("tenant_title");
// document.getElementById('tenant_title').value = window.sessionStorage.getItem("tenant_title");


// document.getElementById('tenant_id_cardno2').innerText = window.sessionStorage.getItem("tenant_id_cardno");
// document.getElementById('tenant_id_cardno').value = window.sessionStorage.getItem("tenant_id_cardno");


// document.getElementById('tenant_identity_doc_name2').innerText = window.sessionStorage.getItem("tenant_identity_doc_name");
// document.getElementById('tenant_identity_doc_name').value = window.sessionStorage.getItem("tenant_identity_doc_name");


// document.getElementById('tenant_age').value = window.sessionStorage.getItem("tenant_age");



})

// var currentTab = 2; // Current tab is set to be the first tab (0)
// showTab(currentTab); // Display the current tab
// function showTab(n) {
//   // This function will display the specified tab of the form...
//   var x = document.getElementsByClassName("tab");
//     x[n].style.display = "block";
//   //... and fix the Previous/Next buttons:
//   if (n == 0) {
//     document.getElementById("prevBtn").style.display = "none";
//   } else {
//     document.getElementById("prevBtn").style.display = "inline";
//   }
//   if (n == (x.length - 1)) {
//     document.getElementById("nextBtn").style.display = "none";
//     document.getElementById("submit").style.display = "block";
//   } else {
//     document.getElementById("nextBtn").innerHTML = "Next";
//   }
//   //... and run a function that will display the correct step indicator:
//   fixStepIndicator(n)
// }

// function nextPrev(n) {
//   // This function will figure out which tab to display
//   var x = document.getElementsByClassName("tab");
//   // Exit the function if any field in the current tab is invalid:
//   if (n == 1 && !validateForm()) return false;
//   // Hide the current tab:
//   x[currentTab].style.display = "none";
//   // Increase or decrease the current tab by 1:
//   currentTab = currentTab + n;
//   // if you have reached the end of the form...
//   if (currentTab >= x.length) {
//     // ... the form gets submitted:
//     document.getElementById("regForm").submit();
//     return false;
//   }
//   // Otherwise, display the correct tab:
//   showTab(currentTab);
// }

// function validateForm() {
//   // This function deals with validation of the form fields
//   var x, y, i, valid = true;
//   x = document.getElementsByClassName("tab");
//   y = x[currentTab].getElementsByTagName("input");
//   // A loop that checks every input field in the current tab:
//   for (i = 0; i < y.length; i++) {
//     // If a field is empty...
//     if (y[i].value == "") {
//       // add an "invalid" class to the field:
//       y[i].className += " invalid";
//       // and set the current valid status to false
//       valid = false;
//     }
//   }
//   // If the valid status is true, mark the step as finished and valid:
//   if (valid) {
//     document.getElementsByClassName("step")[currentTab].className += " finish";
//   }
//   return valid; // return the valid status
// }

// function fixStepIndicator(n) {
//   // This function removes the "active" class of all steps...
//   var i, x = document.getElementsByClassName("step");
//   for (i = 0; i < x.length; i++) {
//     x[i].className = x[i].className.replace(" active", "");
//   }
//   //... and adds the "active" class on the current step:
//   x[n].className += " active";
// }


// function saveState(step = '') {
//   var rent_form = $('#rentprevieform');
//   var form_url = rent_form.data('save-session-path');
//   /** Ajax call to save changes */
//   $.ajax({
//     url: form_url,
//     type: "POST",
//     data: rent_form.serialize(),
//     success: function(response) {
      
//     }
//   });
// }




  function submitFormData(){

  var purpose_of_renting = $("input[name='purpose_of_renting']:checked").val();
  var type_of_agreement = $("input[name='type_of_agreement']:checked").val();
  var duration_of_agreement = document.getElementById('duration_of_agreement').value; 
  var type_of_property = $("input[name='type_of_property']:checked").val();
  var landlord_name = document.getElementById('landlord_name').value;
  var landlord_age = document.getElementById('landlord_age').value;
  var landlord_gender = $("input[name='landlord_gender']:checked").val();
  var landlord_father_name = document.getElementById('landlord_father_name').value;
  var landlord_husband_name = document.getElementById('landlord_husband_name').value;
  var landlord_street_address = document.getElementById('landlord_street_address').value;
  var landlord_city = document.getElementById('landlord_city').value;
  var landlord_state = document.getElementById('landlord_state').value;
  var landlord_pincode = document.getElementById('landlord_pincode').value;
  var tenant_name = document.getElementById('tenant_name').value;
  var tenant_age = document.getElementById('tenant_age').value;
  var tenant_gender = $("input[name='tenant_gender']:checked").val();
  var tenant_father_name = document.getElementById('tenant_father_name').value;
  var tenant_id_cardno = document.getElementById('tenant_id_cardno').value;
  var tenant_identity_doc_name = document.getElementById('tenant_identity_doc_name').value;
  var tenant_husband_name = document.getElementById('tenant_husband_name').value;
  var tenant_street_address = document.getElementById('tenant_street_address').value;
  var tenant_city = document.getElementById('tenant_city').value;
  var tenant_state = document.getElementById('tenant_state').value;
  var tenant_pincode = document.getElementById('tenant_pincode').value;

  var rental_property_address = document.getElementById('rental_property_address').value;
  var rental_property_city = document.getElementById('rental_property_city').value;
  var rental_property_state = document.getElementById('rental_property_state').value;
  var rental_property_pin = document.getElementById('rental_property_pin').value;


  var rental_property_is_subletting_allow = $("input[name='rental_property_is_subletting_allow']:checked").val();
  var terms_painting = $("input[name='terms_painting']:checked").val();
  var terms_pets = $("input[name='terms_pets']:checked").val();
  var terms_food = $("input[name='terms_food']:checked").val();
  var terms_lock_in_period = $("input[name='terms_lock_in_period']:checked").val();
  var penalty_clause_1 = document.getElementById('penalty_clause_1').value;
  var penalty_clause_2 = document.getElementById('penalty_clause_2').value;
  var penalty_clause_3 = document.getElementById('penalty_clause_3').value;
  var notice_period = document.getElementById('notice_period').value;
  var rental_property_address = document.getElementById('rental_property_address').value;
  var rental_property_place_agreement = document.getElementById('rental_property_place_agreement').value;
  
  var rental_property_execution_date = document.getElementById('rental_property_execution_date').value;
  
  var rental_property_no_of_office = document.getElementById('rental_property_no_of_office').value;
  var rental_property_no_of_carparking = document.getElementById('rental_property_no_of_carparking').value;
  var rental_property_room_set = document.getElementById('rental_property_room_set').value;
  var rental_property_floor = document.getElementById('rental_property_floor').value;
  var rental_property_bathrooms = document.getElementById('rental_property_bathrooms').value;
  var rental_property_area = document.getElementById('rental_property_area').value;
  var rental_property_balconies = document.getElementById('rental_property_balconies').value;
  var rent_security_deposit_amount = document.getElementById('rent_security_deposit_amount').value;
  var rent_giving_date = document.getElementById('rent_giving_date').value;
  var monthly_maintaince = document.getElementById('monthly_maintaince').value;
  var security_deposit_payment_mode = document.getElementById('security_deposit_payment_mode').value;
  var rent_amount = document.getElementById('rent_amount').value;
  var rent_amount_word =  ( inWords(rent_amount) );
  var dd_check_value = document.getElementById('dd_check_value').value;
  var date_of_commencement = document.getElementById('date_of_commencement').value;
  var rate_of_rent_percent = document.getElementById('rate_of_rent_percent').value;
  var aggreed_among_both_parties = document.getElementById('aggreed_among_both_parties').value;
 
      var selected = new Array();
        var utilities_list = document.getElementById("utilities_list");
        var chks = utilities_list.getElementsByTagName("INPUT");
        for (var i = 0; i < chks.length; i++) {
            if (chks[i].checked) {
                selected.push(chks[i].value);
            }
        }      
        if (selected.length > 0) {
            var utility_val = selected.join(",");
        }
            var formdata_val = "Cover/rentpreview";
                  event.preventDefault();
                        $.ajax({
                              url: formdata_val,
                              method: "POST",
                              data: {
                                "purpose_of_renting":purpose_of_renting,
                                "type_of_agreement":type_of_agreement,
                                "duration_of_agreement":duration_of_agreement,
                                "type_of_property":type_of_property,
                                "tenant_gender":tenant_gender,
                                "rental_property_is_subletting_allow":rental_property_is_subletting_allow,
                                "terms_painting":terms_painting,
                                "terms_pets":terms_pets,
                                "terms_food":terms_food,
                                "terms_lock_in_period":terms_lock_in_period,                              
                                "landlord_name":landlord_name,
                                "landlord_age":landlord_age,
                                "landlord_father_name":landlord_father_name,
                                "landlord_husband_name":landlord_husband_name,
                                "landlord_street_address":landlord_street_address,
                                "landlord_city":landlord_city,
                                "landlord_state":landlord_state,
                                "landlord_pincode":landlord_pincode,
                                "tenant_name":tenant_name,
                                "tenant_age":tenant_age,
                                "landlord_gender":landlord_gender,
                                "tenant_father_name":tenant_father_name,
                                "tenant_husband_name":tenant_husband_name,
                                "tenant_id_cardno":tenant_id_cardno,
                                "tenant_identity_doc_name":tenant_identity_doc_name,
                                "tenant_street_address":tenant_street_address,
                                "tenant_city":tenant_city,
                                "tenant_state":tenant_state,
                                "tenant_pincode":tenant_pincode,
                                "rental_property_address":rental_property_address,
                                "rental_property_city":rental_property_city,
                                "rental_property_state":rental_property_state,
                                "rental_property_pin":rental_property_pin,
                                "rental_property_place_agreement":rental_property_place_agreement,
                                "rental_property_execution_date":rental_property_execution_date,
                                "rental_property_no_of_office":rental_property_no_of_office,
                                "rental_property_no_of_carparking":rental_property_no_of_carparking,
                                "rental_property_room_set":rental_property_room_set,
                                "rental_property_floor":rental_property_floor,
                                "rental_property_bathrooms":rental_property_bathrooms,
                                "rental_property_area":rental_property_area,
                                "rental_property_balconies":rental_property_balconies,
                                "rent_security_deposit_amount":rent_security_deposit_amount,
                                "rent_giving_date":rent_giving_date,
                                "monthly_maintaince":monthly_maintaince,
                                "security_deposit_payment_mode":security_deposit_payment_mode,
                                "rent_amount":rent_amount,
                                "rent_amount_word":rent_amount_word, 
                                "dd_check_value":dd_check_value,
                                "date_of_commencement":date_of_commencement,                               
                                "rate_of_rent_percent":rate_of_rent_percent,
                                "aggreed_among_both_parties":aggreed_among_both_parties,
                                "notice_period":notice_period,
                                "penalty_clause_1":penalty_clause_1,
                                "penalty_clause_2":penalty_clause_2,
                                "penalty_clause_3":penalty_clause_3,
                                "utility_val":utility_val
                              },
                              dataType: 'json',
                              success: function(response){
                                console.log(response);
                                alert('reached');
                              customer_id = response.user_id;
                              var viewpage = "thankyou_page"+'/'+customer_id;
                              if(response.user_id){
                              $("#user_id").val(response.user_id);
                              var viewpage = "Cover/thankyou_page"+'/'+customer_id;
                              window.location.replace(viewpage);
                               }else{
            
                              $("#rentform_error").html("Something is wrong please try again after some time");
                            
                               }
                           }

                        })
            }



function document1() {

  var purpose_of_renting = $("input[name='purpose_of_renting']:checked").val();
  var type_of_agreement = $("input[name='type_of_agreement']:checked").val();
  var duration_of_agreement = document.getElementById('duration_of_agreement').value;
  var type_of_property = $("input[name='type_of_property']:checked").val();
  $("#purpose_of_renting1").html(purpose_of_renting);
  $("#type_of_agreement1").html(type_of_agreement);
  $("#duration_of_agreement1").html(duration_of_agreement);
  $("#type_of_property1").html(type_of_property);




   
}


function document2() {

  var landlord_name = document.getElementById('landlord_name').value;
  var landlord_age = document.getElementById('landlord_age').value;
  var landlord_gender = $("input[name='landlord_gender']:checked").val();
  var landlord_father_name = document.getElementById('landlord_father_name').value;
  var landlord_husband_name = document.getElementById('landlord_husband_name').value; 
  var landlord_street_address = document.getElementById('landlord_street_address').value;
  var landlord_city = document.getElementById('landlord_city').value;
  var landlord_state = document.getElementById('landlord_state').value;
  var landlord_pincode = document.getElementById('landlord_pincode').value;
  if (landlord_gender == "Male") {
    var landlord_title = "Mr.";
  }
  else 
  {
    var landlord_title = "Ms.";
   }
   landlorddetail= {};
   landlorddetail.landlord_name = landlord_name;
   landlorddetail.landlord_gender = landlord_gender;
   landlorddetail.landlord_father_name = landlord_father_name;
   landlorddetail.landlord_age = landlord_age;
   landlorddetail.landlord_street_address = landlord_street_address;
   landlorddetail.landlord_city = landlord_city;
   landlorddetail.landlord_state = landlord_state;
   landlorddetail.landlord_pincode = landlord_pincode;
   landlorddetail.landlord_husband_name = landlord_husband_name;
   sessionStorage.setItem("landlorddetail", JSON.stringify(landlorddetail) )
   

  }
 


function document3(){

  var tenant_name = document.getElementById('tenant_name').value;
  var tenant_age = document.getElementById('tenant_age').value;
  var tenant_gender = $("input[name='tenant_gender']:checked").val();
  var tenant_father_name = document.getElementById('tenant_father_name').value;
  var tenant_husband_name = document.getElementById('tenant_husband_name').value;
  var tenant_id_cardno = document.getElementById('tenant_id_cardno').value;
  var tenant_identity_doc_name = document.getElementById('tenant_identity_doc_name').value;
  var tenant_street_address = document.getElementById('tenant_street_address').value;
  var tenant_city = document.getElementById('tenant_city').value;
  var tenant_state = document.getElementById('tenant_state').value;
  var tenant_pincode = document.getElementById('tenant_pincode').value;
 
  if(tenant_gender == 'Male'){
    var tenant_title = 'Mr.';
  }else{
    var tenant_title = 'Ms.';
  }
  var tenantdetail = {};
  tenantdetail.tenant_name = tenant_name;
  tenantdetail.tenant_father_name = tenant_father_name;
  tenantdetail.tenant_age = tenant_age;
  tenantdetail.tenant_street_address = tenant_street_address;
  tenantdetail.tenant_city = tenant_city;
  tenantdetail.tenant_state = tenant_state;
  tenantdetail.tenant_pincode = tenant_pincode;
  tenantdetail.tenant_gender = tenant_gender;
  tenantdetail.tenant_husband_name = tenant_husband_name;
  tenantdetail.tenant_id_cardno = tenant_id_cardno;
  tenantdetail.tenant_identity_doc_name = tenant_identity_doc_name;
  sessionStorage.setItem('tenantdetail', JSON.stringify(tenantdetail));

   // sessionStorage.setItem('tenant_name', tenant_name );
   // sessionStorage.setItem('tenant_father_name', tenant_father_name);
   // sessionStorage.setItem('tenant_age', tenant_age);
   // sessionStorage.setItem('tenant_street_address', tenant_street_address);
   // sessionStorage.setItem('tenant_city', tenant_city);
   // sessionStorage.setItem('tenant_state', tenant_state);
   // sessionStorage.setItem('tenant_pincode', tenant_pincode);
   // sessionStorage.setItem('tenant_title', tenant_title);
   // sessionStorage.setItem('tenant_husband_name', tenant_husband_name);
   // sessionStorage.setItem('tenant_age', tenant_age);
   // sessionStorage.setItem('tenant_id_cardno', tenant_id_cardno);
   // sessionStorage.setItem('tenant_identity_doc_name', tenant_identity_doc_name);
  

}

function document4(){
  
  var rental_property_address = document.getElementById('rental_property_address').value;
  var rental_property_city = document.getElementById('rental_property_city').value;
  var rental_property_state = document.getElementById('rental_property_state').value;
  var rental_property_pin = document.getElementById('rental_property_pin').value;

  var rental_property_place_agreement = document.getElementById('rental_property_place_agreement').value;
  var rental_property_execution_date = document.getElementById('rental_property_execution_date').value;
  var rental_property_no_of_office = document.getElementById('rental_property_no_of_office').value;
  var rental_property_room_set = document.getElementById('rental_property_room_set').value;
  var rental_property_floor = document.getElementById('rental_property_floor').value;
  var rental_property_bathrooms = document.getElementById('rental_property_bathrooms').value;
  var rental_property_area = document.getElementById('rental_property_area').value;
  var rental_property_balconies = document.getElementById('rental_property_balconies').value;
  var rental_property_no_of_carparking = document.getElementById('rental_property_no_of_carparking').value;
  var rental_property_is_subletting_allow = $("input[name='rental_property_is_subletting_allow']:checked").val();
 
  $("#rental_property_address1").html(rental_property_address);
  $("#rental_property_city1").html(rental_property_city);
  $("#rental_property_state1").html(rental_property_state);
  $("#rental_property_pin1").html(rental_property_pin);


  $("#rental_property_place_agreement1").html(rental_property_place_agreement);
  $("#rental_property_execution_date1").html(rental_property_execution_date);
  $("#rental_property_no_of_office1").html(rental_property_no_of_office);
  $("#rental_property_room_set1").html(rental_property_room_set);
  $("#rental_property_floor1").html(rental_property_floor);
  $("#rental_property_bathrooms1").html(rental_property_bathrooms);
  $("#rental_property_area1").html(rental_property_area);
  $("#rental_property_balconies1").html(rental_property_balconies);
  $("#rental_property_no_of_carparking1").html(rental_property_no_of_carparking);
  $("#rental_property_is_subletting_allow1").html(rental_property_is_subletting_allow);

  

}

function document5(){
  
  var rent_security_deposit_amount = document.getElementById('rent_security_deposit_amount').value;
 // var rent_giving_date = document.getElementById('rent_giving_date').value;
  //var monthly_maintaince = document.getElementById('monthly_maintaince').value;
  var security_deposit_payment_mode = document.getElementById('security_deposit_payment_mode').value;
  var dd_check_value = document.getElementById('dd_check_value').value;
  var rent_amount = document.getElementById('rent_amount').value;
  var rent_amount_word = (inWords(rent_amount));
  var date_of_commencement = document.getElementById('date_of_commencement').value;
  var rate_of_rent_percent = document.getElementById('rate_of_rent_percent').value;
  var notice_period = document.getElementById('notice_period').value;
 // var aggreed_among_both_parties = document.getElementById('aggreed_among_both_parties').value;

  $("#rent_security_deposit_amount1").html(rent_security_deposit_amount);
  //$("#rent_giving_date1").html(rent_giving_date);
  //$("#monthly_maintaince1").html(monthly_maintaince);
  $("#security_deposit_payment_mode1").html(security_deposit_payment_mode);
  $("#dd_check_value1").html(dd_check_value);
  $("#rent_amount1").html(rent_amount);
  $("#rent_amount_word").html(rent_amount_word);
  $("#date_of_commencement1").html(date_of_commencement);
  $("#rate_of_rent_percent1").html(rate_of_rent_percent);
  $("#notice_period1").html(notice_period);
  $("#notice_period2").html(notice_period);
  //$("#aggreed_among_both_parties1").html(aggreed_among_both_parties);

  
}

function document6(){
 
  var terms_painting = $("input[name='terms_painting']:checked").val();
  var terms_pets = $("input[name='terms_pets']:checked").val();
  var terms_food = document.getElementById('terms_food').value;
  var terms_lock_in_period = $("input[name='terms_lock_in_period']:checked").val();
  var penalty_clause_1 = document.getElementById('penalty_clause_1').value;
  var penalty_clause_2 = document.getElementById('penalty_clause_2').value;
  var penalty_clause_3 = document.getElementById('penalty_clause_3').value;
  $("#penalty_clause_1_val").html(penalty_clause_1);
  $("#penalty_clause_11_val").html(penalty_clause_1);
  $("#penalty_clause_2_val").html(penalty_clause_2);
  $("#penalty_clause_22_val").html(penalty_clause_2);
  $("#penalty_clause_3_val").html(penalty_clause_3);
  $("#penalty_clause_33_val").html(penalty_clause_3);
    
}

function document7(){
    
        var selected = new Array();
        var utilities_list = document.getElementById("utilities_list");
        var chks = utilities_list.getElementsByTagName("INPUT");
        for (var i = 0; i < chks.length; i++) {
            if (chks[i].checked) {
                selected.push(chks[i].value);
            }
        }
        if (selected.length > 0) {
            var utility_val = selected.join(",");
        }
  $("#utilities_list1").html(utility_val);
  $("#utilities_list2").html(utility_val);  
}




function inWords (num) {
  var a = ['','One ','Two ','Three ','Four ', 'Five ','Six ','Seven ','Eight ','Nine ','Ten ','Eleven ','Twelve ','Thirteen ','Fourteen ','Fifteen ','Sixteen ','Seventeen ','Eighteen ','Nineteen '];
  var b = ['', '', 'Twenty','Thirty','Forty','Fifty', 'Sixty','Seventy','Eighty','Ninety'];

    if ((num = num.toString()).length > 9) return 'overflow';
    n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
    if (!n) return; var str = '';
    str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'Crore ' : '';
    str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'Lakh ' : '';
    str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'Thousand ' : '';
    str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'Hundred ' : '';
    str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'only ' : '';
    return str;
}


    

