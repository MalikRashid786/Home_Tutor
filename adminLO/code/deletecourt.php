<?php
include '../../config.php';
$ctid=$_REQUEST["ctid"];
$query="DELETE FROM tbl_practicingcourt WHERE practicingcourt_id='$ctid'";
mysqli_query($connect, $query);
header('location:../addpracticingcourt.php');
?>	