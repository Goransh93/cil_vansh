<?php include ('header.php');?>
<?php include ('service_function.php');?>
<?php  foreach($rentdata as $row)?>	
<div class="container">
<div class="row">
<div class="col-md-10">
<button type="button" onclick="printContent()" class="btn btn-success">Print</button>


<div id = "rentdiv1">
<P>This Agreement is made at Faridabad by and between </P>
<p class = "bold"><?= $row->l_name ?></td> S/o <?= $row->l_fname ?></td> R/o <?= $row->l_address?>, <?= $row->l_village ?>, <?= $row->l_pin ?>, <?= $row->l_state ?>, <?= $row->l_country ?> 
(hereinafter called the first party/Tenant)</p>

                                                            <p>&</p>
<p class = "bold" ><?= $row->t_name ?></td> S/o <?= $row->t_fname ?></td> R/o <?= $row->t_address?>, <?= $row->t_village ?>, <?= $row->t_pin ?>, <?= $row->t_state ?>, <?= $row->t_country ?> 
(hereinafter called the first party/Tenant)</p>
                                                            
<p>Where First party is the owner of <span class = "bold" > <?= $row->rp_address ?>, <?= $row->rp_village ?>, <?= $row->rp_pin ?>, <?= $row->rp_state ?>, <?= $row->rp_country ?> </span> and is ready to let the 
<span class= "bold"> <?= $row->rp_floor ?> </span> consisting of <span class= "bold"> <?= $row->rp_roomset ?> </span> room set to the second party on monthly rental basis on following terms and conditions </p>
    
<p>1. The rent of the said property is decided to be <span class= "bold"> Rs. <?= $row->rp_amount ?></span>/-(Rupees __________________________________)</p>
<p>2. The rent will be commenced from <span class="bold"> <?= $row->rp_date ?></span> and will be valid for </p><span class="bold"><?= $row->rp_duration ?></span>months.</p>
<p>3. The tenant has paid Rs.<span class="bold"><?= $row->rp_advance ?></span>/-as advance rent and Rs. <span class="bold"><?= $row->rp_security ?></span>/-which shall be refunded to the second party on vacation of said premsies without interest after deducting dues if any </p>

<p>4.  That the rent would be increased @<td><span class= "bold"><?= $row->rp_increment ?></span></td>% per annum </p>

<p>5. That  the  said  house  premises  have a separatenormal three phasehousehold electricity  connection  and  the  tenant  shall  pay  the  electricity  charges  to  the Electricity Board as per the meter Reading noted in the card.That  the  Corporation  Property  taxand  water  and  sewerage  tax  shall  bepayable by  the house  ownerbut  the  tenant  shall  pay  the  water  consumption  charges periodically and likewise any running charges consequent to the usage/consumptionby the Tenant shall be payable by the tenant.</p>

<p>6.That the fittingsand fixtures in thehouse premises are in good condition and the tenant return  the  same  to  the houseownerin  good  condition exceptingnormal wear  and  tear  before  vacating  the house  premisesand  actual  cost  of  damages  if any,shall be reimbursableby the tenant to the house owner.</p>

<p>7.That the tenant has agreed to ensure “minimum stay” for a period of six months. The tenant hasagreed to give twomonths notice before vacating the house. Incase of shorter notice the tenant has agreed to pay two monthsrent to the houseowner. The Houseowneras  agreed  to  give  two  months  noticeto  the tenant  which perioddoes not consider the “minimum stay” period clause.</p> 

<p>8.Thatthe tenantshall  not  sublease  or  subleteither  the  entire  or  any  part  of  the tenanted  house  premises.  The  tenanted  house  premises  shall  be  used  only  for living purpose of the tenant and his family notfor any other commercial or illegal purposes.</p>

<p>9.That  the  tenant has  agreed  to  keep  the  house  premises  clean  and  in  hygienic condition  including  the  surroundingareas  and  the  tenant   hasagreed  not  to  do any  action  that  would  cause  permanent  / structural damages  /  changes  without obtaining prior consent from the owner  on impact and costs. <p>


<p>10.That  the  houseowner  shall  be  at  liberty  to  inspect  to  the  house  premises  by  him self and or by any other authorized person(s) as and when necessary.</p>

<p> 11.That the tenant hasagreed not to keep any pet animals in the house premises. 12.That the tenant has agreed to hand over main door keys (----Nos), bedroom keys (----Nos), tube lights(-----Nos)and the bulbs with fittings (--------Nos) along with the EB card to the houseowner at the time of vacating the house.</p> 

<p>12.	It is Agreed between both the parties that <span class= "bold"><?= $row->r_additional ?></span></p>


	<p>IN WITNESS WHERE OF,both the parties have put their hands and signed on the daymonth and year above written.</p>
	 																			
	 <div class="row">
		 	<div class="col-md-6">
		 	WITNESS:-1.
		 	___________________
		 	

		 	</div>
		 	
		 	
			<div class="col-md-6">

		 	(_________________)HOUSEOWNER

		 	</div>

	 </div>																			
	 	                                                                
<div class="row" >
		 	<div class="col-md-6">
		 	WITNESS:-2.
			___________________
		 	

		 	</div>
			<div class="col-md-6">

		 	(_________________)TENANT

		 	</div>

	 </div>

</div>

</div>
</div>
<div class="rpbutton">
 <?= anchor("cover/editrentform/{$row->id}", 'Edit', ['class'=> 'btn btn-primary'])?>
</div>
</div>
<?php include ('footer.php');?>