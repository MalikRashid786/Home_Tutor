<?php
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lawyer Online-Choose One who Support You</title>
  <link rel="icon" href="images/favicon.png">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/aos.css">
  <link rel="stylesheet" type="text/css" href="css/animate.min.css">
  <link rel="stylesheet" type="text/css" href="css/headerstyle.css">
  <link rel="stylesheet" type="text/css" href="css/argon-dashboard.min.css">
  <link rel="stylesheet" type="text/css" href="css/all.min.css" />
  <link rel="stylesheet" type="text/css" href="css/parsley.css" />
  <link rel="stylesheet" type="text/css" href="css/pace-theme-flash.css">
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="js/aos.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/argon-dashboard.js"></script>
  <script type="text/javascript" src="js/parsley.js"></script>
  <script type="text/javascript" src="js/sweetalert.min.js"></script>
  <script type="text/javascript" src="js/pace.min.js"></script>
</head>
<section id="signup" class="bg-secondary">
  <div class="container text-dark">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-7 col-sm-11 col-xl-5 col-11">
        <div class="card shadow border-0">
          <h1 class="text-center text-dark mb-2 mt-4"><span class="text-green">Sign Up</span>  Here</h1>
          <p class="text-dark text-center mb-2">For Clients</p>
          <div class="card-body px-lg-5">
            <form role="form" id="validate_form">
              <div class="form-group mb-3">
                <input class="form-control" id="first_name" placeholder="Name" name="name" type="text" data-parsley-pattern="^[a-z A-Z]+$" data-parsley-trigger="keyup" required>
              </div>
              <div class="form-group mb-3">
                <input class="form-control email" id="email" data-parsley-type="email" data-parsley-trigger="keyup" placeholder="Email" name="email" type="email" required>
                <span id="availibility"></span>
              </div>
              <div class="form-group mb-3">
                <input class="form-control" id="number" minlength="10" maxlength="10" data-parsley-type="number" data-parsley-trigger="keyup" placeholder="Mobile Number" name="number" type="text" required>
              </div>
              <div class="form-group">
                <input class="form-control" id="password" data-parsley-length="[6, 8]" data-parsley-pattern="^[a-zA-Z1-9./!@#$%^&*()_+{}|\?,<>0]+$" data-parsley-trigger="keyup" placeholder="Password" name="password" type="password" required>
              </div>
              <div class="py-1">
                <input type="checkbox" id="check_rules" name="check_rules" required>
                <small style="font-size: 15px;padding: 5px;"> I Accept <a href="" class="text-success">Term</a> & <a href="" class="text-success">Policy</a></small>
              </div>
              <div class="text-center">
                <input type="submit" id="submit" value="Sign Up" name="submit" class="btn col-12 btn-success mt-3  submit">
              </div>
            </form>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-6">
            <small class="text-muted">Already Have an account?</small>
          </div>
          <div class="col-6 text-right">
            <a href="signin.php" class="text-success"><small>Sign in</small></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
  $(document).ready(function() {
    $('#validate_form').parsley();

    $('#validate_form').on('submit', function(event) {
      event.preventDefault();
      if ($('#validate_form').parsley().isValid()) {
        // alert($(this).serialize());
        $.ajax({
          url: "code/usersignup.php",
          method: "POST",
          data: $(this).serialize(),
          beforeSend: function() {
            $('#submit').attr('disabled', 'disabled');
            $('#submit').val('Processing...');
          },
          success: function(data) {
            if (data == "1") {
              swal("Good job!", "You are successfully registred || Please Sign In", "success");
            } else {
              swal("Opps..!", "Your Email is Already is used. Try Again", "error");
            }
            $('#validate_form')[0].reset();
            $('#validate_form').parsley().reset();
            $('#submit').attr('disabled', false);
            $('#submit').val('Sign Up');
          }
        });
      }
    });
  });
  $(document).ready(function() {
    $('.email').blur(function() {
      var email = $(this).val();
      $.ajax({
        url: 'check.php',
        method: 'POST',
        data: {
          email: email
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