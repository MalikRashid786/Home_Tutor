<?php
include '../../config.php';
$lawname=$_POST['lawtypename'];
$lawarea_id=$_POST['lawarea_id'];
$fontcode=$_POST['fontcode'];
$query="INSERT INTO tbl_inlawtype(areaname,lawarea_id,areafontcode,date,time)VALUES('$lawname','$lawarea_id','$fontcode',curdate(),curtime())";
mysqli_query($connect, $query);
header('location:../addlawtype.php');
?>
  
