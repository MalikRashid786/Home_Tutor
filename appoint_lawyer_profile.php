<?php
include 'userheader.php';
$lawyer_id = $_REQUEST['la_id'];
$sql = "SELECT * FROM tbl_user WHERE email='$session_email'";
if ($res = mysqli_fetch_array(mysqli_query($connect, $sql))) {
  $user_id = $res['user_id'];
}
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
$query4 = "SELECT * FROM tbl_state WHERE state_id='$state'";
$result4 = mysqli_query($connect, $query4);
if ($row4 = mysqli_fetch_array($result4)) {
  $statename = $row4['name'];
} else {
  $statename = '--';
}
$query5 = "SELECT * FROM tbl_district WHERE district_id='$district'";
$result5 = mysqli_query($connect, $query5);
if ($row5 = mysqli_fetch_array($result5)) {
  $districtname = $row5['name'];
} else {
  $districtname = '--';
}
$query3 = "SELECT count(answered_id) AS `totalanswere` FROM tbl_answere WHERE lawyer_email='$email'";
$result3 = mysqli_query($connect, $query3);
$row3 = mysqli_fetch_array($result3);

// Start Count appointments
$query4 = "SELECT appointment_id FROM tbl_appointment WHERE productinfo='$lawyer_id'";
$result4 = mysqli_query($connect, $query4);
$count = mysqli_num_rows($result4);
if ($count > 0) {
  $count;
} else {
  $count = 0;
}
// End Count appointments

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



// retriving rating from star table
$query = "SELECT * FROM tbl_star WHERE user_id='$user_id' AND lawyer_id='$lawyer_id' ";
$result = mysqli_query($connect, $query);

if ($row = mysqli_fetch_array($result)) {
  $point = $row['ratepoint'];
  $remain = 5 - $point;
  if ($remain == 1) {
    $start = 4;
  } elseif ($remain == 2) {
    $start = 3;
  } elseif ($remain == 3) {
    $start = 2;
  } elseif ($remain == 4) {
    $start = 1;
  } else {
    $start = 5;
  }
}
?>

<!-- Start lawyer profile section -->

<section class="bg-secondary py-5 text-dark">
  <div class="header pb-8 pt-5 pt-lg-6 d-flex align-items-center" style=" background-image:url('code/profileUpload/<?php echo $filename; ?>'); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-dark opacity-8"></span>
    <!-- Header container -->
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-11 col-xl-11">
          <h1 class="display-2 text-white mt-5"><?php echo $name ?></h1>
          <p class="text-white mt-0 mb-5">This is profile page. You can see the progress you've made with your work and manage your clients or legal help</p>
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
<section id="lprofile" class="bg-secondary py-5 text-dark" style="margin-top: -195px">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 col-lg-11 col-xl-11 text-default mb-5">
        <div class="card border-0 shadow">
          <div class="card-body ">
            <div class="row text-center ">
              <div class="col-md-3 mt-3 justify-content-center align-items-center d-flex">
                <img src="code/profileUpload/<?php echo $filename; ?>" style="height: 100px;width: 100px;" class="img-fluid float-left shadow rounded-circle mt-1 mb-2">
                <div class="img-fluid float-left shadow rounded-circle mt-1 mb-2" style=" background-image:url('code/profileUpload/<?php echo $filename; ?>'); background-size: cover; background-position: center top;"></div>
              </div>
              <div class="col-md-4  card mb-2">
                <h3 class="mt-3 text-dark"><?php echo $name ?></h3>
                <span><?php echo $license_number ?></span>
                <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" class="text-default">
                  <span class="mb-1">
                    <?php echo LawyerGetRating($lawyer_id); ?>
                  </span>
                </a>
              </div>
              <div class="col-md-2 card col-6 mb-2">
                <span class="mt-3">Consultations</span>
                <span class="mt-3"><?php echo $count; ?></span>
              </div>
              <div class="col-md-2 card col-6 mb-2">
                <span class="mt-3">Answere</span>
                <span class="mt-3"><?php echo $row3['totalanswere']; ?></span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5 col-5">
                <h2 class="ml-2 mt-4 mb-4 text-dark">About Teacher </h2>
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
                    <th>Experiencer </th>
                    <td><?php echo get_time($bar_enroll_date); ?></td>
                  </tr>
                  <tr>
                    <th>Current State </th>
                    <td><?php echo $practicingstatename ?></td>
                  </tr>
                </table>
              </div>
              <div class="col-md-7">
                <table cellpadding="8" class="table-responsive">
                  <tr>
                    <th>Satidfied Student </th>
                    <td><?php echo $casehandled ?></td>
                  </tr>
                  <tr>
                    <th>Phone </th>
                    <td>+91 <?php echo $number ?></td>
                  </tr>
                  <tr>
                    <th>Alt.Phone </th>
                    <td>+91 <?php echo $alt_number ?></td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mt-1">
                <table cellpadding="8" class="table-responsive">
                  <tr>
                    <th>Office Location</th>
                    <td><?php echo $locality . ', ' . $districtname . ', ' . $statename . ', ' . $pincode ?></td>
                  </tr>
                  <tr>
                    <th>Practising Courts</th>
                    <td><?php echo $practicingcourt ?></td>
                  </tr>
                </table>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-12 mt-1">
                <h3 class="ml-2 mb-4 text-dark">Practics Area </h3>
                <div class="row">
                  <?php
                  if ($practicingarea == "0") {
                  ?>
                    <p class="ml-5">No Practicing Area Are Selected.</p>
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
                <h3 class="ml-2 text-dark"><?php echo $name ?>'s recent answere </h3>
                <div class="row">

                  <?php
                  $query1 = "SELECT * FROM tbl_answere WHERE lawyer_email='$email'";
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
                    <div class="col-md-6">
                      <ul>
                        <li><a style=" font-size: 13px" href="userviewquestion.php?qt_id=<?php echo $question_id ?>" class="nav-link"><?php echo $title ?></a></li>
                        <p style="margin-left: 13px;">Answered <?php echo $updateagomsg ?></p>
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
    </div>
  </div>
</section>



<!-- Start Rating Modal Here -->
<div class="modal fade text-dark" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title text-dark" id="exampleModalLabel">Rate Now</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <span id="user" data-index="<?php echo $user_id ?>"></span>
        <span id="lawyer" data-index="<?php echo $lawyer_id ?>"></span>
        <p class="h1 text-center text-dark">Please Give Your Rating.</p>
        <p class="text-center mb-4" style="font-size: 14px">Your Rating Is Very Important For Me. So You Can Rate Now.</p>
        <div class="col-md-12 mb-3 text-center">
          <?php
          if ($count = mysqli_num_rows($result)) {
            for ($i = 0; $i < $point; $i++) {
          ?>
              <i class="fa fa-star fst" style="color: #2dce89" data-index="<?php echo $i; ?>"></i>
          <?php
            }
            for ($j = $start; $j <= 4; $j++) {
              echo ' <i class="fa fa-star fst" data-index="' . $j . '"></i>';
            }
          } else {
            for ($j = 0; $j <= 4; $j++) {
              echo ' <i class="fa fa-star fst" data-index="' . $j . '"></i>';
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End rating Modal  -->

<script type="text/javascript">
  var ratedIndex = -1;
  var uID = parseInt($("#user").data('index'));
  var lawyer_id = parseInt($("#lawyer").data('index'));

  $(document).ready(function() {
    // resetStarColors();
    setTimeout(function() {
      $('#exampleModal').modal('show');
    }, 230);

    $('.fst').on('click', function() {
      ratedIndex = parseInt($(this).data('index'));
      saveTo();
    });

    $('.fst').mouseover(function() {
      resetStarColors();
      var currenIndex = parseInt($(this).data('index'));
      setStars(currenIndex);
    });

    $('.fst').mouseleave(function() {
      resetStarColors();

      if (ratedIndex != -1)
        setStars(ratedIndex);
    });
  });

  function saveTo() {
    // alert(lawyer_id);
    $.ajax({
      url: "code/ratingcode.php",
      method: "POST",
      data: {
        save: 1,
        uID: uID,
        lawyer_id: lawyer_id,
        ratedIndex: ratedIndex
      },
      dataType: "text",
      success: function(data) {
        // alert(data);
        if (data == 2 || data == 1) {
          swal("Good job!", "Thank You For Rating Us.", "success");
          setTimeout(function() {
            location.reload();
          }, 5000);
        } else {
          swal("Opps..!", "Try Again.", "error");
        }
      }
    });
  }

  function setStars(max) {
    for (var i = 0; i <= max; i++)
      $('.fst:eq(' + i + ')').css('color', '#2dce89');
  }

  function resetStarColors() {
    $('.fst').css('color', 'black');
  }
</script>
<?php
include 'lawyerfooter.php';
?>