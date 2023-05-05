<?php
error_reporting(0);
session_start();
if(isset($_SESSION['lawyer'])){
  include_once'lawyerheader.php';
  $editlink="lawyersendotp.php";
  $footer="lawyerfooter.php";
}else if (isset($_SESSION['user'])){
  include_once'userheader.php';
  $editlink="usersendotp.php";
  $footer="userfooter.php";
}else{
  include_once'header.php';
   $editlink="forgetsendotp.php";
   $footer="footer.php";
 }
?>
<section class="py-5 card border-0 bg-gradient-secondary">
  <div id="container" class="py-4 mt-5 mb-5">
<div class="container-fluid">
    <div class="section-heading mt-5 mb-5 text-center">
        <h1> Verify OTP</h1>
    </div>
  </div>
<div class="container mb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-8 col-10 col-sm-10 mb-5">
          <div class="card shadow border-0">
            <div class="card-body px-lg-5 py-lg-4">
            <p class="text-center mb-3" style="font-size: 16px">We Send a OTP on this Number <span class="text-muted"><?php echo $_SESSION['mobile_number']; ?></span><br/> If Wrong Number You Can <a href="<?php echo $editlink?>">Edit</a> </p>
              <div class="error text-danger"></div>
              <div class="success text-success"></div>
              <form id="frm-mobile-verification" action="javascript:void(0)" method="POST">
                   <div class="form-group mb-4">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-mobile-button"style=""></i></span>
                    </div>
                    <input class="form-control" placeholder="Enter 6 Digit Here" pattern="^[0-9]+$" maxlength="6" size="6" minlength="6" id="mobileOtp" type="Number" required><input type="submit" id="verify" value="Verify" class="btnVerify btn" onClick="varifyOTP();" />
                  </div>
                </div>
                <div class=" row">
                  <div class="col-6 mt-2"> <a href="<?php echo $editlink?>"  class="countdown text-left " ></a></div>
                  <div class="col-6"><a href="<?php echo $editlink?>"><button type="button" class="btn btn-secondary float-right">Cancel</button></a></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
function timer(timer2) {
  var interval = setInterval(function() {


    var timer = timer2.split(':');
    //by parsing integer, I avoid all extra string processing
    var minutes = parseInt(timer[0], 10);
    var seconds = parseInt(timer[1], 10);
    --seconds;
    minutes = (seconds < 0) ? --minutes : minutes;
    
    seconds = (seconds < 0) ? 59 : seconds;
    seconds = (seconds < 10) ? '0' + seconds : seconds;
    //minutes = (minutes < 10) ?  minutes : minutes;
    $('.countdown').html("Resend OTP <b class='text-danger'>"+ minutes + ':' + seconds + " </b>");
    //if (minutes < 0) clearInterval(interval);
    if ((seconds <= 0) && (minutes <= 0)){
      clearInterval(interval);
      $('.countdown').html('');
      $('#resend_otp').css("display","block");
    } 
    timer2 = minutes + ':' + seconds;
  }, 1000);
}

$(document).ready(function(){
  var time="3:00";
  timer(time);
         
});
</script>

<?php
include_once$footer;
?>