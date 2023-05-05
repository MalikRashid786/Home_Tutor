<?php
include("userheader.php");
$law_id = $_REQUEST['law_id'];
$query1 = "SELECT * FROM  tbl_lawyer_lawtype WHERE name='$law_id'";
$result1 = mysqli_query($connect, $query1);
?>
<section class="py-5 card border-0 bg-secondary">
  <div class="header pb-8 pt-5 pt-lg-9 d-flex align-items-center" style=" background-image:url(img/undraw_my_current_location_om7g.png); background-size: contain; background-repeat: no-repeat; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-dark opacity-8"></span>
    <!-- Header container -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-12 col-md-12">
          <h1 class="display-2 text-white">Find Best Teacher in India</h1>
          <p class="text-white mt-0 mb-5">This is profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
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
<section id="toplawyer" class="bg-secondary py-4">
  <div class="container mb-5 text-dark" style="margin-top: -150px">
    <div class="container ">
      <div class="row">
        <?php
        while ($row1 = mysqli_fetch_array($result1)) {
          $lawyer_id = $row1['lawyer_id'];
          $query4 = "SELECT * FROM tbl_lawyer WHERE lawyer_id='$lawyer_id'";
          $result4 = mysqli_query($connect, $query4);
          if ($row4 = mysqli_fetch_array($result4)) {
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
            <div class="col-md-3 col-6 col-lg-3 mb-5">
              <div class="card border-0 shadow">
                <div class="row justify-content-center">
                  <div class="col-md-12 text-center card-profile-image">
                    <img src="code/profileUpload/<?php echo $row4['filename']; ?>" class="img-fluid  rounded-circle">
                  </div>
                </div>
                <div class="card-body mt-5">
                  <div class="row">
                    <div class="col-md-12 text-center justify-content-center">
                      <h4 class="mt-1 text-dark"><?php echo $row4['name']; ?></h4>
                      <small class="text-dark">Teacher, <?php echo $practicingstate; ?></small><br />
                      <span style="font-size: 12px"><?php echo LawyerGetRating($lawyer_id); ?> </span>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <span class="text-success text-sm"><a style="font-size: 13px" href="userlawyerprofile.php?la_id=<?php echo $row4['lawyer_id']; ?>" class="text-success">View <i class="fa fa-arrow-right" style="font-size: 10px"></i></a></span>
                  </div>
                </div>

              </div>
            </div>

        <?php
          }
        }
        ?>
      </div>
    </div>
</section>
<?php
include("userfooter.php");
?>