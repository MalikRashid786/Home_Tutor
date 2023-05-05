<?php
include 'userheader.php';

$PAYU_BASE_URL = "https://sandboxsecure.payu.in";   // For Sandbox Mode
//$PAYU_BASE_URL = "https://secure.payu.in";      // For Production Mode

$posted = array();
if (!empty($_POST)) {
  //print_r($_POST);
  foreach ($_POST as $key => $value) {
    $posted[$key] = $value;
  }
}

$formError = 0;

if (empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if (empty($posted['hash']) && sizeof($posted) > 0) {
  if (
    empty($posted['key'])
    || empty($posted['txnid'])
    || empty($posted['amount'])
    || empty($posted['firstname'])
    || empty($posted['email'])
    || empty($posted['lawyer_email'])
    || empty($posted['phone'])
    || empty($posted['productinfo'])
    || empty($posted['lawyer_name'])
    || empty($posted['address1'])
    || empty($posted['address2'])
    || empty($posted['alt_phone'])
    || empty($posted['surl'])
    || empty($posted['furl'])
    || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
    $hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';
    foreach ($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif (!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
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

  <section class="py-5 card border-0 bg-gradient-secondary">
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
              <form action="<?php echo $action; ?>" method="post" name="payuForm">
                <div class="row">
                  <div class="col-md-6">
                    <table cellpadding="8" class="">
                      <tr>
                        <th>Lawyer E-Mail :</th>
                        <td><input name="lawyer_email" hidden value="<?php echo (empty($posted['lawyer_email'])) ? '' : $posted['lawyer_email'] ?>" /> <?php echo $posted['lawyer_email']; ?> <i class="fa fa-rupee" style="font-size: 10px"></i> </td>
                      </tr>
                      <tr>
                        <th>Lawyer Name :</th>
                        <td><textarea hidden name="productinfo"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea><?php echo $posted['lawyer_name']; ?></td>
                      </tr>

                      <tr>
                        <th>User Name :</th>
                        <td class="text-capitalize"><input name="firstname" id="firstname" hidden value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" /><?php echo $posted['firstname']; ?></td>
                      </tr>
                      <tr>
                        <th>Alt Mobile No :</th>
                        <td>+91<span><input hidden name="alt_phone" value="<?php echo (empty($posted['alt_phone'])) ? '' : $posted['alt_phone']; ?>" /> <?php echo $posted['alt_phone']; ?></span></td>
                      </tr>
                    </table>
                  </div>
                  <div class="col-md-5">
                    <table cellpadding="8" class="mb-3">
                      <tr>
                        <th>User E-Mail :</th>
                        <td><span><input hidden name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" /></span><?php echo $posted['email']; ?></td>
                      </tr>
                      <tr>
                        <th>Date :</th>
                        <td><span><input hidden name="address1" id="date" value="<?php echo (empty($posted['address1'])) ? '' : $posted['address1']; ?>" /><?php echo $posted['address1']; ?></span></td>
                      </tr>
                      <tr>
                        <th>Time :</th>
                        <td><span><input hidden name="address2" id="address2" value="<?php echo (empty($posted['address2'])) ? '' : $posted['address2']; ?>" /><?php echo $posted['address2']; ?></span></td>
                      </tr>
                      <tr>
                        <th>Mobile No :</th>
                        <td>+91 <span><input hidden name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" /><?php echo $posted['phone']; ?></span></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="row justify-content-center mt-3">
                  <!-- <a title="Print Screen" class=" col-xl-8 col-md-8" alt="Print Screen" onclick="window.print();" target="blank" style="cursor:pointer;"> <input type="button" value="PRINT" class="btn bg-gradient-secondary col-12 mb-2" /></a> -->
                  <input type="submit" name="status" value="Book Now" class="btn btn-dark col-12 col-xl-9 col-md-9" />

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