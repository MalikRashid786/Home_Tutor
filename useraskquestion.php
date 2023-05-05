<?php
include 'userheader.php';
$query = "SELECT * FROM tbl_user WHERE email='$session_email'";
$result = mysqli_query($connect, $query);
if ($row = mysqli_fetch_array($result)) {
  $user_id = $row['user_id'];
  $mobile = $row['mo_number'];
  $state = $row['state'];
  $district = $row['district'];
  if ($pincode = $row['pincode'] == "--") {
    $pincode = "";
  } else {
    $pincode = $row['pincode'];
  }
}
$query1 = "SELECT * FROM tbl_state ORDER BY name";
$result1 = mysqli_query($connect, $query1);
$query2 = "SELECT * FROM tbl_district ORDER BY name";
$result2 = mysqli_query($connect, $query2);
$query3 = "SELECT * FROM tbl_law ORDER BY lawname";
$result3 = mysqli_query($connect, $query3);
?>
<!-- start ask question page -->
<section class="bg-secondary mt-6">
  <div class="header pb-8 pt-5 pt-lg-6" style=" background-image: url(img/faq.png); background-size: contain; background-repeat: no-repeat; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-dark opacity-8"></span>
    <!-- Header container -->
    <div class="container">
      <div class="row ">
        <div class="col-lg-8 col-md-11">
          <h1 class="display-2 text-white mt-5">Ask Question</h1>
          <p class="text-white mb-5">This is Ask Question page. You can Get Legal Advice from Multiple Expert Teacher's. Fisrt You Fill This Form Then You Submit the Form.</p>
        </div>
      </div>
    </div>
    <div class="separator separator-bottom separator-skew">
      <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <polygon class="fill-secondary" points="2560 0 2560 100 0 100"></polygon>
      </svg>
    </div>
  </div>
</section>
<section style="margin-top: -140px" class="bg-secondary py-5 text-dark">
  <div class="container mb-3">
    <div class="row justify-content-center">
      <div class="col-lg-11 col-md-12 mb-5">
        <div class="card border-0 shadow" style="padding: 25px">
          <h3 class="text-center text-uppercase mt-1 mb-2  text-success">ASK MULTIPLE TUTOR'S</h3>
          <p class="text-center mb-2">Get veryfied answere from multiple tutor!</p>
          <form role="form" id="validate_form">
            <input type="text" value="<?php echo $session_email ?>" name="session_email" hidden>
            <div class="form-row">
              <div class="form-group col-xl-6 col-md-6 mb-3">
                <select class="form-control" name="selectlaw" required>
                  <option required value="">-- Subjects --</option>
                  <?php
                  while ($row3 = mysqli_fetch_array($result3)) {
                  ?>
                    <option required value="<?php echo $row3['law_id']; ?>"><?php echo $row3['lawname']; ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
              <div class="form-group col-xl-6 col-md-6 mb-3">
                <select class="form-control" name="selectreligion" id="religion" required>
                  <option value="">Choose Stage</option>
                  <option value="Pre Primary Stage">Pre Primary Stage</option>
                  <option value="The Primary Stage">The Primary Stage</option>
                  <option value="The Middle Stage">The Middle Stage</option>
                  <option value="The Secondary Stage">The Secondary Stage</option>
                  <option value="Senior Secondary Stage">Senior Secondary Stage</option>
                  <option value="Undergraduate Stage">Undergraduate Stage</option>
                  <option value="Postgraduate Stage">Postgraduate Stage</option>
                </select>
              </div>
            </div>
            <div class="form-group mb-3">
              <input class="form-control" data-parsley-pattern="^[a-z A-Z1-9@$*_'%'&#\|/<>:;-?-=+{}(),.]+$" data-parsley-trigger="keyup" placeholder="Question title" maxlength="50" name="title[]" type="text" required>
            </div>
            <div class="form-group">
              <textarea class="form-control mt-1" maxlength="4900" rows="6" data-parsley-pattern="^[a-z A-Z1-9@$*_'%'&#\|/<>:;-?-=+{}(), 
                  .]+$" data-parsley-trigger="keyup" placeholder="Type you question here." name="description[]" required></textarea>
            </div>
            <div class="form-row">
              <div class="form-group mb-3 col-xl-6 col-md-6">
                <select class="form-control" name="selectstate" id="state" required>
                  <option required value="">Choose State</option>
                  <?php
                  while ($row1 = mysqli_fetch_array($result1)) {
                    if ($state == $row1['state_id']) {
                  ?>
                      <option selected required value="<?php echo $row1['state_id']; ?>"><?php echo $row1['name']; ?></option>
                    <?php
                    } else {
                    ?>
                      <option value="<?php echo $row1['state_id']; ?>"><?php echo $row1['name']; ?></option>
                  <?php
                    }
                  }
                  ?>
                </select>
              </div>
              <div class="form-group mb-3 col-xl-6 col-md-6">
                <select class="form-control" id="district" name="selectdistrict" required>
                  <option required value="">Choose District</option>
                  <?php
                  while ($row2 = mysqli_fetch_array($result2)) {
                    if ($district == $row2['district_id']) {
                  ?>
                      <option selected required value="<?php echo $row2['district_id']; ?>"><?php echo $row2['name']; ?></option>
                    <?php
                    } else {
                    ?>
                      <option value="<?php echo $row2['district_id']; ?>"><?php echo $row2['name']; ?></option>
                  <?php
                    }
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-xl-6 col-md-6">
                <input class="form-control" data-parsley-type="number" data-parsley-trigger="keyup" placeholder="Pincode" maxlength="6" value="<?php echo $pincode ?>" name="pincode" type="text" required>
              </div>
              <div class="form-group col-xl-6 col-md-6">
                <input class="form-control" maxlength="10" data-parsley-type="number" data-parsley-trigger="keyup" value="<?php echo $mobile ?>" placeholder="Mobile Number" name="number" type="number" required>
              </div>
            </div>
            <div class="custom-control custom-control-alternative custom-checkbox">
              <input class="custom-control-input" name="check_rules" id=" customCheckLogin" id="check_rules" required type="checkbox">
              <label class="custom-control-label" for=" customCheckLogin">
                <span class="text-muted">I Accept <a href="" class="text-success">Term</a> & <a href="" class="text-success">Policy</a></span>
              </label>
            </div>
            <div class="form-row text-center justify-content-center py-1">
              <input type="submit" class="btn btn-success mb-3 col-md-5 col-5 col-xl-5 col-lg-5  mt-4 mb-1 col-10 mr-1 ml-1 " id="submit" value="Continue" name="submit">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end ask question page -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#validate_form').parsley();

    $('#validate_form').on('submit', function(event) {
      event.preventDefault();
      if ($('#validate_form').parsley().isValid()) {
        // alert($(this).serialize());
        $.ajax({
          url: "code/userquestioncode.php",
          method: "POST",
          data: $(this).serialize(),
          beforeSend: function() {
            $('#submit').attr('disabled', 'disabled');
            $('#submit').val('Processing...');
          },
          success: function(data) {
            $('#validate_form')[0].reset();
            $('#validate_form').parsley().reset();
            $('#submit').attr('disabled', false);
            $('#submit').val('Continue');
            if (data == "1") {
              swal("Good job!", "Thank You For Asking Question", "success");
              // alert(data);
            } else {
              swal("Opps..!", "Try Again", "error");
            }

          }
        });
      }
    });
  });
</script>
<?php
include 'userfooter.php';
?>
<!--  -->