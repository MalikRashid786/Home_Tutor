<?php
include("lawyerheader.php");
$qt_id = $_REQUEST['qt_id'];
$query = "SELECT * FROM tbl_question WHERE question_id='$qt_id'";
$result = mysqli_query($connect, $query);
if ($row = mysqli_fetch_array($result)) {
  $title = $row['title'];
  $lawarea_id = $row['lawarea'];
  $description = $row['description'];
  $religion = $row['religion'];
  $state_id = $row['state'];
  $district_id = $row['district'];
  $date = $row['date'];
  $time = $row['time'];
}
$query1 = "SELECT * FROM tbl_state WHERE state_id='$state_id'";
$result1 = mysqli_query($connect, $query1);
if ($row1 = mysqli_fetch_array($result1)) {
  $state = $row1['name'];
}
$query2 = "SELECT * FROM tbl_district WHERE district_id='$district_id'";
$result2 = mysqli_query($connect, $query2);
if ($row2 = mysqli_fetch_array($result2)) {
  $district = $row2['name'];
}
$query3 = "SELECT * FROM tbl_law WHERE law_id='$lawarea_id'";
$result3 = mysqli_query($connect, $query3);
if ($row3 = mysqli_fetch_array($result3)) {
  $lawname = $row3['lawname'];
}

// Find Answere Update Time In ago

$date_time = $date . " " . $time;
date_default_timezone_set('Asia/Kolkata');
$updateagomsg = get_time_ago($date_time);
?>
<section class="mt-4 card border-0 bg-secondary">
  <div class="section-heading mt-5 mb-3">
    <h1 class="text-center mt-4"> Post Your <span class="text-green">Answer</span></h1>
  </div>
</section>

<section id="question" class="bg-secondary" style="margin-top: -87px">
  <div class="container py-5 mt-5">
    <div class="justify-content-center text-darker">
      <div class="ml-2 mr-2">
        <div class="card border-0 ">
          <div class="card-body">
            <h2><span class="ml-1">Q.<?php echo $title; ?></span></h2>
            <p class="ml-4"><span><?php echo $description; ?></span></p>
            <small class="text-muted ml-4">Asked <?php echo $updateagomsg ?> in <?php echo $lawname; ?> from <?php echo $district . ' ' . $state; ?></small><br />
            <small class="text-muted ml-4"> Stage : <?php echo $religion; ?></small>
          </div>
        </div>
        <div class="card border-0 mb-2">
          <div class="card-body">
            <form action="code/lawyerpostyouranswrere.php" method="post">
              <input type="text" value="<?php echo $qt_id ?>" name="question_id" hidden>
              <input type="text" value="<?php echo $session_email ?>" name="session_email" hidden>
              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <textarea class="form-control mt-1" maxlength="3000" rows="7" placeholder="Post Your Answer Here.." name="answerediscription" required></textarea>
                </div>
              </div>
              <div class="form-row justify-content-end">
                <div class="col-md-6 col-lg-3 col-xl-3">
                  <a href="lawyerviewallquestion.php"><button type="button" class="btn col-xl-12 btn-secondary mb-2"><i class="fa fa-arrow-left" style="font-size: 10px"></i> Cancel</button></a>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3">
                  <button class="btn btn-success col-xl-12 mb-2" type="submit"> Post <i class="fa fa-arrow-right" style="font-size: 10px"></i> </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php
include("lawyerfooter.php");
?>