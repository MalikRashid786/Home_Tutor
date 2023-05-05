<?php
include("userheader.php");
$query = "SELECT * FROM tbl_answere ORDER BY answered_id DESC LIMIT 9";
$result = mysqli_query($connect, $query);
$query4 = "SELECT * FROM tbl_lawyer ORDER BY lawyer_id ASC LIMIT 4";
$result4 = mysqli_query($connect, $query4);
$query6 = "SELECT count(answered_id) AS `totalanswere` FROM tbl_answere";
$result6 = mysqli_query($connect, $query6);
$row6 = mysqli_fetch_array($result6);
$query7 = "SELECT * FROM tbl_inlawtype ORDER BY lawtype_id LIMIT 8";
$result7 = mysqli_query($connect, $query7);
?>
<!-- Banner Section strat -->
<section id="head" id="top">
	<div class="container">
		<div class="text-white maintext">
			<h1 class="text-white "> 
        <span class="text-white">Find The Perfect Tutor</span><br> That You Deserved</h1>
		</div>
	</div>
</section>x

<!-- Banner section end -->
<!-- Start Discussion Form Section -->
<section class="discussion mt-5 bg-white" id="discussion">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-5 haeding bg-white py-3 shadow card border-0">
        <div class="row">
          <div class="col-md-6 col-8 ">
            <h1 class="text-dark">Latest Answer(<?php echo $row6['totalanswere']; ?>)</h1>
          </div>
          <div class="col-md-6 col-4">
            <a href="useraskquestion.php">
              <button class="btn btn-success btn-sm mt-2 float-right">Ask a question</button>
            </a>
          </div>
        </div>
      </div>
      <?php
      while ($row = mysqli_fetch_array($result)) {
        // Find Answere Update Time In ago
        $date = $row['date'];
        $time = $row['time'];
        $date_time = $date . " " . $time;
        date_default_timezone_set('Asia/Kolkata');
        $updateagomsg = get_time_ago($date_time);
        $lawyer_email = $row['lawyer_email'];
        $question_id = $row['question_id'];
        $query2 = "SELECT * FROM tbl_question WHERE question_id='$question_id'";
        $result2 = mysqli_query($connect, $query2);
        if ($row2 = mysqli_fetch_array($result2)) {
          $title = $row2['title'];
        }
        $query3 = "SELECT * FROM tbl_lawyer WHERE email='$lawyer_email'";
        $result3 = mysqli_query($connect, $query3);
        if ($row3 = mysqli_fetch_array($result3)) {
          $lawyer_name = $row3['name'];
          $lawyer_id = $row3['lawyer_id'];
          $filename = $row3['filename'];
        }
      ?><div class="col-xl-4  col-md-6 col-lg-4 col-sm-6 text-dark">
          <div class="row mb-2">
            <div class="col-md-2 col-2 mt-1 mr-1">
              <img src="code/profileUpload/<?php echo $filename; ?>" class="rounded-circle" height="50px" width="50px">
            </div>
            <div class="col-md-9 ml-3 col-9">
              <span class="mt-2" style="font-size: 13px"><a href="userviewquestion.php?qt_id=<?php echo $question_id; ?>" class="nav-link"><?php echo $title; ?></a></span>
              <p class="mb-3" style="font-size: 13px; margin-left: 13px">Answered by <a href="userlawyerprofile.php?la_id=<?php echo $lawyer_id ?>" class="text-success"> <?php echo $lawyer_name ?></a> <span class="text-muted"><?php echo $updateagomsg ?></span></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="row justify-content-center">
      <a href="userallanswere.php"><button class="btn btn-success  btn-sm text-center mt-4">See More</button></a>
    </div>
  </div>
</section>
<!-- End Discussion From SEction -->

<!-- Strat top lawyer section -->
<section id="toplawyer" class="bg-white text-dark">
  <div class="container">
    <div class="row mb-5">
      <div class="offset-sm-2 col-sm-8">
        <div class="headerText text-center">
          <h1 class="mt-5 text-dark">MEET BEST TUTOR'S</h1>
          <p class="text-muted mb-3" style="font-size: 15px">Listings, code snippets, and code in the text in this book are in monospaced font.
            This your editor would.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
      while ($row4 = mysqli_fetch_array($result4)) {
        $lawyer_id = $row4['lawyer_id'];
        $pracstate = $row4['practicingstate'];
        $query5 = "SELECT * FROM tbl_state WHERE state_id='$pracstate'";
        $result5 = mysqli_query($connect, $query5);
        if ($row5 = mysqli_fetch_array($result5)) {
          $practicingstate = $row5['name'];
        } else {
          $practicingstate = "--";
        }
      ?>
        <div class="col-md-4 col-6 col-lg-3 mb-5">
          <div class="card border-0 shadow">
            <div class="row justify-content-center">
              <div class="col-md-12 text-center card-profile-image">
                <img style="height: 98px" src="code/profileUpload/<?php echo $row4['filename']; ?>" class="img-fluid  rounded-circle">
              </div>
            </div>
            <div class="card-body mt-5">
              <div class="row">
                <div class="col-md-12 text-center justify-content-center mb-1">
                  <h4 class="mt-1 text-dark"><?php echo $row4['name']; ?></h4>
                  <small class="text-dark">Teacher, <?php echo $practicingstate; ?></small><br />
                  <span style="font-size: 11px"><?php echo LawyerGetRating($lawyer_id); ?></span>
                </div>
              </div>
              <div class="row justify-content-center">
                <span class="text-success text-sm"><a href="userlawyerprofile.php?la_id=<?php echo $lawyer_id; ?>" class="text-success">view <i class="fa fa-arrow-right" style="font-size: 11px"></i></a></span>
              </div>
            </div>

          </div>
        </div>
      <?php
      } ?>
    </div>
    <div class="row justify-content-center">
      <a href="userviewalllawyer.php"><button class="btn btn-success btn-sm  mt-2">View more Teacher</button></a>
    </div>
  </div>
</section>
<!-- End top lawyer section -->

<!-- Start practics card -->
<h1 class="text-center mb-5 mt-5 text-dark">Find Tutors By Specialization</h1>
<div class="container mb-5 text-dark" id="practicscard">
  <div class="row">
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($result7)) {
      $lawtype_id = $row['lawtype_id'];
      $areafontcode = $row['areafontcode'];
      $query2 = "SELECT count(name) AS `total` FROM tbl_lawyer_lawtype WHERE name='$lawtype_id'";
      $result2 = mysqli_query($connect, $query2);
      $row2 = mysqli_fetch_array($result2);
    ?>
      <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
        <div class="card mb-4 mb-xl-0 card-stats shadow border-0">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title mb-0 text-dark"><?php echo $row['areaname']; ?></h5>
                <span class="h5 font-weight-bold mb-0"><?php echo $row2['total']; ?></span>
                <small>Verified Teacher</small><br />
                <a href="usergenralsearchlawyer.php?law_id=<?php echo $row['lawtype_id']; ?>" class="text-success" style="font-weight: bold; font-size: 12px">View <i class="fa fa-arrow-right" style="font-size: 10px"></i></a>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-green text-white rounded-circle shadow">
                  <i class="<?php echo $areafontcode; ?>"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- End practics card -->

<!--/newsletter -->
<section class="newsletter py-5">
  <div class="container mb-3 mt-3">
    <h1 class="text-center text-dark ">Subcribe to our Newsletter</h1>
    <p class="text-center mb-2">By subscribing to our mailing list you will always get latest news and updates from us.</p>
    <div class="row justify-content-center">
      <div class="col-xl-12 mb-5 mt-3">
        <form method="post" id="validate_form" action="">
          <div class="form-row justify-content-center">
            <div class="col-xl-6 col-sm-8">
              <input type="email" class="form-control border-0 mb-3 mt-2" data-parsley-type="email" data-parsley-trigger="keyup" id="email" placeholder="Enter Your Email.." name="email" required="">
            </div>
            <div class="col-xl-2 col-12 col-sm-8 ml-2 send">
              <input type="submit" name="Send" value="Send" id="submit" class="btn btn-success mt-2 col-12">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!--//newsletter -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#validate_form').parsley();

    $('#validate_form').on('submit', function(event) {
      event.preventDefault();
      if ($('#validate_form').parsley().isValid()) {
        // alert($(this).serialize());
        $.ajax({
          url: "code/newsletter.php",
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
            $('#submit').val('Send');
            if (data == "1") {
              swal("Good job!", "Thank You For Subscribing Our Newsletter.Please Check Your Email.", "success");
            } else {
              swal("Opps..!", "Already Subscribing Our Newsletter.Please Check Your Email.", "error");
            }
          }
        });
      }
    });
  });
</script>
<script>
  new WOW().init();
</script>
<?php
include("userfooter.php")
?>