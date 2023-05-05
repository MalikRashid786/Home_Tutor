<?php

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link rel="icon" href="images/download.png" >
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/animate.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/argon-dashboard.min.css">
  <link rel="stylesheet" type="text/css" href="../css/parsley.css"/>
</head>
<body>
<!--------------------Menu Section----------------->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->

      <a class="navbar-brand pt-0" href="index.php">
       <h1>Dashboard</h1>
      </a>
         <!-- <button type="button" class="navbar-search navbar-search-dark mr-3 d-md-none ml-lg-auto btn navbar mt-2 mr-4 float-right"data-aos="fade-down" data-toggle="modal" data-target="#example" data-whatever="@mdo"><i class="fa fa-search" style="font-size: 20px"></i></button> -->
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="index.php">
              <h1>Dashboard</h1>  
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item display-4">
          <a class=" nav-link display-4" href="index.php"> <i class="fa fa-tv"></i> Dashboard
            </a>
          </li>
          <!-- <li class="nav-item display-4">
            <a class="nav-link " href="addlawarea.php">
              <i class="fa fa-gavel"></i>Law Area
            </a>
          </li> -->
          <li class="nav-item display-4">
            <a class="nav-link " href="addlawtype.php">
              <i class="fa fa-book"></i>Subjects
            </a>
          </li>
          <li class="nav-item display-4">
            <a class="nav-link " href="addstate.php">
              <i class="fa fa-gift"></i>State
            </a>
          </li>
          <li class="nav-item display-4">
            <a class="nav-link " href="adddistrict.php">
              <i class="fa fa-product-hunt"></i>District
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link display-4" href="addpracticingcourt.php">
              <i class="fa fa-bank"></i>Current College/University
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link display-4" href="addlanguage.php">
              <i class="fa fa-language"></i>Language
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link display-4" href="sendotp.php">
              <i class="fa fa-language"></i> Send OTP
            </a>
          </li> -->
           <!-- <li class="nav-item">
            <a class="nav-link display-4" href="lawyerpayment.php">
              <i class="fa fa-language"> </i> Lawyer Payments 
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link display-4" href="viewalluser.php">
              <i class="fa fa-user"></i> View User
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link display-4" href="viewalllawyer.php">
              <i class="fa fa-tag"></i> View Teachers
            </a>
          </li>
        </ul>
       
      </div>
    </div>
  </nav>
  <div class="main-content" style="overflow-x: hidden;" >
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-light" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <!-- <a class="h2 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="index.php">Dashboard</a> -->
        <!-- Form -->
        <!--  <button type="button" class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto btn navbar text-white bg-dark mr-4 mb-3 float-right"data-aos="fade-down"><i class="fa fa-search" style="font-size: 20px"></i></button> -->
      </div>
    </nav>
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/argon-dashboard.js"></script>
<script type="text/javascript" src="../js/parsley.js"></script>