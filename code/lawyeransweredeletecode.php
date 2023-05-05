<?php
include '../config.php';
$an_id=$_REQUEST["an_id"];
$query="DELETE FROM tbl_answere WHERE answered_id='$an_id'";
mysqli_query($connect, $query);
header('location:../lawyerviewanswere.php');
?>	