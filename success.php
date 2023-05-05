<?php
include 'userheader.php';
if(isset($_POST['status']))
{ 
	$_POST['status']="success";
	if($_POST['status']=="success")
	{
      $lawyer_email=$_POST['lawyer_email'];
      $firstname=$_POST['firstname'];
      $productinfo=$_POST['productinfo'];
      $appoint_date=$_POST['address1'];
      $appoint_time=$_POST['address2'];
      $user_email=$_POST['email'];
      $phone=$_POST['phone'];
     
      $query="INSERT INTO tbl_appointment(lawyeremail,firstname,productinfo,email,appoint_date,appoint_time,phone,status,date,time)VALUES('$lawyer_email','$firstname','$productinfo','$user_email','$appoint_date','$appoint_time','$phone','0',curdate(),curtime())";
      mysqli_query($connect,$query);
   $query2="SELECT * FROM tbl_lawyer WHERE lawyer_id='$productinfo'";
   if($row2=mysqli_fetch_array(mysqli_query($connect,$query2)))
   {
    $lawyername=$row2['name'];
    $lawyer_number=$row2['number'];
   }
	}
	
}
?>

<section class="py-5 card border-0 bg-gradient-secondary">
  <div class="container">
    <h1 class="text-center text-darker" style="margin-top: 110px"> <span class="text-default">Appointment Booked Successfully. </span></h1>
    <p class="text-center"> Details Are Below.</p>
  </div>
</section>
<section id="lawyerprofile" class="bg-gradient-secondary py-5" style="margin-top: -84px">
   <div class="container mb-5 py-4">          
       <div class="row justify-content-center">
        <div class="col-xl-8 col-md-11">
          <div class="card border-0 shadow">
            <div class="card-body  border-0">
            	<div class="row">
               <div class="col-md-6" >
                    <table cellpadding="8" class=""> 
                      <tr>
                        <th>Lawyer E-Mail :</th>
                        <td><?php echo $lawyer_email;?></td>
                      </tr>
                     
                      <tr>
                        <th>Lawyer Number :</th>
                        <td class="text-capitalize"><?php echo $lawyer_number;?></td>
                      </tr>
                      
                      <tr>
                        <th>Lawyer Name :</th>
                        <td><?php echo $lawyername;?></td>
                      </tr>
                      <tr>
                        <th>Appointment Date:</th>
                        <td><?php echo $appoint_date;?></td>
                      </tr>
                    </table> 
               </div>
               <div class="col-md-5">
                    <table cellpadding="8" class="mb-3">
                     <tr>
                        <th>User Name :</th>
                        <td><?php echo $firstname;?></td>
                      </tr>
                      <tr>
                        <th>E-Mail :</th>
                        <td><?php echo $user_email;?></td>
                      </tr>
                      <tr>
                        <th>Mobile No:</th>
                        <td>+91<?php echo $phone;?></td>
                      </tr>
                      
                     <tr>
                        <th>Appointment Time:</th>
                        <td><?php echo $appoint_time;?></td>
                      </tr>
                     
                    </table> 
               </div>
              </div>
             <div class="row justify-content-center mt-3">
             	 <!-- <a title="Print Screen" class=" col-xl-8 col-md-8" alt="Print Screen" onclick="window.print();" target="blank" style="cursor:pointer;"> <input type="button" value="PRINT" class="btn bg-gradient-secondary col-12 mb-2" /></a> -->
              <a href="userappointmenthistory.php"><button class="btn btn-success text-white">See Appointment</button></a>
             </div>
            </div>
          </div>
        </div>
       </div>
   </div>
</section>


<?php 
include 'userfooter.php';
?>