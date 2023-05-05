<?php
if(isset($_POST['id']))
{
	include '../config.php';
	$output='';
	$query="SELECT * FROM tbl_lawyer WHERE lawyer_id='" .$_POST['id']."'";
    $result=mysqli_query($connect,$query);
	while($row= mysqli_fetch_array($result))
	{
		$state_id=$row['state'];
		$district_id=$row['district'];
		$query1="SELECT * FROM tbl_state WHERE state_id='$state_id'";
        $result1=mysqli_query($connect,$query1);
	    if($row1= mysqli_fetch_array($result1))
	    {
	    	$statename=$row1['name'];
	    }
	    else{
           $statename="--";
	    }
	    $query2="SELECT * FROM tbl_district WHERE district_id='$district_id'";
        $result2=mysqli_query($connect,$query2);
	    if($row2= mysqli_fetch_array($result2))
	    {
	    	$districtname=$row2['name'];
	    }
	    else{
	    $districtname="--";	    	
	    }
		$output='<img src="../code/profileUpload/'.$row['filename'].'" class="img-responsive img-thumbnail img-top"/>
		<small>Name : '.$row['name'].'</small><br/>
        <small>E-Mail : '.$row['email'].'</small><br/>
        <small>Primary Number : '.$row['number'].'</small><br/>
        <small>Alternate Number : '.$row['alt_number'].'</small><br/>
        <small>State :   '.$statename.'</small><br/>
        <small>District : '.$districtname.'</small><br/>
        <small>Locality : '.$row['locality'].'</small><br/>
        <small>Pincode : '.$row['pincode'].'</small>';
	}
}
echo $output;
?>
