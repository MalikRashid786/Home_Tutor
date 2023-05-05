<?php
include("lawyerheader.php");
$sql="SELECT * FROM tbl_lawyer WHERE email='$session_email'";
$result=mysqli_query($connect,$sql);
if($row=mysqli_fetch_array($result))
{
  $lawyer_id=$row['lawyer_id'];
}
$query="SELECT * FROM tbl_appointment WHERE productinfo='$lawyer_id' ORDER BY appointment_id DESC";
$res=mysqli_query($connect,$query);
$count_appoint=mysqli_num_rows($res);
?>
<section class="py-5 bg-secondary mt-4">
  <div class="container mb-5 ">
    <div class="section-heading mt-5 text-center">
           <h1>Appointment History</h1>
           <p class="h4 ">View Your Appointment</p>
        </div>
  </div>
</section>
<section style="margin-top: -65px;min-height: 66vh" class="bg-secondary py-2">
   <div class="container mb-5">
    <div class="row justify-content-center">
      <?php
        if($count_appoint>0){
          $a=0;
          while($row=mysqli_fetch_array($res))
           {$a++;
            $appointment_id=$row['appointment_id'];
            $email=$row['email'];
            $sql1="SELECT * FROM tbl_user WHERE email='$email'";
            $result1=mysqli_query($connect,$sql1);
            if($row1=mysqli_fetch_array($result1))
            {
              $user_name=$row1['name'];
              $user_id=$row1['user_id'];
            }
          ?>
           <div class="col-xl-6 col-lg-6 col-md-11 col-sm-12 col-12">
              <div class="card mb-3 card-stats shadow border-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title mb-2 mt-2">Clt. Name :- <?php echo $user_name;?></h5>
                      <h5 class="card-title mb-2">Clt. Phone :- <?php echo $row['phone'];?></h5>
                      <span class="card-title h5">Email:- <?php echo $email;?></span>
                    </div>
                    <div class="col">
                     <h5 class="card-title mb-2 mt-2"> Date :- <?php echo $row['appoint_date'];?></h5>
                      <h5 class="card-title mb-2"> Time :- <?php echo $row['appoint_time'];?> </h5>
                      <span class="card-title h5">
                      Status :- 
                      <?php 
                        if($row['status']==0){
                          echo '<span class="badge badge-dot mr-4 ml-1">
                        <i class="bg-yellow"></i>Pending
                      </span>';
                        }
                        elseif($row['status']==1){
                          echo '<span class="badge badge-dot mr-4 ml-1">
                        <i class="bg-success"></i>Approved
                      </span>';
                        }
                        else{
                          echo '<span class="badge badge-dot mr-4 ml-1">
                        <i class="bg-danger"></i>Canceld
                      </span>';
                        }
                      ?>
                      </span>
                    </div>
                    <?php 
                      if($row['status']==0){
                    ?>
                    <div class="col-auto mt-2">
                       <p class="bottom-text ">                    
                        <a href="code/lawyerapointstatuscode.php?appointment_id=<?php echo $appointment_id?>" class="float-right"><button class="btn-success btn mt-2 mb-1 btn-sm">Accept</button> </a>
                       </p>
                        <p class="bottom-text ">                    
                         <a href="code/lawyerapointstatuscode.php?appoint_id=<?php echo $appointment_id?>" class="float-right"><button class="btn-secondary btn mt-2 btn-sm">Cancel</button> </a>
                        </p>
                    </div>
                  <?php }?>
                  </div>
                </div>
              </div>
            </div>
            <?php 
           }
             }else
             {
              echo "<h3 class='mt-5' style='min-height: 48vh'>No Appointment Here</h3>";
             }
            ?>
        </div>
   </div>
</section>
<?php
include 'lawyerfooter.php';
?>