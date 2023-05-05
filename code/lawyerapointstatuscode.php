<?php 
include '../config.php';
// status update code
if(isset($_REQUEST['appointment_id'])){
  $appointment_id=$_REQUEST['appointment_id'];
  $query="UPDATE tbl_appointment SET status='1' WHERE appointment_id='$appointment_id'";
  $result=mysqli_query($connect,$query);
  header("location:../lawyerviewappointment.php");
}
if(isset($_REQUEST['appoint_id'])){
  $appointment_id=$_REQUEST['appoint_id'];
  $query="UPDATE tbl_appointment SET status='2' WHERE appointment_id='$appointment_id'";
  $result=mysqli_query($connect,$query);
  header("location:../lawyerviewappointment.php");
}
?>