<?php
include 'lawyerheader.php';
$edit=$_REQUEST['edit'];
$query5="SELECT * FROM tbl_lawyer WHERE email='$session_email'";
$result5=mysqli_query($connect,$query5);
if($row5=mysqli_fetch_array($result5))
{
  $lawyer_id=$row5['lawyer_id'];
  $name=$row5['name'];
  $number=$row5['number'];
  // $license_number=$row5['license_number'];
  $language=$row5['language'];
  $practicingarea=$row5['practicingarea'];
  $practicingcourt=$row5['practicingcourt'];
  $practicingstate=$row5['practicingstate'];
  $practicingdistrict=$row5['practicingdistrict'];
  $bar_enroll_date=$row5['bar_enroll_date'];
  $number=$row5['number'];  
  $state=$row5['state'];
  $district=$row5['district'];
  $locality=$row5['locality'];
  $pincode=$row5['pincode'];
  $website=$row5['website'];
  if($casehandled=$row5['casehandled']=="--"){
    $casehandled="";
  }else{
    $casehandled=$row5['casehandled'];
  }
  if($locality=$row5['locality']=="--"){
    $locality="";
  }else{
    $locality=$row5['locality'];
  }
  if($alt_number=$row5['alt_number']=="--"){
    $alt_number="";
  }else{
    $alt_number=$row5['alt_number'];
  }
  if($number=$row5['number']=="--"){
    $number="";
  }else{
    $number=$row5['number'];
  }
  if($pincode=$row5['pincode']=="--"){
    $pincode="";
  }else{
    $pincode=$row5['pincode'];
  }
  if($account_number=$row5['account_number']=="--"){
    $account_number="";
  }else{
    $account_number=$row5['account_number'];
  }
  if($ifsc=$row5['ifsc']=="--"){
    $ifsc="";
  }else{
    $ifsc=$row5['ifsc'];
  }

}
$query1="SELECT * FROM tbl_state ORDER BY name";
$result1=mysqli_query($connect,$query1);
$query2="SELECT * FROM tbl_district ORDER BY name";
$result2=mysqli_query($connect,$query2);
?>
<section class="py-5 card border-0 bg-secondary">
    <div class="section-heading mt-5">
          <h1 class="text-center text-uppercase mt-4 mb-5"> <span class="text-darker">Update</span> Profile </h1>
        </div>
</section>
<?php
if ($edit==1) {
?>
<section id="lawyerprofile" class="bg-secondary py-5" style="margin-top: -70px">
        <div class="container mb-5">
          <div class="row">
         <div class="col mb-5">          
           <div class="card shadow border-0 mb-5">
            <div class="card-body mb-3 mt-3">
               <form class=" pr-4 pl-4"action="code/updatelawyerprofilecode.php" method="POST" novalidate>
	             <input type="text" name="lawyer_id" value="<?php echo $lawyer_id; ?>" hidden>
               <input type="text" name="section" value="1" hidden>
               <div class="form-row">
                  <div class="form-group mb-3 col-xl-6 col-lg-6 col-md-6 mt-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-world"></i></span>
                    </div>
                       <select class="custom-select border-0" name="select_prac_state" required>
                          <option  required value="">Current Teaching State</option>
                          <?php 
                          $query3="SELECT * FROM tbl_state";
                          $result3=mysqli_query($connect,$query3);
                            while($row3=mysqli_fetch_array($result3)){
                              if($practicingstate==$row3['state_id'])
                              {
                          ?>
                        <option selected required value="<?php echo $row3['state_id'];?>"><?php echo $row3['name'];?></option>
                          <?php
                            } 
                           else{ 
                            ?>
                          <option value="<?php echo $row3['state_id'];?>"><?php echo $row3['name'];?></option>
                               <?php
                             }
                             }
                             ?>
                        </select>
                  </div>
                </div>
                <div class="form-group mb-3 col-xl-6 col-lg-6 col-md-6 mt-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-world"></i></span>
                    </div>
                       <select class="custom-select border-0" name="select_prac_district" required>
                          <option  required value="">Current Teaching District</option>
                          <?php 
                          $query3="SELECT * FROM tbl_district";
                          $result3=mysqli_query($connect,$query3);
                            while($row3=mysqli_fetch_array($result3)){
                              if($practicingdistrict==$row3['district_id'])
                              {
                          ?>
                           <option selected required value="<?php echo $row3['district_id'];?>"><?php echo $row3['name'];?></option>
                          <?php
                            }else{
                              echo '<option value="'.$row3['district_id'].'" required>'.$row3['name'].'</option>';
                            }
                             }
                             ?>
                        </select>
                  </div>
                </div>
               </div>
                <div class="form-row">
                <div class="form-group col-xl-6 col-lg-6 col-md-6 mt-3">
                    <div class="row">
                      <div class="form-group mb-2 col-xl-12 col-lg-6 col-md-6">
                      <div class="input-group input-group-alternative">
                       <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-paper-diploma"></i></span>
                       </div>
                       <input type="date" name="bar_enroll_date" value="<?php echo$bar_enroll_date;?>" class="form-control" placeholder="Bar Enrollment Date" >
                      </div>
                      </div>
                    </div>
                </div>
                 <div class="form-group col-xl-6 col-lg-6 col-md-6 mt-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="flaticon-auction"></i></span>
                    </div>
                      <input type="number" value="<?php echo $casehandled;?>" name="casehandled" class="form-control" placeholder="No. of Satisfied Student" >
                  </div>
                </div>
              </div>        
             <div class="form-row mb-2">
               <div class="mt-4 col-xl-12 col-lg-12">
                  <button class="btn  col-md-12 mb-2 col-xl-2 btn-dark mr-1 ml-1 float-right" type="submit">Save <i class="fa fa-arrow-right" style="font-size: 10px"></i></button>
                  <a href="lawyerindex.php"><button type="button" class="btn btn-secondary float-right col-md-12 col-xl-2 mb-2 mr-1 ml-1"><i class="fa fa-arrow-left" style="font-size: 10px"></i> Cancel</button></a>
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
}
else if ($edit==2) {
?>
<section id="lawyerprofile" class="bg-secondary" style="margin-top: -70px">
        <div class="container text-dark mt-4">
          <div class="row">
         <div class="col mb-5">          
           <div class="card shadow">
            <div class="card-body  border-0">
               <form class=" pr-4 pl-4" id="validate_form" action="code/updatelawyerprofilecode.php" method="POST" novalidate>
               <input type="text" name="lawyer_id" value="<?php echo $lawyer_id; ?>" hidden>
               <input type="text" name="section" value="2" hidden>
              
              <div class="form-row">
                <div class="form-group col-xl-12 col-lg-12 col-md-12">
                    <label class="control-label h2 text-dark"><i class="fa fa-bank mr-2" ></i> Current College/University<br/>
                    <small>Select College/University in witch you are currently Teach.</small>
                    </label>
                <div class="row mt-3">
                <div class="form-group mt-3 col-12 col-xl-12">
                    <input type="text" required name="current_college" value="<?php echo $practicingcourt; ?>" class="form-control" placeholder="Write Current College/University">
                  </div>
                </div>
              </div>
            </div>
             <div class="form-row">
               <div class="mt-4 col-xl-12 col-lg-12">
                  <button class="btn text-white col-md-12 mb-2 col-xl-2 btn-success mr-1 ml-1 float-right" type="submit">Save <i class="fa fa-arrow-right ml-1" style="font-size: 10px"></i> </button>
                  <a href="lawyerindex.php"><button type="button" class="btn btn-secondary float-right col-md-12 col-xl-2 mb-2 mr-1 ml-1"><i class="fa fa-arrow-left mr-1" style="font-size: 10px"></i> Cancel</button></a>
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
}
else if ($edit==3) {
?>
<section id="lawyerprofile" class="bg-secondary" style="margin-top: -70px">
        <div class="container mt-3">
          <div class="row">
         <div class="col mb-5">          
           <div class="card shadow border-0 text-default">
            <div class="card-body  border-0">
               <form class=" pr-4 pl-4" id="validate_form" action="code/updatelawyerprofilecode.php" method="POST" novalidate>
               <input type="text" name="lawyer_id" value="<?php echo $lawyer_id; ?>" hidden>
               <input type="text" name="section" value="3" hidden>
              <div class="form-row">                   
                <div class="form-group ">
                <label class="control-label h2"><i class="ni ni-paper-diploma mr-2" style="font-size: 20px"></i> <span class="display-4"> 
Area of expertise </span><br/>
                <small class="h4">Select Subjects in witch you are currently Expert.</small>
                </label>                   
              <div class="row mt-3">
                  <?php 
                  // echo $practicingcourt;
                   $query6="SELECT *FROM tbl_inlawtype ORDER BY areaname";
                   $result6=mysqli_query($connect,$query6);
                   while($row6=mysqli_fetch_array($result6))
                   {

                     $areaname=$row6['areaname'];
                     $lawtype_id=$row6['lawtype_id'];
                    // $court=explode(', ', $practicingarea);  
                    //<?php in_array($areaname, $court) ? print "checked": "";
                    $query8="SELECT * FROM tbl_lawyer_lawtype WHERE lawyer_id='$lawyer_id'";
                    $result8=mysqli_query($connect,$query8);                                    
                  ?>
                    <div class="col-xl-6 col-md-6">
                          <div class="">
                            <label>
                            <input type="checkbox"
                             <?php 
                             while($row8=mysqli_fetch_array($result8)){
                              $type=$row8['name'];
                              if($lawtype_id==$type){ 
                             ?> checked <?php }}?>   
                             name="lawname[]" required="required" value="<?php echo $lawtype_id?>" class="mr-2"/> 
                             <?php echo $areaname;?>
                            </label>
                          </div>
                    </div>
                  <?php }?>
                </div>
              </div>
            </div>                         
             <div class="form-row">
               <div class="mt-4 col-xl-12 col-lg-12">
                  <button class="btn  col-md-12 mb-2 col-xl-2 btn-success mr-1 ml-1 float-right" type="submit">Save <i class="fa fa-arrow-right" style="font-size: 10px"></i></button>
                  <a href="lawyerindex.php"><button type="button" class="btn btn-secondary float-right col-md-12 col-xl-2 mb-2 mr-1 ml-1"><i class="fa fa-arrow-left" style="font-size: 10px"></i> Cancel </button></a>
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
}
else if ($edit==4) {
?>
<section id="lawyerprofile" class="bg-secondary" style="margin-top: -70px">
        <div class="container  text-dark">
          <div class="row justify-content-center">
         <div class="col-xl-10 mb-5">          
           <div class="card shadow">
            <div class="card-body  border-0">
               <form class=" pr-4 pl-4" id="validate_form" action="code/updatelawyerprofilecode.php" method="POST" novalidate>
               <input type="text" name="lawyer_id" value="<?php echo $lawyer_id; ?>" hidden>
               <input type="text" name="section" value="4" hidden>
              <div class="form-row ">
                <div class="form-group">
                    <div class="row ml-1">
                   <label class="control-label"><i class="fa fa-language mr-2" style="font-size: 20px"></i> <span class="display-4">Language Spoken</span><br/>
                    <small class="h5">Select Language witch you are spok.</small>
                    </label>
                    </div>
                    <div class="row ml-1">
                    <div class="col-xl-12 col-lg-12 col-md-12 ">
                       <div class="row">
                         <?php
                           $languagename=explode(', ', $language);
                           $query7="SELECT *FROM tbl_language ORDER BY lan_id";
                           $result7=mysqli_query($connect,$query7);
                           while($row7=mysqli_fetch_array($result7))
                           {
                            $lawyerlanguage=$row7['languagename'];
                           ?>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                          <div class="">
                            <label>
                              <input type="checkbox" required name="language[]"value="<?php echo$lawyerlanguage ;?>" <?php in_array($lawyerlanguage, $languagename) ? print "checked": "";?> class="mr-2"/> <?php echo $lawyerlanguage;?>
                            </label>
                          </div>
                    </div>
                           <?php }?>
                       </div>   
                    </div>
                    </div>
                </div>
              </div>           
             <div class="form-row">
               <div class="mt-4 col-xl-12 col-lg-12">
                  <button class="btn text-white col-md-12 mb-2 col-xl-2 btn-dark mr-1 ml-1 float-right" type="submit">Save <i class="fa fa-arrow-right" style="font-size: 10px"></i></button>
                  <a href="lawyerindex.php"><button type="button" class="btn btn-secondary float-right col-md-12 col-xl-2 mb-2 mr-1 ml-1"><i class="fa fa-arrow-left" style="font-size: 10px"></i> Cancel</button></a>
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
}
else if ($edit==5) {
?>
<section id="lawyerprofile" class="bg-secondary text-dark" style="margin-top: -50px;min-height: 70vh">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10 mb-5">          
        <div class="card shadow">
          <div class="card-body  border-0">
            <label class="control-label"><i class="fa fa-university mr-2" style="font-size: 20px"></i> <span class="display-4">Bank Details</span><br/>
              <small class="h5">Fill Your Bank Account Number & IFS Code.</small>
             </label>
              <form class=" pr-4 pl-4" id="validate_form" action="code/updatelawyerprofilecode.php" method="POST" novalidate>
               <input type="text" name="lawyer_id" value="<?php echo $lawyer_id; ?>" hidden>
               <input type="text" name="section" value="5" hidden>
               <div class="form-row">
                <div class="form-group mt-3 col-xl-6 col-12">
                <input type="text" required name="account" value="<?php echo$account_number;?>" class="form-control" placeholder="Account Number">
                </div>
                 <div class="form-group mt-3 col-12 col-xl-6">
                <input type="text" required name="ifsc" value="<?php echo$ifsc;?>" class="form-control" placeholder="IFS Code">
                </div>
              </div>        
             <div class="form-row mb-2">
               <div class="mt-4 col-xl-12 col-lg-12">
                  <button class="btn  col-md-3 mb-3 col-xl-2 btn-dark mr-1 ml-1 float-right" type="submit">Save <i class="fa fa-arrow-right" style="font-size: 10px"></i></button>
                  <a href="lawyerindex.php"><button type="button" class="btn btn-secondary float-right col-md-3 col-xl-2 mb-2 mr-1 ml-1"><i class="fa fa-arrow-left" style="font-size: 10px"></i> Cancel</button></a>
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
}
else if ($edit==9) {
?>
<section id="lawyerprofile" class="bg-secondary" style="margin-top: -70px">
        <div class="container mt-4">
          <div class="row justify-content-center">
         <div class="col-10 col-xl-6 mb-5 col-md-8 col-lg-6">          
           <div class="card border-0 shadow mb-2">
            <div class="card-body text-center  border-0">
              <span class="text-dark h3">Update Your Profile</span><br/>
              <small class="">Click Below Image.</small>
               <form class="pr-4 pl-4" id="validate_forms" action="code/updatelawyerprofilecode.php" method="POST" enctype="multipart/form-data" novalidate>
               <input type="text" name="lawyer_id" value="<?php echo $lawyer_id; ?>" hidden>
               <input type="text" name="section" value="9" hidden>
               <div class="form-row justify-content-center">
                <div class="form-group mt-3">
                  <img src="img/avatar.svg" onclick="triggerClick();" id="profileDisplay" class="mt-3">
                  <input type="file" onchange="displayImage(this);" name="file" value="image" id="profileImage" required style="display: none;">
                </div>
              </div>        
             <div class="form-row mb-2">
               <div class="mt-4 col-xl-12 col-lg-12">
                  <button class="btn text-white col-md-12 mb-3  btn-success mr-1 ml-1 float-right" name="save_user" type="submit">Save <i class="fa fa-arrow-right" style="font-size: 9px"></i></button>
                  <a href="lawyerindex.php"><button type="button" class="btn btn-secondary float-right col-md-12 mb-2 mr-1"><i class="fa fa-arrow-left" style="font-size: 9px"></i> Cancel</button></a>
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
}
else if ($edit==10) {
?>
<section id="lawyerprofile" class="bg-secondary" style="margin-top: -70px;min-height: 65vh">
        <div class="container mt-5">
          <div class="row justify-content-center">
         <div class="col-10 col-xl-6 mb-5 col-md-8 col-lg-6">          
           <div class="card border-0 shadow mb-5">
            <div class="card-body  border-0">
              <p class="text-center text-default h3">Update Your Name</p>
               <form class=" pr-4 pl-4" id="validate_form" action="code/updatelawyerprofilecode.php" method="POST" novalidate>
               <input type="text" name="lawyer_id" value="<?php echo $lawyer_id; ?>" hidden>
               <input type="text" name="section" value="10" hidden>
               <div class="form-row">
                <div class="form-group mt-3 col-12">
                <input type="text" required name="lawyername" value="<?php echo$name;?>" class="form-control" placeholder="Name">
                </div>
              </div>        
             <div class="form-row mb-2">
               <div class="mt-4 col-xl-12 col-lg-12">
                  <button class="btn  col-md-12 mb-2 col-xl-3 btn-success mr-1 ml-1 float-right" type="submit">Save <i class="fa fa-arrow-right" style="font-size: 10px"></i></button>
                  <a href="lawyerindex.php"><button type="button" class="btn btn-secondary float-right col-md-12 col-xl-3 mb-2 mr-1 ml-1"><i class="fa fa-arrow-left" style="font-size: 10px"></i> Cancel</button></a>
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
}
else {
?>
 <section id="lawyerprofile" class="bg-secondary" style="margin-top: -70px">
        <div class="container mt-5">
          <div class="row">
         <div class="col mb-5">          
           <div class="card shadow mb-5 border-0">
            <div class="card-body mb-1">
              <form class=" pr-4 pl-4" action="code/updatelawyerprofilecode.php" method="POST" novalidate>
	           <input type="text" name="lawyer_id" value="<?php echo $lawyer_id; ?>" hidden>
             <input type="text" name="section" value="11" hidden>
                <div class="form-row">
                	<div class="form-group mb-4 col-xl-6 col-lg-6 col-md-6">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                      <input type="number" name="number" value="<?php echo $number ?>" class="form-control" placeholder="Mboile Number" >
                  </div>
                </div>
               <div class="form-group mb-4 col-xl-6 col-lg-6 col-md-6">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                      <input type="number" name="altnumber" value="<?php echo $alt_number?>" class="form-control" placeholder="Alternate Number" >
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
                            while($row1=mysqli_fetch_array($result1))
                            {
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
                            while($row2=mysqli_fetch_array($result2))
                            {
                              if($district==$row2['district_id'])
                              {
                          ?>
                        <option selected required value="<?php echo $row2['district_id'];?>"><?php echo $row2['name'];?></option>
                          <?php
                            } 
                           else{ 
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
                      <input type="text" name="locality" value="<?php echo$locality?>" class="form-control text-capitalize" placeholder="Locality" >
                  </div>
                </div>
               <div class="form-group mb-4 col-xl-3 col-lg-3 col-md-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-pin-3"></i></span>
                    </div>
                      <input type="text" name="pincode" value="<?php echo $pincode?>" class="form-control" placeholder="Pincode" >
                  </div>
                </div>
                <div class="form-group mb-4 col-xl-3 col-lg-3 col-md-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-world-2"></i></span>
                    </div>
                      <input type="text" name="website" value="<?php echo $website?>" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-row">
               <div class="mt-4 col-xl-12 col-lg-12">
                  <button class="btn  col-md-12 mb-2 col-xl-2 btn-success mr-1 ml-1 float-right" type="submit">Save <i class="fa fa-arrow-right" style="font-size: 10px"></i></button>
                  <a href="lawyerindex.php"><button type="button" class="btn btn-secondary float-right col-md-12 col-xl-2 mb-2 mr-1 ml-1"><i class="fa fa-arrow-left" style="font-size: 10px"></i> Cancel</button></a>
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
}
include 'lawyerfooter.php';
?>
<script type="text/javascript">
  // $(document).ready(function(){
  //      $('#law').change(function(){
  //        var  ltid=$(this).val();
  //        // alert(ltid);
  //        $.ajax({
  //         url:"fetch_law.php",
  //         method:"POST",
  //         data:{lw_id:ltid},
  //         dataType:"text",
  //         success:function(data)
  //         {
  //           $('#inlawtype').html(data);
  //         }
  //        })
  //      });
  // });
function triggerClick()
{

  document.querySelector('#profileImage').click();
}
function displayImage(e){
  if(e.files[0]){
    var reader = new  FileReader();

    reader.onload =function(e){
      document.querySelector('#profileDisplay').setAttribute('src',e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}
</script>
<script type="text/javascript">
  $(document).ready(function() {
     $('#validate_form').parsley();
  });
</script>