<?php
// error_reporting(0);
function LawyerGetRating($lawyer_id)
{
  include 'config.php';
  $query2="SELECT * FROM tbl_star WHERE lawyer_id='$lawyer_id'";
  $result2=mysqli_query($connect,$query2);
  $count_user_rating=mysqli_num_rows($result2);
   $query="SELECT SUM(ratepoint)  AS total FROM tbl_star WHERE lawyer_id='$lawyer_id'";
   $result=mysqli_query($connect,$query);
   $row=mysqli_fetch_array($result);
   $total=$row['total'];
   $output='';
   $avg=0;
   if($count_user_rating>0)
   {   
   $avg= $total/$count_user_rating;
  	  $point=$avg;
      $remain=5-$point;
      if($remain>=1 AND $remain<2)
      {
    	  $start=4;
      }
      elseif($remain>=2 AND $remain<3)
      {
    	$start=3;
      }
      elseif($remain>=3 AND $remain<4)
      {
    	$start=2;
      }
      elseif($remain>=4 AND $remain<5)
      {
    	$start=1;
      }
      else{
    	$start=6;
      }
     for($i=0; $i<$point; $i++){
	 $output.='<i class="fa fa-star text-green"></i>';
     }
     for ($j=$start; $j<5 ; $j++) { 
     $output.='<i class="fa fa-star text-default"></i>';
     }
    }
     if($count_user_rating=="")
     {
       $avg=0;
     	for ($j=0; $j<5 ; $j++) { 
        $output.='<i class="fa fa-star text-default"></i>';
        }
     }
     $output.='<br/>';
     $output.=round($avg,2) ." based on ( ".$count_user_rating." )";
     return $output;
  }
?>