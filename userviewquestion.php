<?php
include("userheader.php");
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
$query4 = "SELECT * FROM tbl_answere WHERE question_id='$qt_id'";
$result4 = mysqli_query($connect, $query4);
$date_time = $date . " " . $time;
date_default_timezone_set('Asia/Kolkata');
$updateagomsg = get_time_ago($date_time);
?>
<!-- start ask question page -->
<section id="question" class="mt-5 bg-secondary text-dark">
  <div class="container py-5" id="allanswere">
    <div class="py-3 bg-white shadow mt-3 border-0 card">
      <div class="row">
        <div class="col-md-6 col-8 ">
          <h1 class="ml-3 text-dark">Question/Answer</h1>
        </div>
        <div class="col-md-6 col-4">
          <a href="useraskquestion.php">
            <button class="btn btn-dark  btn-sm mt-2  mr-2 float-right mr-1">Ask a question</button>
          </a>
        </div>
      </div>
    </div>
    <div class="row mt-3 justify-content-center">
      <div class="col-xl-11">
        <div class="card mb-2 mt-2 border-0 shadow">
          <div class="card-body">
            <h3><span class="ml-1 text-dark">Q.<?php echo $title; ?></span></h3>
            <p class="ml-4" style="font-size: 14px"><span><?php echo $description; ?></span>
            </p>
            <small class="text-muted ml-4">Asked <?php echo $updateagomsg ?> in <?php echo $lawname; ?> from <?php echo $district . ' ' . $state; ?></small><br />
            <small class="text-muted ml-4"> Stage : <?php echo $religion; ?></small>
          </div>
        </div>
        <?php
        while ($row4 = mysqli_fetch_array($result4)) {
          $lawyer_email = $row4['lawyer_email'];
          $query5 = "SELECT * FROM tbl_lawyer WHERE email='$lawyer_email'";
          $result5 = mysqli_query($connect, $query5);
          if ($row5 = mysqli_fetch_array($result5)) {
            $lawyer_name = $row5['name'];
            $practstate = $row5['practicingstate'];
            $lawyer_id = $row5['lawyer_id'];
            $filename = $row5['filename'];
            $query6 = "SELECT * FROM tbl_state WHERE state_id='$practstate'";
            $result6 = mysqli_query($connect, $query6);
            if ($row6 = mysqli_fetch_array($result6)) {
              $practicingstate = $row6['name'];
            }
          }

        ?>
          <div class="card bg-transparent mb-2 mt-2  border-0">
            <div class="card-body">
              <span class="h2">A.</span>
              <span class="ml-1" style="font-size: 13px"><span><?php echo $row4['answered']; ?></span></span>
            </div>
            <div class="col-xl-5 col-md-7">
              <div class="card card-stats mb-3 shadow border-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h4 class="card-title text-uppercase mb-0 text-dark"><?php echo $lawyer_name ?></h4>
                      <span class="h5 font-weight-bold mb-0 text-dark">Teacher,</span>
                      <small class="text-dark"> <?php echo $practicingstate ?></small><br />
                      <small><span style="font-size: 11px"><?php echo LawyerGetRating($lawyer_id); ?> </span></small>
                      <p class="mt-1 mb-0 text-muted carddown text-sm">
                        <a style="font-size: 12px" href="userlawyerprofile.php?la_id=<?php echo $lawyer_id; ?>" class="text-success ml-1"> View <i class="fa fa-arrow-right" style="font-size: 10px"></i></a>
                      </p>
                    </div>
                    <div class="col-auto bg-dange">
                      <div class="rounded-circle shadow">
                        <img src="code/profileUpload/<?php echo $filename; ?>" class="img-fluid  rounded-circle shadow" style="padding: 6px; height: 80px;width: 80px">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <?php } ?>
      </div>
    </div>
  </div>
</section>

<?php
include("userfooter.php")
?>