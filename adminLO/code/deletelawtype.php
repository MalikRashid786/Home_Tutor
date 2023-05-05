<?php
include '../../config.php';
$ltid=$_REQUEST["ltid"];
$query="DELETE FROM tbl_inlawtype WHERE lawtype_id='$ltid'";
mysqli_query($connect, $query);
header('location:../addlawtype.php');
?>	