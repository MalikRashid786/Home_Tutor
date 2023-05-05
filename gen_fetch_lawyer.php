<?php
include 'config.php';
include 'lawyer_rating.php';
if(isset($_POST['limit'],$_POST['start']))
{
$query="SELECT * FROM tbl_lawyer WHERE status='0' ORDER BY lawyer_id DESC LIMIT ".$_POST["start"].",".$_POST["limit"]."";
$result=mysqli_query($connect,$query);
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
  echo '<div class="col-md-6 col-6 col-lg-4 col-xl-3 mb-5">
              <div class="card border-0 shadow">
                  <div class="row justify-content-center">
                        <div class="col-md-12 text-center card-profile-image">
                         <img style="height: 98px" src="code/profileUpload/'.$row['filename'].'" class="img-fluid  rounded-circle">
                        </div>
                  </div>
                  <div class="card-body mt-5 text-center">
                    <div class="col-md-12 text-center justify-content-center">
                          <h4 class="mt-1 text-dark">'.$row['name'].'</h4>
                          <small class="text-dark">Teacher, ' .$practicingstatename.' </small><br/>
                          <h5><span style="font-size: 10px">'.LawyerGetRating($lawyer_id).'</span></h5>
                    </div>
                    <span class="text-success text-sm h5"><a href="genlawyerprofile.php?la_id='.$row['lawyer_id'].'" style="font-size: 12px" class="text-success">View <i class="fa fa-arrow-right" style="font-size: 9px;margin-left:3px;"></i></a></span>
                  </div>
              </div>
            </div>';
}
}
?>
