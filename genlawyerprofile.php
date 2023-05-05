<?php
include 'header.php';
include 'config.php';
if (isset($_REQUEST['la_id'])) {
  $lawyer_id = $_REQUEST['la_id'];
  $query = "SELECT * FROM tbl_lawyer WHERE lawyer_id='$lawyer_id'";
  $result = mysqli_query($connect, $query);
  if ($row = mysqli_fetch_array($result)) {
    $lawyer_id = $row['lawyer_id'];
    $email = $row['email'];
    $name = $row['name'];
    $number = $row['number'];
    $license_number = $row['license_number'];
    $language = $row['language'];
    $practicingarea = $row['practicingarea'];
    $practicingcourt = $row['practicingcourt'];
    $practicingstate = $row['practicingstate'];
    $filename = $row['filename'];
    $casehandled = $row['casehandled'];
    $bar_enroll_date = $row['bar_enroll_date'];
    $website = $row['website'];
    $alt_number = $row['alt_number'];
    $state = $row['state'];
    $district = $row['district'];
    $locality = $row['locality'];
    $pincode = $row['pincode'];
  }
  $query3 = "SELECT count(answered_id) AS `totalanswere` FROM tbl_answere WHERE lawyer_email='$email'";
  $result3 = mysqli_query($connect, $query3);
  $row3 = mysqli_fetch_array($result3);
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
  $query4 = "SELECT * FROM tbl_state WHERE state_id='$practicingstate'";
  $result4 = mysqli_query($connect, $query4);
  if ($row4 = mysqli_fetch_array($result4)) {
    $practicingstatename = $row4['name'];
  } else {
    $practicingstatename = "--";
  }
  $query5 = "SELECT * FROM tbl_lawyer_lawtype WHERE lawyer_id='$lawyer_id'";
  $result5 = mysqli_query($connect, $query5);
  $query9 = "SELECT * FROM tbl_lawyer_lawtype WHERE lawyer_id='$lawyer_id'";
  $result9 = mysqli_query($connect, $query9);
  // count lawyer appointmnts
  $query4 = "SELECT count(appointment_id) AS `totalappoint` FROM tbl_appointment WHERE productinfo='$lawyer_id'";
  $result4 = mysqli_query($connect, $query4);
  $row4 = mysqli_fetch_array($result4);
?>
  <!-- Start lawyer profile section -->
  <section id="genlawyerprofile" class="bg-white ">
    <div class="header pb-8 pt-5 pt-lg-6 d-flex align-items-center" style=" background-image:url(code/profileUpload/<?php echo $filename; ?>); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-dark opacity-8"></span>
      <!-- Header container -->
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-xl-12 col-md-12">
            <h1 class="display-2 text-white mt-5"><?php echo $name ?></h1>
            <p class="text-white mt-0 mb-5">This is profile page. You can see the progress you've made with your work and manage your Students or legal help</p>
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

  <section id="lprofile" class="bg-secondary" style="margin-top: -230px;">
    <div class="container mb-5 text-dark">
      <div class="row">
        <div class="col-md-8 mb-5">
          <div class="card border-0 shadow">
            <div class="card-body ">
              <div class="row text-center ">
                <div class="col-md-4 justify-content-center align-items-center d-flex">
                  <div class="img-fluid mt-3 shadow float-left rounded-circle mt-1 mb-2" style="padding: 6px; height: 90px;width: 90px; background-image:url(code/profileUpload/<?php echo $filename; ?>); background-size: cover; background-position: center;">
                  </div>
                </div>
                <div class="col-md-4  card mb-2">
                  <h3 class="mt-2 text-dark"><?php echo $name ?></h3>
                  <!-- <span><?php echo $license_number ?></span> -->
                  <span style="font-size: 12px"><?php echo LawyerGetRating($lawyer_id); ?> </span>
                </div>
                <div class="col-md-2 card col-6 mb-2">
                  <span class="mt-3">Appointmnts</span>
                  <span class="mt-3"><?php echo $row4['totalappoint']; ?></span>
                </div>
                <div class="col-md-2 card col-6 mb-2">
                  <span class="mt-3">Answere</span>
                  <span class="mt-3"><?php echo $row3['totalanswere']; ?></span>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-md-5 col-5">
                  <h2 class="ml-2 mb-2 text-dark">About Teacher </h2>
                </div>
                <div class="col-md-7 col-7">
                  <a href="signup.php"> <button class="btn btn-success mb-2  float-right btn-sm">Book Now <i class="fa fa-arrow-right ml-1" style="font-size: 11px"></i></button></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5 mt-1">
                  <table cellpadding="8" class="table-responsive">
                    <tr>
                      <th>Language Spoken </th>
                      <td><?php echo $language ?></td>
                    </tr>
                    <tr>
                      <th>Experience </th>
                      <td><?php echo get_time($bar_enroll_date); ?></td>
                    </tr>
                  </table>
                </div>
                <div class="col-md-7">
                  <table cellpadding="8" class="table-responsive">
                    <tr>
                      <th>Current State </th>
                      <td><?php echo $practicingstatename ?></td>
                    </tr>
                    <tr>
                      <th>Satisfied Student </th>
                      <td><?php echo $casehandled ?> +</td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 mt-1">
                  <table cellpadding="8" class="table-responsive">
                   
                    <tr>
                      <th>Current College/University</th>
                      <td><?php echo $practicingcourt ?></td>
                    </tr>
                  </table>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-12 mt-1">
                  <h3 class="ml-2 mb-4 text-dark">Specialization</h3>
                  <div class="row">
                    <?php
                    if ($practicingarea == "0") {
                    ?>
                      <p class="ml-5">No Specialization Are Selected.</p>
                      <?php
                    } else {
                      while ($row5 = mysqli_fetch_array($result5)) {
                        $lawtype = $row5['name'];
                        $query6 = "SELECT * FROM tbl_inlawtype WHERE lawtype_id='$lawtype'";
                        $result6 = mysqli_query($connect, $query6);
                        if ($row6 = mysqli_fetch_array($result6)) {
                          $lawtype_name = $row6['areaname'];
                        }
                      ?>
                        <div class="col-md-5  col-5 ml-3 mr-3">
                          <ul>
                            <li style="font-size: 13px"><?php echo  $lawtype_name; ?></li>
                          </ul>
                        </div>
                    <?php
                      }
                    }
                    ?>
                  </div>
                </div>
              </div>
              <hr />
              <div class="row answere">
                <div class="col-md-12">
                  <h3 class="ml-2 text-dark"> <?php echo $name ?>'s recent answere </h3>
                  <div class="row">

                    <?php
                    $query1 = "SELECT * FROM tbl_answere WHERE lawyer_email='$email' ORDER BY answered_id DESC LIMIT 6";
                    $result1 = mysqli_query($connect, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      // Find Answere Update Time In ago
                      $date = $row1['date'];
                      $time = $row1['time'];
                      $date_time = $date . " " . $time;
                      date_default_timezone_set('Asia/Kolkata');
                      $updateagomsg = get_time_ago($date_time);
                      $question_id = $row1['question_id'];
                      $query2 = "SELECT * FROM tbl_question WHERE question_id='$question_id'";
                      $result2 = mysqli_query($connect, $query2);
                      if ($row2 = mysqli_fetch_array($result2)) {
                        $title = $row2['title'];
                      }
                    ?>
                      <div class="col-md-5 col-5 ml-3 mr-3">
                        <ul class="">
                          <li class="mb-1"><a style=" font-size: 13px" href="genviewquestion.php?qt_id=<?php echo $question_id ?>" class="nav-link"><?php echo $title ?></a></li>
                          <p class="mb-2" style="margin-left:13px">Answered <?php echo $updateagomsg ?></p>
                        </ul>
                      </div>
                    <?php
                    } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <!-- <div class="card shadow border-0">
            <div class="card-body border-0">
              <h2 class="mt-2 mb-4 text-center text-dark">Legal Help now</h2>
              <form class="form-group" action="" method="POST">
                <input type="text" placeholder="Name" class="form-control mt-4 mb-4" name="name">
                <input type="email" placeholder="E-Mail" class="form-control" name="email">
                <textarea class="form-control mt-4 mb-4" name="description" rows="5" placeholder="Describe your condition"></textarea>
                <button class="btn btn-success mt-3 mb-2 btn-sm float-right">Submit <i class="fa fa-arrow-right ml-1" style="font-size: 11px"></i></button>
              </form>
            </div>
          </div> -->
          <div class="row">
            <div class="col-md-12">
              <div class="card shadow  border-0">
                <div class="card-body  border-0" style="height:400px">
                  <h3 class="mt-3 text-center text-dark ">Location</h3>
                  <div class="col mt-1">
                  <table cellpadding="8" class="table-responsive">
                    <tr>
                      <th><span class="fa fa-home"></span></th>
                      <td><?php echo $locality . ', ' . $districtname . ', ' . $statename . ', ' . $pincode ?></td>
                    </tr>
                  </table>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End lawyer profile section -->

<?php
} else {
  header('location:404notfound.php');
}
include 'footer.php';
?>