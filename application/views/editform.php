<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>CodeIgniter Simple CRUD Tutorial</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Eventory</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Edit Form
				<span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
			</h3>
			<hr>
			<?php extract($user); ?>
			<form method="POST" action="<?php echo base_url(); ?>index.php/user/update/<?php echo $accountID; ?>">
				<div class="form-group">
					<label>Username:</label>
					<input type="text" class="form-control" value="<?php echo $fullName; ?>" name="fullName">
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="text" class="form-control" value="<?php echo $email; ?>" name="email">
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="text" class="form-control" value="<?php echo $password; ?>" name="password">
				</div>
                
                <div>
                    <label for="accountType">Account Type:</label>
                        <select id="cmbMake" name="accountType" >
                            <option value="I am Supplier">I am Supplier</option>
                            <option value="I am Client">I am Client</option>
                        </select>
                </div>
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>