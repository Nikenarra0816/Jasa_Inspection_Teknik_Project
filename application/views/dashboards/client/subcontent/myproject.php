<!-- Indicator -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<a href="<?= base_url() ?>index.php/client/MyProject/newProjectDashboard">
				<div class="indicator-menu">
					<div class="indicator-counter">
						<img src="<?= base_url() ?>assets/client/img/new-project.svg">
					</div>
					<div class="indicator-title">
						<div class="indicator-title-count"><?= $getCountNewProject ?></div>

						<div class="indicator-title-title">New Project</div>
					</div>
					<div class="indicator-icon">
						<img src="<?= base_url() ?>assets/client/img/arrow-right.svg">
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="<?= base_url() ?>index.php/client/MyProject/onInspectionDashboard">
				<div class="indicator-menu">
					<div class="indicator-counter">
						<img src="<?= base_url() ?>assets/client/img/on-inspection.svg">
					</div>
					<div class="indicator-title">
						<div class="indicator-title-count"><?= $getCountProjectOnInspection ?></div>

						<div class="indicator-title-title">On Inspection</div>
					</div>
					<div class="indicator-icon">
						<img src="<?= base_url() ?>assets/client/img/arrow-right.svg">
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="<?= base_url() ?>index.php/client/MyProject/projectDoneDashboard">
				<div class="indicator-menu">
					<div class="indicator-counter">
						<img src="<?= base_url() ?>assets/client/img/project-done.svg">
					</div>
					<div class="indicator-title">
						<div class="indicator-title-count"><?= $getCountProjectDone; ?></div>

						<div class="indicator-title-title">Project Done</div>
					</div>
					<div class="indicator-icon">
						<img src="<?= base_url() ?>assets/client/img/arrow-right.svg">
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

<!-- New Project -->
<div class="container-fluid">
	<div class="new-project">
		<span class="title">New Project</span>

		<div class="table-new-project-place">
			<div class="table-responsive">
				<table class="table table-striped dataTable">
					<thead>
						<tr>
							<th class="col-xs-4">Project Name</th>
							<th style="text-align: center;">Start Date</th>
							<th style="text-align: center;">End Date</th>
							<th style="text-align: center;">Status</th>
							<th style="text-align: center;">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $news=1; ?>
						<?php foreach ($getDataNewProject as $key => $getDataNewProjects) : ?>
							<tr>
								
									<td style="padding-top: 15px;"><?= $getDataNewProjects->project_name ?></td>
									<td style="text-align: center;padding-top: 15px;"><?= $getDataNewProjects->start_date ?></td>
									<td style="text-align: center;padding-top: 15px;"><?= $getDataNewProjects->end_date ?></td>
									<td style="text-align: center;padding-top: 15px;">
											<?= $getDataNewProjects->status == 1 ?  '<span class=status-pending>Pending</span>' : ($getDataNewProjects->status == 2 ? '<span class=status-review>Review Inspector CV</span>' : '-')  ?>
										</span></td>
									<td style="text-align: center;"><input type="submit" class="btn btn-primary btn-view-detail" onclick="viewdetailnewproject('<?= $getDataNewProjects->id_project ?>')" value="View Detail"></td>

								
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
				<!-- <div class="container-fluid navigation-place">
					<nav aria-label="pagination-place">
						<ul class="pagination pull-right">
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">4</a></li>
							<li class="page-item"><a class="page-link" href="#">Next</a></li>
						</ul>
					</nav>
				</div> -->
			</div>
		</div>
	</div>
</div>

<!-- On Inpection -->
<div class="container-fluid">
	<div class="on-inpection">
		<span class="title">On Inspection</span>
		<div class="table-on-inpection-place">
			<div class="table-responsive">
				<table class="table table-striped dataTable">
					<thead>
						<tr>
							<th class="col-xs-4">Project Name</th>
							<th style="text-align: center;">Start Date</th>
							<th style="text-align: center;">End Date</th>
							<th style="text-align: center;">Status</th>
							<th style="text-align: center;">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($getDataOnInspection as $key => $getDataInspections) : ?>
							<td style="padding-top: 15px;"><?= $getDataInspections->project_name ?></td>
									<td style="text-align: center;padding-top: 15px;"><?= $getDataInspections->start_date ?></td>
									<td style="text-align: center;padding-top: 15px;"><?= $getDataInspections->end_date ?></td>
									<td style="text-align: center;padding-top: 15px;">
											<?= $getDataInspections->status == 3 ? '<span class=status-ongoing>On Going</span>' : ($getDataInspections->status == 4 ? '<span class=status-inspection>Inspection Report</span>' : '-')  ?>
										</span></td>
									<td style="text-align: center;"><a href="<?= base_url('index.php/client/DetailProject/detailProjectRequest'); ?>" class="btn btn-primary btn-view-detail">View Detail</a></td>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Project Done -->
<div class="container-fluid">
	<div class="project-done">
		<span class="title">Project Done</span>

		<div class="table-project-done-place">
			<div class="table-responsive">
				<table class="table table-striped dataTable">
					<thead>
						<tr>
							<th class="col-xs-4">Project Name</th>
							<th style="text-align: center;">Start Date</th>
							<th style="text-align: center;">End Date</th>
							<th style="text-align: center;">Status</th>
							<th style="text-align: center;">Action</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($getDataProjectDone as $key => $getDataProjectDones) : ?>
						<tr>
						<td style="padding-top: 15px;"><?= $getDataProjectDones->project_name ?></td>
									<td style="text-align: center;padding-top: 15px;"><?= $getDataProjectDones->start_date ?></td>
									<td style="text-align: center;padding-top: 15px;"><?= $getDataProjectDones->end_date ?></td>
									<td style="text-align: center;padding-top: 15px;"><span>
											<?= $getDataProjectDones->status == 5 ? '<span class=status-done>Done</span>' : '-'  ?>
										</span></td>
									<td style="text-align: center;padding-top: 15px;"><a href="<?= base_url('index.php/client/DetailProject/detailProjectRequest'); ?>" class="btn btn-primary btn-view-detail">View Detail</a></td>
									</tr>
					<?php endforeach ?>
					</tbody>
				</table>
				<!-- Line when data is empty -->
				<!-- <hr> -->
				<!-- <div class="container-fluid navigation-place">
					<nav aria-label="pagination-place">
						<ul class="pagination pull-right">
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">4</a></li>
							<li class="page-item"><a class="page-link" href="#">Next</a></li>
						</ul>
					</nav>
				</div> -->
			</div>
		</div>
	</div>
</div>

<a id="back2Top" title="Back to top" href="#"><img src="<?= base_url('assets/client/img/top-of-page.png') ?>"></a>

<div class="spacer"></div>