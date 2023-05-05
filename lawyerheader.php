 <?php
include 'config.php';
include 'lawyer_rating.php';
include 'get_time_ago.php';
session_start();
if($_SESSION['lawyer']==""){
session_destroy();
header("location:404notfound.php?msg=3");
}
$session_email=$_SESSION['lawyer'];
$query="SELECT * FROM tbl_lawyer WHERE email='$session_email'";
$result=mysqli_query($connect,$query);
if($row=mysqli_fetch_array($result))
{
  $user_id=$row['lawyer_id'];
  $filename=$row['filename'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lawyer Online-Choose One who Support You</title>
	<link rel="icon" href="img/logo.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/argon-dashboard.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/aos.css">
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">    
  <link rel="stylesheet" type="text/css" href="css/all.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/nucleo.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="css/parsley.css"/>
  <link rel="stylesheet" type="text/css" href="css/pace-theme-flash.css">

</head>
<body>

<header id="home" class="fixed-top">
	<nav class="navbar navbar-expand-md navbar-light bg-white shadow">
    <div class="container">
      <!-- Brand -->
      <a class="navbar-brand pt-0 text-green" href="lawyerindex.php">
        <img src="img/home (1).png" class="img-fulid mt-1 " style="width: 28px;margin-bottom: 7px">
         <sub><sub><sub><sub><sub><sub><sub><sub><sub><span style="font-size: 12px;margin-left: -50px;">Home Tutor</span></sub></sub></sub></sub></sub></sub></sub></sub></sub>
      </a>
      <!-- User -->
      <ul class="nav align-items-center">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle bg-white">
                <div class="img-fluid float-left rounded-circle mt-1 " style="height: 30px;width: 30px;background-image: url(code/profileUpload/<?php echo $filename;?>); background-size: cover; background-position: center top;"></div>
              </span>
              <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo $session_email; ?></span>
                </div>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="lawyerindex.php" class="dropdown-item">
              <i class="ni ni-badge"></i>
              <span>My profile</span>
            </a>
            <a href="lawyerviewappointment.php" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Appointment</span>
            </a> 
            <a href="lawyerviewallquestion.php" class="dropdown-item">
              <i class="fa fa-question-circle" style="font-size: 15px"></i>
              <span>Question</span>
            </a>         
            <a href="lawyerviewanswere.php" class="dropdown-item">
              <i class="ni ni-single-copy-04"></i>
              <span>Answere</span>
            </a>
            <a href="lawyersendotp.php" class="dropdown-item">
              <i class="ni ni-settings"></i>
              <span>change Paaword</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="code/signout.php" class="dropdown-item">
              <i class="ni ni-button-power text-dark"></i>
              <span>Signout</span>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="text-default nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55" style="font-size: 18px"></i><sup><sup><sup><span class="bg-default text-white badge" style="padding: 3px;margin-left: -7px; font-size: 9px;height: 17px;border-radius: 100px;width: 17px">99+</span></sup></sup></sup>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <div class="col-xl-12" style="margin-bottom: -5px">
              <div class="row">
              <div class="col-xl-7 col-6">
                <h2 class="">Notification</h2>
              </div>
              <div class="col-xl-5 col-6 text-right">
                <small><a href="" class="nav-link">View All</a></small>
              </div>
            </div>
            </div>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item bg-secondary" href="#"><small> <span style="font-size: 12px">Yasmeen Raza is Booked Your Appointment.</span> <br/>2 mins ago</small>
            </a>
            <a class="dropdown-item" href="#"><small> <span style="font-size: 12px">Mohd. Raza Is Canceld Your Appointment.</span> <br/>6 weeks ago</small>
            </a>
            <a class="dropdown-item" href="#"><small> <span style="font-size: 12px">Shakir Hasan is Asked Question. Now You Reply</span> <br/>4 years ago</small>
            </a>  
            <a class="dropdown-item" href="#"><small> <span style="font-size: 12px">Shakir Hasan is Asked Question. Now You Reply</span> <br/>4 years ago</small>
            </a>  
            <a class="dropdown-item" href="#"><small> <span style="font-size: 12px">Shakir Hasan is Asked Question. Now You Reply</span> <br/>4 years ago</small>
            </a>  
            <a class="dropdown-item" href="#"><small> <span style="font-size: 12px">Shakir Hasan is Asked Question. Now You Reply</span> <br/>4 years ago</small>
            </a>  
            <a class="dropdown-item" href="#"><small> <span style="font-size: 12px">Shakir Hasan is Asked Question. Now You Reply</span> <br/>4 years ago</small>
            </a>          
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
<script type="text/javascript" src="js/argon-dashboard.min.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/pace.min.js"></script>
<script type="text/javascript" src="js/parsley.js"></script>
<script type="text/javascript" src="js/load_data.js"></script>
<script type="text/javascript" src="js/sweetalert.min.js"></script>
<script type="text/javascript" src="js/verification.js"></script>