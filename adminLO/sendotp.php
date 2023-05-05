<?php
include("header.php");
include("../config.php");
$query="SELECT * FROM tbl_appointment WHERE status='1' ORDER BY appointment_id DESC ";
$result=mysqli_query($connect,$query);
?>
<section id="category">
 <div class="container-fluid"style="min-height: 100vh;">
      <!-- Table -->
      <div class="row">
        <div class="col mb-5" style="margin-top: 84px;">
          <div class="card shadow">
            <div class="card-header border-0">
                <p class="mb-0 h4">Manage <span class="text-dark display-4">OTP</span></p>
            </div>
            <div class="table-responsive">
              
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Clt Name</th>
                    <th scope="col">clt. Email</th>
                    <th scope="col">clt. Phone</th>                    
                    <th scope="col">Lawyer Name </th>
                    <th scope="col">Send OTP</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                     $a=0;
                    while($row=mysqli_fetch_array($result))
                     {
                      $a++;
                      $lawyer_id=$row['productinfo'];
                      $query="SELECT * FROM tbl_lawyer WHERE lawyer_id='$lawyer_id' ";
                      $result1=mysqli_query($connect,$query);
                      if($row1=mysqli_fetch_array($result1))
                        {
                          $lawyer_name=$row1['name'];
                        }
                      $appointment_id=$row['appointment_id'];
                      $query1="SELECT * FROM tbl_otp WHERE appointment_id='$appointment_id' ";
                      $result2=mysqli_query($connect,$query1);
                  ?>
                  <tr>
                    <td>
                    <?php echo $a,("."); ?>
                    </td>
                    <td scope="row">
                      <span class="mb-0 text-sm text-wrap"><?php echo $row['firstname'];?></span>
                    </td>
                    <td>
                      <span><?php echo $row['email'];?></span>
                    </td>
                    <td>
                      <span><?php echo $row['phone'];?></span>
                    </td>
                    <td>
                      <span><?php echo $lawyer_name;?></span>
                    </td>
                    <td >
                      <?php
                        $count=mysqli_num_rows($result2);
                        if($count>0)
                        {
                          echo '<span class="badge badge-dot mr-4 ml-1">
                        <i class="bg-success"></i>OTP Send
                      </span>';
                        }                       
                       else{
                      ?>   
                       <form action="code/sendotp.php" method="POST">
                        <input type="text" value="<?php echo$row['appointment_id'];?>" hidden name="appointment_id">
                        <input type="text" value="<?php echo$row['phone'];?>" hidden name="phone">
                        <input type="submit" value="Send" name="send_otp" class=" btn btn-dark btn-sm" />
                      </form> 
                      <?php
                      }?>         
                    </td>
                  </tr>
                    <?php
                      }
                    ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
 </div>
</section>
