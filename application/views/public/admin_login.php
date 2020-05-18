<?php include ('public_header.php');?>

<div class="container">
	

<?php echo form_open('Login/admin_login', ['class'=>'form-horizontal']);?>
<?php if($error=$this->session->flashdata('login_failed')):?>
<br>
<div class="row">
  <div class="col-md-6">
<div class="alert alert-dismissible alert-danger">
 <?php echo $error;?>
</div>    
  </div>

</div>
<?php endif;?>

  <fieldset>

     <div class="form-group">
     	<div class="row">
     		<div class="col-md-6">
		
     		<input type="email" name="email" class= "form-control" value="<?php echo set_value('email'); ?>" placeholder="Emailid" size="50" />
     		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
     		</div>

			<div class="col-md-6 my-2">
				<?php echo form_error('email'); ?>
     			
     		</div>







     	</div>
     

     
       
    </div>

   <?php echo form_error('username'); ?>
  <?php echo form_input(['name'=> 'username', 'class'=>'form-control', 'placeholder'=>'username','value'=>set_value('username') ] );

  ?>
     
    <div class="form-group">
    	
      <label for="exampleInputPassword1">Password</label>
      <?php echo form_password(['name'=> 'password', 'class'=>'form-control', 'placeholder'=>'password'] ); ?>
      <?php echo form_error('password'); ?>
    </div>
     <?php echo form_submit(['name'=>'Reset', 'value'=>'Reset', 'class'=>'btn btn-primary']);?>
    <?php echo form_submit(['name'=>'Submit', 'value'=>'login', 'class'=>'btn btn-primary']);?>
 
  </fieldset>
</form>

</div>	








<?php include ('public_footer.php');?>