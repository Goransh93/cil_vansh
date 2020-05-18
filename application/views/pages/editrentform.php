<?php include ('header.php');?>
<div class="container">

<div class="row">
  
<div class="col-md-6">
<div class="rentform"> 
<?php  foreach($rentdata as $row)?>	

<?php echo form_open("cover/updaterent/{$row->id}", ['class'=>'form-horizontal']);?>	
<!-- <?php echo form_hidden('user_id', $this->session->userdata['user_id']);?> -->
<!-- Select the Type of Property</br>
<input type="radio" name="rad1" onclick="commercial(0)" checked> Residential
<input type="radio" name="rad1" onclick="commercial(1)" > Commercial -->
<h3>Landlord:</h3>
<input type="text" placeholder="Full Name" required name= "l_name" value = "<?= $row->l_name?>">
<input type="text" placeholder="Father's Name" required name="l_fname" value = "<?= $row->l_fname?>">
<input type="text" placeholder="Address" required name="l_address" value = "<?= $row->l_address?>" id="address">
<!-- <textarea rows="4" cols="44" placeholder="Address" name="l_address"> <?php echo $row->l_address?> </textarea> -->
<input type="text" placeholder="Village/City/Town"required name="l_village" value = "<?= $row->l_village?>"" >
<input type="text" placeholder="State" required name="l_state" value = "<?= $row->l_state?>">
<div class="row">
	<div class="col"><input type="text" placeholder="Pin Code" name="l_pin" required value = "<?= $row->l_pin?>"> </div>
	<div class="col"><?php echo form_error('l_pin'); ?></div>
</div>

<input type="text" placeholder="Country" name="l_country" required value = "<?=$row->l_country?>">

<h3>Tenant:</h3>
<input type="text" placeholder="Full Name" required name= "t_name" value = "<?= $row->t_name?>">
<input type="text" placeholder="Father's Name" required name="t_fname" value = "<?= $row->t_fname?>">
<input type="text" placeholder="Address" required name="t_address" value = "<?= $row->t_address?>" id="address">
<input type="text" placeholder="Village/City/Town" required name="t_village" value = "<?= $row->t_village?>">
<input type="text" placeholder="State" required name="t_state" value = "<?= $row->t_state?>">
<div class="row">
	<div class="col"><input type="text" placeholder="Pin Code" required name="t_pin" value = "<?= $row->t_pin?>"></div>
	<div class="col"><?php echo form_error('t_pin'); ?></div>
</div>
<input type="text" placeholder="Country" name="t_country" value = "<?= $row->t_country?>">

<h4>Rented Property:</h4>

<input type="text" placeholder="Address" required name="rp_address" value = "<?= $row->rp_address?>" id="address">
<input type="text" placeholder="Village/City/Town" required name="rp_village" value = "<?= $row->rp_village?>">
<input type="text" placeholder="State" required name="rp_state" value = "<?= $row->rp_village?>">
<div class="row">
	<div class="col"><input type="text" placeholder="Pin Code" required name="rp_pin" value = "<?= $row->rp_pin?>"> </div>
	<div class="col"><?php echo form_error('rp_pin'); ?></div>
</div>


<input type="text" placeholder="Country" required name="rp_country" value = "<?= $row->rp_country?>" >
<input type="text" placeholder="Room set" required name="rp_roomset" value = "<?= $row->rp_roomset?>">
<input type="text" placeholder="Floor" required name="rp_floor" value = "<?= $row->rp_floor?>">


<h4>Rent:</h4>
<input type="text" placeholder="Rent amount" name="rp_amount" required value = "<?= $row->rp_amount?>">
<input type="text" placeholder="Security" name="rp_security" value = "<?= $row->rp_security?>">
<input type="text" placeholder="Advance" name="rp_advance" value = "<?= $row->rp_advance?>">


Date of Commencement:<input type="date" placeholder="Date of Commencement" required name="rp_date" value = "<?= $row->rp_date?>">
<h4>Duration:</h4>
<input type="text" placeholder="Months" required name="rp_duration" value = "<?= $row->rp_duration?>">

<h4>Increment Per Year:</h4>
<input type="text" placeholder="%" required name="rp_increment" value = "<?= $row->rp_increment?>">
<input type="hidden" name="charges" value = "99">
<input type="text" placeholder="Any Addional Requirement" required name="r_additional" value = "<?= $row->r_additional?>" id="address">

<input  type="submit" value="submit" >
</form>
</div>
</div>
<div class="col-md-6 py-3">
<div class="zoom">
       <button type="button" class="btn btn-primary" onclick="zoomin()">Zoomin</button>
       <button type="button" class="btn btn-primary" onclick="zoomout()">Zoomout</button>
   </div>
   <div class="main">
       <img id="map" src="assets/rent_sampleimg.jpg" alt="image">
   </div>
   
</div>
      </div>
</div>
</div>


</div>


</div>
<?php include ('footer.php');?>