<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Register</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
	<!-- CUSTOM -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/auth.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url();?>assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box auth-box-regis">
					<div class="left" style="text-align:left;">
						<div class="content">
							<div class="header" style="">
								<div style="text-align:left !important; width:80%; vertical-align:center">
									<img src="<?php echo base_url();?>assets/img/logo.png" alt="Asri Utama Logo">
									<span class="text-header">REGISTER</span>
								</div>
							</div>
							<p class="sub-title" style="margin-bottom:12px">Create your new account</p>
							<form class="form-auth-small" method="POST" action="<?php echo base_url();?>index.php/Register/registration">
								<div class="form-group register-form">
									<label >Fullname</label>
									<input type="text" name="fullname" class="form-control" id="signin-email" value="<?php echo $fullname ?>" placeholder="Enter your fullname">
								</div>
								<div class="form-group register-form">
									<label >Company</label>
									<input type="text" name="company" class="form-control" id="signin-password" value="<?php echo $company ?>" placeholder="Enter your company name">
								</div>
                                <div class="form-group register-form">
									<label >Email Address</label>
									<input type="email" name="email" class="form-control" id="signin-email" value="<?php echo $email ?>" placeholder="Enter your email">
								</div>
								<div class="form-group register-form">
									<label >Password</label>
									<input type="password" name="password" class="form-control" id="signin-password" value="<?php echo $password ?>" placeholder="Password">
								</div>
								<div class="container-centering mgt-2em">
									<button type="submit" class="btn-login">Sign Up</button>
									<br>
									<span class="dont-have-account-text">You have an accout? <a href="<?php echo base_url();?>index.php/login"  class="text-register">Login</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
