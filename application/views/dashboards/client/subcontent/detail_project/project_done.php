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
			
			<a href="<?php echo base_url();?>index.php/client/MyProject/detailProjectOnProcess"> 
			<div class="circle-active"><img src="<?php echo base_url();?>assets/img/icons/icon-sync-active.png" style="margin: 30%; width:40%"></div>
			
			<div class="line-active"> </div>
			
			<a href="<?php echo base_url();?>index.php/client/MyProject/detailProjectRevision"> 
			<div class="circle-active"> <img src="<?php echo base_url();?>assets/img/icons/icon-book-active.png" style="margin: 30%; width:40%;"></div>
			</a>
			
			<div class="line-active"> </div>
			<div class="circle-active"> <img src="<?php echo base_url();?>assets/img/icons/icon-check-active.png" style="margin: 30%; width:40%"></div>
			<div class="blank-left"></div>
		</div>
		<div class="alifia">
			<div class="text-alifi text-4">Project Done</div>
		</div>
	</div>
</div>
<br><br>

<div class="container-fluid">
	<div class="detail-project-place">
		<iframe class="iframe-pdf" src="<?= base_url() ?>assets/client/doc/RUSMINTO_AUIPS.pdf" scrolling="auto"></iframe>
		<div class="content">
			<span class="title2 text-color-main">Download Invoice</span>
			<div class="group-info">
				<a href="<?= base_url('index.php/client/detail_project/Download/downloadInspectorCv') ?>">
					<input type="button" class="btn-download" value="Download">
				</a>
			</div>
		</div>
	</div>
</div>
<div class="spacer"></div>