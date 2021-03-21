<!-- Title  -->
<div class="container-fluid">
	<div class="title-create-new-project">
		<span class="title-text">
			Create New Project
		</span>
	</div>
</div>


<!-- Table -->
<div class="container-fluid">
	<div class="create-new-project">
		<div class="create-new-project-place">
			<div class="download-upload-file">
				<div class="download-file">
					<span class="title text-color-main">
						Download File Inquiry Format (opsional)
					</span>
					<div>
						<a href="<?= base_url('index.php/client/CreateNewProjectDashboard/downloadInquiry') ?>" class="btn btn-primary btn-download">Download</a>
					</div>
					<div class="info-download-inquiry text-color-main">
						<span>You can download the file format, then you can upload it again.</span>
					</div>
				</div>
				<!--  -->
				<div class="upload-file">
					<span class="title text-color-main">
						Upload Your Inquiry File (.pdf) <span style="color: #E10000">*</span>
					</span>
					<div>
						<form action="<?= base_url('index.php/Client/CreateNewProjectDashboard/uploadInquiry') ?>" class="dropzone" id="dropzoneForm"></form>
					</div>
					<span id="attachment_error" class="text-danger"></span>

					<div class="info-upload text-color-main">
						<span>You can choose to upload more than on file at a time . Make sure each file size does not exceed <b>10Mb</b> and file is correct</span>
					</div>
				</div>

			</div>
			<div class="line-vertical"></div>
			<div class="form-create-new-project">
				<form method="post" id="addProjectFrom" autocomplete="false">
				<div class="form-group field">
					<label class="text-color-main" style="padding-bottom: 12px;">Date of issue<span style="color: #E10000">*</span></label>
					<div class="input-place">
						<input type="text" name="datetimes" id="rangeDate" required class="form-control" placeholder="Choose date of inspection">
						<img src="<?= base_url() ?>assets/client/img/calendar-icon.svg">
					</div>
				</div>
				<span id="start_date_error" class="text-danger"></span>
				<span id="end_date_error" class="text-danger"></span>
			
				<input type="hidden" name="start_date" id="startDateInp" required class="form-control" placeholder="Start date hidden">
				<input type="hidden" name="end_date" id="endDateInp" required class="form-control" placeholder="End date hidden">
				<input type="hidden" name="attachment" id="attachmentInp" required class="form-control" placeholder="Attachmenet">

				<div class="form-group">
					<label class="text-color-main secondary-label">Name Project<span style="color: #E10000">*</span></label>
					<div class="input-place field">
						<input type="text" class="form-control" name="project_name" id="projectNameInp" required placeholder="Enter name project">
						<div class="tooltip-custom">
							<img src="<?= base_url() ?>assets/client/img/tooltip.svg">
							<div class="left">
								<div class="heading-tooltip">
									<h4><b>Detail</b></h3>
								</div>
								<p>Enter your project name. Example: Project Railways.</p>
								<i></i>
							</div>
						</div>
					</div>
					<span id="project_name_error" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label class="text-color-main secondary-label">Name Vendor<span style="color: #E10000">*</span></label>
					<div class="input-place field">
						<input type="text" class="form-control" name="vendor" id="vendorInp" required placeholder="Enter name vendor">
						<div class="tooltip-custom">
							<img src="<?= base_url() ?>assets/client/img/tooltip.svg">
							<div class="left">
								<div class="heading-tooltip">
									<h4><b>Detail</b></h3>
								</div>
								<p>Enter your name vendor project. Example: HaslerRail.</p>
								<i></i>
							</div>
						</div>
					</div>
					<span id="vendor_error" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label class="text-color-main secondary-label">Vendor Address<span style="color: #E10000">*</span></label>
					<div class="input-place field">
						<input type="text" class="form-control" name="vendor_address" id="vendorAddressInp" required placeholder="Enter vendor address">
						<div class="tooltip-custom">
							<img src="<?= base_url() ?>assets/client/img/tooltip.svg">
							<div class="left">
								<div class="heading-tooltip">
									<h4><b>Detail</b></h3>
								</div>
								<p>Enter your project vendor address. Example: Freiburgstrasse 251, 3018 Bern, Switzerland</p>
								<i></i>
							</div>
						</div>
					</div>
					<span id="vendor_address_error" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label class="text-color-main secondary-label">Type of Inspection<span style="color: #E10000">*</span></label>
					<div class="input-place field">
						<select class="form-control select-inspections" name="id_type" id="selectTypeInspectionId">
							<?php foreach ($getTypeInspection as $key => $getTypeInspections) : ?>
								<option value="<?= $getTypeInspections->id_type ?>"><?= $getTypeInspections->type_name ?></option>
							<?php endforeach ?>
							<option value="other">other</option>
						</select>
						<div class="tooltip-custom">
							<img src="<?= base_url() ?>assets/client/img/tooltip.svg">
							<div class="left">
								<div class="heading-tooltip">
									<h4><b>Detail</b></h3>
								</div>
								<p>inspector. Example : Quality Inspection</p>
								<i></i>
							</div>
						</div>
					</div>
					<span id="id_type_error" class="text-danger"></span>
				</div>
				<div class="form-group otherinspection">
				</div>
				<span id="type_name_error" class="text-danger"></span>

				<div class="form-group">
					<label class="text-color-main secondary-label">Telephone<span style="color: #E10000">*</span></label>
					<div class="input-place field">
						<input type="number" name="phone" id="phoneInp" class="form-control" required placeholder="081334 ******">
						<div class="tooltip-custom">
							<img src="<?= base_url() ?>assets/client/img/tooltip.svg">
							<div class="left">
								<div class="heading-tooltip">
									<h4><b>Detail</b></h3>
								</div>
								<p>Enter your vendor's phone number. Example: 02153 **** / 081334 ******</p>
								<i></i>
							</div>
						</div>
					</div>
					<span id="phone_error" class="text-danger"></span>
				</div>
				<div class="form-group">
					<div class="pull-right">
						<input type="submit" id="buttonAddProject" name="submit" class="btn btn-default btn-submit-create-project btnAddProject" value="Submit">
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="spacer"></div>
