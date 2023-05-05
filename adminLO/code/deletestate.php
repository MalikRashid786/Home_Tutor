<?php
include '../../config.php';
$stid=$_REQUEST["stid"];
$query="DELETE FROM tbl_state WHERE state_id='$stid'";
mysqli_query($connect, $query);
header('location:../addstate.php');
?>	