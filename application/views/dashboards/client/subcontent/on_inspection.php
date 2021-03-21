<!-- Title  -->
<div class="container-fluid">
	<div class="title-on-inspection">
		<a href="<?= base_url('index.php/client/MyProject') ?>" class="btn-back">
			<img src="<?= base_url() ?>assets/client/img/left-arrow-long.svg">&nbsp; Back Page
		</a>
		<form action="<?= base_url('index.php/client/MyProject/onInspectionDashboard'); ?>" method="post">
			<select class="filter-status" name="filterstatus">
				<?php if ($filterInspection == 'allStatus') : ?>
					<option value="allStatus" selected>All Status</option>
					<option value="ongoing">Ongoing</option>
					<option value="inspection">Inspection Report</option>
				<?php elseif ($filterInspection == 'ongoing') : ?>
					<option value="allStatus">All Status</option>
					<option value="ongoing" selected>Ongoing</option>
					<option value="inspection">Inspection Report</option>
				<?php else :?>
					<option value="allStatus">All Status</option>
					<option value="ongoing">Ongoing</option>
					<option value="inspection" selected>Inspection Report</option>
				<?php endif ?>
			</select>
		</form>
		<form>
			<div class="input-group">
				<input type="text" class="form-control search-engine-on-inspection" placeholder="Search Project">
				<div class="input-group-btn btn-search-on-inspection-place">
					<button class="btn btn-default btn-search-on-inspection" type="submit">
						Search
					</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!-- Table -->
<div class="container-fluid">
	<div class="detail-on-inspection">
		<div class="table-detail-on-inspection-place">
		<span class="title-text">
			On Inspection
		</span>
			<div class="table-responsive">
				<table class="table table-striped dataTable">
					<thead>
						<tr>
							<th class="col-xs-4"><?= $filterInspection?></th>
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
									<td style="text-align: center;"><a href="<?= base_url('index.php/client/MyProject/detailProjectRequest'); ?>" class="btn btn-primary btn-view-detail">View Detail</a></td>
						<?php endforeach ?>
					</tbody>
				</table>
				<!-- <div class="container-fluid navigation-place">
					<nav aria-label="pagination-place">
						<ul class="pagination pull-right">
							<li class="page-item"><a class="page-link" href="#">Previous</a></li>
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

<div class="spacer"></div>