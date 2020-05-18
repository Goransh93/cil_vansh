<?php include('admin_header.php')?>
<div class="container">
 

	<?php echo form_open_multipart('admin/store_article', ['class'=>'form-horizontal']);?>
  <?php echo form_hidden('user_id', $this->session->userdata['user_id']);?>
  <?= form_hidden('created_at', date("yy-m-d h:i:sa") );?>
  <fieldset>

     <div class="form-group">
     	<div class="row">
     		<div class="col-md-6 py-2">
         <input type="text" name="title" class= "form-control" value="<?php echo set_value('title'); ?>" placeholder="Article Title"  />
     		</div>

			<div class="col-md-6 my-2">
				<?php echo form_error('title'); ?>
     			
     		</div>

     	</div>
     
    </div>

   <?php echo form_error('body'); ?>
  <?php echo form_textarea(['name'=> 'body', 'id' => 'editor1', 'class'=>'form-control', 'placeholder'=>'Article Body','value'=>set_value('body') ] );

  ?>
       <div class="form-group">
      <div class="row">
        <div class="col-md-6 py-2">
        <?php echo form_upload(['name'=> 'userfile', 'class'=>'form-control'] ); ?>
        </div>

      <div class="col-md-6 my-2">
        <?php if(isset($upload_error)) echo $upload_error ?>
          
        </div>

      </div>
     
    </div>



     
     <?php echo form_submit(['name'=>'Reset', 'value'=>'Reset', 'class'=>'btn btn-primary']);?>
    <?php echo form_submit(['name'=>'Submit', 'value'=>'Submit', 'class'=>'btn btn-primary']);?>
 
  </fieldset>



</form>

               
  
</div>


<?php include ('admin_footer.php')?>