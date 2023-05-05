<?php
include 'config.php';
if(isset($_POST["email"]))
{
  // if ($_POST['type']=="lawyer") { //Already Writers this code
  if ($_POST['email']) {
  	$newemail=mysqli_real_escape_string($connect,$_POST['email']);
	  $query="SELECT * FROM tbl_lawyer WHERE email='$newemail'";
	  $result=mysqli_query($connect,$query);
	  echo mysqli_num_rows($result);
  }else{
  	 $newemail=mysqli_real_escape_string($connect,$_POST['email']);
     $query="SELECT * FROM tbl_user WHERE email='$newemail'";
     $result=mysqli_query($connect,$query);
     echo mysqli_num_rows($result);
  }
}
?>