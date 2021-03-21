<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Forgot Password</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/demo.css">
	<!-- CUSTOM -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/auth.css">
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
				<div class="auth-box">
					<div class="left" style="text-align:left">
						<div class="content">
							<div class="header">
								<div style="text-align:left !important; width:80%; vertical-align:center">
									<img src="<?php echo base_url();?>assets/img/logo.png" alt="Asri Utama Logo">
									<span class="text-header">Forgot Password</span>
								</div>
                                <br>
								<br><br>
							</div>
							<p class="sub-title">Please enter your email to request a password reset</p><br/>
							<form class="form-auth-small" action="<?php echo base_url();?>index.php/login/check_email" method="post">
								<div class="form-group register-form">
									<label >Email Address</label>
									<input type="email" name="email" class="form-control" id="signin-email" value="<?php echo $email ?>" placeholder="Enter your email">
								</div>
								<div id="error-msg"><?php
										if(isset($message)){
											echo $message;
										}
								?></div>
									
								<div class="container-centering">
									<button type="submit" class="btn-login">Confirm</button>
									<br>
									<br>
									<br>
									<span class="dont-have-account-text">Remember your password? <a href="<?php echo base_url();?>index.php/login"  class="text-register">Login</a></span>
								</div>
							</form>

							<br>
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
