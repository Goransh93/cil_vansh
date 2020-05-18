<!-- <?php //include ('header.php');?> -->
<?php include ('service_function.php');?> 
<style type="text/css">
  p {
    font-size: 11px;
}
button#prevBtn {
    position: absolute;
    left: 233px;
}
</style>
  <div class="container">
<div class="row">
  <div class="col-md-6">
    <div class="rentform"> 
  <form method="POST" action="cover/rentpreview" class="form-horizontal" id="rentprevieform">
    <div id="rentform_error"></div>
 <div class="tab">Landlord:
    <p><input placeholder="Full Name" id="l_name" oninput="this.className = ''" name="l_name" value = "<?= set_value('l_name')?>"></p>
    <p><input placeholder="Father's Name" id="l_fname" oninput="this.className = ''" name="l_fname" value = "<?= set_value('l_fname')?>"></p>
    <p><input placeholder="Address" id="l_address" oninput="this.className = ''" name="l_address" value = "<?= set_value('l_address')?>" id="address"></p>
    <p><input placeholder="Village/City/Town" id="l_village" oninput="this.className = ''" name="l_village" value = "<?= set_value('l_village')?>"></p>
    <p><input placeholder="State" id="l_state" oninput="this.className = ''" name="l_state" value = "<?= set_value('l_village')?>"></p>
    <p><input placeholder="Pin Code" id="l_pin" oninput="this.className = ''" name="l_pin" value = "<?= set_value('l_pin')?>"></p>
    <p><input placeholder="Country" id="l_country" oninput="this.className = ''" name="l_country" value = "<?= set_value('l_pin')?>"></p>
  </div>
  <div class="tab">Tenant:
    <p><input placeholder="Full Name" id="t_name" oninput="this.className = ''" name="t_name" value = "<?= set_value('t_name')?>"></p>
    <p><input placeholder="Father's Name" id="t_fname" oninput="this.className = ''" name="t_fname" value = "<?= set_value('t_fname')?>"></p>
    <p><input placeholder="Address" id="t_address" oninput="this.className = ''" name="t_address" value = "<?= set_value('t_address')?>" id="address"></p>
    <p><input placeholder="Village/City/Town" id="t_village" oninput="this.className = ''" name="t_village" value = "<?= set_value('t_village')?>"></p>
    <p><input placeholder="State" id="t_state" oninput="this.className = ''" name="t_state" value = "<?= set_value('t_village')?>"></p>
    <p><input placeholder="Pin Code" id="t_pin" oninput="this.className = ''" name="t_pin" value = "<?= set_value('t_pin')?>"></p>
    <p><input placeholder="Country" id="t_country" oninput="this.className = ''" name="t_country" value = "<?= set_value('t_country')?>"></p>
  </div>
  <div class="tab">Rented Property:
    <p><input placeholder="Address" id="rp_address" oninput="this.className = ''" name="rp_address" value = "<?= set_value('t_address')?>" id="address"></p>
    <p><input placeholder="Village/City/Town" id="rp_village" oninput="this.className = ''" name="rp_village" value = "<?= set_value('t_village')?>"></p>
    <p><input placeholder="State" id="rp_state" oninput="this.className = ''" name="rp_state" value = "<?= set_value('t_village')?>"></p>
    <p><input placeholder="Pin Code" id="rp_pin" oninput="this.className = ''" name="rp_pin" value = "<?= set_value('t_pin')?>"></p>
    <p><input placeholder="Country" id="rp_country" oninput="this.className = ''" name="rp_country" value = "<?= set_value('l_pin')?>"></p>
    <p><input placeholder="Room set" id="rp_roomset" oninput="this.className = ''" name="rp_roomset" value = "<?= set_value('t_name')?>"></p>
    <p><input placeholder="Floor" id="rp_floor" oninput="this.className = ''" name="rp_floor" value = "<?= set_value('t_fname')?>"></p>
  </div>
  <div class="tab">Rent:
    <p><input placeholder="Rent amount" id="rp_amount" oninput="this.className = ''" name="rp_amount" value = "<?= set_value('t_address')?>" id="address"></p>
    <p><input placeholder="Security" id="rp_security" oninput="this.className = ''" name="rp_security" value = "<?= set_value('t_village')?>"></p>
    <p><input placeholder="Advance" id="rp_advance" oninput="this.className = ''" name="rp_advance" value = "<?= set_value('t_village')?>"></p>
  </div>
    <div class="tab">Date of Commencement:
    <p><input type="Date" placeholder="Date of Commencement" id="rp_date" oninput="this.className = ''" name="rp_date" value = "<?= set_value('t_address')?>"></p>
    <p><input placeholder="in Months" id="rp_duration" oninput="this.className = ''" name="rp_duration" value = "<?= set_value('t_village')?>"></p>
    <h4>Increment Per Year:</h4>
    <p><input placeholder="%" id="rp_increment" oninput="this.className = ''" name="rp_increment" value = "<?= set_value('t_village')?>"></p>
    <h4>Additional Requirement:</h4>
    <p><input placeholder="additional" id="rp_additional" oninput="this.className = ''" value = "It is Agreed among both the parties that <?= set_value('rp_additional')?>" id="additional"></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
      <button type="button" id="submit" onclick="submitFormData()" style="display: none;">Submit</button>
    </div>
  </div>
</form>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</div>
</div>
  <div class="col-md-4">
  <?php include ('rent_agreement.php');?> 
  </div>
</div>
</div>
<!-- <?php //include ('footer.php');?> -->
