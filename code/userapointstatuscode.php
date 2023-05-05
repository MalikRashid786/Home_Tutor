<?php
include '../config.php';
if(isset($_REQUEST['appoint_id'])){
  $appointment_id=$_REQUEST['appoint_id'];
  $query="UPDATE tbl_appointment SET status='2' WHERE appointment_id='$appointment_id'";
  $result=mysqli_query($connect,$query);
  header("location:../userappointmenthistory.php");
}
?>