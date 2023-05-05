<?php
include_once("header.php");
include("../config.php");
$query="SELECT * FROM tbl_otp";
$result=mysqli_query($connect,$query);
?>
<section id="category">
 <div class="container-fluid">
      <div class="row">
        <div class="col mb-5" style="margin-top: 84px;">
          <div class="card shadow">
            <div class="card-header border-0">
              <p class="mb-0 h4">Lawyer <span class="text-dark display-4">Payments</span></p>
            </div>
            <div class="table-responsive">              
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Lawyer Name</th>
                    <th scope="col">Lawyer Account</th>
                    <th scope="col">Ifsc</th>
                    <th scope="col">appoint id</th>
                    <th scope="col">Amount (<i class="fa fa-rupee" style="font-size: 9px"></i>)</th>
                    <th scope="col">otp status</th>
                    <th scope="col">Pay</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                     $a=0;
                    while($row=mysqli_fetch_array($result)){
                      $a++;
                      $appointment_id=$row['appointment_id'];
                      $status=$row['status'];
                      $query="SELECT * FROM tbl_appointment WHERE appointment_id='$appointment_id' ";
                      $result1=mysqli_query($connect,$query);
                      if($row1=mysqli_fetch_array($result1)){
                          $lawyer_id=$row1['productinfo'];}
                      $query2="SELECT * FROM tbl_lawyer WHERE lawyer_id='$lawyer_id' ";
                      $result2=mysqli_query($connect,$query2);
                       if($row2=mysqli_fetch_array($result2)){
                          $lawyer_name=$row2['name'];}
                      $query3="SELECT * FROM tbl_lawyer_payment WHERE appointment_id='$appointment_id' ";
                      $result3=mysqli_query($connect,$query3);
                   ?>
                  <tr>
                    <td>
                    <?php echo $a,("."); ?>
                    </td>
                    <td scope="row">
                      <span><?php echo $lawyer_name;?></span>
                    </td>
                    <td>
                      <span><?php echo "non";?></span>
                    </td>
                    <td>
                      <span><?php echo $row['phone'];?></span>
                    </td>
                    <td>
                      <span><?php echo $appointment_id;?></span>
                    </td>
                    <td>
                      <span><?php echo"500 " ;?></span>
                    </td>
                    <td >
                      <?php
                        if($status>0)
                        {
                          echo '<span class="badge badge-dot mr-4 ml-1">
                        <i class="bg-success"></i> Verify
                      </span>';
                        }                       
                       else{
                        echo '<span class="badge badge-dot mr-4 ml-1">
                        <i class="bg-danger"></i> Not Verify
                      </span>' ;
                      }?>         
                    </td>
                    <td >
                      <?php
                        if($status>0){
                          $pay_count=mysqli_num_rows($result3);
                          if ($pay_count>0){
                            echo '<span class="badge badge-dot mr-4 ml-1">
                                    <i class="bg-success"></i>Paid
                                  </span>' ;}
                          else{
                            echo '<a href="lawyerpay.php?appointment_id='.$appointment_id.' & lawyer_id='.$lawyer_id.'"><input type="submit" value="Pay" name="pay" class=" btn btn-dark btn-sm" /></a>';}}                       
                         else{
                        echo '<input type="button" disabled="" value="Pay" class=" btn btn-dark btn-sm" />';
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
