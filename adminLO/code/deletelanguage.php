<?php
include '../../config.php';
$lnid=$_REQUEST["lnid"];
$query="DELETE FROM tbl_language WHERE lan_id='$lnid'";
mysqli_query($connect, $query);
header('location:../addlanguage.php');
?>	