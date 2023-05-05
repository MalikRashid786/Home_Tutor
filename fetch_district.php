<?php 
include 'config.php';
$state=$_POST['br_id'];
$output='';
if($state!="")
{
$query="SELECT * FROM tbl_district WHERE state_id= '".$state."' ORDER BY name";
$res=mysqli_query($connect,$query);
$output='<select name="district" id="district"><option value=""> --District-- </option> </select>';
while($row = mysqli_fetch_array($res))
{
	$output .= '<option value="'.$row['district_id'].'">'.$row["name"].'</option>';
}
echo $output;

}
?>