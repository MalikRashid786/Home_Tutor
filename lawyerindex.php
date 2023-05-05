<?php
include("lawyerheader.php");
$session_email = $_SESSION['lawyer'];
$query = "SELECT * FROM tbl_lawyer WHERE email='$session_email'";
$result = mysqli_query($connect, $query);
if ($row = mysqli_fetch_array($result)) {
  $lawyer_id = $row['lawyer_id'];
  $name = $row['name'];
  $number = $row['number'];
  // $license_number=$row['license_number'];
  $language = $row['language'];
  $practicingarea = $row['practicingarea'];
  $practicingcourt = $row['practicingcourt'];
  $practicingstate = $row['practicingstate'];
  $practicingdistrict = $row['practicingdistrict'];
  $casehandled = $row['casehandled'];
  $bar_enroll_date = $row['bar_enroll_date'];
  $website = $row['website'];
  $alt_number = $row['alt_number'];
  $account_number = $row['account_number'];
  $ifsc = $row['ifsc'];
  $state = $row['state'];
  $district = $row['district'];
  $locality = $row['locality'];
  $pincode = $row['pincode'];
  $filename = $row['filename'];
  $date_time = $row['date_time'];
}
$query3 = "SELECT count(answered_id) AS `totalanswere` FROM tbl_answere WHERE lawyer_email='$session_email'";
$result3 = mysqli_query($connect, $query3);
$row3 = mysqli_fetch_array($result3);
$query1 = "SELECT * FROM tbl_state WHERE state_id='$state'";
$result1 = mysqli_query($connect, $query1);
if ($row1 = mysqli_fetch_array($result1)) {
  $statename = $row1['name'];
} else {
  $statename = "--";
}
// match district 
function fetch_district($district)
{
  include 'config.php';
  $query2 = "SELECT * FROM tbl_district WHERE district_id='$district'";
  $result2 = mysqli_query($connect, $query2);
  if ($row2 = mysqli_fetch_array($result2)) {
    return $districtname = $row2['name'];
  } else {
    return $districtname = "--";
  }
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

// Find Laywer Profile Update Time In ago
date_default_timezone_set('Asia/Kolkata');
$updatemsg = get_time_ago($date_time);
// count lawyer appointmnts
$query4 = "SELECT count(appointment_id) AS `totalappoint` FROM tbl_appointment WHERE productinfo='$lawyer_id'";
$result4 = mysqli_query($connect, $query4);
$row4 = mysqli_fetch_array($result4);
?>



<section class="py-5  border-0 bg-secondary">
  <!-- Header -->
  <div class="header pb-8 pt-5 pt-lg-7 d-flex align-items-center" style="min-height: 530px; background-image: url(code/profileUpload/<?php echo $filename; ?>); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-dark opacity-8"></span>
    <!-- Header container -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-12">
          <h1 class="display-2 text-white">Hello <?php echo $name ?></h1>
          <p class="text-white mt-0 mb-4">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
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
<section id="lawyerprofile" style="margin-top: -185px" class="bg-secondary py-5">
  <div class="container">
    <div class="row">
      <div class="col mb-5">
        <div class="card shadow tex-default border-0 bg-white text-dark">
          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0">My account</h3>
              </div>
            </div>
          </div>
          <div class="card-body  border-0">
            <div class="row text-center ">
              <div class="col-md-2 col-xl-2 col-lg-2 img justify-content-center align-items-center d-flex">
                <img src="code/profileUpload/<?php echo $filename; ?>" class="img-fluid float-left rounded-circle mt-1 mb-1">
                <div class="img-fluid float-left rounded-circle mt-1 mb-1" style="background-image: url(code/profileUpload/<?php echo $filename; ?>); background-size: cover; background-position: center top;"></div>
                <div class="float-left rounded-circle">
                  <a href="lawyerupdateprofile.php?edit=9" id="changepic" class="text-white"><i class="fa fa-edit"></i></a>
                </div>
              </div>
              <div class="col-md-3 col-xl-4 col-lg-3 text-left card mb-2 text-center">
                <span class="mt-2" style="font-weight: 600"><a href="lawyerupdateprofile.php?edit=10" class="nav-link"><?php echo $name ?></a></span>
                <!-- <span style="font-size: 13px"><?php echo $license_number ?></span> -->
                <span style="font-size: 12px"><?php echo LawyerGetRating($lawyer_id); ?> </span>
              </div>
              <div class="col-md-3 col-xl-2 col-lg-2 card col-4 mb-2">
                <h6 class="mt-2"><a href="lawyerviewappointment.php" class="nav-link">Appointments</a></h6>
                <p class="mt-3 mb-3"><?php echo $row4['totalappoint']; ?></p>
              </div>
              <div class="col-md-2 col-xl-2 col-lg-2 card col-4 mb-2">
                <h6 class="mt-2"><a href="" class="nav-link">Legal Help</a></h6>
                <p class="mt-3 mb-3">150</p>
              </div>
              <div class="col-md-2 col-xl-2 col-lg-2 card col-4 mb-2">
                <h6 class="mt-2"><a href="lawyerviewanswere.php" class="nav-link">Answere</a></h6>
                <p class="mt-3 mb-3"><?php echo $row3['totalanswere']; ?></p>
              </div>
            </div>
            <hr />
            <div class="row">
              <div class="col-md-6 ml-3">
                <table cellpadding="8">
                  <tr>
                    <th>Experience</th>
                    <td>
                      <span class="ml-3"><?php echo get_time($bar_enroll_date); ?></span>
                    </td>
                  </tr>
                  <tr>
                    <th>Current College/University </th>
                    <td><a href="lawyerupdateprofile.php?edit=2" class="nav-link">
                        <?php if ($practicingcourt == "--") {
                          echo "Click here to Edit";
                        } else {
                          echo $practicingcourt;
                        }
                        ?>
                      </a></td>
                  </tr>
                  <tr>
                    <th>Language Spoken </th>
                    <td><a href="lawyerupdateprofile.php?edit=4" class="nav-link">
                        <?php if ($language == "--") {
                          echo "Click here to Edit";
                        } else {
                          echo $language;
                        }
                        ?>
                      </a></td>
                  </tr>
                </table>
              </div>
              <div class="col-md-5 ml-3">
                <table cellpadding="8">
                  <tr>
                    <th>Offical Teacher Joining Date</th>
                    <td><?php echo $bar_enroll_date; ?></td>
                  </tr>
                  <tr>
                    <th>Satisfied Student	 </th>
                    <td><?php echo $casehandled; ?></td>
                  </tr>
                  <tr>
                    <th>Current State </th>
                    <td><?php echo $practicingstatename; ?></td>
                  </tr>
                  <tr>
                    <th>Current Distrcit </th>
                    <td><?php echo fetch_district($practicingdistrict); ?></td>
                  </tr>
                </table>
              </div>
            </div>
             <a href="lawyerupdateprofile.php?edit=1"><button class="btn btn-success btn-sm float-right col-md-1 col-3 mt-2"><i class="fa fa-edit"></i> Edit</button></a>
            <!-- <hr class="mt-5" /> -->
            <!-- <p class="h3 text-dark" style="margin-left: 15px"><i class="fa fa-bank mr-2" style="font-size: 15px"></i> Bank Details</p>
            <div class="row">
              <div class="col-md-6 ml-3">
                <table cellpadding="8">
                  <tr>
                    <th>Account No.</th>
                    <td>
                      <span><?php echo $account_number; ?></span>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="col-md-5 ml-3">
                <table cellpadding="8">
                  <tr>
                    <th>IFSC</th>
                    <td><?php echo $ifsc; ?></td>
                  </tr>
                </table>
              </div>
            </div> 
            <a href="lawyerupdateprofile.php?edit=5"><button class="btn btn-dark btn-sm float-right col-md-1 col-3 mt-2"><i class="fa fa-edit"></i> Edit</button></a> -->
            <hr class="mt-5" />
            <p class="h3 text-dark" style="margin-left: 15px"><i class="ni ni-paper-diploma mr-2" style="font-size: 14px"></i> Specialization</p>
            <div class="row">
              <?php
              if ($practicingarea == "0") {
              ?>
                <p class="mt-2" style="font-size: 14px; margin-left: 57px">No Specialization Are Selected.Please Edit Your Specialization.</p>
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
            <a href="lawyerupdateprofile.php?edit=3"><button class="btn btn-success btn-sm float-right col-md-1 col-3 mt-2"><i class="fa fa-edit"></i> Edit</button></a>
            <hr class="mt-5" />
            <div class="row">
              <div class="col-md-6 ml-3">
                <div class="card-header border-0 bg-white ">
                  <h3 class="text-dark" style="margin-left: -17px"><i class="fa fa-phone mr-2" style="font-size: 14px"></i> Contact Details</h3>
                </div>
                <table cellpadding="8" class="mb-3">
                  <tr>
                    <th>Website </th>
                    <td><?php echo $website; ?></td>
                  </tr>
                  <tr>
                    <th>E-Mail </th>
                    <td><?php echo $session_email ?></td>
                  </tr>
                  <tr>
                    <th>Mobile No </th>
                    <td>+91 <span><?php echo $number ?></span></td>
                  </tr>
                  <tr>
                    <th>Alternate Mobile No </th>
                    <td>+91 <span><?php echo $alt_number; ?></span></td>
                  </tr>
                </table>
              </div>
              <div class="col-md-5 ml-3">
                <div class="card-header border-0 bg-white">
                  <h3 class="text-dark" style="margin-left: -17px"><i class="fa fa-map-signs mr-2" style="font-size: 14px"></i> Office Location</h3>
                </div>
                <table cellpadding="8" class="mb-3">
                  <tr>
                  <tr>
                    <th>Locality </th>
                    <td class="text-capitalize"><?php echo $locality; ?></td>
                  </tr>
                  <tr>
                    <th>District </th>
                    <td><?php echo fetch_district($district); ?></td>
                  </tr>
                  <tr>
                    <th>State </th>
                    <td><?php echo $statename; ?></td>
                  </tr>
                  <tr>
                    <th>Pincode </th>
                    <td><?php echo $pincode; ?></td>
                  </tr>
                </table>
              </div>
            </div>
            <a href="lawyerupdateprofile.php?edit=00"><button class="btn btn-success btn-sm float-right col-md-1 col-3 mt-2"><i class="fa fa-edit"></i> Edit</button></a>
            <!-- <hr class="mt-5" /> -->
            <!-- <div class="row justify-content-center ">              
               <div class="col-md-10 text-center">
               <h5  class="mt-5 mb-3"><i class="fa fa-map"></i> Office Location</h5>                
                  Here Google Map
                 <div class="bg-info" style="height: 500px;"></div>
               </div>
             </div> -->
          </div>
          <div class="card-footer">
            <p class="text-right"><small>Last Update <?php echo $updatemsg ?></small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include 'lawyerfooter.php';
?>