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
			<div class="circle-active"><img src="<?php echo base_url();?>assets/img/icons/icon-person-active.png" style="margin: 30%; width:40%"></div>
			<div class="line"> </div>
			<div class="circle"><img src="<?php echo base_url();?>assets/img/icons/icon-sync.png" style="margin: 30%; width:40%"></div>
			<div class="line"> </div>
			<div class="circle"> <img src="<?php echo base_url();?>assets/img/icons/icon-book.png" style="margin: 30%; width:40%;"></div>
			<div class="line"> </div>
			<div class="circle"> <img src="<?php echo base_url();?>assets/img/icons/icon-check.png" style="margin: 30%; width:40%"></div>
			<div class="blank-left"></div>
		</div>
		<div class="alifia">
			<div class="text-alifi text-1">Choose avalaible inspector</div>
		</div>
	</div>
</div>
<br><br>

<div class="container-fluid">
	<div class="detail-project-place">
		<iframe class="iframe-pdf" src="<?= base_url() ?>assets/client/doc/RUSMINTO_AUIPS.pdf" scrolling="auto"></iframe>
		<div class="content">
			<span class="title2 text-color-main">Download Inspector’s CV</span>
			<div class="group-info">
				<a href="<?= base_url('index.php/client/detail_project/Download/downloadInspectorCv') ?>">
					<input type="button" class="btn-download" value="Download">
				</a>
			</div>
			<div class="group-info">
				<span class="title2 text-color-main">Is the inspector suit to your project?</span>
				<div class="radio-button-group">
					<input type="radio" name="chooseSuit" value="yes" />
					<label>Yes</label>
					<input type="radio" name="chooseSuit" value="no" />
					<label>No</label>
				</div>
				<div id="note-inspectorno" class="desc" style="display: none;">
					<textarea class="note-inspector" placeholder="Please enter your note here"></textarea>
				</div>
			</div>
			<div class="pull-right">
				<a href="#">
					<input type="button" class="btn-send" value="Send">
				</a>
			</div>
		</div>
	</div>
</div>
<div class="spacer"></div>