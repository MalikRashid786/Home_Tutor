<?php
include("lawyerheader.php");
$query = "SELECT * FROM tbl_question ORDER BY question_id DESC";
$result = mysqli_query($connect, $query);
?>
<section class="py-5 bg-secondary mt-4">
  <div class="container text-center mb-4 py-1 text-dark">
    <div class="section-heading mt-5">
      <h1><span class="text-green">Questions</span> History</h1>
      <p class="h4 ">User Asked All Question Here.</p>
    </div>
  </div>
</section>
<section style="margin-top: -65px;min-height: 67vh" class="bg-secondary py-2">
  <div class="container mb-5">
    <div class="row justify-content-center">
      <?php
      $a = 0;
      while ($row = mysqli_fetch_array($result)) {
        // Find Answere Update Time In ago
        $date = $row['date'];
        $time = $row['time'];
        $date_time = $date . " " . $time;
        date_default_timezone_set('Asia/Kolkata');
        $updateagomsg = get_time_ago($date_time);
        $a++;
        $lawarea = $row['lawarea'];
        $religion = $row['religion'];
        $state = $row['state'];
        $district = $row['district'];
        $query1 = "SELECT * FROM tbl_law WHERE law_id='$lawarea'";
        $result1 = mysqli_query($connect, $query1);
        if ($row1 = mysqli_fetch_array($result1)) {
          $lawname = $row1['lawname'];
        }
        $query2 = "SELECT * FROM tbl_state WHERE state_id='$state'";
        $result2 = mysqli_query($connect, $query2);
        if ($row2 = mysqli_fetch_array($result2)) {
          $statename = $row2['name'];
        }
        $query2 = "SELECT * FROM tbl_district WHERE district_id='$district'";
        $result2 = mysqli_query($connect, $query2);
        if ($row2 = mysqli_fetch_array($result2)) {
          $districtname = $row2['name'];
        }
      ?>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card mb-3 card-stats shadow border-0">
            <div class="card-body">
              <div class="row">
                <h2 class="card-title mb-2 mt-2 col-12">Q<span class="h3"> <?php echo $a; ?></span> . <?php echo $row['title']; ?></h2>
                <h5 class="card-title mb-2 mt-2 col-12"><?php echo $row['description']; ?></h5>
                <small class="text-muted col-8 mt-2  ">Asked <?php echo $updateagomsg ?> in <?php echo $lawname; ?> from <?php echo $districtname . ' ' . $statename;?><span class="ml-1">, Stage : <?php echo $religion ?></span> </small>
                <a href="lawyerpostyouranswere.php?qt_id=<?php echo $row['question_id']; ?>" class="text-right col-4 mt-1 "><button class="btn btn-sm btn-success">Post Answer</button></a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
<?php
include 'lawyerfooter.php';
?>