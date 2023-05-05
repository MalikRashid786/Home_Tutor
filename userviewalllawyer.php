<?php
include 'userheader.php';
$query1 = "SELECT * FROM tbl_lawyer ";
$result1 = mysqli_query($connect, $query1);
$count_lawyer = mysqli_num_rows($result1);

$query = "SELECT * FROM tbl_lawyer WHERE status='0' ORDER BY lawyer_id DESC";
$output = '';
$result = mysqli_query($connect, $query);
$count = mysqli_num_rows($result);
?>
<section class="bg-secondary mt-6">
  <div class="header pb-8 pt-5 d-flex align-items-center" style=" background-image:url(images/img_1.jpg); background-size: cover; background-position: center top; background-repeat: no-repeat;">
    <!-- Mask -->
    <span class="mask bg-dark opacity-8"></span>
    <!-- Header container -->
    <div class="container py-5 mb-5">
      <div class="row justify-content-center">
        <div class="col-xl-12 col-md-12">
          <h1 class="display-2 text-white mt-5">Find Best Tutor's in Your City</h1>
          <p class="text-light">You Find Best Tutor's in Your City. Here <span class="text-white" style="font-size: 20px;font-weight: 800"><?php echo $count_lawyer - 1; ?>+</span> Registred Lawyer Which Belong Different City. So You Can Find Best Teacher Easly. </p>
          <p class="text-light"> Our Pool of <span class="text-white" style="font-size: 20px;font-weight: 800"><?php echo $count_lawyer - 1; ?>+</span> Expert Teachers serving students through great customer ecperience</p>
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

<section class="bg-secondary text-dark" style="margin-top: -80px">
  <div id="toplawyer">
    <div class="container">
      <div class="row">
        <?php if ($count > 0) {
          while ($row = mysqli_fetch_array($result)) {
            $lawyer_id = $row['lawyer_id'];
            $practicingstate = $row['practicingstate'];
            $query1 = "SELECT * FROM tbl_state WHERE state_id='$practicingstate'";
            $result1 = mysqli_query($connect, $query1);
            if ($row1 = mysqli_fetch_array($result1)) {
              $practicingstatename = $row1['name'];
            } else {
              $practicingstatename = "--";
            }
        ?><div class="col-md-6 col-6 col-lg-4 col-xl-3 mb-5">
              <div class="card border-0 shadow">
                <div class="row justify-content-center">
                  <div class="col-md-12 text-center card-profile-image">
                    <img src="code/profileUpload/<?php echo $row['filename'] ?>" class="img-fluid  rounded-circle">
                  </div>
                </div>
                <div class="card-body mt-5">
                  <div class="row">
                    <div class="col-md-12 text-center justify-content-center">
                      <h4 class="mt-1 text-dark"><?php echo $row['name'] ?></h4>
                      <small class="text-dark">Teacher, <?php echo $practicingstatename ?></small><br />
                      <span style="font-size: 12px"><?php echo LawyerGetRating($lawyer_id); ?> </span>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <span class="text-success text-sm"><a href="userlawyerprofile.php?la_id=<?php echo $row['lawyer_id'] ?>" class="text-success">View <i class="fa fa-arrow-right" style="font-size: 10px;margin-left:3px;"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
        <?php
          }
        } else {
          echo $output = '<h3 class="text-danger mt-5" >No Data Found</h3>';
        }
        ?>
      </div>
    </div>
  </div>
</section>

<?php
include 'userfooter.php';
?>