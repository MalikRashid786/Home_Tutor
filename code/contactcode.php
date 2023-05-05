<?php
include '../config.php';
sleep(2);
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$description=$_POST['description'];
$query="INSERT INTO tbl_contact(name,email,subject,description,date,time) VALUES('$name','$email','$subject','$description',curdate(),curtime())";
mysqli_query($connect,$query);
echo "1";
?>