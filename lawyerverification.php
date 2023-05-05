<?php
include 'config.php';
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
  $lawyer_id=$row['lawyer_id'];
  $name=$row['name'];
  $license_number=$row['license_number'];
  $date_time=$row['date_time'];
}
$valid_license_number="UP123ST1";
?>

<!DOCTYPE html>
<html>
<head>
  	<title>Lawyer Online-Choose One who Support You</title>
  	<link rel="icon" href="images/favicon.png">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/argon-dashboard.min.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css"/>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
  	<script type="text/javascript" src="js/argon-dashboard.js"></script>
</head>
<body class="text-center bg-white">

<?php if($valid_license_number!=$license_number){?>

<div class="container bg-white">
<h1 class="mt-2 display-2">Verification of Your Profile</h1>
<img src="img/undraw_processing_thoughts_d8ha.png" class="img-fluid" style="height: 420px">
<h1 class="mt-1 mb-1">Your Profile Will Be in 30 Second.</h1>
<h2 class="mt-2">Name:- <?php echo$name;?><br/>License Number:- <?php echo$license_number;?></h2>
<!-- <button class="btn btn-default mt-2">Sign in</button> -->
<i class="fa fa-spinner fa-spin mt-1" style="font-size: 30px"></i>
</div>



<?php
// sleep(5);
header('location:lawyerindex.php');
}
else{
}
?>
</body>
</html>


