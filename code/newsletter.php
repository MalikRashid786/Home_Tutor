<?php
include '../config.php';
sleep(3);
$email=$_POST['email'];
$query1="SELECT * FROM tbl_newsletter WHERE email='$email'";
$result1=mysqli_query($connect, $query1);
if($row1=mysqli_fetch_array($result1))
{
  echo"0";
}
else{
	$query="INSERT INTO tbl_newsletter(email,date,time)VALUES('$email',curdate(),curtime())";
    mysqli_query($connect,$query);
    echo "1";
}
?>