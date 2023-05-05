<?php
include '../../config.php';
$dtid=$_REQUEST["dtid"];
$query="DELETE FROM tbl_district WHERE district_id='$dtid'";
mysqli_query($connect, $query);
header('location:../adddistrict.php');
?>	