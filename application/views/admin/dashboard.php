<?php include ('admin_header.php');?>



<div class="container">

<?php if($flash=$this->session->flashdata('flash')):?>
<br>
            <div class="row">
                  <div class="col-md-6">
                  <div class="alert alert-dismissible alert-danger">
                  <?php echo $flash;?>
              </div>
            </div> 

<?php endif;?>
	<div class="col-md-6">
     <a href="<?php echo base_url('admin/add_article')?>"><button type ="button" class="btn btn-danger">Add Article</button></a>
    </div>
	<div class="table">
		<div class="container">
<div class="row">
<div class="col-md-12">
<table style="width:100%" class="table">
<tr>
    <th>Sr.No.</th>
    <th>Titles</th>
    <th>Action</th>
     </tr>
 <?php
if( count($articles) ):
    $count = $this->uri->segment(3, 0);
   foreach ($articles as $article): 
      
 ?>       
<tr>

    <td><?= ++$count ?></td>
    <td><?php echo $article->title ?></td>
    <td>
        <?php echo anchor("admin/edit_article/{$article->id}", 'Edit', ['class'=> 'btn btn-primary'])?>
        <?php echo anchor("admin/delete_article/{$article->id}", 'Delete', ['class'=> 'btn btn-danger'])?>
        
   </td> 

</tr>
<?php endforeach; ?>
<?php else: ?>
    <tr>
        <td colspan="3">
            No records Found.
        </td>

    </tr>
<?php endif;  ?>

</table >
	</div>

    <div>
  <?= $this->pagination->create_links();?>

</div>
<?php include ('admin_footer.php');?>