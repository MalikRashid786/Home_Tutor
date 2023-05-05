<?php
sleep(3);
session_start();
include "../config.php";
$newpassword=$_POST['newpassword'];
$confpassword=$_POST['confpassword'];
$encripted_confpassword=md5($confpassword);

if (isset($_SESSION['user'])) {
 $session_email=$_SESSION['user'];
 $oldpassword=$_POST['oldpassword'];
 $encripted_Old_password=md5($oldpassword);
 $query="SELECT * FROM tbl_user WHERE email='$session_email'";
 $result=mysqli_query($connect,$query);
 if($row=mysqli_fetch_array($result)){
	$oldpass=$row['password'];}
 if($oldpass == $encripted_Old_password){
    if($oldpassword == $newpassword){
			// header("location:../userchangepassword.php?msg=6");
		echo "0";}
	else if($newpassword==$confpassword){
		$query2="UPDATE tbl_user SET password='$encripted_confpassword' WHERE email='$session_email'";
		mysqli_query($connect,$query2);
		session_destroy();
		echo "1";}
		else{
			 // header("location:../userchangepassword.php?msg=7");
			echo "00";}
	}
	else{
		// header("location:../userchangepassword.php?msg=8");
		echo "000";}
}else if (isset($_SESSION['lawyer'])) {
 $session_email=$_SESSION['lawyer'];
 $oldpassword=$_POST['oldpassword'];
$encripted_Old_password=md5($oldpassword);
 $query="SELECT * FROM tbl_lawyer WHERE email='$session_email'";
 $result=mysqli_query($connect,$query);
 if($row=mysqli_fetch_array($result)){
	$oldpass=$row['password'];}
 if($oldpass == $encripted_Old_password){
    if($oldpassword == $newpassword){
			// header("location:../userchangepassword.php?msg=6");
		echo "0";}
	else if($newpassword==$confpassword){
		$query2="UPDATE tbl_lawyer SET password='$encripted_confpassword' WHERE email='$session_email'";
		mysqli_query($connect,$query2);
		session_destroy();
		echo "1";}
		else{
			 // header("location:../userchangepassword.php?msg=7");
			echo "00";}
	}
	else{
		// header("location:../userchangepassword.php?msg=8");
		echo "000";}
}
// lawyer forget password code here
else if (isset($_SESSION['lawyer_email'])) {
$session_email=$_SESSION['lawyer_email'];
$query2="UPDATE tbl_lawyer SET password='$encripted_confpassword' WHERE email='$session_email'";
mysqli_query($connect,$query2);
session_destroy();
echo "1";
}
// user forget password here
else {
$session_email=$_SESSION['user_email'];
$query2="UPDATE tbl_user SET password='$encripted_confpassword' WHERE email='$session_email'";
mysqli_query($connect,$query2);
session_destroy();
echo "1";
}




?>