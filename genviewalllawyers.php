<?php
include 'header.php';
$query1="SELECT * FROM tbl_lawyer ";
$result1=mysqli_query($connect,$query1);
$count_lawyer=mysqli_num_rows($result1);

  $query= "SELECT * FROM tbl_lawyer WHERE status='0' ORDER BY lawyer_id DESC";
  $output='';
  $result=mysqli_query($connect,$query);
  $count=mysqli_num_rows($result);
?>
<section class="bg-secondary ">
  <div class="header pb-8 pt-5 d-flex align-items-center"style=" background-image:url(images/img_1.jpg); background-size: cover; background-position: center top; background-repeat: no-repeat;">
      <!-- Mask -->
      <span class="mask bg-dark opacity-8"></span>
      <!-- Header container -->
      <div class="container py-5 mb-5">
        <div class="row justify-content-center">
          <div class="col-xl-12 col-md-12">
            <h1 class="display-2 text-white mt-5">Find Best TEACHERS in India</h1>
            <p class="text-light">You Find Best Teacher in Your City. Here <span class="text-white" style="font-size: 20px;font-weight: 800"><?php echo $count_lawyer-1; ?>+</span> Registred Teacher Which Belong Different City. So You Can Find Best Teacher Easly. </p>
            <p class="text-light"> Our Pool of <span class="text-white" style="font-size: 20px;font-weight: 800"><?php echo $count_lawyer-1; ?>+</span> Expert Teacher serving Students through great customer ecperience</p>
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

<section class="bg-secondary" id="toplawyer" style="margin-top: -200px">
  <div class="container text-dark">
    <div class="row" id="load_data"></div>         
    <div id="load_data_message" class="text-center mt-4"></div>
  </div>
</section>


<script type="text/javascript">
  $(document).ready(function() {
    var url="gen_fetch_lawyer.php"
     load_data(url);
    });
</script>
<?php
include 'footer.php';
?>