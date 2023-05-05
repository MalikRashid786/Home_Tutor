<?php
include '../../config.php';
echo $appointment_id=$_POST["appointment_id"];
echo $lawyer_id=$_POST["lawyer_id"];
echo $txn_id=$_POST["txn_id"];
echo $amount=$_POST["amount"];
$query="INSERT INTO tbl_lawyer_payment(lawyer_id,appointment_id,txn_id,amount,date,time)VALUES('$lawyer_id','$appointment_id','$txn_id','$amount',curdate(),curtime())";
mysqli_query($connect, $query);
header('location:../lawyerpayment.php');
?>	