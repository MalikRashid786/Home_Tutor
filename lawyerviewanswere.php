<?php
include("lawyerheader.php");
$query = "SELECT * FROM tbl_answere WHERE lawyer_email='$session_email' ORDER BY answered_id DESC";
$result = mysqli_query($connect, $query);
?>
<section class="py-5 bg-secondary mt-4">
  <div class="container text-center mb-4">
    <div class="section-heading mt-5">
      <h1><span class="text-green">Answered</span> History</h1>
      <p class="h4 ">View Your Answered</p>
    </div>
  </div>
</section>

<section style="margin-top: -65px;min-height: 67vh;" class="bg-secondary py-2">
  <div class="container mb-5">
    <div class="row justify-content-center">
      <?php $a = 0;
      $count_ans = mysqli_num_rows($result);
      if ($count_ans > 0) {
        while ($row = mysqli_fetch_array($result)) {
          // Find Answere Update Time In ago
          $date = $row['date'];
          $time = $row['time'];
          $date_time = $date . " " . $time;
          date_default_timezone_set('Asia/Kolkata');
          $updateagomsg = get_time_ago($date_time);
          $a++;
          $question_id = $row['question_id'];
          $query1 = "SELECT * FROM tbl_question WHERE question_id='$question_id'";
          $result1 = mysqli_query($connect, $query1);
          if ($row1 = mysqli_fetch_array($result1)) {
            $title = $row1['title'];
            $description = $row1['description'];
          }
      ?>
          <div class="col-xl-12 col-lg-7 col-md-10 col-sm-12 col-12">
            <div class="card mb-3 card-stats shadow border-0">
              <div class="card-body">
                <div class="row">
                  <h2 class="card-title mb-2 mt-2 col-12">Q<span class="h3"> <?php echo $a; ?> </span> . <?php echo $title; ?></h2>
                  <h5 class="card-title mb-2 col-12"><?php echo $description; ?></h5>
                  <span class="card-title  col-12 mt-3" style="font-size: 12px"> <span class="h2"> A . </span> <?php echo $row['answered']; ?></span>
                  <h5 class="card-title mb-2 mt-1 col-6 "> Answering Time :- <?php echo $updateagomsg ?></h5>
                  <a href="code/lawyeransweredeletecode.php?an_id=<?php echo $row['answered_id']; ?>" class=" col-6 mt-1 "><button class="btn btn-sm float-right"><i class="fa fa-trash text-success"></i></button></a>
                </div>
              </div>
            </div>
          </div>
      <?php }
      } else {
        echo "<h3 class='mt-5' style='min-height: 52vh'>No Answeres Here</h3>";
      }
      ?>
    </div>
  </div>
</section>
<?php
include 'lawyerfooter.php';
?>