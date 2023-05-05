<?php
include '../config.php';
$question_id=$_POST['question_id'];
$session_email=$_POST['session_email'];
$answerediscription=$_POST['answerediscription'];
$query="INSERT INTO tbl_answere(answered,lawyer_email,question_id,date,time) VALUES('$answerediscription','$session_email','$question_id',curdate(),curtime())";
mysqli_query($connect,$query);
header('location:../lawyerviewanswere.php');
?>