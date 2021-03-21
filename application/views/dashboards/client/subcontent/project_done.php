<!-- Title  -->
<div class="container-fluid">
	<div class="title-project-done">
		<span class="title-text">
			Project Done
		</span>
		<form>
			<div class="input-group">
				<input type="text" class="form-control search-engine-project-done" placeholder="Search Project">
				<div class="input-group-btn btn-search-project-done-place">
					<button class="btn btn-default btn-search-project-done" type="submit">
						Search
					</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!-- Table -->
<div class="container-fluid">
	<div class="detail-project-done">
		<div class="table-detail-project-done-place">
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
						<td style="padding-top: 15px;"><?= $getDataProjectDones->project_name ?></td>
									<td style="text-align: center;padding-top: 15px;"><?= $getDataProjectDones->start_date ?></td>
									<td style="text-align: center;padding-top: 15px;"><?= $getDataProjectDones->end_date ?></td>
									<td style="text-align: center;padding-top: 15px;"><span>
											<?= $getDataProjectDones->status == 5 ? '<span class=status-done>Done</span>' : '-'  ?>
										</span></td>
									<td style="text-align: center;padding-top: 15px;"><a href="<?= base_url('index.php/client/MyProject/detailProjectRequest'); ?>" class="btn btn-primary btn-view-detail">View Detail</a></td>
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