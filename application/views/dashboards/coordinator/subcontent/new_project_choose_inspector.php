<!-- Title  -->
<div class="container-fluid">
  <span class="title-text">Choose Inspector</span>
	<div class="title-new-project">
		<form action="<?= base_url('index.php/client/MyProject/newProjectDashboard'); ?>" method="post">
			<select class="filter-type" name="filterposition">
        <option value="alltype">All Position</option>
      </select>
      <select class="filter-report" name="filterstatus">
        <option value="allreport">All Status</option>
			</select>
		</form>
		<form>
			<div class="input-group">
				<input type="text" class="form-control search-engine-new-project" placeholder="Search Inspector Name">
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
				<table class="table table-striped">
					<thead>
						<tr>
							<th style="text-align: center;">N Selected</th>
							<th style="text-align: center;">Inspector Name</th>
							<th style="text-align: center;">Position</th>
							<th style="text-align: center;">Status Work</th>
              <th style="text-align: center;">Action</th>
						</tr>
					</thead>
					<tbody>
            <?php foreach ($dataNewProject as $key => $getDataNewProjects) : ?>
							<tr>
                <td style="text-align: center; padding-top: 15px;">
                  <input type="checkbox">
                </td>
								<td style="text-align: center;padding-top: 15px;"><?= $getDataNewProjects['inspector_name'] ?></td>
                <td style="text-align: center;padding-top: 15px;"><?= $getDataNewProjects['position'] ?></td>
                <td style="text-align: center;padding-top: 15px;">                                    
                <?= $getDataNewProjects['status'] == 0 ?  '<span class="status-inspectoravailable">Available</span>' : 
                    ($getDataNewProjects['status'] == 1 ? '<span class="status-inspectorbooking">Booking</span>' : '-')  ?></td>
								<td style="text-align: center;"><a href="#" class="btn btn-primary btn-view-detail"><img src="<?= base_url('assets/coordinator/img/eye.svg') ?>" alt=""></a></td>
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