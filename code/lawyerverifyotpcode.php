<?php
include '../config.php';
$otp=$_POST['otp'];
$appointment_id=$_POST['appointment_id'];
$query= "SELECT * FROM tbl_otp WHERE appointment_id='$appointment_id'";
$result=mysqli_query($connect,$query);
if($row=mysqli_fetch_array($result)){
	$verifyotp=$row['otp'];
	if($verifyotp==$otp){	
	$query="UPDATE tbl_otp SET status=1 WHERE appointment_id='$appointment_id'";
	    mysqli_query($connect,$query);
	    header('location:../lawyerotphistory.php?msg=1');
	}
	else
	{
	 header('location:../lawyerotphistory.php?msg=0');
	}
}

?>