<div class="project-name">
	Project 1
</div>
<br><br>
<div class="icons-text-container">
	<div>
		<div class="alifia">
			<div class="blank-left"></div>
			
			<a href="<?php echo base_url();?>index.php/client/MyProject/detailProjectRequest"> 
			<div class="circle-active"><img src="<?php echo base_url();?>assets/img/icons/icon-clock-active.png" style="margin: 25%; width:50%"></div>
			</a>
			
			<div class="line-active"></div>
			
			<a href="<?php echo base_url();?>index.php/client/MyProject/detailProjectChooseInspector"> 
			<div class="circle-active"><img src="<?php echo base_url();?>assets/img/icons/icon-person-active.png" style="margin: 30%; width:40%"></div>
			</a>

			<div class="line-active"> </div>
			<div class="circle-active"><img src="<?php echo base_url();?>assets/img/icons/icon-sync-active.png" style="margin: 30%; width:40%"></div>
			<div class="line"> </div>
			<div class="circle"> <img src="<?php echo base_url();?>assets/img/icons/icon-book.png" style="margin: 30%; width:40%;"></div>
			<div class="line"> </div>
			<div class="circle"> <img src="<?php echo base_url();?>assets/img/icons/icon-check.png" style="margin: 30%; width:40%"></div>
			<div class="blank-left"></div>
		</div>
		<div class="alifia">
			<div class="text-alifi text-2">Project on process</div>
		</div>
	</div>
</div>
<br><br>

<div class="container-fluid">
	<div class="detail-project-place">
		<?php if ($isOnInpection) : ?>
			<iframe class="iframe-pdf" src="<?= base_url() ?>assets/client/doc/inspectionreport.pdf" scrolling="auto"></iframe>
			<div class="content">
				<span class="title2 text-color-main">Download Inspection Report</span>
				<div class="group-info">
					<a href="<?= base_url('index.php/client/detail_project/Download/downloadInspectionReport') ?>">
						<input type="button" class="btn-download" value="Download">
					</a>
				</div>
				<div class="btn-project-process-place">
					<a href="#">
						<input type="button" class="btn-revision" value="Revision">
					</a>
					<a href="#">
						<input type="button" class="btn-send" value="Send">
					</a>
				</div>
			</div>
		<?php else : ?>
			<div class="iframe-pdf-disabled">
				<center>
					<div class="icon">
						<img src="<?= base_url() ?>assets/client/img/no-report.svg" alt="icon">
					</div>
					<div class="title-icon text-color-main">
						No Report
					</div>
					<div class="desc-icon text-color-main">
						Coordinator will send you report before due date
					</div>
				</center>
			</div>
			<div class="content">
				<span class="title2 text-color-main">Download Inspection Report2</span>
				<div class="group-info">
					<a href="<?= base_url('index.php/client/detail_project/Download/downloadInspectionReport') ?>">
						<input type="button" class="btn-download" disabled value="Download">
					</a>
				</div>
				<div class="btn-project-process-place">
					<a href="#">
						<input type="button" class="btn-revision" disabled value="Revision">
					</a>
					<a href="#">
						<input type="button" class="btn-send" disabled value="Send">
					</a>
				</div>
			</div>
		<?php endif ?>

	</div>
</div>
<div class="spacer"></div>