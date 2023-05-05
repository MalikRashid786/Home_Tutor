<?php
include("userheader.php");
$session_email = $_SESSION['user'];
$query = "SELECT * FROM tbl_user WHERE email='$session_email'";
$result = mysqli_query($connect, $query);
if ($row = mysqli_fetch_array($result)) {
  $number = $row['mo_number'];
}
?>
<section class="py-5 mt-4 bg-secondary">
  <div id="container" class="mt-5">
    <div class="container-fluid">
      <div class="section-heading mb-5 text-center">
        <h1><span class="text-green">Send</span> OTP</h1>
      </div>
    </div>
    <div class="container mb-5" style="min-height: 50vh;margin-top: 80px">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-8 col-10 col-sm-10 mb-5">
          <div class="card shadow border-0">
            <div class="card-body px-lg-5 py-lg-4">
              <p class="text-center mb-3" style="font-size: 16px">We Send OTP to Your Registred Number <br /> <span style="font-size: 14px">Enter Your Registered Number Below</span></p>
              <!-- <div class="error text-danger"></div> -->
              <form id="frm-mobile-verification" action="javascript:void(0)">
                <div class="form-group mb-4">
                  <input id="number" value="<?php echo $number ?>" data-parsley-pattern="^[0-9]+$" data-parsley-trigger="keyup" type="text" required hidden>
                  <input class="form-control" maxlength="10" size="10" minlength="10" data-parsley-pattern="^[0-9]+$" data-parsley-equalto="#number" data-parsley-trigger="keyup" placeholder="<?php echo $number ?>" id="mobile" type="text" required>
                </div>
                <div class="row float-right">
                  <div class="mt-2"> <a href="userprofile.php"><button type="button" class="btn btn-secondary">Cancel</button></a></div>
                  <div class="ml-2 mt-2"><input type="submit" value="Send OTP" class="btn btn-success" readonly onClick="sendOTP();" /></div>
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
  $(document).ready(function() {
    $('#frm-mobile-verification').parsley();
  });
</script>
<?php
include("userfooter.php");
?>