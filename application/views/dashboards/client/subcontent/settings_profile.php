<div class="container-fluid settings-profile-place">
	<div class="form-edit-profile-place">
		<form>
			<span class="title main-color">
				Edit Profile
			</span>
			<div class="photo-profile-place">
				<div class="photo-profile"></div>
				<input type="button" name="" value="Upload New Picture" class="btn btn-default btn-upload-photo">
				<input type="button" name="" value="Delete" class="btn btn-default btn-delete-photo">
			</div>

			<div class="input-edit-profile-place">
				<div class="form-group">
					<label class="text-color-main">Username</label>
					<input type="text" class="form-control" placeholder="Enter your username">
					<img src="<?= base_url()?>assets/client/img/calendar-icon.svg" class="visibility-hidden" >
				</div>
				<div class="form-group">
					<label class="text-color-main">Email</label>
					<input type="email" class="form-control" placeholder="Enter your email">
					<img src="<?= base_url()?>assets/client/img/calendar-icon.svg" class="visibility-hidden" >
				</div>
				<div class="form-group">
					<label class="text-color-main">Password Old</label>
					<input type="password" class="form-control" placeholder="Enter your password" id="password-old">
					<span toggle="#password-old" class="fa fa-fw fa-eye new-password-icon toggle-new-password"></span>
					<img src="<?= base_url()?>assets/client/img/calendar-icon.svg" class="visibility-hidden" >
				</div>
				<div class="form-group">
					<label class="text-color-main">Password New</label>
					<input type="password" class="form-control" placeholder="Enter your password" id="password-new">
					<span toggle="#password-new" class="fa fa-fw fa-eye new-password-icon toggle-new-password"></span>
					<img src="<?= base_url()?>assets/client/img/calendar-icon.svg" class="visibility-hidden" >
				</div>
				<div class="form-group">
					<label class="text-color-main">Telephone</label>
					<input type="number" class="form-control" placeholder="Enter your telephone">
					<img src="<?= base_url()?>assets/client/img/calendar-icon.svg" class="visibility-hidden" >
				</div>
				<div class="form-group">
					<div class="pull-right">
						<input type="button" name="" value="Save" class="btn btn-default btn-edit-profile">
					</div>
				</div>
			</div>

		</form>
	</div>
	<div class="info-profile">
		<div class="info-photo-profile"></div>
		<div class="text-username">
			<span class=" main-color">Username</span>	
		</div>
		<div class="text-email">
			<span class=" ongoing-color">youremail@email.com</span>	
		</div>
		<div class="text-phone">
			<span class=" ongoing-color">(+62) 555-5555-5555</span>
		</div>
	</div>
</div>

<div class="spacer"></div>