<?php
include '../config.php';
sleep(3);
$session_email=$_POST['session_email'];
$lawarea=$_POST['selectlaw'];
$title=$_POST['title'];
$newtitle=implode("", $title);
$description=$_POST['description'];
$newdescription=implode("", $description);
$selectreligion=$_POST['selectreligion'];
$selectstate=$_POST['selectstate'];
$selectdistrict=$_POST['selectdistrict'];
$pincode=$_POST['pincode'];
$number=$_POST['number'];
$query="INSERT INTO tbl_question(email,lawarea,title,description,religion,state,district,pincode,mo_number,date,time)VALUES('$session_email','$lawarea','$newtitle','$newdescription','$selectreligion','$selectstate','$selectdistrict','$pincode','$number',curdate(),curtime())";
mysqli_query($connect,$query);
echo "1";
?>