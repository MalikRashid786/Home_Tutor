<?php
include("header.php");
include 'config.php';
$query4 = "SELECT * FROM tbl_lawyer ORDER BY lawyer_id DESC LIMIT 12";
$result4 = mysqli_query($connect, $query4);

$query3 = "SELECT * FROM tbl_state ORDER BY name";
$result3 = mysqli_query($connect, $query3);
function load_area()
{
  $connect = mysqli_connect('localhost', 'root', '', 'OnlineLawyer') or die("connection Error");
  $output = '';
  $query = "SELECT * FROM tbl_inlawtype ORDER BY areaname";
  $result = mysqli_query($connect, $query);
  while ($row = mysqli_fetch_array($result)) {
    $output .= '<option value="' . $row["lawtype_id"] . '">' . $row['areaname'] . '</option>';
  }
  return $output;
}
$query6 = "SELECT count(lawyer_id) AS `totallawyer` FROM tbl_lawyer";
$result6 = mysqli_query($connect, $query6);
$row6 = mysqli_fetch_array($result6);
?>

<section id="appointment">
  <div class="container text-dark">
    <div class="row justify-content-center">
      <div class="mt-5 col-md-5 col-xl-5 col-sm-11">
        <h1 class="mt-5 ml-2 text-dark" style="font-size: 30px">Join <span class='text-green'> HOME TUTOR</span> Online Legal Network</h1>
        <p class="mt-3 ml-2">Join Our Pool of <?php echo $row6['totallawyer']; ?>+ Expert Tutors serving Students Through Great Customer Experience</p>
        <div class="howit ml-2">
          <h2 class="mt-5 mb-3 text-dark">How it works?</h2>
          <ul class="mt-4" style="font-size: 17px">
            <li>Create an account</li>
            <span></span>
            <li class="list text-gray-dark">Login your account</li>
            <span></span>
            <li class="list">update your profile</li>
            <span></span>
            <li class="list text-gray-dark">check your appointments</li>
          </ul>
        </div>
      </div>
      <div class="col-md-1 col-xl-2"></div>
      <div class="col-lg-5 col-md-6 mt-5 mb-5">
        <div class="card border-0 shadow" style="padding: 25px">
          <h2 class="text-center text-uppercase mb-1 text-green">Sign Up</h2>
          <p class="text-center mb-1">For Teacher</p>
          <form role="form" id="validate_form" method="POST">
            <div class="form-group">
              <input class="form-control" placeholder="Name" data-parsley-pattern="^[a-z A-Z]+$" data-parsley-trigger="keyup" name="lawyer_name" type="text" required>
            </div>
            <div class="form-group">
              <input class="form-control" data-parsley-type="email" data-parsley-trigger="keyup" placeholder="E-Mail" name="email" type="email" id="email" required>
              <span id="availibility"></span>
            </div>
            <div class="form-group">
              <input class="form-control" data-parsley-length="[8, 16]" data-parsley-trigger="keyup" placeholder="Password" name="password" type="password" required>
            </div>
            <div class="form-group">
              <input class="form-control" data-parsley-type="number" data-parsley-trigger="keyup" placeholder="Mobile Number" maxlength="10" name="number" type="number" required>
            </div>
            <!-- <div class="form-group">
              <input class="form-control" data-parsley-pattern="^[a-z A-Z 1-9]+$" data-parsley-trigger="keyup" placeholder="License Number" name="licensenumber" type="text" required>
            </div> -->
            <div class="custom-control custom-control-alternative custom-checkbox">
              <input class="custom-control-input" name="check_rules" id=" customCheckLogin" id="check_rules" required type="checkbox">
              <label class="custom-control-label" for=" customCheckLogin">
                <span class="text-muted">I Accept <a href="#" class="text-success">Term</a> & <a href="#" class="text-success">Policy</a></span>
              </label>
            </div>
            <div class="text-center py-1">
              <input type="submit" name="submit" value="Sign Up" id="submit" class="btn btn-success mt-4 col-10 mr-1 ml-1 submit">
            </div>
            <div class="row mt-3">
              <div class="col-9">
                <small class="text-muted">Already Have an account?</small>
              </div>
              <div class="col-3 text-right">
                <a href="signin.php" class="text-success"><small>Sign in</small></a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Start Search section -->
<section id="search">
  <div class="container text-dark">
    <h1 class="text-center text-dark">Find The Best Tutor's In India</h1>
    <div class="row justify-content-center">
      <div class="col-xl-12 col-lg-12">
        <form class="form-inline mt-5 mb-5 justify-content-center" action="gensearch.php" method="POST">
          <select name="practics_area" class="form-control border-0 col-xl-3 col-sm-12 col-lg-3 ml-1 mr-1 mt-2 mb-2 col-md-3" required>
            <option value="">--Subject--</option>
            <?php echo load_area(); ?>
          </select>
          <select name="state" id="state" class="form-control border-0 col-sm-12 col-xl-3 col-lg-3 ml-1 mr-1 mt-2 mb-2 col-md-3" required>
            <option value="">-State-</option>
            <?php
            while ($row3 = mysqli_fetch_array($result3)) {
            ?>
              <option value="<?php echo $row3['state_id']; ?>"><?php echo $row3['name']; ?></option>
            <?php } ?>
          </select>
          <select name="district" id="district" class="form-control border-0 col-sm-12 col-xl-3 col-lg-3 ml-1 mr-1 mt-2 mb-2 col-md-3" required>
            <option value="">--District--</option>
          </select>
          <button class="btn btn-success border-0  mr-2 mt-3 mb-3 ml-2 ">Search</button>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- End Search section -->

<!-- Strat top lawyer section -->
<section id="toplawyer" class="bg-secondary">
  <div class="container text-dark">
    <div class="row mb-5">
      <div class="offset-sm-2 col-sm-8">
        <div class="text-center">
          <h1 style="font-size: 30px" class="text-dark">Meet Best Tutor's</h1>
          <p class="text-muted mb-3" style="font-size: 15px">Listings, code snippets, and code in the text in this book are in monospaced font.
            This your editor would.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
      while ($row4 = mysqli_fetch_array($result4)) {
        $lawyer_id = $row4['lawyer_id'];
        $practicingstate = $row4['practicingstate'];
        $query1 = "SELECT * FROM tbl_state WHERE state_id='$practicingstate'";
        $result1 = mysqli_query($connect, $query1);
        if ($row1 = mysqli_fetch_array($result1)) {
          $practicingstatename = $row1['name'];
        } else {
          $practicingstatename = "--";
        }
      ?>
        <div class="col-md-3 col-6 col-lg-3 mb-5">
          <div class="card border-0 shadow">
            <div class="row justify-content-center">
              <div class="col-md-12 text-center card-profile-image">
                <img style="height: 98px" src="code/profileUpload/<?php echo $row4['filename']; ?>" class="img-fluid  rounded-circle">
              </div>
            </div>
            <div class="card-body mt-5">
              <div class="row">
                <div class="col-md-12 text-center justify-content-center">
                  <h4 class="mt-1 text-dark"><?php echo $row4['name']; ?></h4>
                  <small class="text-dark">Teacher, <?php echo $practicingstatename; ?></small><br />
                  <span style="font-size: 12px"><?php echo LawyerGetRating($lawyer_id); ?></span>
                </div>
              </div>
              <div class="row justify-content-center">
                <span class="text-success text-sm h5"><a href="genlawyerprofile.php?la_id=<?php echo $lawyer_id; ?>" class="text-success">View <i class="fa fa-arrow-right" style="font-size: 11px"></i></a></span>
              </div>
            </div>
          </div>
        </div>
      <?php
      } ?>
    </div>
    <div class="row justify-content-center">
      <a href="genviewalllawyers.php"><button class="btn btn-success btn-sm  mt-2">View more Teacher</button></a>
    </div>
  </div>
</section>
<!-- End top lawyer section -->


<!-- Find distics by Dynamic dropdown using ajax -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#state').change(function() {
      var sid = $(this).val();
      $.ajax({
        url: "fetch_district.php",
        method: "POST",
        data: {
          br_id: sid
        },
        dataType: "text",
        success: function(data) {
          $('#district').html(data);
        }
      })
    });
  });
</script>
<!-- End Find distics by Dynamic dropdown using ajax -->
<!-- Start Lawyer Registration Jquery Code Here -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#validate_form').parsley();

    $('#validate_form').on('submit', function(event) {
      event.preventDefault();
      if ($('#validate_form').parsley().isValid()) {
        //alert($(this).serialize());
        $.ajax({
          url: "code/lawyer_registration.php",
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
            $('#submit').val('Sign Up');
            if (data == "1") {
              swal("Good job!", "You are successfully registred || Please Sign In", "success");
            } else {
              swal("Opps..!", "Your Email is Already is used. Try Again", "error");
            }
          }
        });
      }
    });
  });
</script>
<!-- End Lawyer Registration Jquery Code Here -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#email').blur(function() {
      var email = $(this).val();
      $.ajax({
        url: 'check.php',
        method: 'POST',
        data: {
          email: email,
          type: "lawyer"
        },
        success: function(data) {
          // alert(data);
          if (data != '0') {
            $('#availibility').html('<small class="text-danger ml-1">Email Already Used. Try again</small>');
            $('.submit').attr('disabled', true);
          } else {
            $('#availibility').html('<small class="text-success ml-1">Email Available</small>');
            $('.submit').attr('disabled', false);
          }
        }
      });
    });
  });
</script>
<?php
include("footer.php")
?>