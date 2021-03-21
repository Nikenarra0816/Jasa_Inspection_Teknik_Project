<div class="project-name">
    Inspection Request
</div>
<br><br>

<div class="detail-project-place">
    <iframe class="iframe-pdf" src="<?= base_url() ?>assets/client/doc/RUSMINTO_AUIPS.pdf" scrolling="auto"></iframe>
    <div class="content">
        <div class="title-place">
            <div class="title-name main-color-text">
                Project
            </div>
            <?php switch ($status) {
              case 'new':
                echo '<div class="status-new-project">New Project</div>';
                break;
              case 'waiting':
                echo '<div class="status-waiting-approval">Waiting Approval</div>';
                break;
              case 'client':
                echo '<div class="status-client-approved">Client Approved</div>';
                break;
            } ?>
        </div>

        <hr>

        <div class="group-info">
            <div class="group-info-place">
                <div class="label-title main-color">
                    Date of issue
                </div>
                <div class="label-desc text-color-main">
                    00/00/000
                </div>
            </div>

            <div class="group-info-place">
                <div class="label-title main-color">
                    Name Project
                </div>
                <div class="label-desc text-color-main">
                    Project 1
                </div>
            </div>

            <div class="group-info-place">
                <div class="label-title main-color">
                    Name Vendor
                </div>
                <div class="label-desc text-color-main">
                    Company ABC
                </div>
            </div>
            <div class="group-info-place">
                <div class="label-title main-color">
                    Vendor Address
                </div>
                <div class="label-desc text-color-main">
                    +6255555555555
                </div>
            </div>
            <div class="group-info-place">
                <div class="label-title main-color">
                    Type Of Inspection
                </div>
                <div class="label-desc text-color-main">
                    +6255555555555
                </div>
            </div>
            <div class="group-info-place">
                <div class="label-title main-color">
                    Telephone
                </div>
                <div class="label-desc text-color-main">
                    +6255555555555
                </div>
            </div>
        </div>
        <hr>
            <a href="#">
              <input type="button" class="btn-next" value="Choose Inspector Team" <?= $status == 'new' ? '' : 'disabled' ?>>
            </a>
            <p class="note-text">You can select more than one inspector based on the client's project inquiry.</p>
    </div>
</div>
<div class="spacer"></div>