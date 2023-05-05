<?php
include 'config.php';
include("userheader.php");
$edit=$_REQUEST['edit'];
$query="SELECT * FROM tbl_user WHERE email='$session_email'";
$result=mysqli_query($connect,$query);
if($row=mysqli_fetch_array($result)){
  $user_id=$row['user_id'];
  $name=$row['name'];
  $state=$row['state'];
  $district=$row['district'];

  if($locality=$row['locality']=="--"){
    $locality="";
  }else{
    $locality=$row['locality'];
  }
  if($number=$row['mo_number']=="--"){
    $number="";
  }else
  {
    $number=$row['mo_number'];
  }
  if($alternate_number=$row['alternate_number']=="--"){
    $alternate_number="";
  }
  else{
    $alternate_number=$row['alternate_number'];
  }
  if($pincode=$row['pincode']=="--"){
    $pincode="";
  }else
  {
    $pincode=$row['pincode'];
  }  
}

// select district and state query
$query1="SELECT * FROM tbl_state";
$result1=mysqli_query($connect,$query1);
$query2="SELECT * FROM tbl_district";
$result2=mysqli_query($connect,$query2);
?>

<section class="py-5 mt-4 bg-secondary">
  <div class="container mb-5 ">
    <div class="section-heading mt-5 text-center">
      <h1>Update Profile</h1>
   </div>
  </div>
</section>
<?php
if($edit==0){
?>
<section id="lawyerprofile" class="bg-secondary" style="margin-top: -20px">
  <div class="container" style="min-height: 65vh">
    <div class="row justify-content-center">
      <div class="col-10 col-xl-6 mb-5 col-md-8 col-lg-6">          
        <div class="card border-0 shadow">
          <div class="card-body  border-0">
            <p class="text-center text-dark h3">Update Your Name</p>
            <form class=" pr-4 pl-4" action="code/userupdateprofilecode.php" method="POST" novalidate>
              <input type="text" name="user_id" value="<?php echo $user_id; ?>" hidden>
              <input type="text" name="section" value="0" hidden>
              <div class="form-row">
                <div class="form-group mt-3 col-12">
                  <input type="text" name="username" value="<?php echo $name?>" class="form-control" placeholder="Name" >
                </div>
              </div>        
              <div class="form-row mb-2">
               <div class="mt-4 col-xl-12 col-lg-12">
                  <button class="btn col-md-12 mb-2 col-xl-2 btn-dark mr-1 ml-1 float-right" type="submit">Save</button>
                  <a href="userprofile.php"><button type="button" class="btn btn-secondary float-right col-md-12 col-xl-2 mb-2 mr-1 ml-1">Cancel</button></a>
               </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
}else{
?>
<section id="lawyerprofile" class="bg-secondary" style="margin-top: -40px">
  <div class="container">
    <div class="row">
      <div class="col mb-5">          
        <div class="card shadow border-0">
          <div class="card-header"> 
            <a href="userprofile.php"><button type="button" class="btn btn-secondary float-right  mr-1 ml-1"><i class="fa fa-arrow-left" style="font-size: 10px"></i> Cancel</button></a>
          </div>
          <div class="card-body  border-0">
            <form class="pr-4 pl-4" action="code/userupdateprofilecode.php" method="POST" novalidate>
              <input type="text" name="user_id" value="<?php echo $user_id; ?>" hidden>
              <input type="text" name="section" value="1" hidden>
              <div class="form-row">
                <div class="form-group mb-4 col-xl-6 col-lg-6 col-md-6">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                      <input type="text" name="number" class="form-control" required placeholder="Mobile Number" value="<?php echo$number;?>" >
                  </div>
                </div>
              <div class="form-group mb-4 col-xl-6 col-lg-6 col-md-6">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                      <input type="text" name="altnumber" class="form-control" placeholder="Alternate Number" value="<?php echo $alternate_number ?>" >
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group mb-4 col-xl-6 col-lg-6 col-md-6">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-world"></i></span>
                    </div>
                     <select class="custom-select border-0" name="selectstate" id="state" required>
                        <option  required value="">Choose State</option>
                          <?php 
                            while($row1=mysqli_fetch_array($result1)){
                              if($state==$row1['state_id'])
                              {
                          ?>
                        <option selected required value="<?php echo $row1['state_id'];?>"><?php echo $row1['name'];?></option>
                          <?php
                            } 
                           else{ 
                            ?>
                          <option value="<?php echo $row1['state_id'];?>"><?php echo $row1['name'];?></option>
                               <?php
                             }
                             }
                             ?>
                     </select>
                  </div>
                </div>
              <div class="form-group mb-4 col-xl-6 col-lg-6 col-md-6">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-map-signs"></i></span>
                  </div>
                    <select class="custom-select border-0" id="district" name="selectdistrict" required>
                      <option  required value="">Choose District</option>
                        <?php 
                          while($row2=mysqli_fetch_array($result2)){
                            if($district==$row2['district_id']){
                        ?>
                      <option selected required value="<?php echo $row2['district_id'];?>"><?php echo $row2['name'];?></option>
                          <?php
                            }else{ 
                            ?>
                      <option value="<?php echo $row2['district_id'];?>"><?php echo $row2['name'];?></option>
                          <?php
                             }
                             }
                             ?>
                    </select>
                </div>
               </div>
              </div>
              <div class="form-row">
                <div class="form-group mb-4 col-xl-6 col-lg-6 col-md-6">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-building"></i></span>
                    </div>
                      <input type="text" name="locality" class="form-control text-capitalize" placeholder="Locality" value="<?php echo $locality?>">
                  </div>
                 </div>
               <div class="form-group mb-4 col-xl-6 col-lg-6 col-md-6">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-pin-3"></i></span>
                    </div>
                      <input type="number" name="pincode" class="form-control" placeholder="Pincode" value="<?php echo $pincode ?>">
                  </div>
                </div>
              </div>
             <div class="float-right mt-4">
              <button class="btn text-white btn-dark" type="submit">Save <i class="fa fa-arrow-right"style="font-size: 10px"></i> </button>
             </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
}
include 'userfooter.php';
?>