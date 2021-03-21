<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login</title>
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
	<link rel="stylesheet" href="<?= base_url();?>assets/client/css/popup-modal.css">
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
				<div class="auth-box ">
					<div class="left" style="text-align:left;">
						<div class="content">
							<div class="header">
								<div style="text-align:left !important; width:80%; vertical-align:center">
									<img src="<?php echo base_url();?>assets/img/logo.png" alt="Asri Utama Logo">
									<span class="text-header">LOGIN</span>
								</div>
							</div>
							<form action="<?php echo base_url('index.php/Login/aksi_login'); ?>" method="post">		
							<p class="sub-title">Login to our application</p><br/>
							<div class="form-auth-small">
								<div class="form-group register-form">
									<label >Email Address</label>
									<input type="email" name="emailUser" class="form-control" id="signinEmail" value="<?php echo $email ?>" placeholder="Enter your email">
								</div>	
								<div class="form-group register-form">
									<label >Password</label>
									<input type="password" name="passwordUser" class="form-control" id="signinPassword" value="<?php echo $password ?>" placeholder="Enter your password">
								</div>
                <div style="margin:18px 0px 0px 0px">
                  <div class="container-centering">
                    <a href="<?php echo base_url();?>index.php/login/forget"><span>Forgot your password?</span></a>
                  </div>
                </div>
								<br>
								<div id="error-msg"><?= isset($message) ? $message : '' ?></div>
								<div>
									<button class="btn-login" type="submit">Sign In</button>
								</div>
							</div>
							</form>
							<div class="container-centering">
								<span class="dont-have-account-text">You don't have an accout? <a href="<?php echo base_url();?>register" class="text-register">Register</a></span>
							</div>
						</div>
					</div>
					<div class="right">
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('dashboards/client/subcontent/popup_modal') ?>
	<!-- END WRAPPER -->	
</body>

</html>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script src="<?= base_url();?>assets/client/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- <script>
$(document).ready(function() {
		$(".btn-login").click( function() {
			var email = $("#signinEmail").val();
			var password = $("#signinPassword").val();

			$.ajax({
				url: "<?php echo base_url() ?>index.php/Login/aksi_login",
				type: "POST",
				data: {
					"email": email,
					"password": password,
				},
				success:function(response){

					if (response != "error") {
						window.location.href = '<?php echo base_url()?>index.php/client/MyProject';
					} else {
						$('#error-msg').html('<div class="alert alert-danger" style="margin:13px 0px -5px 0px">Sandine salah paling</div>');
					}
					console.log(response);
				},
				error:function(response){
					// alert('Opps 500')
					console.log(response);
				}
			});
		}); 

	});
	
</script> -->