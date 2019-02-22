<?php
defined('BASEPATH') or exit('No direct script access allowed');?>

<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="<?php echo base_url('assets/img/user.png');?>">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/signin.css');?>">
</head>
<body>

	<form class="form-signin" action="<?php echo base_url('login/masuk');?>" method="POST">

				<?php
		if($this->session->flashdata('pesan') <> ''){
	?>
		<div class="alert alert-dismissible alert-danger">
		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
		<?php echo $this->session->flashdata('pesan');?>	
		</div>
	<?php
	}
	?>

	
		<h2 class="form-signin-heading">Silahkan login</h2>
		
		<div class="form-group">
		<input type="text" name="username" class="form-control" placeholder="username" required>
		</div>
		
		<div class="form-group">
		<input type="password" name="password" class="form-control" placeholder="password" required>
		</div>
		<button class="btn btn-primary btn-block" type="submit">Masuk</button>
	</form>

</body>
</html>