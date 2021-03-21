<!doctype html>
<html lang="en">

<head>
  <title><?= $title ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- VENDOR CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/coordinator/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/coordinator/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/coordinator/vendor/linearicons/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
  <!-- MAIN CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/coordinator/css/main.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/coordinator/css/const-color.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/coordinator/css/custom-main.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/coordinator/css/popup-modal.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/coordinator/css/dashboard.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/coordinator/css/view-history-inspector.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/coordinator/css/settings-profile.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/coordinator/css/new-project.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/coordinator/css/inspection-request.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/sweet-alert2/sweetalert2.min.css">
  <!-- ICONS -->
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url(); ?>assets/coordinator/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url(); ?>assets/coordinator/img/favicon.png">
  <!-- Script -->
  <!-- <script src="<?= base_url(); ?>assets/coordinator/scripts/dropzone.min.js"></script> -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>assets/sweet-alert2/sweetalert2.min.js"></script>
</head>

<body>
  <!-- WRAPPER -->
  <div id="wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="brand">
        <a><img src="<?= base_url(); ?>assets/coordinator/img/logo-name.svg" alt="Asri Utama Logo"></a>
      </div>
      <div class="container-fluid">
        <div class="navbar-form navbar-left title-navbar">Coordinator</div>
        <!-- <form class="navbar-form navbar-left">
          <div class="input-group">
            <input type="text" value="" class="form-control" placeholder="Search dashboard...">
            <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
          </div>
        </form> -->
        <div id="navbar-menu">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                <i class="lnr lnr-alarm"></i>
                <span class="badge bg-danger">5</span>
              </a>
              <div class="dropdown-menu notifications">
                <div class="notif-item notif-item-active">
                  <a href="#">
                    <span class="message">Coordinator choosed inspector for Project A</spam>
                    <br><span class="time">28 minutes ago</span><br>
                    <div class="button-container">
                      <button class="btn btn-info">Review</button>
                    </div>
                  </a>
                </div>
                <div class="notif-item">
                  <a href="#">
                    <span class="message">Coordinator choosed inspector for Project A</span><br>
                    <span class="time">28 minutes ago</span>
                  </a>
                </div>
                <div class="notif-item">
                  <a href="#">
                    <span class="message">Coordinator choosed inspector for Project A</span><br>
                    <span class="time">28 minutes ago</span>
                  </a>
                </div>
                <!-- <div><a href="#" class="notif-more">See all notifications</a></div> -->
              </div>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span>Galih Putra</span>
                <img src="<?= base_url(); ?>assets/coordinator/img/user.png" class="img-circle" alt="Avatar"> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="<?= base_url('index.php/client/MyProject/settingsProfile') ?>"><i class="lnr lnr-user"></i> <span>Settings Profile</span></a></li>
                  <!-- <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
    <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
    <li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li> -->
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav nav-modif">
            <li><a href="<?= base_url('coordinator/Project') ?>" class="<?= ($this->uri->segment(2) == "Project") ? 'active' : '' ?>"><img src="<?= base_url(); ?>assets/coordinator/img/revision.svg">&nbsp;&nbsp;&nbsp;&nbsp; Dashboard</span></a></li>
            <li>
              <a href="#subPages" data-toggle="collapse" class="collapsed"><img src="<?= base_url(); ?>assets/coordinator/img/myproject.svg">&nbsp;&nbsp;&nbsp; Project <i class="icon-submenu lnr lnr lnr-chevron-left"></i></a>
              <div id="subPages" class="collapse ">
                <ul class="nav">
                  <li><a href="page-profile.html" class="">New Project</a></li>
                  <li><a href="page-login.html" class="">Assignment Instruction</a></li>
                  <li><a href="page-lockscreen.html" class="">On Progress</a></li>
                  <li><a href="page-lockscreen.html" class="">Report Submitted</a></li>
                </ul>
              </div>
            </li>
            <li><a href="<?= base_url('client/Invoice') ?>" class="<?= $this->uri->segment(2) == "Invoice" ? 'active' : '' ?>"><img src="<?= base_url(); ?>assets/coordinator/img/revision.svg">&nbsp;&nbsp;&nbsp;&nbsp; Revision</span></a></li>
            <li><a href="<?= base_url('client/Invoice') ?>" class="<?= $this->uri->segment(2) == "Invoice" ? 'active' : '' ?>"><img src="<?= base_url(); ?>assets/coordinator/img/done.svg">&nbsp;&nbsp;&nbsp;&nbsp; Done</span></a></li>
            <li><a href="<?= base_url('client/Invoice') ?>" class="<?= $this->uri->segment(2) == "Invoice" ? 'active' : '' ?>"><img src="<?= base_url(); ?>assets/coordinator/img/team.svg">&nbsp;&nbsp;&nbsp;&nbsp; Team</span></a></li>
          </ul>
          <div class="logout" data-toggle="modal" data-target="#logoutModal">
            <img src="<?= base_url(); ?>assets/coordinator/img/logout-icon.svg">&nbsp;&nbsp;&nbsp;Logout
          </div>
        </nav>
      </div>
    </div>
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN -->
    <div class="main">
      <!-- MAIN CONTENT -->
      <div class="main-content">
        <div class="container-fluid">
          <!-- OVERVIEW -->
          <?php $this->load->view($content) ?>
          <!-- Include Popup Modal -->
          <?php $this->load->view('dashboards/client/subcontent/popup_modal') ?>
          <!-- END OVERVIEW -->

        </div>
      </div>
      <!-- END MAIN CONTENT -->
    </div>
    <!-- END MAIN -->
    <div class="clearfix"></div>
    <div class="footer">
      <div class="text-telp">
        <img src="<?= base_url('assets/coordinator/img/phone.svg') ?>">
        &nbsp;
        +62 888 868 4000
      </div>
      <div class="text-email">
        <img src="<?= base_url('assets/coordinator/img/email.svg') ?>">
        &nbsp;
        asriutamaservice@gmail.com
      </div>

    </div>
    <!-- <footer>
    <div class="container-fluid">
      <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
    </div>
  </footer> -->

  </div>

  <!-- END WRAPPER -->
  <!-- Javascript -->
  <script type="text/javascript">
      var base_url = '<?php echo base_url() ?>';
  </script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>assets/coordinator/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>assets/coordinator/scripts/custome-datepicker.js"></script>
  <script src="<?= base_url(); ?>assets/coordinator/scripts/detail-project.js"></script>
  <script src="<?= base_url(); ?>assets/coordinator/scripts/config-dropzone.js"></script>
  <script src="<?= base_url(); ?>assets/coordinator/scripts/custome.js"></script>
  <script src="<?= base_url(); ?>assets/coordinator/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <script src="<?= base_url(); ?>assets/coordinator/scripts/klorofil-common.js"></script>

</body>

</html>