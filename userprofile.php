<?php
include 'userheader.php';
$session_email = $_SESSION['user'];
$query = "SELECT * FROM tbl_user WHERE email='$session_email'";
$result = mysqli_query($connect, $query);
if ($row = mysqli_fetch_array($result)) {
  $user_id = $row['user_id'];
  $name = $row['name'];
  $email = $row['email'];
  $number = $row['mo_number'];
  $state = $row['state'];
  $district = $row['district'];
  $locality = $row['locality'];
  $alternate_number = $row['alternate_number'];
  $pincode = $row['pincode'];
  $date = $row['date'];
  $time = $row['time'];
  $date_time = $date . " " . $time;
}
$query1 = "SELECT * FROM tbl_state WHERE state_id='$state'";
$result1 = mysqli_query($connect, $query1);
if ($row1 = mysqli_fetch_array($result1)) {
  $statename = $row1['name'];
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
$query3 = "SELECT count(question_id) AS `totalquestion` FROM tbl_question WHERE email='$session_email'";
$result3 = mysqli_query($connect, $query3);
$row3 = mysqli_fetch_array($result3);


// count appointments
$query4 = "SELECT count(appointment_id) AS `totalappoint` FROM tbl_appointment WHERE email='$session_email'";
$result4 = mysqli_query($connect, $query4);
$row4 = mysqli_fetch_array($result4);
// Find Laywer Profile Update Time In ago

date_default_timezone_set('Asia/Kolkata');
$updatemsg = get_time_ago($date_time);
?>



<section class="bg-secondary py-5 mt-4 text-dark">
  <div class="header  d-flex align-items-center" style="min-height: 500px; background-image: url(img/completing.png); background-size: cover;background-repeat: no-repeat; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-dark opacity-8"></span>
    <!-- Header container -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-12">
          <h1 class="display-2 text-white">Hello <?php echo $name ?></h1>
          <p class="text-white mt-0 mb-4">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
          <a href="userupdateprofile.php?edit=<?php echo $user_id ?>" class="btn btn-white text-default border-0 ">Edit profile</a>
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

<section id="lawyerprofile" style="margin-top: -240px;" class="bg-secondary">
  <div class="container py-7">
    <div class="row justify-content-center">
      <div class="col-xl-12">
        <div class="card  border-0  shadow">
          <div class="card-body">
            <h6 class="heading-small text-muted mb-4">User information</h6>
            <div class="">
              <div class="row text-center ">
                <div class="col-md-2 justify-content-center align-items-center d-flex">
                  <img src="img/profile_pic.png" class="img-fluid" style="width: 100px">
                </div>
                <div class="col-md-4 col-xl-4 text-left card mb-2 text-center">
                  <h5 class="mt-3"><a href="userupdateprofile.php?edit=0" class="nav-link text-capitalize"><?php echo $name; ?></a></h5>
                  <span style="font-size: 13px"><?php echo $email; ?></span>
                </div>
                <div class="col-md-3 col-xl-3 card col-6 mb-2">
                  <h6 class="mt-3"><a href="userappointmenthistory.php" class="nav-link">Appointments</a></h6>
                  <p class=" mb-3"><?php echo $row4['totalappoint']; ?></p>
                </div>
                <div class="col-md-3 col-xl-3 card col-6 mb-2">
                  <h6 class="mt-3"><a href="userquestionhistory.php" class="nav-link">Question</a></h6>
                  <p class=" mb-3"><?php echo $row3['totalquestion']; ?></p>
                </div>
              </div>
            </div>
            <hr class="my-4" />
            <!-- Address -->
            <h6 class="heading-small text-muted mb-4">Contact information</h6>
            <div class="row">
              <div class="col-md-6 ml-3">
                <table cellpadding="8" class="mb-3">
                  <tr>
                    <th>State :</th>
                    <td><?php echo $statename ?></td>
                  </tr>
                  <tr>
                    <th>District :</th>
                    <td><?php echo $districtname ?></td>
                  </tr>
                  <tr>
                    <th>Locality :</th>
                    <td class="text-capitalize"><?php echo $locality ?></td>
                  </tr>
                  <tr>
                    <th>Pincode :</th>
                    <td><?php echo $pincode ?></td>
                  </tr>
                </table>
              </div>
              <div class="col-md-5 ml-3">
                <table cellpadding="8" class="mb-3">
                  <tr>
                    <th>E-Mail :</th>
                    <td><span><?php echo $session_email ?></span></td>
                  </tr>
                  <tr>
                    <th>Mobile No :</th>
                    <td>+91 <span><?php echo $number; ?></span></td>
                  </tr>
                  <tr>
                    <th>Alternate Mobile No :</th>
                    <td>+91 <span><?php echo $alternate_number ?></span></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="card-footer border-0">
            <p class="text-right heading-small text-muted" style="margin-bottom: 0px;"><small>Last Update <?php echo $updatemsg ?></small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include 'userfooter.php';
?>