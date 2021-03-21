<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Change Password</title>
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
				<div class="auth-box " sytle="height:auto">
					<div class="left" style="text-align:left">
						<div class="content">
							<div class="header">
								<div style="text-align:left !important; width:100%; vertical-align:center">
									<img src="<?php echo base_url();?>assets/img/logo.png" alt="Asri Utama Logo">
									<span class="text-header">Create New Password</span>
								</div>
                    		</div><br>
                            <p class="sub-title">Login to Our Application</p><br/>
							<form class="form-auth-small" action="<?php echo base_url();?>index.php/login/change_password" method="post">
                                <div class="form-group register-form">
									<label >New Password</label>
									<input type="password" name="password1" class="form-control" id="signin-email" value="<?php echo $password1 ?>" placeholder="Enter new password">
								</div>
								<div class="form-group register-form">
									<label >Confirm Password</label>
									<input type="password" name="password2" class="form-control" id="signin-password" value="<?php echo $password2 ?>" placeholder="Confirm your password">
								</div>
								
								<div id="error-msg"><?php
									if(isset($message)){
										echo $message;
									}
								?></div>
								<div class="container-centering mgt-2em">
									<br>
									<button type="submit" class="btn-login">Confirm New Password</button>
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
