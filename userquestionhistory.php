<?php
include("userheader.php");
$query = "SELECT * FROM tbl_question WHERE email='$session_email' ORDER BY question_id DESC";
$result = mysqli_query($connect, $query);
$count = mysqli_num_rows($result);
?>

<section class="py-5 mt-3 bg-secondary">
  <div class="container text-center mb-4 py-1">
    <div class="section-heading mt-5">
      <h1 class="text-green">Questions <span class='text-dark'>History</span></h1>
      <p class="h4 ">Your Asked All Question Here.</p>
    </div>
  </div>
</section>

<section style="margin-top: -40px; min-height: 65vh" class="bg-secondary py-2">
  <div class="container mb-5">
    <div class="row justify-content-center">
      <?php
      if ($count > 0) {
        $a = 0;
        while ($row = mysqli_fetch_array($result)) {
          // Find Answere Update Time In ago
          $date = $row['date'];
          $time = $row['time'];
          $date_time = $date . " " . $time;
          date_default_timezone_set('Asia/Kolkata');
          $updateagomsg = get_time_ago($date_time);
          $a++;
          $question_id = $row['question_id'];
          $lawarea = $row['lawarea'];
          $query1 = "SELECT * FROM tbl_law WHERE law_id='$lawarea'";
          $result1 = mysqli_query($connect, $query1);
          if ($row1 = mysqli_fetch_array($result1)) {
            $lawname = $row1['lawname'];
          }
          $query2 = "SELECT * FROM tbl_answere WHERE question_id='$question_id'";
          $result2 = mysqli_query($connect, $query2);
          if ($row2 = mysqli_fetch_array($result2)) {
            $answere = $row2['answered'];
          } else {
            $answere = "No Answer Given By The Lawyer";
          }
      ?>
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card mb-3 card-stats shadow border-0">
              <div class="card-body">
                <div class="row">
                  <h2 class="card-title mb-2 mt-2 col-12">Q<span class="h3"> <?php echo $a; ?></span> . <?php echo $row['title']; ?></h2>
                  <h5 class="card-title mb-4 mt-2 col-12" style="margin-left: 42px"><?php echo $row['description']; ?></h5>
                  <span class="card-title h5 col-12"> <span class="h2"> A . </span> <?php echo $answere; ?></span>
                  <small class="text-muted col-8 mt-2">Asked <?php echo $updateagomsg ?> in <?php echo $lawname; ?> </small>
                  <a href="lawyerpostyouranswere.php?qt_id=<?php echo $row['question_id']; ?>" class="text-right col-4"><button class="btn btn-sm btn-success"><i class=" fa fa-trash"></i></button></a>
                </div>
              </div>
            </div>
          </div>
      <?php }
      } else {
        echo '<h3 class="text-center">No Question Here || Asked Question <br/><a href="useraskquestion.php" class="btn btn-sm btn-success mt-3">Ask a Question</a></h3>';
      }
      ?>
    </div>
  </div>
</section>
<?php
include 'userfooter.php';
?>