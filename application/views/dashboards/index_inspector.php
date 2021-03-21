<!doctype html>
<html lang="en">

<head>
	<title><?= $title; ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?= base_url();?>assets/inspector/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/inspector/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/inspector/vendor/linearicons/style.css"
	>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
	<link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?= base_url();?>assets/inspector/css/main.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/inspector/css/custom-main.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/inspector/css/myproject.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/inspector/css/new-project.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/inspector/css/on-inspection.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/inspector/css/project-done.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/inspector/css/create-new-project.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/inspector/css/settings-profile.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/inspector/css/popup-modal.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/inspector/css/detail-project.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/inspector/css/invoice.css">
	<!-- COLOR -->
	<link rel="stylesheet" href="<?= base_url();?>assets/inspector/css/const-color.css">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url();?>assets/inspector/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url();?>assets/inspector/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="<?= base_url();?>assets/inspector/img/logo-name.svg" alt="Asri Utama Logo"></a>
			</div>
			<div class="container-fluid">
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">5</span>
							</a>
							<div class="dropdown-menu notifications">
								<div class="notif-item notif-item-active">
									<a href="#" >
										<span class="message">Coordinator choosed inspector for Project A</spam>
										<br>
										<span class="time">28 minutes ago</span>
										<br>
										<div class="button-container">
											<button class="btn btn-info">Review</button>
										</div>
									</a>
								</div>
								<div class="notif-item">
									<a href="#" >
										<span class="message">Coordinator choosed inspector for Project A</spam>
										<br>
										<span class="time">28 minutes ago</span>
									</a>
								</div>
								<div class="notif-item">
									<a href="#" >
										<span class="message">Coordinator choosed inspector for Project A</spam>
										<br>
										<span class="time">28 minutes ago</span>
									</a>
								</div>
								<!-- <div><a href="#" class="notif-more">See all notifications</a></div> -->
							</div>
						</li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<span>Galih Putra</span>
								<img src="<?= base_url();?>assets/inspector/img/user.png" class="img-circle" alt="Avatar"> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="<?= base_url('index.php/inspector/MyProject/settingsProfile')?>"><i class="lnr lnr-user"></i> <span>Settings Profile</span></a></li>
									<!-- <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
									<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
									<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li> -->
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- END NAVBAR -->
			<!-- LEFT SIDEBAR -->
			<div id="sidebar-nav" class="sidebar">
				<div class="sidebar-scroll">
					<nav>
						<center><a href="<?= base_url('index.php/inspector/MyProject/createNewProjectDashboard');?>" class="btn btn-default btn-create-project">
							<img src="<?= base_url();?>assets/inspector/img/create-project.svg">
						&emsp;Create Project</a></center>
						<ul class="nav">
							<li><a href="<?= base_url('index.php/inspector/MyProject')?>" 
								class="<?php if($this->uri->segment(2) == "MyProject"){
									echo'active';
								} ?>"><img src="<?= base_url();?>assets/inspector/img/myproject.svg">&nbsp;&nbsp;&nbsp; My Project</a></li>
								<li><a href="<?= base_url('index.php/inspector/Invoice')?>" 
									class="<?php if($this->uri->segment(2) == "Invoice"){
										echo'active';
									} ?>"><img src="<?= base_url();?>assets/inspector/img/invoice.svg">&nbsp;&nbsp;&nbsp;&nbsp; Invoice</span></a></li>
								</ul>
								<div class="logout" data-toggle="modal" data-target="#logoutModal">
									<img src="<?= base_url();?>assets/inspector/img/logout-icon.svg">&nbsp;&nbsp;&nbsp;Logout
								</div>
							</nav>
						</div>
					</div>
					<!-- END LEFT SIDEBAR -->
					<!-- MAIN -->
					<div class="main">
						<!-- MAIN CONTENT -->
						<div class="main-content">
							<div class="container-fluid">
								<!-- OVERVIEW -->
								<?php $this->load->view($content) ?>
								<!-- Include Popup Modal -->
								<?php $this->load->view('dashboards/inspector/subcontent/popup_modal') ?>
								<!-- END OVERVIEW -->

							</div>
						</div>
						<!-- END MAIN CONTENT -->
					</div>
					<!-- END MAIN -->
					<div class="clearfix"></div>
					<div class="footer">
						<div class="text-telp">
							<img src="<?= base_url('assets/inspector/img/phone.svg')?>">
							&nbsp;
							+62 888 868 4000 
						</div>
						<div class="text-email">
						<img src="<?= base_url('assets/inspector/img/email.svg')?>">
						&nbsp;
						asriutamaservice@gmail.com
						</div>

					</div>
		<!-- <footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer> -->

	</div>

	<!-- END WRAPPER -->
	<!-- Javascript -->
	
    <script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<script src="<?= base_url();?>assets/inspector/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url();?>assets/inspector/scripts/custome-datepicker.js"></script>
	<script src="<?= base_url();?>assets/inspector/scripts/detail-project.js"></script>
	<script src="<?= base_url();?>assets/inspector/scripts/config-dropzone.js"></script>
	<script src="<?= base_url();?>assets/inspector/scripts/custome.js"></script>
	
</body>

</html>
