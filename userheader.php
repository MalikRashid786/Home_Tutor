<?php
session_start();
if ($_SESSION['user'] == "") {
  session_destroy();
  header("location:404notfound.php?msg=3");
}
$session_email = $_SESSION['user'];
include 'config.php';
include 'lawyer_rating.php';
include 'get_time_ago.php';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lawyer Online-Choose One who Support You</title>
  <link rel="icon" href="img/home (1).png">

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/argon-dashboard.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/aos.css">
  <link rel="stylesheet" type="text/css" href="css/animate.min.css">
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/nucleo.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="css/parsley.css" />
  <link rel="stylesheet" type="text/css" href="css/pace-theme-flash.css">
</head>

<body>
  <header id="home" class="fixed-top">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow">
      <div class="container">
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="userindex.php">
          <img src="img/home (1).png" class="img-fulid mt-1 " style="width: 28px;margin-bottom: 7px">
          <sub><sub><sub><sub><sub><sub><sub><sub><sub><span style="font-size: 12px;margin-left: -48px;"> Home Tutor</span></sub></sub></sub></sub></sub></sub></sub></sub></sub>
        </a>
        <!-- User -->
        <ul class="nav align-items-center">
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <!-- <i class="ni ni-circle-08 text-default" style="font-size: 25px"></i> -->

                <img src="img/profile_pic.png" class="img-fluid" style="width: 35px">
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="text-sm  font-weight-bold"><?php echo $session_email ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="userprofile.php" class="dropdown-item">
                <i class="ni ni-badge"></i>
                <span>My profile</span>
              </a>
              <a href="userappointmenthistory.php" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Appointment</span>
              </a>
              <!-- <a href="userpaymenthistory.php" class="dropdown-item">
              <i class="ni ni-money-coins"></i>
              <span>Payment</span>
            </a>  -->
              <a href="userquestionhistory.php" class="dropdown-item">
                <i class="ni ni-single-copy-04"></i>
                <span>Question</span>
              </a>
              <a href="usersendotp.php" class="dropdown-item">
                <i class="ni ni-settings"></i>
                <span>change Paaword</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="code/signout.php" class="dropdown-item">
                <i class="ni ni-button-power text-dark text-bold"></i>
                <span>Signout</span>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link nav-link-icon mt-1" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-bell"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="js/aos.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/sweetalert.min.js"></script>
  <script type="text/javascript" src="js/argon-dashboard.min.js"></script>
  <script type="text/javascript" src="js/parsley.js"></script>
  <script type="text/javascript" src="js/pace.min.js"></script>
  <script type="text/javascript" src="js/verification.js"></script>