<?php
include '../../textlocal.class.php';
error_reporting(E_ALL & ~ E_NOTICE);


class Controller 
{
	function __construct()
	{
		$this->processMobileVerification();
	}
	function processMobileVerification()
	{
		switch ($_POST["send_otp"])
		{
			case "Send":
			   $appointment_id=$_POST['appointment_id'];
               $phone=$_POST['phone'];
	                              
			   $apikey=urlencode('QYcCuP4jMdw-3GX71LVktGS9HphONUwCYDKsXpuo4X');
			   $Textlocal = new Textlocal(false, false, $apikey);

			   $numbers= array(
			   	    $phone
			   );
			   $sender = 'TXTLCL';
			   $otp = rand(100000, 999999);
			   $message = "Your One Time Password is" .$otp;
			   
			   try{
			   	$response = $Textlocal->sendSms($numbers, $message, $sender);
			   	include '../../config.php';
			   	$query="INSERT INTO tbl_otp(appointment_id,phone,otp,status,date,time)VALUES('$appointment_id','$phone','$otp',0,curdate(),curtime())";
				mysqli_query($connect,$query);
                header('location:../sendotp.php');
			   	exit();
			   }catch(Exception $e)
			   {
			     die('Error: '.$e->getMessage());
			   }
			   break;
		}
	}
}
$controller = new Controller();
?>