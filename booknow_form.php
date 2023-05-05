<?php
session_start();
include 'userheader.php';
$lawyer_email=$_POST['lawyer_email'];
$lawyer_name=$_POST['lawyer_name'];
$email=$_POST['email'];
$productinfo=$_POST['productinfo'];
?>

<html>

<head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if (hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
</head>

<body onload="submitPayuForm()">

  <section class="py-3 card border-0 bg-gradient-secondary">
    <div class="container">
      <div class="section-heading mt-5">
        <h1 class="text-center text-darker" style="margin-top: 120px"> <span class="text-dark">Book </span> Now </h1>
      </div>
    </div>
  </section>
  <section id="lawyerprofile" class="bg-gradient-secondary text-dark py-5" style="margin-top: -58px">
    <div class="container mb-5 py-4">
      <div class="row justify-content-center">
        <div class="col-xl-8 col-md-11">
          <div class="card border-0 shadow">
            <div class="card-body  border-0">
              <!-- action="https://sandboxsecure.payu.in/_payment" -->
              <form action="success.php" method="post" name="payuForm">
                <div class="row">
                  <div class="col-md-6">
                    <table cellpadding="8" class="">
                      <tr>
                        <th>Teacher E-Mail :</th>
                        <td><input name="lawyer_email" hidden value="<?php echo $lawyer_email;?>" /> <?php echo $lawyer_email; ?> </td>
                      </tr>
                      <tr>
                        <th>Teacher Name :</th>
                        <td><textarea hidden name="productinfo"><?php echo $productinfo; ?></textarea><?php echo $_POST['lawyer_name']; ?></td>
                      </tr>

                      <tr>
                        <th>User Name :</th>
                        <td class="text-capitalize"><input name="firstname" id="firstname" hidden value="<?php echo $_POST['firstname']; ?>" /><?php echo $_POST['firstname']; ?></td>
                      </tr>
                      <tr>
                        <th>Alt Mobile No :</th>
                        <td>+91<span><input hidden name="alt_phone" value="<?php echo $_POST['alt_phone']; ?>" /> <?php echo $_POST['alt_phone']; ?></span></td>
                      </tr>
                    </table>
                  </div>
                  <div class="col-md-5">
                    <table cellpadding="8" class="mb-3">
                      <tr>
                        <th>User E-Mail :</th>
                        <td><span><input hidden name="email" id="email" value="<?php echo  $_POST['email']; ?>" /></span><?php echo $_POST['email']; ?></td>
                      </tr>
                      <tr>
                        <th>Date :</th>
                        <td><span><input hidden name="address1" id="date" value="<?php echo $_POST['address1']; ?>" /><?php echo $_POST['address1']; ?></span></td>
                      </tr>
                      <tr>
                        <th>Time :</th>
                        <td><span><input hidden name="address2" id="address2" value="<?php echo $_POST['address2']; ?>" /><?php echo $_POST['address2']; ?></span></td>
                      </tr>
                      <tr>
                        <th>Mobile No :</th>
                        <td>+91 <span><input hidden name="phone" value="<?php echo $_POST['phone']; ?>" /><?php echo $_POST['phone']; ?></span></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="row justify-content-center mt-3">
                  <!-- <a title="Print Screen" class=" col-xl-8 col-md-8" alt="Print Screen" onclick="window.print();" target="blank" style="cursor:pointer;"> <input type="button" value="PRINT" class="btn bg-gradient-secondary col-12 mb-2" /></a> -->
                  <input type="submit" name="status" value="Book Now" class="btn btn-success col-12 col-xl-9 col-md-9" />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
<?php
include 'userfooter.php';
?>