<?php
include 'userheader.php';
// Merchant key here as provided by Payu
$MERCHANT_KEY = "gtKFFx";
$SALT = "eCwWELxi";
$txnid=rand(1000000000,9999999999);
$user_id=$_POST['user_id'];
$lawyer_id=$_POST['lawyer_id'];
$email=$_POST['email'];
$time=$_POST['time'];
$date=$_POST['date'];
$amount=$_POST['amount'];
$surl="http://localhost/OnlineLawyer/success.php";
$furl="http://localhost/OnlineLawyer/failure.php";
$query="SELECT * FROM tbl_user WHERE user_id='$user_id'";
$result=mysqli_query($connect,$query);
if($row=mysqli_fetch_array($result))
{
  $name=$row['name'];
  $phone=$row['mo_number'];
  $alternate_number=$row['alternate_number'];
}
$query="SELECT * FROM tbl_lawyer WHERE lawyer_id='$lawyer_id'";
$result=mysqli_query($connect,$query);
if($row=mysqli_fetch_array($result))
{
  $productInfo=$lawyer_id;
  $lawyername=$row['name'];
}
// Merchant Salt as provided by Payu

$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
$hashString=$MERCHANT_KEY."|".$txnid."|".$amount."|".$productInfo."|".$name."|".$email."|||||||||||".$SALT;
   
$hash = strtolower(hash('sha512', $hashString));
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<section class="py-5 card border-0 bg-gradient-secondary">
  <div class="container">
    <h1 class="text-center text-darker" style="margin-top: 120px"> <span class="text-default">Payment </span> Now </h1>
  </div>
</section>
<section id="lawyerprofile" class="bg-gradient-secondary py-5" style="margin-top: -84px">
   <div class="container mb-5 py-4">          
       <div class="row justify-content-center">
        <div class="col-xl-8 col-md-11">
          <div class="card border-0 shadow">
            <div class="card-body  border-0">

              <!-- action="https://sandboxsecure.payu.in/_payment" -->
             <form action="success.php"  name="payuform" method="POST">
                <div class="row">

                <!-- all Hidden Fild Here and all values -->

             	  <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY;?>" />
                <input type="hidden" name="hash"  value="<?php echo $hash;?>" />
                <input type="hidden" name="txnid" value="<?php echo $txnid;?>"/>
                <input type="hidden" name="lawyer_id" value="<?php echo $lawyer_id;?>"/>
               <div class="col-md-6" >
                    <table cellpadding="8" class=""> 
                      <tr>
                        <th>Amount :</th>
                        <td><input name="amount" hidden value="<?php echo $amount;?>" /> <?php echo $amount;?> <i class="fa fa-rupee" style="font-size: 10px"></i>  </td>
                      </tr>

                      <tr>
                        <th>Name :</th>
                        <td class="text-capitalize"><input name="firstname" id="firstname"  value="<?php echo $name;?>" hidden /><?php echo $name;?></td>
                      </tr>
                      <tr>
                        <th>Product Info :</th>
                        <td><input type="text" hidden name="productinfo" value="<?php echo $productInfo;?>" /><?php echo $lawyername;?></td>
                      </tr>                      
                     <tr>
                        <th>Alt Mobile No :</th>
                        <td>+91<span><input name="alt_phone" hidden size="10" value="<?php echo $alternate_number;?> "/> <?php echo $alternate_number;?></td>
                      </tr>
                    </table> 
               </div>
               <div class="col-md-5">
                    <table cellpadding="8" class="mb-3">
                      <tr>
                        <th>E-Mail :</th>
                        <td><span><input name="email" hidden id="email" value="<?php echo $email;?>" /></span><?php echo $email;?></td>
                      </tr>
                      <tr>
                        <th>Date :</th>
                        <td><span><input name="date" hidden value="<?php echo $date;?>"/><?php echo $date;?></td>
                      </tr>
                     <tr>
                        <th>Time :</th>
                        <td><span><input name="time" hidden value="<?php echo $time;?>"/><?php echo $time;?></td>
                      </tr>
                      <input name="surl" hidden size="64" value="<?php echo $surl;?> " />
                      <input name="furl" hidden size="64" value="<?php echo $furl;?> " />
                      <input type="hidden" name="service_provider" value="" />
                     <tr>
                        <th>Mobile No :</th>
                        <td>+91<span><input name="phone" hidden size="10" value="<?php echo $phone;?>" /><?php echo $phone;?></td>
                      </tr>
                    </table> 
               </div>
              </div>
             <div class="row justify-content-center mt-5">
             	 <!-- <a title="Print Screen" class=" col-xl-8 col-md-8" alt="Print Screen" onclick="window.print();" target="blank" style="cursor:pointer;"> <input type="button" value="PRINT" class="btn bg-gradient-secondary col-12 mb-2" /></a> -->
               
              <input type="submit" name="status" value="Pay Now" class="btn btn-default text-white col-12 col-xl-9 col-md-9" />
             </div>
           </form>
            </div>
          </div>
        </div>
       </div>
   </div>
</section>


<?php 
include 'userfooter.php';
?>