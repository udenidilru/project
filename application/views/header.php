<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>College Management System</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</head>
<body>
<!--<nav class="navbar navbar-expand-lg navbar-dark bg-primary">-->
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header col-lg-10">
			<a class="navbar-brand" style="color: #fff;" href="#">COLLEGE MANAGEMENT SYSTEM</a>
		</div>

		
		
	<div class="col-lg-2" style="margin-top: 15px;" id="bs-example-navbar-collapse-2">
		<div class="btn-group">

			<a href="" class="btn btn-default">Settings</a>
			<a href="" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>

			<ul class="dropdown-menu">
				<!-- <?php 
					// $role_id = $this->session->userdata('role_id');
				?>
				<?php// if($role_id == '1'): ?> -->
				<li><?php echo anchor("admin/dashboard",'Dashboard');?></li>
				<li><?php echo anchor("users/dashboard",'Users Dashboard');?></li>
				<li><?php echo anchor("admin/coadmins",'View Co Admins');?></li>
				<li><?php echo anchor("home_c/logout",'Logout');?></li>
		<?php// else: ?>
				<li><?php// echo anchor("home_c/logout",'Logout');?></li>
			<?php //endif; ?>
			</ul>
		</div>
	</div>
	</div>
	


</nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <!-- Bootstrap JS links -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

</body>
</html>
