<?php include ('public_header.php');?>
<div class="container">
		<br>
		<h1>Articles List</h1>
		<hr>
		<table style="width: 100%" class="table">
		<tr>
	    <th>Sr.No.</th>
	    <th>Titles</th>
	    <th>Date</th>
	     </tr>
	<?php if(count($articles)):?>
	<?php $count = $this->uri->segment(3, 0);?>
	<?php foreach($articles as $article):?>	
	     <tr>
	   	<th><?=++$count?></th>
	    <th><?= anchor ("user/open_article/{$article->id}", $article->title)?></th>
	    <th><?= date('d M yy H:i:s', strtotime($article->created_at) )?></th>
	     </tr>
	<?php endforeach;?>	
	 <?php else:?>
	  	<tr>
        <td colspan="3">
            No records Found.
        </td>

    	</tr>
   
	 <?php endif; ?>
		</table>
		<?= $this->pagination->create_links();?>
</div>

<?php include ('public_footer.php');?>
