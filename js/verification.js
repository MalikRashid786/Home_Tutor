function sendOTP(){
	$(".error").html("").hide();
	var number = $("#mobile").val();
	if(number.length == 10 && number !=null){
		var input={
			"mobile_number" : number,
			"action" : "send_otp"
		};
		$.ajax({
			url:'controller.php',
			type : 'POST',
			data : input,
			success : function(response){
				$("#container").html(response);
			}
		});
	} else{
		$(".error").html('Plaese enter a valid number!')
		$(".error").show();
	}
}
function varifyOTP(){
	$(".error").html("").hide();
	$(".success").html("").hide();
	var otp = $("#mobileOtp").val();
	var input = {
		"otp" : otp,
		"action" : "verify_otp"
	};
	if(otp.length == 6 && otp !=null){
		$.ajax({
			url:'controller.php',
			type : 'POST',
			data: input,
			success: function(response)
			{
				if (response=="1"){
				// swal("Good job!", "Your Mobile Number Is verified! || Please Wait 5 Seconds","success");
				  window.location.href="lawyerchangepassword.php";		
				}else if (response=="2"){
				  window.location.href="userchangepassword.php";
				}else if (response=="3") {
                  window.location.href="forgetchangepassword.php";
				}else{
				swal("Opps..!", "Your Mobile Number verification is failed! || Try Again","error");
				 $('#frm-mobile-verification')[0].reset();
				}				
			},
			error : function(){
				alert("ss");
			}
		});
	} else {
		$(".error").html('You Have Entred wrong OTP.')
		$(".error").show();
	}
}