<?php
include("userheader.php");
$sql = "SELECT * FROM tbl_appointment WHERE email='$session_email' ORDER BY appointment_id DESC";
$result = mysqli_query($connect, $sql);
$count = mysqli_num_rows($result);
?>
<section class="py-5 mt-2 bg-secondary">
  <div class="container mb-5 ">
    <div class="section-heading mt-5 text-center">
      <h1 class="text-green">Appointment <span class="text-dark"> History</span></h1>
      <p class="h4 ">View Your Appointment</p>
    </div>
  </div>
</section>
<section style="margin-top: -40px;min-height: 65vh" class="bg-secondary py-2">
  <div class="container mb-5">
    <div class="row justify-content-center">
      <?php
      if ($count > 0) {
        $a = 0;
        while ($row = mysqli_fetch_array($result)) {
          $a++;
          $lawyer_id = $row['productinfo'];
          $appointment_id = $row['appointment_id'];
          $lawyeremail=$row['lawyeremail'];
          $sql1 = "SELECT * FROM tbl_lawyer WHERE lawyer_id='$lawyer_id'";
          $result1 = mysqli_query($connect, $sql1);
          if ($row1 = mysqli_fetch_array($result1)) {
        
            $lawyer_name = $row1['name'];
          }
      ?>
          <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
            <div class="card mb-3 card-stats shadow border-0">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title mb-2 mt-2">Teacher Name - <a href="appoint_lawyer_profile.php?la_id=<?php echo $lawyer_id ?>"><?php echo $lawyer_name; ?></a></h5>
                    <h5 class="card-title mb-2"> Teacher E-Mail - <?php echo $row['lawyeremail']; ?> </h5>
                    <h5 class="card-title mb-1"> Phone - +91 <?php echo $row['phone']; ?></h5>
                    <h5>
                    <span class="card-title">
                      Status -
                      <?php
                      if ($row['status'] == 0) {
                        echo '<span class="badge badge-dot mr-4 ml-1">
                        <i class="bg-yellow"></i><span class="h5">Pending</span>
                      </span>';
                      } elseif ($row['status'] == 1) {
                        echo '<span class="badge badge-dot mr-4 ml-1">
                        <i class="bg-success"></i><span class="h5">Approved</span>
                      </span>';
                      } else {
                        echo '<span class="badge badge-dot mr-4 ml-1">
                        <i class="bg-danger"></i><span class="h5"> Canceld</span>
                         </span>';
                      }
                      ?>
                    </span>
                    </h5>
                  </div>
                  <div class="col">
                    <h5 class="card-title mb-2 mt-2"> Email - <?php echo $session_email; ?></h5>
                    <h5 class="card-title mb-2"> Date - <?php echo $row['appoint_date']; ?></h5>
                    <h5 class="card-title mb-0"> Time - <?php echo $row['appoint_time']; ?> </h5>
                  </div>
                  <?php
                  if ($row['status'] == 0) {
                  ?>
                    <div class="col-auto mt-3">
                      <p class="bottom-text mt-4 ">
                        <a href="code/userapointstatuscode.php?appoint_id=<?php echo $appointment_id ?>" class="float-right"><button class="btn-secondary btn mt-2 btn-sm">Cancel</button> </a>
                      </p>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
      <?php
        }
      } else {
        echo '<h3 class="text-center">No Appointment Here || Book An Appointment <br/><a href="userviewalllawyer.php" class="btn btn-sm btn-success mt-3">Book Now</a></h3>';
      }
      ?>
    </div>
  </div>
</section>
<?php
include 'userfooter.php';
?>