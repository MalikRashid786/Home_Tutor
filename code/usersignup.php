<?php
include '../config.php';
sleep(2);
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$password=$_POST['password'];
$encriptpassword= md5($password);
$alternate_number="--";
$state="--";
$district="--";
$locality="--";
$pincode="--";


$query="SELECT * FROM tbl_lawyer WHERE email='$email'";
$result=mysqli_query($connect,$query);
$query1="SELECT * FROM tbl_user WHERE email='$email'";
$result1=mysqli_query($connect,$query1);
if($row=mysqli_fetch_array($result) || $row1=mysqli_fetch_array($result1))
{
  echo "0";
}
else{
 $query="INSERT into tbl_user(name,email,mo_number,password,alternate_number,state,district,locality,pincode,date,time) VALUES('$name','$email','$number','$encriptpassword','$alternate_number','$state','$district','$locality','$pincode',curdate(),curtime())";
mysqli_query($connect,$query);
// header('location:../signin.php');
echo "1";
}
?>