<?php
include 'userheader.php';
$BookLawyer_id = $_REQUEST['ba_id'];
$query = "SELECT * FROM tbl_user WHERE email='$session_email'";
$result = mysqli_query($connect, $query);
if ($row = mysqli_fetch_array($result)) {
  $user_id = $row['user_id'];
  $name = $row['name'];
  $email = $row['email'];
  $number = $row['mo_number'];
  $alternate_number = $row['alternate_number'];
}
$query1 = "SELECT * FROM tbl_lawyer WHERE lawyer_id='$BookLawyer_id'";
$result1 = mysqli_query($connect, $query1);
if ($row = mysqli_fetch_array($result1)) {
  $lawyer_id = $row['lawyer_id'];
  $lawyer_email = $row['email'];
  $lawyer_name = $row['name'];
  $filename = $row['filename'];
  $state = $row['state'];
  $district = $row['district'];
  $locality = $row['locality'];
  $pincode = $row['pincode'];
}
$query3 = "SELECT * FROM tbl_state WHERE state_id='$state'";
$result3 = mysqli_query($connect, $query3);
if ($row3 = mysqli_fetch_array($result3)) {
  $statename = $row3['name'];
} else {
  $statename = "--";
}
$query2 = "SELECT * FROM tbl_district WHERE district_id='$district'";
$result2 = mysqli_query($connect, $query2);
if ($row2 = mysqli_fetch_array($result2)) {
  $districtname = $row2['name'];
} else {
  $districtname = "--";
}
$query3 = "SELECT* FROM tbl_answere WHERE lawyer_email='$lawyer_email'";
$result3 = mysqli_query($connect, $query3);
$cout_ans = mysqli_num_rows($result3);
?>

<style type="text/css">
  #lawyerprofile .card-body .infotext span::before {
    content: "";
    height: 2px;
    width: 50px;
    display: inline-block;
    background: #000;
  }

  #lawyerprofile .card-body .infotext span::after {
    content: "";
    height: 2px;
    width: 50px;
    display: inline-block;
    background: #000;
  }
</style>
<section class="py-5 bg-secondary">
  <div class="container">
    <h1 class="text-center text-darker text-uppercase mt-4 py-5 mb-4"> Appoinment Details </h1>
  </div>
</section>
<section id="lawyerprofile" style="margin-top: -84px" class="bg-secondary text-dark">
  <div class="container-fluid col-xl-10 col-lg-11 col-sm-10 col-md-12">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 mb-5">
        <div class="card border-0 shadow">
          <div class="card-body  border-0">
            <div class="infotext text-center mb-3"><span class="text-uppercase"><small class="h2">Teacher info</small></span></div>
            <div class="row text-center justify-content-center ">
              <div class="col-md-12 col-xl-12 col-lg-12 mb-2 img justify-content-center align-items-center d-flex">
                <img src="code/profileUpload/<?php echo $filename; ?>" class="img-fluid float-left rounded-circle mt-1 mb-1">
                <div class="img-fluid shadow float-left rounded-circle mt-1 mb-1" style="padding: 6px; height: 90px;width: 90px; background-image:url(code/profileUpload/<?php echo $filename; ?>); background-size: cover; background-position: center;cursor:context-menu;">
                </div>
              </div>
              <div class="col-md-12 col-xl-12 col-lg-12 card col-12 text-left card text-center">
                <h4 class="mt-3"><?php echo $lawyer_name ?></h4>
                <span style="font-size: 13px"><?php echo LawyerGetRating($lawyer_id) ?></span>
              </div>
              <div class="col-md-6 col-xl-4 col-lg-4 card col-4">
                <h6 class="mt-4">Appointments</h6>
                <p class="mt-2">0</p>
              </div>
              <div class="col-md-6 col-xl-4 col-lg-4 card col-4">
                <h6 class="mt-4">Answere</h6>
                <p class="mt-2"><?php echo $cout_ans; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-6 col-lg-6 col-md-6 mb-5 text-dark">
        <div class="card border-0 shadow">
          <div class="card-body  border-0">
            <div class="infotext text-center mb-3 text-dark"><span class="text-uppercase text-dark"><small class="h2 mb-5">Your info</small></span></div>
            <div class="row  justify-content-center">
              <div class="col-xl-5 col-lg-5 col-md-5 col-5 justify-content-center">
                <table cellpadding="8">
                  <tr>
                    <th>Name</th>
                    <td><span class=""><?php echo $name ?></span></td>
                  </tr>
                  <tr>
                    <th>E-Mail</th>
                    <td><span><?php echo $session_email ?></span> </td>
                  </tr>
                </table>
              </div>
              <div class="col-xl-7  col-lg-5 col-md-7 col-7">
                <table cellpadding="8">
                  <tr>
                    <th>Mobile_No</th>
                    <td>+91<span><?php echo $number; ?> </span></td>
                  </tr>
                  <tr>
                    <th>Alternate_No</th>
                    <td>+91<span><?php echo $alternate_number ?> </span></td>
                  </tr>
                </table>
              </div>
            </div>
            <form class="mt-3" action="booknow_form.php" id="validate_form" method="POST" novalidate>
              <input type="text" name="user_id" value="<?php echo $user_id ?>" hidden>
              <input type="text" name="email" value="<?php echo $session_email ?>" hidden>
              <input type="text" name="surl" value="http://localhost/OnlineLawyer/success.php" hidden>
              <input type="text" name="furl" value="http://localhost/OnlineLawyer/failure.php" hidden>
              <input type="text" name="phone" value="<?php echo $number; ?>" hidden>
              <input type="text" name="firstname" value="<?php echo $name; ?>" hidden>
              <input type="text" name="lawyer_name" value="<?php echo $lawyer_name; ?>" hidden>
              <input type="text" name="lawyer_email" value="<?php echo $lawyer_email; ?>" hidden>
              <input type="text" name="productinfo" value="<?php echo $lawyer_id; ?>" hidden>
              <input type="text" name="alt_phone" value="<?php echo $alternate_number; ?>" hidden>
              <input type="text" name="amount" value="525" hidden>
              <div class="form-row mb-2">
                <div class="form-group col-xl-6 mt-xl-3">
                  <label for="Consulting Date">Appointment Date</label>
                  <input type="date" name="address1" class="form-control" required placeholder="Appointment Date" value="" id="date">
                </div>
                <div class="form-group col-xl-6 mt-xl-3 mb-4 ">
                  <label>Appoinment  Time</label>
                  <select class="custom-select border-0" name="address2" id="time" required>
                    <option required value="">Choose Time</option>
                    <option required value="1:00 PM">3:00 PM</option>
                    <option required value="2:00 PM">3:00 PM</option>
                    <option required value="3:00 PM">3:00 PM</option>
                    <option required value="4:00 PM">4:00 PM</option>
                    <option required value="5:00 PM">5:00 PM</option>
                    <option required value="6:00 PM">6:00 PM</option>
                    <option required value="7:00 PM">7:00 PM</option>
                    <option required value="8:00 PM">8:00 PM</option>
                    <option required value="9:00 PM">9:00 PM</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <input type="submit" value="Proceed" class="btn btn-success  col-xl-12 mt-xl-2 mb-xl-2" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include 'userfooter.php';
?>
<script type="text/javascript">
  $(document).ready(function() {
    $('#validate_form').parsley();
  });
</script>