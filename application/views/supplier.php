<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Eventory | Account Management</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">

<style>
.container {
  position: relative;
}

.topright {
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 18px;
}

img { 
  width: 100%;
  height: auto;
}
</style>

</head>
<body>
<br>
<div class="topright"><a href="<?php echo base_url(); ?>index.php/user/logout" ><img src="<?php echo base_url(); ?>/exit.png"></a></div>
<div class="container">
		<div style="width:800px; margin:0 auto;">
		<img src="<?php echo base_url(); ?>/landing.png" height="80%" width="80%"><br><br>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID No.</th>
						<th>Full Name</th>
						<th>Email</th>
						<th>Password</th>
						<th>Account Type</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
				
				<?php
					foreach($users as $user){
						?>
						<tr>
							<td><b><?php echo $user->accountID; ?></b></td>
							<td><?php echo $user->fullName; ?></td>
							<td><?php echo $user->email; ?></td>
							<td><?php echo $user->password; ?></td>
							<td><b><?php echo $user->accountType; ?></b></td>
							<td><a href="<?php echo base_url(); ?>index.php/user/edit/<?php echo $user->accountID; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a>
							<a href="<?php echo base_url(); ?>index.php/user/delete/<?php echo $user->accountID; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
						</tr>
							
						</tr>
						
						<?php  	
					}
				?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>