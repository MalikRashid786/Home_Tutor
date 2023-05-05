<?php
include '../config.php';
sleep(2);
$lawyername=$_POST['lawyer_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$encriptpassword=md5($password);
$number=$_POST['number'];
// $licensenumber=$_POST['licensenumber'];
$language="--";
$pr_in_state="--";
$pr_in_district="--";
$pr_court="--";
$pr_area="0";
$casehandled="--";
$bar_enroll_date="0000-00-00";
$website="www.example.com";
$alternate_number="--";
$account_number="--";
$ifsc="--";
$state="--";
$district="--";
$locality="--";
$pincode="--";
$filename="avatar.svg";
$status="0";
$query1="SELECT * FROM tbl_user WHERE email='$email'";
$result1=mysqli_query($connect,$query1);
$query="SELECT * FROM tbl_lawyer WHERE email='$email'";
$result=mysqli_query($connect,$query);
if($row=mysqli_fetch_array($result) || $row1=mysqli_fetch_array($result1))
{
	echo "E-Mail already inserted.Please Try Again.";
}
else{
$query2="INSERT INTO tbl_lawyer(name,email,password,number,language,practicingarea,practicingcourt,practicingstate,practicingdistrict,casehandled,bar_enroll_date,	website,alt_number,account_number,ifsc,state,district,locality,pincode,filename,status,date_time) VALUES('$lawyername','$email','$encriptpassword','$number','$language','$pr_area','$pr_court','$pr_in_state','$pr_in_district','$casehandled','$bar_enroll_date','$website','$alternate_number','$account_number','$ifsc','$state','$district','$locality','$pincode','$filename','$status',now())";
    mysqli_query($connect,$query2);
    echo "1";
}
?>