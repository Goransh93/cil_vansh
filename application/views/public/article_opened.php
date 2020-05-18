<?php include ('public_header.php');?>
<div class="container">
	<div class="row">
		<div class="col">
			
			<h1>				
				<?= $articles->title ?>
			</h1>

		</div>
		<div class="col">
				<?= date('d M yy H:i:s', strtotime($articles->created_at) ) ?>
			
		</div>

	</div>
<hr>
<p class = "text-justify" ><?= $articles->body ?> </p>
<?php if(!is_null($articles->image_path) ):?>

<img src="<?=$articles->image_path?>" alt="">
<?php endif; ?> 
<?php include ('public_footer.php');?>
</div>