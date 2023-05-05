<?php
include '../../config.php';
$lid=$_REQUEST["lid"];
$query="DELETE FROM tbl_law WHERE law_id='$lid'";
mysqli_query($connect, $query);
header('location:../addlawarea.php');
?>	