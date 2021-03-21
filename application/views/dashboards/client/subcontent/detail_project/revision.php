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
            </a>
            
            <div class="line-active"> </div>
			<div class="circle-active"> <img src="<?php echo base_url();?>assets/img/icons/icon-book-active.png" style="margin: 30%; width:40%;"></div>
			<div class="line"> </div>
			<div class="circle"> <img src="<?php echo base_url();?>assets/img/icons/icon-check.png" style="margin: 30%; width:40%"></div>
			<div class="blank-left"></div>
		</div>
		<div class="alifia">
			<div class="text-alifi text-3">Revision</div>
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
                        <input type="button" class="btn-send" value="Agree">
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
                <span class="title2 text-color-main">Download Inspection Report</span>
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
                        <input type="button" class="btn-send" disabled value="Agree">
                    </a>
                </div>
            </div>
        <?php endif ?>

    </div>


    <!-- Last Inspection Report -->
    <div class="revision-place">
        <span class="title">Last Inspection report</span>
        <div class="table-revision-place-place">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-xs-5">Report Name</th>
                            <th class="col-xs-3" style="text-align: center;">Report at</th>
                            <th style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($getDataLastInspection as $key => $getDataLastInspections) : ?>
                            <tr>
                                <?php if ($key == 0) : ?>
                                    <td style="border: none;">
                                        <img src="<?= base_url('assets/client/img/report-icon.svg') ?>" alt="pt asri utama">
                                        &emsp;
                                        <?= $getDataLastInspections['report_name'] ?></td>
                                    <td style="text-align: center;border: none;"><?= $getDataLastInspections['report_at'] ?></td>
                                    <td style="text-align: center;border: none;">
                                        <a href="<?= base_url('index.php/client/MyProject/detailProjectRequest'); ?>" class="btn btn-primary btn-view">View</a>
                                        <a href="<?= base_url('index.php/client/MyProject/detailProjectRequest'); ?>" class="btn btn-primary btn-download">Download</a>
                                    </td>
                                <?php else : ?>
                                    <td>
                                        <img src="<?= base_url('assets/client/img/report-icon.svg') ?>" alt="pt asri utama">
                                        &emsp;
                                        <?= $getDataLastInspections['report_name'] ?></td>
                                    <td style="text-align: center;"><?= $getDataLastInspections['report_at'] ?></td>
                                    <td style="text-align: center;">
                                        <a href="<?= base_url('index.php/client/MyProject/detailProjectRequest'); ?>" class="btn btn-primary btn-view">View</a>
                                        <a href="<?= base_url('index.php/client/MyProject/detailProjectRequest'); ?>" class="btn btn-primary btn-download">Download</a>
                                    </td>

                                <?php endif ?>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <div class="container-fluid navigation-place">
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
                </div>
            </div>
        </div>
    </div>
</div>