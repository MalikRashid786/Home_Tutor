<?php
include '../../config.php';
$courtname=$_POST['courtname'];
$query="INSERT INTO tbl_practicingcourt(courtname,date,time)VALUES('$courtname',curdate(),curtime())";
mysqli_query($connect, $query);
header('location:../addpracticingcourt.php');
?>