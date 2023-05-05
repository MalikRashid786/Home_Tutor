<?php
session_start();
error_reporting(E_ALL & ~ E_NOTICE);

class Controller 
{
	function __construct()
	{
		$this->processMobileVerification();
	}
	function processMobileVerification()
	{
		switch ($_POST["action"])
		{
			case "send_otp":
			   $mobile_number =$_POST['mobile_number'];
				// Account details
			    $_SESSION['mobile_number']=$mobile_number;
				$otp = rand(100000, 999999);
			    $_SESSION['session_otp']= $otp;
				$curl = curl_init();

				  curl_setopt_array($curl, array(
				  CURLOPT_URL => "http://2factor.in/API/V1/3dd48966-e2b4-11ea-9fa5-0200cd936042/SMS/".$mobile_number."/".$otp."",
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => "",
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 30,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => "GET",
				  CURLOPT_POSTFIELDS => "",
				  CURLOPT_HTTPHEADER => array(
				    "content-type: application/x-www-form-urlencoded"
				  ),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);

				curl_close($curl);

				if ($err) {
				  echo "cURL Error #:" . $err;
				} else {
				  // echo 'success';
				  // echo $response;
				  require_once("verification.php");
				}

			   break;

			   case "verify_otp":
			   $otp = $_POST['otp'];
			   if(isset($_SESSION['lawyer'])){
					if($otp == $_SESSION['session_otp']){
				   	unset($_SESSION['session_otp']);
				   	unset($_SESSION['mobile_number']);
				   	// echo json_encode(array("type"=>"success", "message"=>"Your Mobile Number Is verified!"));
				   	echo "1";
				   }
				   else{
				   	// echo json_encode(array("type"=>"error", "message"=>"Your Mobile Number verification is failed!"));
				   	echo "0";
				   }
				}else if (isset($_SESSION['user'])){
					if($otp == $_SESSION['session_otp']){
				   	unset($_SESSION['session_otp']);
				   	unset($_SESSION['mobile_number']);
				   	// echo json_encode(array("type"=>"success", "message"=>"Your Mobile Number Is verified!"));
				   	echo "2";
				   }
				   else{
				   	// echo json_encode(array("type"=>"error", "message"=>"Your Mobile Number verification is failed!"));
				   	echo "0";
				   }
				}else{
					if($otp == $_SESSION['session_otp']){
				   	unset($_SESSION['session_otp']);
				   	unset($_SESSION['mobile_number']);
				   	// echo json_encode(array("type"=>"success", "message"=>"Your Mobile Number Is verified!"));
				   	echo "3";
				   }
				   else{
				   	// echo json_encode(array("type"=>"error", "message"=>"Your Mobile Number verification is failed!"));
				   	echo "0";
				   }
				}		   

			   break;
		}
	}
}
$controller = new Controller();
?>