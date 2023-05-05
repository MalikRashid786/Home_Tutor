<?php
include("header.php");
session_start();
$number=$_SESSION['number'];
?>
<section class="py-5 mt-4 bg-secondary">
  <div id="container" class="mt-5">
    <div class="container-fluid">
      <div class="section-heading mb-5 text-center">
        <h1>Send OTP</h1>
      </div>
    </div>
    <div class="container mb-5" style="margin-top: 80px">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-9 col-11 col-sm-11 mb-5">
          <div class="card shadow border-0">
            <div class="card-body px-lg-5 py-lg-4">
            <p class="text-center mb-3" style="font-size: 16px">We Send OTP to Your Registred Number <br/> <span  style="font-size: 14px">Enter Your Registered Number Below</span></p>
            <!-- <div class="error text-danger"></div> -->
              <form id="frm-mobile-verification" action="javascript:void(0)">
               <div class="form-group mb-4">
                 <input class="form-control" maxlength="10" size="10" minlength="10" data-parsley-pattern="^[0-9]+$" value="<?php echo $number ?>" disabled id="mobile" type="text" required>
                </div>
                <div class="row justify-content-center">
                  <div class="ml-1 mr-1 mt-2 mb-2 col-12"><input type="submit" value="Send OTP" class="btn btn-dark col-12" readonly onClick="sendOTP();" /></div>
                  <div class=" ml-1 mr-1 mt-2 col-12"> <a href="lawyerindex.php"><button type="button" class="btn btn-secondary col-12" >Cancel</button></a></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include_once"footer.php";
?> 