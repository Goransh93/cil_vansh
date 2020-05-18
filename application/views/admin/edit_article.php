<?php include('admin_header.php')?>
<div class="container">


	<?php echo form_open("admin/update_article/{$articles->id}", ['class'=>'form-horizontal']);?>
    <fieldset>
      <legend>Edit Article</legend>
     <div class="form-group">
     	<div class="row">
     		<div class="col-md-6 py-2">
         <input type="text" name="title" class= "form-control" value="<?php echo set_value('title', $articles->title); ?>" placeholder="Article Title"  />
     		</div>

			<div class="col-md-6 my-2">
				<?php echo form_error('title'); ?>
     			
     		</div>

     	</div>
      
    </div>

   <?php echo form_error('body'); ?>
  <?php echo form_textarea(['name'=> 'body', 'id' =>'editor1', 'class'=>'form-control', 'placeholder'=>'Article Body','value'=>set_value('body', ($articles->body) ) ] );

  ?>
     
     <?php echo form_submit(['name'=>'Reset', 'value'=>'Reset', 'class'=>'btn btn-primary']);?>
    <?php echo form_submit(['name'=>'Submit', 'value'=>'Submit', 'class'=>'btn btn-primary']);?>
 
  </fieldset>



</form>


	


</div>


<?php include ('admin_footer.php')?>