<?php
include '../config.php';
sleep(2);
session_start();
if (isset($_POST['email'])) {
$email=$_POST['email'];
$query="SELECT * FROM tbl_user WHERE email='$email'";
$result=mysqli_query($connect,$query);
$count=mysqli_num_rows($result);
if ($count>0) {
	if($row=mysqli_fetch_array($result)){
	  $number=$row['mo_number'];
	  $_SESSION['number']=$number;
	  $_SESSION['user_email']=$email;
	  echo"1";
	}else{
	 echo "0";
	}
}else{
	$query="SELECT * FROM tbl_lawyer WHERE email='$email'";
    $result=mysqli_query($connect,$query);
	// $count_lawyer=mysqli_num_rows($result);	
	if($row=mysqli_fetch_array($result)){
	  $number=$row['number'];
	  $_SESSION['number']=$number;
	  $_SESSION['lawyer_email']=$email;
	  echo "1";
	}else{
	  echo "0";
	}
}
}
?>