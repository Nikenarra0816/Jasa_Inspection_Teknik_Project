<!-- Title  -->
<div class="container-fluid">
	<div class="title-new-project">
		<a href="<?= base_url('index.php/client/MyProject') ?>" class="btn-back">
			<img src="<?= base_url() ?>assets/client/img/left-arrow-long.svg">&nbsp; Back Page
		</a>
		<form action="<?= base_url('index.php/client/MyProject/newProjectDashboard'); ?>" method="post">
			<select class="filter-status" name="filterstatus">
				<?php if ($filterNewProject == 'allStatus') : ?>
					<option value="allStatus" selected>All Status</option>
					<option value="pending">Pending</option>
					<option value="review">Review Inspector CV</option>
				<?php elseif ($filterNewProject == 'pending') : ?>
					<option value="allStatus">All Status</option>
					<option value="pending" selected>Pending</option>
					<option value="review">Review Inspector CV</option>
				<?php else :?>
					<option value="allStatus">All Status</option>
					<option value="pending">Pending</option>
					<option value="review" selected>Review Inspector CV</option>
				<?php endif ?>
			</select>
		</form>
		<form>
			<div class="input-group">
				<input type="text" class="form-control search-engine-new-project" placeholder="Search Project">
				<div class="input-group-btn btn-search-new-project-place">
					<button class="btn btn-default btn-search-new-project" type="submit">
						Search
					</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!-- Table -->
<div class="container-fluid">
	<div class="detail-new-project">
		<div class="table-detail-new-project-place">
			<span class="title-text">
				New Project
			</span>
			<div class="table-responsive">
				<table class="table table-striped dataTable">
					<thead>
						<tr>
							<th class="col-xs-4">Name Project</th>
							<th style="text-align: center;">Start Date</th>
							<th style="text-align: center;">End Date</th>
							<th style="text-align: center;">Status</th>
							<th style="text-align: center;">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($getDataNewProject as $key => $getDataNewProjects) : ?>
							<tr>

								<td style="padding-top: 15px;"><?= $getDataNewProjects->project_name ?></td>
								<td style="text-align: center;padding-top: 15px;"><?= $getDataNewProjects->start_date ?></td>
								<td style="text-align: center;padding-top: 15px;"><?= $getDataNewProjects->end_date ?></td>
								<td style="text-align: center;padding-top: 15px;">
									<?= $getDataNewProjects->status == 1 ?  '<span class=status-pending>Pending</span>' : ($getDataNewProjects->status == 2 ? '<span class=status-review>Review Inspector CV</span>' : '-')  ?>
									</span></td>
								<td style="text-align: center;"><a href="<?= base_url('index.php/client/MyProject/detailProjectRequest'); ?>" class="btn btn-primary btn-view-detail">View Detail</a></td>


							</tr>
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