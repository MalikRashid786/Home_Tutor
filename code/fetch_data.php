<?php 
include '../config.php';
$state_id=$_POST['s_id'];
$output='';
if($state_id!="")
{
$query="SELECT * FROM tbl_district WHERE state_id= '".$state_id."' ORDER bY name";
$res=mysqli_query($connect,$query);
$output='<select name="district" id="district"><option value=""> Choose District</option> </select>';
while($row = mysqli_fetch_array($res))
{
	$output .= '<option value="'.$row['district_id'].'">'.$row["name"].'</option>';
}
echo $output;
}
?>