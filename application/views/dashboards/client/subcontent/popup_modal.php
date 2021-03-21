<!-- Success Popup -->
<div id="successModal" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div>
					<button type="button" class="close" data-dismiss="modal" style="color:black" id="closeModalAddProject">&times;</button>
				</div>
				<div class="content-alert">
					<img src="<?= base_url()?>assets/client/img/success-icon.svg" class="img-responsive">
					<div class="title">
						<span>Success</span>
					</div>
					<div class="desc-alert text-color-main">
						<span>Your request has been sent, the coordinator will find available inspectors</span>
						<div style="margin-top: 28px;">
							<a href="<?= base_url('index.php/client/MyProject')?>" class="btn-view-project">View Project</a>	
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Failed Popup -->
	
<div id="failedLoginModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div>
					<button type="button" class="close" data-dismiss="modal" style="color:black">&times;</button>
				</div>
				<div class="content-alert">
					<img src="<?= base_url()?>assets/client/img/success-icon.svg" class="img-responsive">
					<div class="title">
						Login Failed
					</div>
					<div class="desc-alert text-color-main">
						<span>Your request has been sent, the coordinator will find available inspectors</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Logout Popup -->
<div id="logoutModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div>
					<button type="button" class="close" data-dismiss="modal" style="color:black">&times;</button>
				</div>
				<div class="content-alert">
					<div class="title text-color-main">
						Are you sure you logout ?
					</div>
					<div class="desc-popup">
						To login back, you need to re- enter your email and password
					</div>
					<div class="btn-place">
						<a href="#" class="btn btn-default btn-cancel" class="close" data-dismiss="modal">Cancel</a>
						<a href="" class="btn btn-default btn-logout">Log out</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
