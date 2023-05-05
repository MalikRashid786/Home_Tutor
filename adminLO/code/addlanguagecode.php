<?php
include '../../config.php';
$languagename=$_POST['languagename'];
$query="INSERT INTO tbl_language(languagename,date,time)VALUES('$languagename',curdate(),curtime())";
mysqli_query($connect, $query);
header('location:../addlanguage.php');
?>