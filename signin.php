<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lawyer Online-Choose One who Support You</title>
  <link rel="icon" href="img/logo.png">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/aos.css">
  <link rel="stylesheet" type="text/css" href="css/animate.min.css">
  <link rel="stylesheet" type="text/css" href="css/headerstyle.css">
  <link rel="stylesheet" type="text/css" href="css/argon-dashboard.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/all.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/parsley.css"/>
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
<section class="bg-white">
  <div class="container">
      <div class="row justify-content-center tex">
        <div class="col-lg-6 col-md-7 col-sm-11 mt-4 col-xl-5 col-11">
          <div class="card  shadow border-0">
            <h1 class="text-green text-center mt-4 mb-2">Welcome <span class='text-dark'>Back..!</span></h1>
            <div class="bg-transparent mb-3 mt-2">
             <div class="text-muted text-center mt-3">
              <i class="far fa-user text-green" style="font-size: 100px"></i>
              </div>          
            </div>
            <div class="card-body px-lg-5 py-lg-2">
              <form role="form" action="code/signincode.php" method="post">
                <div class="form-group mb-3">
                  <select class=" form-control" name="selectuser" required>
                    <option  required value="">Choose User type</option>
                    <option  required value="1">Teacher</option>
                    <option  required value="2">Student</option>
                  </select>
                </div>
                <div class="form-group mb-3">
                   <input class="form-control mt-2" placeholder="E-mail" name="email" type="email" required>
                </div>
                <div class="form-group">
                  <input class="form-control mt-2" placeholder="Password"  name="password" type="password" required>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-success mb-3 mt-3 col-12 " >Sign in</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-6">
              <a href="forgetpassword.php" class="text-success"><small>Forgot password?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="signup.php" class="text-success"><small>Create new account</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<?php
// include 'header.php';
if(isset($_REQUEST['msg']))
{
$errormsg=$_REQUEST['msg'];
if($errormsg=="0")
{
?>
<script type="text/javascript">
  swal("Opps..!", "Invalid Email & Password || Please Try Again.","error");
</script>
<?php 
}
else{
  echo '<script type="text/javascript">
  swal("Good Job..!", "Successfully Logout","success");
</script>' ;
}
}
?>