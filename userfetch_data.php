<?php
include 'config.php';
include 'lawyer_rating.php';
if(isset($_POST['action']))
{
  
	$query= "SELECT * FROM tbl_lawyer WHERE status='0' ORDER BY lawyer_id DESC";
	$output='';
	$result=mysqli_query($connect,$query);
  $count=mysqli_num_rows($result);
	if($count>0)
	{
		while($row=mysqli_fetch_array($result))
    {
      $lawyer_id=$row['lawyer_id'];
    	$practicingstate=$row['practicingstate'];
    	$query1="SELECT * FROM tbl_state WHERE state_id='$practicingstate'";
    	$result1=mysqli_query($connect,$query1);
    	if($row1=mysqli_fetch_array($result1))
    	{
    		$practicingstatename=$row1['name'];
    	}
    	else{
    		$practicingstatename="--";
    	}
		$output .='<div class="col-md-6 col-6 col-lg-4 col-xl-3 mb-5">
              <div class="card border-0 shadow">
                <div class="row justify-content-center">
                      <div class="col-md-12 text-center card-profile-image">
                       <img src="code/profileUpload/'.$row['filename'].'" class="img-fluid  rounded-circle">
                      </div>
                   </div>
                <div class="card-body mt-5">
                   <div class="row">
                     <div class="col-md-12 text-center justify-content-center">
                        <h4 class="mt-1">'.$row['name'].'</h4>
                        <small class="text-dark">Teacher, ' .$practicingstatename.'</small><br/>
                        <span>'.LawyerGetRating($lawyer_id).' </span>
                      </div>
                   </div>
                   <div class="row justify-content-center">
                    <span class="text-success text-sm h5"><a href="userlawyerprofile.php?la_id=' .$row['lawyer_id'].'" class="text-success">View <i class="fa fa-arrow-right" style="font-size: 10px;margin-left:3px;"></i></a></span>
                   </div>
                  </div>
                   
                </div>
              </div>';
	  }
  } 
	else
  {
		$output='<h3 class="text-danger mt-5" >No Data Found</h3>';
	}
	echo $output;
}

?>