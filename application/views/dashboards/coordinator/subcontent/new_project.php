<!-- Title  -->
<div class="container-fluid">
  <span class="title-text">New Project</span>
	<div class="title-new-project">
		<form action="<?= base_url('index.php/client/MyProject/newProjectDashboard'); ?>" method="post">
			<select class="filter-type" name="filtertype">
        <option value="alltype">All Type</option>
      </select>
      <select class="filter-report" name="filterreport">
        <option value="allreport">All Report</option>
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
			<div class="table-responsive">
				<table class="table table-striped dataTable">
					<thead>
						<tr>
							<th class="col-xs-4">Project Name</th>
							<th style="text-align: center;">Name Client</th>
							<th style="text-align: center;">Date Issue</th>
							<th style="text-align: center;">Type of Inspection</th>
              <th style="text-align: center;">Report</th>
              <th style="text-align: center;">Action</th>
						</tr>
					</thead>
					<tbody>
            <?php foreach ($dataNewProject as $key => $getDataNewProjects) : ?>
							<tr>
								<td style="padding-top: 15px;"><?= $getDataNewProjects['project_name'] ?></td>
								<td style="text-align: center;padding-top: 15px;"><?= $getDataNewProjects['client_name'] ?></td>
                <td style="text-align: center;padding-top: 15px;"><?= $getDataNewProjects['date_issue'] ?></td>
                <td style="text-align: center;padding-top: 15px;"><?= $getDataNewProjects['type_inspection'] ?></td>
                <td style="text-align: center;padding-top: 15px;">                                    
                <?= $getDataNewProjects['report'] == 1 ?  '<span class="status-newproject">New Project</span>' : 
                    ($getDataNewProjects['report'] == 2 ? '<span class="status-waitingapproval">Waiting Approval</span>' : 
                    ($getDataNewProjects['report'] == 3 ? '<span class="status-clientapproved">Client Approved</span>' : '-'))  ?></td>
								<td style="text-align: center;"><a href="#" class="btn btn-primary btn-view-detail">View</a></td>
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