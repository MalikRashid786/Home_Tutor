<?php
session_start();
include '../config.php';
$who=$_POST['selectuser'];
$email=$_POST['email'];
$password=$_POST['password'];
$encriptpassword=md5($password);
if ($who==1) {
    $query="SELECT * FROM tbl_lawyer WHERE email='$email' AND password='$encriptpassword'";
    $res=mysqli_query($connect,$query);
    if($row=mysqli_fetch_array($res))
    {
    	$_SESSION['lawyer']=$email;
    	header('location:../lawyerverification.php');
    }
    else
    {
    	header('location:../signin.php?msg=0');
    	session_destroy();
    }
}
else
{
	$query="SELECT * FROM tbl_user WHERE email='$email' AND password='$encriptpassword'";
    $res=mysqli_query($connect,$query);
    if($row=mysqli_fetch_array($res))
    {
    	 $_SESSION['user']=$email;
    	header('location:../userindex.php');
    }
    else
    {
    	header('location:../signin.php?msg=0');
    	session_destroy();
    }
}
?>
