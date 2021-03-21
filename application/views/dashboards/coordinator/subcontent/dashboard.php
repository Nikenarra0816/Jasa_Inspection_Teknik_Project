<!-- Indicator -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <a href="<?= base_url() ?>index.php/client/MyProject/newProjectDashboard">
                <div class="indicator-menu">
                    <div class="indicator-counter">
                        <img src="<?= base_url() ?>assets/client/img/new-project.svg">
                    </div>
                    <div class="indicator-title">
                        <div class="indicator-title-count">1000</div>
                        <div class="indicator-title-title">
                            <div>New</div> Project
                        </div>
                    </div>
                    <!-- <div class="indicator-icon">
                        <img src="<?= base_url() ?>assets/client/img/arrow-right.svg">
                    </div> -->
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="<?= base_url() ?>index.php/client/MyProject/onInspectionDashboard">
                <div class="indicator-menu">
                    <div class="indicator-counter">
                        <img src="<?= base_url() ?>assets/coordinator/img/on-inspection.svg">
                    </div>
                    <div class="indicator-title">
                        <div class="indicator-title-count">12</div>

                        <div class="indicator-title-title">
                            <div>Assignment</div> Instruction
                        </div>
                    </div>
                    <!-- <div class="indicator-icon">
                        <img src="<?= base_url() ?>assets/client/img/arrow-right.svg">
                    </div> -->
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="<?= base_url() ?>index.php/client/MyProject/projectDoneDashboard">
                <div class="indicator-menu">
                    <div class="indicator-counter">
                        <img src="<?= base_url() ?>assets/coordinator/img/timerpro.svg">
                    </div>
                    <div class="indicator-title">
                        <div class="indicator-title-count">12</div>

                        <div class="indicator-title-title">
                            <div>On</div> Progress
                        </div>
                    </div>
                    <!-- <div class="indicator-icon">
                        <img src="<?= base_url() ?>assets/client/img/arrow-right.svg">
                    </div> -->
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="<?= base_url() ?>index.php/client/MyProject/projectDoneDashboard">
                <div class="indicator-menu">
                    <div class="indicator-counter">
                        <img src="<?= base_url() ?>assets/coordinator/img/project-done.svg">
                    </div>
                    <div class="indicator-title">
                        <div class="indicator-title-count">12</div>

                        <div class="indicator-title-title">
                            <div>Report</div> Submitted
                        </div>
                    </div>
                    <!-- <div class="indicator-icon">
                        <img src="<?= base_url() ?>assets/client/img/arrow-right.svg">
                    </div> -->
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
                            <th style="text-align: center;">Client Name</th>
                            <th style="text-align: center;">Date Issue</th>
                            <th style="text-align: center;">Type Of Inspection</th>
                            <th style="text-align: center;">Report</th>
                            <th style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataNewProject as $dataNewProjects) : ?>
                            <tr>
                                <td style="padding-top: 15px;"><?= $dataNewProjects['project_name'] ?></td>
                                <td style="padding-top: 15px;"><?= $dataNewProjects['client_name'] ?></td>
                                <td style="padding-top: 15px;"><?= $dataNewProjects['date_issue'] ?></td>
                                <td style="padding-top: 15px;"><?= $dataNewProjects['type_inspection'] ?></td>
                                <td style="padding-top: 15px;">
                                    <?= $dataNewProjects['report'] == 1 ?  '<span class="status-newproject">New Project</span>' : 
                                    ($dataNewProjects['report'] == 2 ? '<span class="status-waitingapproval">Waiting Approval</span>' : 
                                    ($dataNewProjects['report'] == 3 ? '<span class="status-clientapproved">Client Approved</span>' : '-'))  ?>
                                </td>
                                <td><input type="submit" class="btn btn-primary btn-view-detail" value="View"></td>
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
    <div class="new-project">
        <span class="title">Assignment Instruction</span>

        <div class="table-new-project-place">
            <div class="table-responsive">
                <table class="table table-striped dataTable">
                    <thead>
                        <tr>
                            <th class="col-xs-4">Project Name</th>
                            <th style="text-align: center;">Client Name</th>
                            <th style="text-align: center;">Date Issue</th>
                            <th style="text-align: center;">Type Of Inspection</th>
                            <th style="text-align: center;">Report</th>
                            <th style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding-top: 15px;">a</td>
                            <td style="padding-top: 15px;">asas</td>
                            <td style="padding-top: 15px;">asdsad</td>
                            <td style="padding-top: 15px;">sada</td>
                            <td style="padding-top: 15px;">sada</td>
                            <td><input type="submit" class="btn btn-primary btn-view-detail" value="View"></td>
                        </tr>
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

<!-- New Project -->
<div class="container-fluid">
    <div class="new-project">
        <span class="title">On Progress</span>

        <div class="table-new-project-place">
            <div class="table-responsive">
                <table class="table table-striped dataTable">
                    <thead>
                        <tr>
                            <th class="col-xs-4">Project Name</th>
                            <th style="text-align: center;">Client Name</th>
                            <th style="text-align: center;">Date Issue</th>
                            <th style="text-align: center;">Type Of Inspection</th>
                            <th style="text-align: center;">Report</th>
                            <th style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding-top: 15px;">a</td>
                            <td style="padding-top: 15px;">asas</td>
                            <td style="padding-top: 15px;">asdsad</td>
                            <td style="padding-top: 15px;">sada</td>
                            <td style="padding-top: 15px;">sada</td>
                            <td><input type="submit" class="btn btn-primary btn-view-detail" value="View"></td>
                        </tr>
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

<!-- Project Done -->
<div class="container-fluid">
    <div class="new-project">
        <span class="title">Report Submitted</span>

        <div class="table-new-project-place">
            <div class="table-responsive">
                <table class="table table-striped dataTable">
                    <thead>
                        <tr>
                            <th class="col-xs-4">Project Name</th>
                            <th style="text-align: center;">Client Name</th>
                            <th style="text-align: center;">Date Issue</th>
                            <th style="text-align: center;">Type Of Inspection</th>
                            <th style="text-align: center;">Report</th>
                            <th style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding-top: 15px;">a</td>
                            <td style="padding-top: 15px;">asas</td>
                            <td style="padding-top: 15px;">asdsad</td>
                            <td style="padding-top: 15px;">sada</td>
                            <td style="padding-top: 15px;">sada</td>
                            <td><input type="submit" class="btn btn-primary btn-view-detail" value="View"></td>
                        </tr>
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

<a id="back2Top" title="Back to top" href="#"><img src="<?= base_url('assets/client/img/top-of-page.png') ?>"></a>

<div class="spacer"></div>

<script type="text/javascript">
function showNotification() { 
  Swal.fire({
    title: 'Success',
    text: 'Inspector\'s CV sent to client',
    imageUrl: '<?= base_url('assets/coordinator/img/success-icon.svg') ?>',
    imageWidth: 400,
    imageHeight: 200,
    imageAlt: 'Custom image',
  });
}
</script>