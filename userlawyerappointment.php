<?php
include("userheader.php");
$query4="SELECT * FROM tbl_lawyer ORDER BY lawyer_id DESC LIMIT 12";
$result4=mysqli_query($connect,$query4);
$query="SELECT * FROM tbl_inlawtype ORDER BY lawtype_id LIMIT 8";
$result=mysqli_query($connect,$query);
$query3="SELECT * FROM tbl_state ORDER BY name";
$result3=mysqli_query($connect,$query3);
function load_area()
{  
  $connect=mysqli_connect('localhost','root','','OnlineLawyer') or die("connection Error");
  $output='';
  $query="SELECT * FROM tbl_inlawtype ORDER BY areaname";
  $result = mysqli_query($connect,$query);
  while($row=mysqli_fetch_array($result))
  {
        $output .='<option value="'.$row["lawtype_id"].'">'.$row['areaname'].'</option>';
  }
  return $output;
}
$query6="SELECT count(lawyer_id) AS `totallawyer` FROM tbl_lawyer";
$result6=mysqli_query($connect,$query6);
$row6=mysqli_fetch_array($result6);
?>
<section id="appointment" class="mt-5 text-dark">
  <div class="container-fluid col-xl-11 col-md-12 col-sm-12 col-lg-12 mb-5">
    <div class="row justify-content-center ">
        <div class="mt-5 col-md-6 col-xl-6 col-sm-9">
          <h1 class="mt-5 ml-3 text-dark" style="font-size: 30px">Find The Best LAWYER in Inida</h1>
          <p class="mt-3 ml-3">You Can Also Find The Best Lawyer in India Using Serach Form , Which is Given Below.</p>
          <div class="howit ml-3">
            <h2 class="mt-5 mb-3 text-dark">How it works?</h2>
            <ul  class="mt-4" style="font-size: 17px">
              <li>Choose Practics Area</li>
              <span></span>
              <li class="list text-darker">Choose State </li>
              <span></span>
              <li class="list">Choose District</li>
              <span></span>
              <li class="list text-darker">Click Search Button</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-xl-5 col-sm-9 mt-5">
          <div class="mt-5">
          <img src="img/undraw_judge_katerina_limpitsouni_ny1q.png" class="img-fluid mt-5  px-2 py-2">          
          </div>
        </div>
      </div>
  </div>
</section>

<!-- Start Search section -->
<section id="search" class="">
  <div class="container py-5"><br/>
      <h1 class="text-center text-dark">Find The Best Lawyer In India</h1>
        <div class="row justify-content-center">
             <div class="col-xl-12 col-lg-12 searchform ">
               <form class="form-inline mt-5 mb-5 justify-content-center" action="usersearch.php" method="POST">
                  <select name="practics_area" class="form-control border-0 col-xl-3 col-sm-12 col-lg-3 ml-1 mr-1 mt-2 mb-2 col-md-3" required>
                    <option value="">--Area--</option>
                    <?php echo load_area(); ?>
                  </select>
                  <select name="state" id="state" class="form-control border-0 col-sm-12 col-xl-3 col-lg-3 ml-1 mr-1 mt-2 mb-2 col-md-3" required>
                     <option value="">--State--</option>
                     <?php
                       while($row3=mysqli_fetch_array($result3))
                       {
                       ?>
                     <option value="<?php echo $row3['state_id']; ?>"><?php echo $row3['name'];?></option>
                   <?php }?>
                  </select>
                  <select name="district" id="district" class="form-control border-0 col-sm-12 col-xl-3 col-lg-3 ml-1 mr-1 mt-2 mb-2 col-md-3" required>
                     <option value="">--District--</option>

                  </select>
                  <button class="btn btn-dark border-0  mr-2 mt-3 mb-3 ml-2">Search</button>
               </form>
             </div>
        </div>
   </div>
</section>
<!-- End Search section -->

<!-- Strat top lawyer section -->
 <section id="toplawyer" class="bg-secondary text-dark py-5">
  <div class="container">
    <div class="row mb-5">
        <div class="offset-sm-2 col-sm-8">
          <div class="headerText text-center">
            <h1 class="text-dark mt-3">Meet Best Lawyers</h1>
            <p class="text-muted mb-3" style="font-size: 15px">Listings, code snippets, and code in the text in this book are in monospaced font.
               This  your editor would.</p>
          </div>
        </div>
      </div>
       <div class="row">
          <?php
          while($row4=mysqli_fetch_array($result4))
          {
            $lawyer_id=$row4['lawyer_id'];
          ?>
          <div class="col-md-4 col-6 col-lg-3 mb-5">
              <div class="card shadow border-0">
                <div class="row justify-content-center">
                      <div class="col-md-12 text-center card-profile-image">
                       <img src="code/profileUpload/<?php echo $row4['filename'];?>" class="img-fluid  rounded-circle">
                      </div>
                   </div>
                <div class="card-body mt-5">
                   <div class="row">
                     <div class="col-md-12 text-center justify-content-center">
                        <h4 class="mt-1 text-dark"><?php echo $row4['name'];?></h4>
                        <small class="text-dark">Advocate, <?php echo $row4['practicingstate'];?></small><br/>
                        <span style="font-size: 12px"><?php echo LawyerGetRating($lawyer_id)?>
                          </span>
                      </div>
                   </div>
                   <div class="row justify-content-center">
                    <span class="text-success text-sm h5"><a href="userlawyerprofile?la_id=<?php echo$row4['lawyer_id'];?>" class="text-success">View <i class="fa fa-arrow-right" style="font-size: 10px"></i></a></span>
                   </div>
                  </div>
                </div>
              </div>
         <?php
       }?>
       </div>
      <div class="row justify-content-center">
        <a href="userviewalllawyer.php"><button class="btn btn-dark btn-sm">View more Lawyer</button></a>
      </div>
    </div>
 </section>
<!-- End top lawyer section -->

<!-- 
<script type="text/javascript">
  $(document).ready(function() {
     $('#validate_form').parsley();

     $('#validate_form').on('submit',function(event){
      event.preventDefault();
      if($('#validate_form').parsley().isValid())
      {
        //alert($(this).serialize());
        $.ajax({
            url:"code/lawregistration",
            method:"POST",
            data:$(this).serialize(),
            beforeSend:function(){
              $('#submit').attr('disabled','disabled');
              $('#submit').val('Processing...');
            },
            success:function(data)
            {
              $('#validate_form')[0].reset();
              $('#validate_form').parsley().reset();
              $('#submit').attr('disabled',false);
              $('#submit').val('Sign Up');
              if(data=="1")
              {
                swal("Good job!", "You are successfully registred || Please Sign In","success");
              }
              else{
                swal("Opps..!", "Your Email is Already is used. Try Again","error");
              }
            }
        });
      }
     });
  });
</script> -->
 
 <!-- Search District By State Script -->
<script type="text/javascript">
  $(document).ready(function(){
       $('#state').change(function(){
         var  sid=$(this).val();
         $.ajax({
          url:"fetch_district.php",
          method:"POST",
          data:{br_id:sid},
          dataType:"text",
          success:function(data)
          {
            $('#district').html(data);
          }
         })
       });
  });
</script>
 <!-- End Search District By State Script -->
 
<?php
include("userfooter.php")
?>