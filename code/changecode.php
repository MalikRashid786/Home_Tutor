<?php
session_start();
include "config.php";
$old=$_POST['old'];
$np=$_POST['np'];
$cp=$_POST['cp'];
$email=$_SESSION['user'];
$query="select password from tbl_user where email='$email'";
$res=mysqli_query($conn,$query);
if($row=mysqli_fetch_array($res))
{
	$pp=$row['password'];
}
if($pp==$old)
	{
		if($old==$np)
		{
			header("location:change.php?msg=7");
		}
		else if($np==$cp)
		{
			$query2="update tbl_user set password='$cp' where email='$email'";
			mysqli_query($conn,$query2);
			session_destroy();
			header("location:login.php?msg=8");
		}
		else{
			header("location:change.php?msg=7");
			
		}
	}
	else
	{
		header("location:change.php?msg=7");
	}
?>