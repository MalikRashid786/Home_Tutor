<?php
include '../../config.php';
$districtname=$_POST['districtname'];
$state_id=$_POST['state_id'];
$query="INSERT INTO tbl_district(name,state_id,date,time)VALUES('$districtname','$state_id',curdate(),curtime())";
mysqli_query($connect, $query);
header('location:../adddistrict.php');
?>