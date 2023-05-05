<?php
include '../../config.php';
$statename=$_POST['statename'];
$query="INSERT INTO tbl_state(name,date,time)VALUES('$statename',curdate(),curtime())";
mysqli_query($connect, $query);
header('location:../addstate.php');
?>