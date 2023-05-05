<?php
include '../../config.php';
$lawname=$_POST['lawname'];
$query="INSERT INTO tbl_law(lawname,date,time)VALUES('$lawname',curdate(),curtime())";
mysqli_query($connect, $query);
header('location:../addlawarea.php');
?>