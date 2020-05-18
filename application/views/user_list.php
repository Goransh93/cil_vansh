<!DOCTYPE html>
<html>
<head>
	<title>User Account</title>
</head>
<body>

	<?php 
	foreach($users as $user):?>
	
<table>
	<tr>
		<td><?= $user->Firstname?></td>
		<td><?=$user->Lastname?></td>		
	</tr>
<?php endforeach; ?>
</table>
</body>
</html>